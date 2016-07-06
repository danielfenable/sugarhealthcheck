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

class PMSEAddRelatedRecord extends PMSEScriptTask
{
    private $pmseRelatedModule;

    public function __construct()
    {
        $this->pmseRelatedModule = new PMSERelatedModule();
        parent::__construct();
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
     * $response['flow_filters'] = array('first_id', 'second_id'); //This attribute is used to filter the execution of the following elements
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
        switch ($externalAction) {
            case 'RESUME_EXECUTION':
                $flowAction = 'UPDATE';
                break;
            default :
                $flowAction = 'CREATE';
                break;
        }

        global $timedate;
        $bpmnElement = $this->retrieveDefinitionData($flowData['bpmn_id']);
        $definitionBean = $this->caseFlowHandler->retrieveBean('pmse_BpmActivityDefinition', $bpmnElement['id']);
        $processDefinitionBean = $this->caseFlowHandler->retrieveBean('pmse_BpmProcessDefinition', $definitionBean->pro_id);

        if ((isset($definitionBean->act_field_module) && !empty($definitionBean->act_field_module)) &&
            (isset($definitionBean->act_fields) && !empty($definitionBean->act_fields))
        ) {

            $arr_module = $definitionBean->act_field_module;
            $arr_fields = json_decode(htmlspecialchars_decode($definitionBean->act_fields));

            // TODO: Probably the act_module field should be used instead of pro_module
            $sugarModule = $processDefinitionBean->pro_module;

            $fields = array();

            if (!empty($arr_fields)) {
                foreach ($arr_fields as $value) {
                    if (!empty($value->field) && !empty($value->value)) {
                        $key = $value->field;
                        $newValue = '';
                        if ($value->type == 'Datetime') {
                            $finishDate = $this->beanHandler->processValueExpression($value->value, $bean);
                            $date = $timedate->fromIso($finishDate);
                            $newValue = $date->asDb();
                        } elseif ($value->type == 'Date') {
                            $finishDate = $this->beanHandler->processValueExpression($value->value, $bean);
                            $date = $timedate->fromIsoDate($finishDate);
                            $newValue = $date->asDbDate();
                        } elseif ($key == 'assigned_user_id') {
                            $newValue = $this->beanHandler->mergeBeanInTemplate($bean,
                                $this->getCustomUser($value->value, $bean));
                        } elseif ($value->type == 'Integer' || $value->type == 'Float' ||
                            $value->type == 'Decimal' || $value->type == 'Currency'
                        ) {
                            $newValue = $this->beanHandler->processValueExpression($value->value, $bean);
                        } else {
                            $newValue = $this->beanHandler->mergeBeanInTemplate($bean, $value->value);
                        }
                        $fields[$key] = $newValue;
                        $this->logger->info("Data generated $newValue for $key");
                    }
                }

                $relatedBean = $this->pmseRelatedModule->addRelatedRecord($bean, $arr_module, $fields);
                if (!empty($relatedBean) && is_object($relatedBean)) {
                    $rel_id = $relatedBean->id;
                    $rel_name = $relatedBean->module_dir;
                    $this->logger->debug("Create related record " . $rel_name . " ID: $rel_id");
                    $this->logger->debug("Add relationship $rel_name of $sugarModule");
                } else {
                    $this->logger->info("Not created related record!!!");
                }
            }
        } else {
            $this->logger->info("Not configure related record script task");
            $scriptTaskExecuted = true;
        }
        $this->logger->debug("Script executed");
        return $this->prepareResponse($flowData, 'ROUTE', $flowAction);
    }

}
