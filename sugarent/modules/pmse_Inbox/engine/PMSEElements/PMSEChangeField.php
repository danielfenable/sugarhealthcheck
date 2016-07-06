<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

require_once 'modules/pmse_Inbox/engine/PMSEElements/PMSEScriptTask.php';
require_once 'modules/pmse_Inbox/engine/PMSERelatedModule.php';

class PMSEChangeField extends PMSEScriptTask
{
    protected $beanList;
    protected $currentUser;
    protected $evaluator;
    protected $pmseRelatedModule;

    /**
     *
     * @global type $beanList
     * @codeCoverageIgnore
     */
    public function __construct()
    {
        global $beanList, $current_user;
        $this->beanList = $beanList;
        $this->currentUser = $current_user;
        $this->evaluator = new PMSEEvaluator();
        $this->pmseRelatedModule = new PMSERelatedModule();
        parent::__construct();
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getBeanList()
    {
        return $this->beanList;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getCurrentUser()
    {
        return $this->currentUser;
    }

    /**
     *
     * @param type $beanList
     * @codeCoverageIgnore
     */
    public function setBeanList($beanList)
    {
        $this->beanList = $beanList;
    }

    /**
     *
     * @param type $currentUser
     * @codeCoverageIgnore
     */
    public function setCurrentUser($currentUser)
    {
        $this->currentUser = $currentUser;
    }

    /**
     * This method prepares the response of the current element based on the
     * $bean object and the $flowData, an external action such as
     * ROUTE or ADHOC_REASSIGN could be also processed.
     *
     * This method probably should be override for each new element, but it's
     * not mandatory. However the response structure always must pass using
     * the 'prepareResponse' Method.
     *
     * As defined in the example:
     *
     * $response['route_action'] = 'ROUTE'; //The action that should process the Router
     * $response['flow_action'] = 'CREATE'; //The record action that should process the router
     * $response['flow_data'] = $flowData; //The current flowData
     * $response['flow_filters'] = array('first_id', 'second_id'); 
     * //This attribute is used to filter the execution of the following elements
     * $response['flow_id'] = $flowData['id']; // The flowData id if present
     *
     *
     * @param type $flowData
     * @param type $bean
     * @param type $externalAction
     * @return type
     */
    public function run($flowData, $bean = null, $externalAction = '', $arguments = array())
    {
        global $beanList;
        switch ($externalAction) {
            case 'RESUME_EXECUTION':
                $flowAction = 'UPDATE';
                break;
            default :
                $flowAction = 'CREATE';
                break;
        }
        
        $isRelated = false;
        $bpmnElement = $this->retrieveDefinitionData($flowData['bpmn_id']);
        $act_field_module = $bpmnElement['act_field_module'];
        $act_fields = htmlspecialchars_decode($bpmnElement['act_fields']);
        $fields = json_decode($act_fields);
        $ifields = 0;
        
        //$this->bpmLog('INFO', "[$cas_id][$cas_index] Getting**** ".print_r($bpmnElement,true));
        //$related = $bean->get_linked_fields();
        $idMainModule = $bean->id;
        $moduleName = $bean->module_name;

        $this->logger->info("[{$flowData['cas_id']}][{$flowData['cas_index']}] Getting $moduleName ID: $idMainModule");

        //Save original bean of project definition
        $beanModule = $bean;

        if (!isset($beanList[$act_field_module])) {
            $bean = $this->pmseRelatedModule->getRelatedModule($bean, $act_field_module);
            $isRelated = true;
        }

        if (isset($bean) && is_object($bean)) {
            $historyData = $this->retrieveHistoryData($moduleName);
            if ($act_field_module == $moduleName || $isRelated) {
                foreach ($fields as $field) {
                    if (isset($bean->field_defs[$field->field])) {
                        if (!$this->emailHandler->doesPrimaryEmailExists($field, $bean, $historyData)) {
                            $historyData->savePredata($field->field, $bean->{$field->field});
                            $newValue = '';
                            if (is_array($field->value)) {
                                $newValue = $this->evaluator->evaluateExpression(
                                    json_encode($field->value),
                                    $beanModule,
                                    array(),
                                    false
                                );                                
                                $newValue = $this->postProcessValue($newValue, $bean->field_name_map[$field->field]['type']);
                            } else {
                                if ($field->field == 'assigned_user_id') {
                                    $field->value = $this->getCustomUser($field->value, $beanModule);
                                }
                                $newValue = $this->beanHandler->mergeBeanInTemplate($beanModule, $field->value);
                            }
                            $bean->{$field->field} = $newValue; //$field->value;
                        }
                        $historyData->savePostdata($field->field, $field->value);
                        $ifields++;
                    } else {
                        
                        //$this->logger->warning("[{$flowData['cas_id']}][{$flowData['cas_index']}] $moduleClassName->" . $field->field . " not defined");
                    }
                }
                $bean->skipPartialUpdate = true;
                $bean->new_with_id = false;
                $res = $bean->save();
                $scriptTaskExecuted = true;
                $params = array();
                $params['cas_id'] = $flowData['cas_id'];
                $params['cas_index'] = $flowData['cas_index'];
                $params['act_id'] = $bpmnElement['id'];
                $params['pro_id'] = $bpmnElement['pro_id'];
                $params['user_id'] = $this->currentUser->id;
                $params['frm_action'] = 'Event Changed Fields';
                $params['frm_comment'] = 'Changed Fields Applied';
                $params['log_data'] = $historyData->getLog();
                $this->caseFlowHandler->saveFormAction($params);
            } else {
                $this->logger->warning(
                    "[{$flowData['cas_id']}][{$flowData['cas_index']}] "
                    . "Trying to use '$act_field_module' fields to be set in $moduleName"
                );
            }
            $this->logger->info(
                "[{$flowData['cas_id']}][{$flowData['cas_index']}] "
                . "number of fields changed: {$ifields}"
            );
        } else {
            $this->logger->info(
                "[{$flowData['cas_id']}][{$flowData['cas_index']}] "
                . "Fields cannot be changed, none Module was set."
            );
        }
        return $this->prepareResponse($flowData, 'ROUTE', $flowAction);
    }
    
    public function postProcessValue($value, $fieldType)
    {
        global $timedate;
        switch (strtolower($fieldType)) {
            case 'date':
                $date = $timedate->fromIsoDate($value);
                $value = $date->asDbDate();
                break;
            case 'datetime':
            case 'datetimecombo':
                $date = $timedate->fromIso($value);
                $value = $date->asDb();
                break;
            case 'float':
            case 'double':
            case 'integer':
                $value = (double)$value;
                break;
            case 'string':
                $value = (string)$value;
                break;
            case 'boolean':
                $value = (boolean)$value;
                break;
        }
        return $value;
    }
}
