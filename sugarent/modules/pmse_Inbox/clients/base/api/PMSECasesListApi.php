<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

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

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once 'clients/base/api/FilterApi.php';
require_once 'include/SugarQuery/SugarQuery.php';
require_once 'modules/pmse_Inbox/engine/PMSE.php';
require_once 'modules/pmse_Inbox/engine/PMSELogger.php';
require_once 'modules/pmse_Inbox/engine/PMSEEngineUtils.php';

class PMSECasesListApi extends FilterApi
{
    public function __construct()
    {
        $this->pmse = PMSE::getInstance();
    }

    /**
     *
     * @return type
     */
    public function registerApiRest()
    {
        return array(
            'getModuleCaseList' => array(
                'reqType' => 'GET',
                'path' => array('pmse_Inbox', 'casesList'),
                'pathVars' => array('module', 'casesList'),
                'method' => 'selectCasesList',
                'jsonParams' => array('filter'),
                'acl' => 'adminOrDev',
//                'shortHelp' => 'Returns a list with the processes for Process Management',
            ),
            'getLoadLogs' => array(
                'reqType' => 'GET',
                'path' => array('pmse_Inbox', 'getLog'),
                'pathVars' => array('module', 'getLog'),
                'method' => 'selectLogLoad',
                'jsonParams' => array(),
                'acl' => 'adminOrDev',
//                'shortHelp' => 'Return the text of the PMSE.log file',
            ),
            'clearLogs' => array(
                'reqType' => 'PUT',
                'path' => array('pmse_Inbox', 'clearLog', '?'),
                'pathVars' => array('module', 'clearLog', 'typelog'),
                'method' => 'clearLog',
                'jsonParams' => array(),
                'acl' => 'adminOrDev',
//                'shortHelp' => 'Clear the PMSE.log file log',
            ),
            'getConfigLogs' => array(
                'reqType' => 'GET',
                'path' => array('pmse_Inbox', 'logGetConfig'),
                'pathVars' => array('module', 'logGetConfig'),
                'method' => 'configLogLoad',
                'jsonParams' => array(),
                'acl' => 'adminOrDev',
//                'shortHelp' => 'Retrieve PA configuration values',
            ),
            'setConfigLogs' => array(
                'reqType' => 'PUT',
                'path' => array('pmse_Inbox', 'logSetConfig'),
                'pathVars' => array('module', ''),
                'method' => 'configLogPut',
                'acl' => 'adminOrDev',
//                'shortHelp' => 'Update PA configuration values',
            ),
            'getProcessUsers' => array(
                'reqType' => 'GET',
                'path' => array('pmse_Inbox', 'processUsersChart', '?'),
                'pathVars' => array('module', '', 'filter'),
                'method' => 'returnProcessUsersChart',
                'acl' => 'adminOrDev',
//                'shortHelp' => 'Returns a list of users to be used on reassign section',
            ),
            'getProcessStatus' => array(
                'reqType' => 'GET',
                'path' => array('pmse_Inbox', 'processStatusChart', '?'),
                'pathVars' => array('module', '', 'filter'),
                'method' => 'returnProcessStatusChart',
                'acl' => 'adminOrDev',
//                'shortHelp' => 'Returns the process definition status',
            ),
        );
    }

    /**
     * This method check if the user have admin or developer access to this API
     * @param $api
     * @param $args
     * @throws SugarApiExceptionNotAuthorized
     */
    private function checkACL($api, $args) {
        global $current_user;
        $route = $api->getRequest()->getRoute();
        $user = $current_user;
        if (isset($route['acl']) && $route['acl'] == 'adminOrDev') {
            if (!($user->isAdmin() || $user->isDeveloperForAnyModule())) {
                throw new SugarApiExceptionNotAuthorized('No access to view/edit records for module: ' . $args['module']);
            }
        }
    }

