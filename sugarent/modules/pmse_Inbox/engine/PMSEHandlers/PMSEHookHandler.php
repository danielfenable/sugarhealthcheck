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

require_once 'modules/pmse_Inbox/engine/PMSEPreProcessor/PMSEPreProcessor.php';
require_once 'modules/pmse_Inbox/engine/PMSEPreProcessor/PMSERequest.php';
require_once 'modules/pmse_Inbox/engine/PMSELogger.php';

class PMSEHookHandler
{
    /**
     *
     * @var type
     */
    protected $request;

    /**
     *
     * @var type
     */
    protected $preProcessor;

    /**
     *
     * @var PMSELogger
     */
    protected $logger;

    /**
     *
     * @var type
     */
    protected $dbHandler;

    /**
     *
     */
    public function __construct()
    {
        global $db;
        $this->request = new PMSERequest();
        $this->request->setType('hook');
        $this->preProcessor = PMSEPreProcessor::getInstance();
        $this->logger = PMSELogger::getInstance();
        $this->dbHandler = $db;
    }

    /**
     *
     * @param type $element
     * @param type $createThread
     * @param type $bean
     * @param type $externalAction
     * @param type $args
     * @return type
     */
    public function executeRequest($args = array(), $createThread = false, $bean = null, $externalAction = '')
    {
        $this->logger->info('Processing a hook request.');
        $this->logger->debug('Hook request params: ' . print_r($args, true));
        $this->request->setCreateThread($createThread);
        $this->request->setExternalAction($externalAction);
        $this->request->setBean($bean);
        $this->request->setArguments($args);

        $preProcessor = $this->preProcessor->getInstance();
        $response = $preProcessor->processRequest($this->request);
        return $response;
    }

    /**
     *
     * @global type $db
     * @param type $bean
     * @param type $event
     * @param type $arguments
     * @param type $startEvents
     * @param type $isNewRecord
     */
    public function runStartEventBeforeSave($bean, $event, $arguments, $startEvents, $isNewRecord = true)
    {
        $this->logger->info("Executing Before save for bean module {$bean->module_name}");
        $record['id'] = $bean->id;
        $record['module_name'] = $bean->module_name;
        $record['row'] = $bean->fetched_row;

        if (!$isNewRecord) {
            $queryDupli = "select * from pmse_bpm_flow where " .
                "cas_sugar_object_id = '" . $record['id'] . "' " .
                "and cas_sugar_module = '" . $record['module_name'] . "' " .
                "and cas_index = 1 ";
            $resultDupli = $this->dbHandler->Query($queryDupli);
            $rowDupli = $this->dbHandler->fetchByAssoc($resultDupli);

            if (is_array($rowDupli)) {
                $cas_id = $rowDupli['cas_id'];
                $cas_index = $rowDupli['cas_index'];
                $pro_id = $rowDupli['pro_id'];
                $this->logger->debug("[$cas_id][$cas_index] update in progress");
                //$this->bpmLog('DEBUG', );
                $pro_locked_variables = array();
                $pro_terminate_variables = array();
                //iterate over all rows in cas_flow, probably the same record has many open processes
                while (is_array($rowDupli)) {
                    $queryProcess = "select * from pmse_bpm_process_definition where id = '$pro_id' and pro_module = '" . $record['module_name'] . "' ";
                    $resultProcess = $this->dbHandler->Query($queryProcess);
                    $rowProcess = $this->dbHandler->fetchByAssoc($resultProcess);
                    if (trim($rowProcess['pro_locked_variables']) != '') {
                        $array1 = json_decode(trim(htmlspecialchars_decode($rowProcess['pro_locked_variables'])));
                        $pro_locked_variables = array_merge($pro_locked_variables, $array1);
                    }
                    $rowDupli = $this->dbHandler->fetchByAssoc($resultDupli);
                }

                $redirect = 'none'; //possible values are 'none', 'partial', 'halt'

                foreach ($pro_locked_variables as $field) {
                    if ((isset($bean->{$field}) || isset($fetched_row[$field])) && $bean->{$field} != $fetched_row[$field]) {
                        $redirect = 'partial';
                        $bean->{$field} = $fetched_row[$field];
                        $this->logger->debug("[$cas_id][$cas_index] locked field '$field' has value '{$bean->{$field}}'");
                    }
                }
            } //there is a case for this record
        }
    }

    /**
     *
     * @global type $db
     * @global type $redirectBeforeSave
     * @param type $bean
     * @param type $event
     * @param type $arguments
     * @param type $startEvents
     * @param type $isNewRecord
     * @return boolean
     */
    public function runStartEventAfterSave($bean, $event, $arguments)
    {
        $this->logger->info("Executing Before save for bean module {$bean->module_name}, with id {$bean->id}");
        $this->executeRequest($arguments, false, $bean, '');
    }


    public function terminateCaseAfterDelete($bean, $event, $arguments)
    {
        $this->logger->info("Executing Terminate Case for a deleted bean module {$bean->module_name}, with id {$bean->id}");
        $this->executeRequest($arguments, false, $bean, 'TERMINATE_CASE');
    }

    /**
     * Execute the cron tasks.
     */
    public function executeCron()
    {
        $this->logger->info("Executing PMSE scheduled tasks");
        $this->wakeUpSleepingFlows();
    }

    /**
     * Execute all the flows marked as SLEEPING
     */
    private function wakeUpSleepingFlows()
    {
        $this->logger->info("Checking flows with status sleeping");
        $today = TimeDate::getInstance()->nowDb();

        //get all records with status = sleeping
        $flowBean = BeanFactory::getBean('pmse_BpmFlow');//new BpmFlow();

        //$flows = $flowBean->getSelectRows('', "bpmn_type = 'bpmnEvent' and cas_flow_status = 'SLEEPING' and cas_due_date <= '$today' ");
        $flows = $flowBean->get_full_list(
            '',
            "bpmn_type = 'bpmnEvent' and cas_flow_status = 'SLEEPING' and cas_due_date <= '$today' "
        );
        $n = 0;
        foreach ($flows as $flow) {
            $this->newFollowFlow($flow->fetched_row, false, null, 'WAKE_UP');
            $n++;
        }
        if ($n == 0) {
            $this->logger->info("No flows processed with status sleeping");
        } else {
            $this->logger->info("Processed $n flows with status sleeping");
        }
    }

    public function newFollowFlow($flowData, $createThread = false, $bean = null, $externalAction = '')
    {
        require_once 'modules/pmse_Inbox/engine/PMSEExecuter.php';
        $fr = new PMSEExecuter();
        return $fr->runEngine($flowData, $createThread, $bean, $externalAction);
    }

}