    public function selectCasesList($api, $args)
    {
        $this->checkACL($api, $args);
        $q = new SugarQuery();
        $inboxBean = BeanFactory::getBean('pmse_Inbox');
        if ($args['order_by'] == 'cas_due_date:asc') {
            $args['order_by'] = 'cas_create_date:asc';
        }
        $options = self::parseArguments($api, $args, $inboxBean);
        $fields = array(
            'a.*'
        );
        $q->from($inboxBean, array('alias' => 'a'));

        //INNER USER TABLE
        $q->joinTable('users', array('alias' => 'u', 'joinType' => 'INNER', 'linkingTable' => true))
            ->on()
            ->equalsField('u.id', 'a.created_by')
            ->equals('u.deleted', 0);
        $fields[] = array("u.last_name", 'assigned_user_name');

        //INNER PROCESS TABLE
        $q->joinTable('pmse_bpmn_process', array('alias' => 'pr', 'joinType' => 'INNER', 'linkingTable' => true))
            ->on()
            ->equalsField('pr.id', 'a.pro_id')
            ->equals('pr.deleted', 0);
        $fields[] = array("pr.prj_id", 'prj_id');

        //INNER PROJECT TABLE
        $q->joinTable('pmse_project', array('alias' => 'prj', 'joinType' => 'INNER', 'linkingTable' => true))
            ->on()
            ->equalsField('prj.id', 'pr.prj_id')
            ->equals('prj.deleted', 0);
        $fields[] = array("prj.assigned_user_id", 'prj_created_by');
        $fields[] = array("prj.prj_module", 'prj_module');

        $q->select($fields);

        $q->where()
            ->in('prj.prj_module', PMSEEngineUtils::getSupportedModules());

        if (!empty($args['q'])) {
            $q->where()->queryAnd()
                ->addRaw(
                    "a.cas_title LIKE '%" . $args['q'] .
                    "%' OR a.pro_title LIKE '%" . $args['q'] .
                    "%' OR a.cas_status LIKE '%" . $args['q'] .
                    "%' OR prj.assigned_user_id LIKE '%" . $args['q'] .
                    "%' OR pr.prj_id LIKE '%" . $args['q'] .
                    "%' OR last_name LIKE '%" . $args['q'] . "%'"
                );
        }
        if (!empty($args['module_list'])){
            switch ($args['module_list']) {
                case translate('LBL_STATUS_COMPLETED', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'COMPLETED'");
                    break;
                case translate('LBL_STATUS_TERMINATED', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'TERMINATED'");
                    break;
                case translate('LBL_STATUS_IN_PROGRESS', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'IN PROGRESS'");
                    break;
                case translate('LBL_STATUS_CANCELLED', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'CANCELLED'");
                    break;
                case translate('LBL_STATUS_ERROR', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'ERROR'");
                    break;
            }
        }
        foreach ($options['order_by'] as $orderBy) {
            $q->orderBy($orderBy[0], $orderBy[1]);
        }
        // Add an extra record to the limit so we can detect if there are more records to be found
        $q->limit($options['limit']);
        $q->offset($options['offset']);

        $offset = $options['offset'] + $options['limit'];
        $count = 0;
        $list = $q->execute();
        foreach ($list as $key => $value) {
            if ($value["cas_status"] === 'IN PROGRESS') {
                $list[$key]["cas_status"] = '<data class="label label-Leads">' . $value["cas_status"] . '</data>';
            } elseif ($value["cas_status"] === 'COMPLETED' || $value["cas_status"] === 'TERMINATED') {
                $list[$key]["cas_status"] = '<data class="label label-success">' . $value["cas_status"] . '</data>';
            } elseif ($value["cas_status"] === 'CANCELLED') {
                $list[$key]["cas_status"] = '<data class="label label-warning">' . $value["cas_status"] . '</data>';
            } else {
                $list[$key]["cas_status"] = '<data class="label label-important">' . $value["cas_status"] . '</data>';
            }

            $list[$key]['cas_create_date'] = PMSEEngineUtils::getDateToFE($value['cas_create_date'],'datetime');
            $list[$key]['date_entered'] = PMSEEngineUtils::getDateToFE($value['date_entered'],'datetime');
            $list[$key]['date_modified'] = PMSEEngineUtils::getDateToFE($value['date_modified'],'datetime');

            $prjUsersBean = BeanFactory::getBean('Users', $list[$key]['prj_created_by']);
            $list[$key]['prj_user_id_full_name'] = $prjUsersBean->full_name;

            $qA = new SugarQuery();
            $flowBean = BeanFactory::getBean('pmse_BpmFlow');
            $qA->select->fieldRaw('*');
            $qA->from($flowBean);
            $qA->where()->equals('cas_id', $list[$key]['cas_id']);

            $processUsers = $qA->execute();
            $processUsersNames = array();
            foreach($processUsers as $k => $v) {
                if ($processUsers[$k]['cas_flow_status'] != 'CLOSED') {
                    $casUsersBean = BeanFactory::getBean('Users', $processUsers[$k]['cas_user_id']);
                    $processUsersNames[] = (!empty($casUsersBean->full_name)) ? $casUsersBean->full_name : '';
                }
                $cas_sugar_module = $processUsers[$k]['cas_sugar_module'];
                $cas_sugar_object_id = $processUsers[$k]['cas_sugar_object_id'];
            }
            if (empty($processUsersNames)) {
                $userNames = '';
            } else {
                $processUsersNames = array_unique($processUsersNames);
                $userNames = implode(', ',$processUsersNames);
            }
            $list[$key]['cas_user_id_full_name'] = $userNames;

            $assignedBean = BeanFactory::getBean($cas_sugar_module, $cas_sugar_object_id);
            $assignedUsersBean = BeanFactory::getBean('Users', $assignedBean->assigned_user_id);
            $list[$key]['assigned_user_name'] = $assignedUsersBean->full_name;

            $count++;
        }
        if ($count == $options['limit']) {
            $offset = $options['offset'] + $options['limit'];
        } else {
            $offset = -1;
        }

        $data = array();
        $data['next_offset'] = $offset;
        $data['records'] = $list;
        return $data;
    }

    protected function getOrderByFromArgs(array $args, SugarBean $seed = null)
    {
        $orderBy = array();
        if (!isset($args['order_by']) || !is_string($args['order_by'])) {
            return $orderBy;
        }
        $columns = explode(',', $args['order_by']);
        $parsed = array();
        foreach ($columns as $column) {
            $column = explode(':', $column, 2);
            $field = array_shift($column);
            // do not override previous value if it exists since it should have higher precedence
            if (!isset($parsed[$field])) {
                $direction = array_shift($column);
                $parsed[$field] = strtolower($direction) !== 'desc';
            }
        }
        $converted = array();
        foreach ($parsed as $field => $direction) {
            $converted[] = array($field, $direction ? 'ASC' : 'DESC');
        }
        return $converted;
    }

    public function selectLogLoad($api, $args)
    {
        $this->checkACL($api, $args);
        $logger = PMSELogger::getInstance();
        $pmse = PMSE::getInstance();
        $log = $pmse->getLogFile($logger->getLogFileNameWithPath());
        return $log;
        }
    public function clearLog($api, $args)
    {
        $this->checkACL($api, $args);
        $logger = PMSELogger::getInstance();
        $pmse = PMSE::getInstance();
        global $current_user;
        if ($current_user->isDeveloperForModule('pmse_Inbox') || $current_user->isAdminForModule('pmse_Inbox')) {
            $pmse->clearLogFile($logger->getLogFileNameWithPath());
        } else {
            return false;
        }
        return true;
    }

    public function configLogLoad($api, $args)
    {
        $this->checkACL($api, $args);
        $q = new SugarQuery();
        $configLogBean = BeanFactory::getBean('pmse_BpmConfig');
        $fields = array(
            'c.cfg_value'
        );

        $q->select($fields);
        $q->from($configLogBean, array('alias' => 'c'));
        $q->where()->queryAnd()
            ->addRaw("c.cfg_status='ACTIVE' AND c.name='logger_level'");
        $list = $q->execute();
        if (empty($list)) {
            $bean = BeanFactory::newBean('pmse_BpmConfig');
            $bean->cfg_value = 'warning';
            $bean->name = 'logger_level';
            $bean->description = 'Logger Level';
            $bean->save();

            $list = array(0 => array('cfg_value' => 'warning'));
        }
        $data = array();
        $data['records'] = $list;
        return $data;
    }

    /*
     * config log PMSE log
     */
    public function configLogPut($api, $args)
    {
        $this->checkACL($api, $args);
        $data = $args['cfg_value'];
        $bean = BeanFactory::getBean('pmse_BpmConfig')
            ->retrieve_by_string_fields(array('cfg_status' => 'ACTIVE', 'name' => 'logger_level'));
        $bean->cfg_value = $data;
        $bean->save();

        return array('success' => true);
    }

    public function returnProcessUsersChart($api, $args)
    {
        $this->checkACL($api, $args);
        $filter = $args['filter'];
        return $this->createProcessUsersChartData($filter);
    }

    public function returnProcessStatusChart($api, $args)
    {
        $this->checkACL($api, $args);
        $filter = $args['filter'];
        return $this->createProcessStatusChartData($filter);
    }

    protected function createProcessUsersChartData($filter)
    {
        // set the seed bpm flow
        $seed = BeanFactory::newBean('pmse_BpmFlow');
        // creating the sugar query object
        $q = new SugarQuery();
        // adding the seed bean
        $q->from($seed);
        // joining the users table
        $q->joinRaw('INNER JOIN users ON users.id=pmse_bpm_flow.cas_user_id');
        // joining the process definition table in order to retrieve the process status
        $q->joinRaw('INNER JOIN pmse_bpm_process_definition pdef ON pmse_bpm_flow.pro_id = pdef.id');
        // retrieving the user_name attribute,
        // it could be the first_name or last_name
        $q->select->fieldRaw("users.id", "user_name");
        $q->select->fieldRaw('users.first_name');
        $q->select->fieldRaw('users.last_name');
        // adding a custom field raw call since there is no other way to add an
        // aggregated member
        $q->select->fieldRaw("COUNT(pmse_bpm_flow.id)", "derivation_count");
        // ordering by raw member
        //$q->orderByRaw('derivation_count');
        // grouping by user_name
        $q->groupByRaw('user_name');
        // only retrieve the flows with FORM status
        $q->where()->equals('pmse_bpm_flow.cas_flow_status', 'FORM');
        // only retrieve the flows from ACTIVE definitions
        $q->where()->addRaw("pdef.pro_status <> 'INACTIVE'");

        if ($filter !== 'all') {
            $q->where()->addRaw("pdef.prj_id = '" . $filter . "'");
        }

        $data_bean = $q->execute();

        $data = array();
        $total = 0;
        foreach ($data_bean as $record) {
            if (isset($record['user_name'])) {
                // Maybe it is a good idea to have a function
                // that returns the user name depending the Sugar's configuration
                $name = trim($record['first_name'] . ' ' . $record['last_name']);

                $data[] = array(
                    'key' => $name,
                    'value' => $record['derivation_count'],
                );
                $total += $record['derivation_count'];
            }
        }

        return array(
            "properties" => array(
                "total" => $total,
            ),
            "data" => $data,
        );
    }

    protected function createProcessStatusChartData($filter)
    {
        $seed_processes = BeanFactory::newBean('pmse_Project');
        $qp = new SugarQuery();
        $qp->from($seed_processes);
        $qp->select->field('id');
        $qp->select->field('name');
        $processes = $qp->execute();

        $process_map = array();
        for ($i = 0; $i < sizeof($processes); $i++) {
            $processes[$i]['total'] = 0;
            $processes[$i]['status'] = array(
                'IN PROGRESS' => 0,
                'COMPLETED' => 0,
                'CANCELLED' => 0,
                'ERROR' => 0,
                'TERMINATED' => 0,
            );
            $process_map[$processes[$i]['id']] = $i;
        }


        $seed = BeanFactory::newBean('pmse_Inbox');
        // creating the sugar query object
        $q = new SugarQuery();
        // adding the seed bean
        $q->from($seed);
        // joining the users table
        $q->joinRaw('INNER JOIN pmse_bpmn_process ON pmse_bpmn_process.id=pmse_inbox.pro_id');

        $q->select->field("cas_status");
        $q->select->fieldRaw("COUNT(*) as total");
        $q->select->fieldRaw("prj_id");

        $q->groupByRaw('pro_id, cas_status');

        if ($filter !== 'all') {
            $q->where()->addRaw("pmse_project.id = '" . $filter . "'");
        }

        $data_bean = $q->execute();

        foreach ($data_bean as $row) {
            $index = $process_map[$row['prj_id']];
            $processes[$index]['status'][$row['cas_status']] = (int)$row['total'];
            $processes[$index]['total'] += $row['total'];
        }

        $labels = array();
        $values = array();
        $in_progress = array();
        $completed = array();
        $cancelled = array();
        $terminated = array();
        $error = array();

        for ($i = 0; $i < sizeof($processes); $i++) {
            $labels[] = array(
                "group" => ($i + 1),
                "l" => $processes[$i]['name'],
            );
            $values[] = array(
                "group" => ($i + 1),
                "t" => $processes[$i]['total'],
            );
            $in_progress[] = array(
                "series" => 0,
                "x" => ($i + 1),
                "y" => $processes[$i]['status']['IN PROGRESS'],
                //"y0" => $processes[$i]['status']['IN PROGRESS'],
            );
            $completed[] = array(
                "series" => 1,
                "x" => ($i + 1),
                "y" => $processes[$i]['status']['COMPLETED'],
                //"y0" => $processes[$i]['status']['COMPLETED'],
            );
            $cancelled[] = array(
                "series" => 2,
                "x" => ($i + 1),
                "y" => $processes[$i]['status']['CANCELLED'],
                //"y0" => $processes[$i]['status']['CANCELLED'],
            );
            $terminated[] = array(
                "series" => 3,
                "x" => ($i + 1),
                "y" => $processes[$i]['status']['TERMINATED'],
                //"y0" => $processes[$i]['status']['TERMINATED'],
            );
            $error[] = array(
                "series" => 4,
                "x" => ($i + 1),
                "y" => $processes[$i]['status']['ERROR'],
                //"y0" => $processes[$i]['status']['ERROR'],
            );
        }

        return array(
            "properties" => array(
                "labels" => $labels,
                "values" => $values,
            ),
            "data" => array(
                array(
                    "key" => translate("LBL_PMSE_IN_PROGESS_STATUS"),
                    "type" => "bar",
                    "color" => '#176de5',
                    "values" => $in_progress,
                ),
                array(
                    "key" => translate("LBL_PMSE_COMPLETED_STATUS"),
                    "type" => "bar",
                    "color" => '#33800d',
                    "values" => $completed,
                ),
                array(
                    "key" => translate("LBL_PMSE_CANCELLED_STATUS"),
                    "type" => "bar",
                    "color" => '#e5a117',
                    "values" => $cancelled,
                ),
                array(
                    "key" => translate("LBL_PMSE_TERMINATED_STATUS"),
                    "type" => "bar",
                    "color" => '#6d17e5',
                    "values" => $terminated,
                ),
                array(
                    "key" => translate("LBL_PMSE_ERROR_STATUS"),
                    "type" => "bar",
                    "color" => '#E61718',
                    "values" => $error,
                ),
            ),
        );
    }
}
