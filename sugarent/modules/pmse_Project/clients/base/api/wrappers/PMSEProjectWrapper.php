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

require_once 'modules/pmse_Project/clients/base/api/wrappers/PMSEWrapper.php';
require_once 'modules/pmse_Project/clients/base/api/wrappers/PMSEObservers/PMSEObservable.php';
require_once 'modules/pmse_Project/clients/base/api/wrappers/PMSERelatedDependencyWrapper.php';

class PMSEProjectWrapper extends PMSEWrapper implements PMSEObservable
{

    /**
     *
     * @var type
     */
    private $project;

    /**
     *
     * @var type
     */
    private $diagram;

    /**
     *
     * @var type
     */
    private $process;

    /**
     *
     * @var type
     */
    private $processDefinition;

    /**
     *
     * @var type
     */
    private $activityBean;

    /**
     *
     * @var type
     */
    private $artifactBean;

    /**
     *
     * @var type
     */
    private $gatewayBean;

    /**
     *
     * @var type
     */
    private $eventBean;

    /**
     *
     * @var type
     */
    private $flowBean;

    /**
     *
     * @var type
     */
    private $activityDefinitionBean;

    /**
     *
     * @var type
     */
    private $eventDefinitionBean;

    /**
     *
     * @var type
     */
    private $boundBean;

    /**
     *
     * @var type
     */
    private $observers;

    /**
     * Class constructor
     * @codeCoverageIgnore
     */
    public function __construct()
    {
        $this->observers = array();
    }

    /**
     * The initWrapper method initializes the bean based attributes,
     * by calling their respective getter method.
     */
    public function initWrapper()
    {
        $this->getProject();
        $this->getDiagram();
        $this->getProcess();
        $this->getProcessDefinition();
        $this->getActivityBean();
        $this->getArtifactBean();
        $this->getGatewayBean();
        $this->getEventBean();
        $this->getFlowBean();
        $this->getActivityDefinitionBean();
        $this->getEventDefinitionBean();
        $this->getBoundBean();
    }
    
    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getProject()
    {
        if (is_null($this->project)) {
            $this->project = $this->getBean('pmse_Project');
        }
        return $this->project;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getDiagram()
    {
        if (is_null($this->diagram)) {
            $this->diagram = $this->getBean('pmse_BpmnDiagram');
        }
        return $this->diagram;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getProcess()
    {
        if (is_null($this->process)) {
            $this->process = $this->getBean('pmse_BpmnProcess');
        }
        return $this->process;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getProcessDefinition()
    {
        if (is_null($this->processDefinition)) {
            $this->processDefinition = $this->getBean('pmse_BpmProcessDefinition');
        }
        return $this->processDefinition;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getActivityBean()
    {
        if (is_null($this->activityBean)) {
            $this->activityBean = $this->getBean('pmse_BpmnActivity');
        }
        return $this->activityBean;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getArtifactBean()
    {
        if (is_null($this->artifactBean)) {
            $this->artifactBean = $this->getBean('pmse_BpmnArtifact');
        }
        return $this->artifactBean;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getGatewayBean()
    {
        if (is_null($this->gatewayBean)) {
            $this->gatewayBean = $this->getBean('pmse_BpmnGateway');
        }
        return $this->gatewayBean;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getEventBean()
    {
        if (is_null($this->eventBean)) {
            $this->eventBean = $this->getBean('pmse_BpmnEvent');
        }
        return $this->eventBean;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getFlowBean()
    {
        if (is_null($this->flowBean)) {
            $this->flowBean = $this->getBean('pmse_BpmnFlow');
        }
        return $this->flowBean;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getActivityDefinitionBean()
    {
        if (is_null($this->activityDefinitionBean)) {
            $this->activityDefinitionBean = $this->getBean('pmse_BpmActivityDefinition');
        }
        return $this->activityDefinitionBean;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getEventDefinitionBean()
    {
        if (is_null($this->eventDefinitionBean)) {
            $this->eventDefinitionBean = $this->getBean('pmse_BpmEventDefinition');
        }
        return $this->eventDefinitionBean;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getBoundBean()
    {
        if (is_null($this->boundBean)) {
            $this->boundBean = $this->getBean('pmse_BpmnBound');
        }
        return $this->boundBean;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getObservers()
    {
        return $this->observers;
    }

    /**
     *
     * @param type $observers
     * @codeCoverageIgnore
     */
    public function setObservers($observers)
    {
        $this->observers = $observers;
    }

    /**
     *
     * @param type $project
     * @codeCoverageIgnore
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     *
     * @param type $diagram
     * @codeCoverageIgnore
     */
    public function setDiagram($diagram)
    {
        $this->diagram = $diagram;
    }

    /**
     *
     * @param type $process
     * @codeCoverageIgnore
     */
    public function setProcess($process)
    {
        $this->process = $process;
    }

    /**
     *
     * @param type $processDefinition
     * @codeCoverageIgnore
     */
    public function setProcessDefinition($processDefinition)
    {
        $this->processDefinition = $processDefinition;
    }

    /**
     *
     * @param type $activityBean
     * @codeCoverageIgnore
     */
    public function setActivityBean($activityBean)
    {
        $this->activityBean = $activityBean;
    }

    /**
     *
     * @param type $artifactBean
     * @codeCoverageIgnore
     */
    public function setArtifactBean($artifactBean)
    {
        $this->artifactBean = $artifactBean;
    }

    /**
     *
     * @param type $gatewayBean
     * @codeCoverageIgnore
     */
    public function setGatewayBean($gatewayBean)
    {
        $this->gatewayBean = $gatewayBean;
    }

    /**
     *
     * @param type $eventBean
     * @codeCoverageIgnore
     */
    public function setEventBean($eventBean)
    {
        $this->eventBean = $eventBean;
    }

    /**
     *
     * @param type $flowBean
     * @codeCoverageIgnore
     */
    public function setFlowBean($flowBean)
    {
        $this->flowBean = $flowBean;
    }

    /**
     *
     * @param type $activityDefinitionBean
     * @codeCoverageIgnore
     */
    public function setActivityDefinitionBean($activityDefinitionBean)
    {
        $this->activityDefinitionBean = $activityDefinitionBean;
    }

    /**
     *
     * @param type $eventDefinitionBean
     * @codeCoverageIgnore
     */
    public function setEventDefinitionBean($eventDefinitionBean)
    {
        $this->eventDefinitionBean = $eventDefinitionBean;
    }

    /**
     *
     * @param type $boundBean
     * @codeCoverageIgnore
     */
    public function setBoundBean($boundBean)
    {
        $this->boundBean = $boundBean;
    }

    /**
     *
     * @param type $beanName
     * @return type
     * @codeCoverageIgnore
     */
    public function getBean($beanName, $id = null)
    {
        return BeanFactory::getBean($beanName, $id);
    }

    /**
     * Retrieve the BPMN project
     * @param $project_id Project id
     * @return stdClass
     */
    public function retrieveProject($projectId, $completeData = false)
    {
        $this->initWrapper();
        $response = array();
        if ($this->project->retrieve_by_string_fields(array('id' => $projectId))) {

            $processObject = $this->process->retrieve_by_string_fields(array('prj_id' => $projectId));
            $processDefinitionData = array();
            if ($this->processDefinition->retrieve_by_string_fields(array('prj_id' => $this->project->id))) {
                $processDefinitionData = $this->sanitizeKeyFields($this->processDefinition->fetched_row);
                $lockedVariables = json_decode(html_entity_decode($processDefinitionData['pro_locked_variables'], ENT_QUOTES));
                $processDefinitionData['pro_locked_variables'] = is_null($lockedVariables) || !$lockedVariables ? array() : $lockedVariables;
                $processDefinitionData['pro_terminate_variables'] = trim($processDefinitionData['pro_terminate_variables']);
            }

            $this->project->fetched_row['pro_id'] = isset($processObject->id) ? $processObject->id : '';
            $this->project->fetched_row['diagram'] = $this->getProjectDiagram($projectId);
            $this->project->fetched_row['process_definition'] = $processDefinitionData;

            $this->project->fetched_row['prj_name'] = $this->project->name;
            $this->project->fetched_row['prj_uid'] = $this->project->id;
            $this->project->fetched_row['prj_name'] = $this->project->fetched_row['name'];
            $this->project->fetched_row['prj_description'] = $this->project->fetched_row['description'];

            $response['success'] = true;
            $response['project'] = $this->project->fetched_row;
        } else {
            $response['success'] = false;
        }
        return $response;
    }

    public function updateProject($projectId, $args)
    {
        $this->initWrapper();
        $response = array("success" => false);

        if (!is_null($this->project->retrieve_by_string_fields(array('id' => $projectId)))) {
            $this->diagram->retrieve_by_string_fields(array('prj_id' => $this->project->id));
            $this->process->retrieve_by_string_fields(array('prj_id' => $this->project->id));
            $this->processDefinition->retrieve_by_string_fields(array(
                    'prj_id' => $this->project->id,
                    'id' => $this->process->id
                ));
            $arrayKeys = array(
                'prj_id' => $this->project->id,
                'prj_uid' => $this->project->id,
                'dia_id' => $this->diagram->id,
                'pro_id' => $this->process->id
            );
            $this->updateDiagram($args['data'], $arrayKeys);
            $response = array("success" => true);
        } else {
            $response = array("success" => false, "data" => $projectId);
        }

        return $response;
    }

    public function getProjectDiagram($prjID)
    {
        // init the wrapper components inside the method for performance reasons
        $this->initWrapper();
        $diagramData = array();
        $activityData = array();
        $artifactData = array();
        $gatewayData = array();
        $eventData = array();
        $flowData = array();
        $lanesetData = array();
        $laneData = array();
        $participantData = array();
        $processData = array();
        $retrievedData = array();
        $conditions = array("prj_id" => $prjID);

        if (!is_null($this->diagram->retrieve_by_string_fields($conditions))) {
            // list of activities based in the project id
            $selected = array(
                'pmse_bpmn_activity.*',
                'pmse_bpmn_bound.bou_x',
                'pmse_bpmn_bound.bou_y',
                'pmse_bpmn_bound.bou_width',
                'pmse_bpmn_bound.bou_height',
                'pmse_bpmn_bound.bou_container',
                'pmse_bpmn_bound.bou_uid'
            );
            $data = $this->getSelectRows($this->activityBean, "",
                "pmse_bpmn_activity.prj_id='" . $prjID . "' AND pmse_bpmn_bound.bou_element_type='bpmnActivity'", 0, -1,
                -1, $selected,
                array(array('INNER', 'pmse_bpmn_bound', 'pmse_bpmn_activity.id=pmse_bpmn_bound.bou_element')));

            if (!empty($data)) {
                foreach ($data['rowList'] as $row) {
                    if (isset($row['act_default_flow']) && !empty($row['act_default_flow'])) {
                        $tmpObject = $this->flowBean->retrieve_by_string_fields(array("id" => $row['act_default_flow']));
                        $row['act_default_flow'] = !is_null($tmpObject) ? $tmpObject->flo_uid : '';
                    }
                    $row['bou_element'] = $row['bou_uid'];

                    $row['act_name'] = $row['name'];
                    $row = $this->sanitizeFields($row);
                    $activityData[] = $row;
                }
                //exit();
            }
            $this->diagram->fetched_row['activities'] = $activityData;
            // list of events based in the project id
            $selected = array(
                'pmse_bpmn_event.*',
                'pmse_bpmn_bound.bou_x',
                'pmse_bpmn_bound.bou_y',
                'pmse_bpmn_bound.bou_width',
                'pmse_bpmn_bound.bou_height',
                'pmse_bpmn_bound.bou_container',
                'pmse_bpmn_bound.bou_uid'
            );
            $data = $this->getSelectRows($this->eventBean, "",
                "pmse_bpmn_event.prj_id='" . $prjID . "' AND pmse_bpmn_bound.bou_element_type='bpmnEvent'", 0, -1, -1,
                $selected, array(array('INNER', 'pmse_bpmn_bound', 'pmse_bpmn_event.id=pmse_bpmn_bound.bou_element')));
            if (!empty($data)) {
                foreach ($data['rowList'] as $row) {
                    $row['bou_element'] = $row['bou_uid'];
                    if (isset($row['evn_attached_to']) && !empty($row['evn_attached_to'])) {
                        $tmpObject = $this->activityBean->retrieve_by_string_fields(array("act_id" => $row['evn_attached_to']));
                        $row['evn_attached_to'] = !is_null($tmpObject) ? $tmpObject->act_uid : '';
                    }
                    if (isset($row['evn_cancel_activity']) && !empty($row['evn_cancel_activity'])) {
                        $tmpObject = $this->activityBean->retrieve_by_string_fields(array("act_id" => $row['evn_cancel_activity']));
                        $row['evn_cancel_activity'] = !is_null($tmpObject) ? $tmpObject->act_uid : '';
                    }
                    if (isset($row['evn_activity_ref']) && !empty($row['evn_activity_ref'])) {
                        $tmpObject = $this->activityBean->retrieve_by_string_fields(array("act_id" => $row['evn_activity_ref']));
                        $row['evn_activity_ref'] = !is_null($tmpObject) ? $tmpObject->act_uid : '';
                    }
                    $row['evn_name'] = $row['name'];
                    $row = $this->sanitizeFields($row);
                    $eventData[] = $row;
                }
            }
            $this->diagram->fetched_row['events'] = $eventData;
            // list of gateways based in the project id
            $selected = array(
                'pmse_bpmn_gateway.*',
                'pmse_bpmn_bound.bou_x',
                'pmse_bpmn_bound.bou_y',
                'pmse_bpmn_bound.bou_width',
                'pmse_bpmn_bound.bou_height',
                'pmse_bpmn_bound.bou_container',
                'pmse_bpmn_bound.bou_uid'
            );
            $data = $this->getSelectRows($this->gatewayBean, "",
                "pmse_bpmn_gateway.prj_id='" . $prjID . "' AND pmse_bpmn_bound.bou_element_type='bpmnGateway'", 0, -1,
                -1, $selected,
                array(array('INNER', 'pmse_bpmn_bound', 'pmse_bpmn_gateway.id=pmse_bpmn_bound.bou_element')));
            if (!empty($data)) {
                foreach ($data['rowList'] as $row) {
                    $row['bou_element'] = $row['bou_uid'];
                    if (isset($row['gat_default_flow']) && !empty($row['gat_default_flow'])) {
                        $tmpObject = $this->flowBean->retrieve_by_string_fields(array("id" => $row['gat_default_flow']));
                        $row['gat_default_flow'] = isset($tmpObject->flo_uid) ? $tmpObject->flo_uid : '';
                    }
                    $row['gat_name'] = $row['name'];
                    $row = $this->sanitizeFields($row);
                    $gatewayData[] = $row;
                }
            }
            $this->diagram->fetched_row['gateways'] = $gatewayData;
            // list of artifacts based in the project id
            $selected = array(
                'pmse_bpmn_artifact.*',
                'pmse_bpmn_bound.bou_x',
                'pmse_bpmn_bound.bou_y',
                'pmse_bpmn_bound.bou_width',
                'pmse_bpmn_bound.bou_height',
                'pmse_bpmn_bound.bou_container',
                'pmse_bpmn_bound.bou_uid'
            );
            $data = $this->getSelectRows($this->artifactBean, "",
                "pmse_bpmn_artifact.prj_id='" . $prjID . "' AND pmse_bpmn_bound.bou_element_type='bpmnArtifact'", 0, -1,
                -1, $selected,
                array(array('INNER', 'pmse_bpmn_bound', 'pmse_bpmn_artifact.id=pmse_bpmn_bound.bou_element')));
            if (!empty($data)) {
                foreach ($data['rowList'] as $row) {
                    $row['bou_element'] = $row['bou_uid'];
                    $row['art_name'] = $row['name'];
                    $row = $this->sanitizeFields($row);
                    $artifactData[] = $row;
                }
            }
            $this->diagram->fetched_row['artifacts'] = $artifactData;
            // list of flows based in the project id
            $data = $this->getSelectRows($this->flowBean, "", "pmse_bpmn_flow.prj_id='" . $prjID . "'", 0, -1, -1,
                array());
            if (!empty($data)) {
                foreach ($data['rowList'] as $row) {
                    $row = $this->sanitizeKeyFields($row);
                    $row['prj_id'] = $prjID;
                    $originE = $this->getEntityUid($row['flo_element_origin_type']);
                    $row['flo_element_origin'] = $this->getElementUid($row['flo_element_origin'], $originE['bean'],
                        $originE['uid']);
                    $destE = $this->getEntityUid($row['flo_element_dest_type']);
                    $row['flo_element_dest'] = $this->getElementUid($row['flo_element_dest'], $destE['bean'],
                        $destE['uid']);
                    $row['flo_state'] = json_decode($row['flo_state']);
                    $flowData[] = $row;
                }
            }
            $this->diagram->fetched_row['flows'] = $flowData;
            // list of pools based in the project id
//            $data = $this->lanesetBean->getSelectRows("", "pmse_bpmn_laneset.prj_id=" . $prjID . " AND bpmn_bound.bou_element_type='bpmnLaneset'", 0, -1, -1, array(), array(array('INNER', 'bpmn_bound', 'bpmn_laneset.lns_id=bpmn_bound.bou_element')));
//            if (!empty($data)) {
//                foreach ($data['rowList'] as $row) {
//                    $row['bou_element'] = $row['bou_uid'];
//                    $row = sanitizeFields($row);
//                    $lanesetData[] = $row;
//                }
//            }
//            $this->diagram->fetched_row['pools'] = $lanesetData;
//            // list of lanes based in the project id
//            $data = $this->laneBean->getSelectRows("", "bpmn_lane.prj_id=" . $prjID . " AND bpmn_bound.bou_element_type='bpmnLane'", 0, -1, -1, array(), array(array('INNER', 'bpmn_bound', 'bpmn_lane.lan_id=bpmn_bound.bou_element')));
//            if (!empty($data)) {
//                foreach ($data['rowList'] as $row) {
//                    $row['bou_element'] = $row['bou_uid'];
//                    $row = sanitizeFields($row);
//                    $laneData[] = $row;
//                }
//            }
//            $this->diagram->fetched_row['lanes'] = $laneData;
//            // list of participants based in the project id
//            $data = $this->participantBean->getSelectRows("", "bpmn_participant.prj_id=" . $prjID, 0, -1, -1, array(), array());
//            if (!empty($data)) {
//                foreach ($data['rowList'] as $row) {
//                    $row['bou_element'] = $row['bou_uid'];
//                    $participantData[] = $row;
//                }
//            }
//            $this->diagram->fetched_row['participants'] = $participantData;
            // data list based in the project id
//            $data = $this->dataBean->getSelectRows("", "prj_id=" . $prjID, 0, -1, -1, array(), array());
//            if (!empty($data)) {
//                foreach ($data['rowList'] as $row) {
//                    $retrievedData[] = $row;
//                }
//            }
//            $this->diagram->fetched_row['data'] = $retrievedData;
            array_push($diagramData, $this->diagram->fetched_row);
        } else {
            throw new SugarApiException('Invalid Process Definiton', 500);
        }
        return $diagramData;
    }

    public function updateDiagram($diagramArray, $keysArray)
    {
        $this->initWrapper();
        $var = $diagramArray['flows'];
        unset($diagramArray['flows']);
        $diagramArray['flows'] = $var;

        foreach ($diagramArray as $type => $elementsGroup) {

            $entityData = $this->getEntityData($type);
            if (!empty($entityData) && is_array($elementsGroup)) {
                foreach ($elementsGroup as $element) {
                    //$this->flowBean = new BpmnFlow();
                    if (isset($element['gat_default_flow'])) {
                        if ($element['gat_default_flow'] != null && !empty($element['gat_default_flow'])) {
                            $tmpObject = $this->flowBean->retrieve_by_string_fields(array("flo_uid" => $element['gat_default_flow']));
                            $element['gat_default_flow'] = isset($tmpObject->id) ? $tmpObject->id : '';
                        } else {
                            $element['gat_default_flow'] = null;
                        }
                    }

                    if (isset($element['gat_direction'])) {
                        $element['gat_direction'] = $element['gat_direction'] == 'UNSPECIFIED' || $element['gat_direction'] == '' ? 'DIVERGING' : $element['gat_direction'];
                    }

                    if (isset($element['act_default_flow'])) {
                        if ($element['act_default_flow'] != null && !empty($element['act_default_flow'])) {
                            $tmpObject = $this->flowBean->retrieve_by_string_fields(array("id" => $element['act_default_flow']));
                            $element['act_default_flow'] = isset($tmpObject->id) ? $tmpObject->id : '';
                        } else {
                            $element['act_default_flow'] = null;
                        }
                    }
                    if ($type == 'flows' && strtolower($element['action']) != 'remove' && strtolower($element['action']) != 'update') {
                        $originBean = ucfirst($element['flo_element_origin_type']);

                        $originEntity = $this->getClassEntity($originBean);
                        $originBean = $this->getBean($originEntity['bean']);

                        $originBean->retrieve_by_string_fields(array($originEntity['uid_field'] => $element['flo_element_origin']));

                        $element['flo_element_origin'] = $originBean->id;
                        $destinationBean = ucfirst($element['flo_element_dest_type']);
//                        $destinationBean = new $destinationBean();
                        $destinationEntity = $this->getClassEntity($destinationBean);
                        $destinationBean = $this->getBean($destinationEntity['bean']);

                        //$tmp2 = $destinationBean->id;//getPrimaryFieldUid();
                        $destinationBean->retrieve_by_string_fields(array($destinationEntity['uid_field'] => $element['flo_element_dest']));
                        //$destinationPK = $destinationBean->getPrimaryFieldName();
                        $element['flo_element_dest'] = $destinationBean->id;
                        $tmpStateArray = array_values($element['flo_state']);
                        $firstElement = array_shift($tmpStateArray);
                        $tmpEndState = array_values($element['flo_state']);
                        $lastElement = end($tmpEndState);
                        $element['flo_x1'] = $firstElement['x'];
                        $element['flo_y1'] = $firstElement['y'];
                        $element['flo_x2'] = $lastElement['x'];
                        $element['flo_y2'] = $lastElement['y'];
                        $element['flo_state'] = json_encode($element['flo_state']);

                    } elseif ($type == 'flows' && strtolower($element['action']) == 'update') {
                        if (isset($element['flo_element_origin_type'])) {
                            $originBean = ucfirst($element['flo_element_origin_type']);
                            $originEntity = $this->getClassEntity($originBean);
                            $originBean = $this->getBean($originEntity['bean']);
                            $originBean->retrieve_by_string_fields(array($originEntity['uid_field'] => $element['flo_element_origin']));
                            $element['flo_element_origin'] = $originBean->id;
                        }
                        if (isset($element['flo_element_dest_type'])) {
                            $destinationBean = ucfirst($element['flo_element_dest_type']);
                            $destinationEntity = $this->getClassEntity($destinationBean);
                            $destinationBean = $this->getBean($destinationEntity['bean']);
                            $destinationBean->retrieve_by_string_fields(array($destinationEntity['uid_field'] => $element['flo_element_dest']));
                            $element['flo_element_dest'] = $destinationBean->id;
                        }
                        if (isset($element['flo_state'])) {
                            $tmpFirstElement = array_values($element['flo_state']);
                            $firstElement = array_shift($tmpFirstElement);
                            $tmpLastElement = array_values($element['flo_state']);
                            $lastElement = end($tmpLastElement);
                            $element['flo_x1'] = $firstElement['x'];
                            $element['flo_y1'] = $firstElement['y'];
                            $element['flo_x2'] = $lastElement['x'];
                            $element['flo_y2'] = $lastElement['y'];
                            $element['flo_state'] = json_encode($element['flo_state']);
                        }
                    }

                    if ($type == 'events' && isset($element['evn_attached_to'])) {
                        $this->activityBean = $this->getBean('pmse_BpmnActivity');
                        $tmpObject = $this->activityBean->retrieve_by_string_fields(array($this->activityBean->id/* getPrimaryFieldUid() */ => $element['evn_attached_to']));
                        $pkField = $tmpObject->getPrimaryFieldName();
                        $element['evn_attached_to'] = isset($this->activityBean->$pkField) ? $this->activityBean->$pkField : '';
                    }
                    $this->updateDiagramElements($entityData, $keysArray, array_merge($element, $keysArray));
                }
            }
        }

        // Update the Process Definition table (pmse_project) so that the modified time gets updated automatically
        $this->project->save();
    }

    public function getEntityData($key)
    {
        $data = array();
        switch ($key) {
            case 'activities':
                $data['bean'] = 'BpmnActivity';
                $data['bean_object'] = 'pmse_BpmnActivity';
                $data['bound_element'] = 'bpmnActivity';
                $data['uid_field'] = 'act_uid';
                $data['element_name'] = 'act_name';
                break;
            case 'artifacts':
                $data['bean'] = 'BpmnArtifact';
                $data['bean_object'] = 'pmse_BpmnArtifact';
                $data['bound_element'] = 'bpmnArtifact';
                $data['uid_field'] = 'art_uid';
                $data['element_name'] = 'art_name';
                break;
            case 'gateways':
                $data['bean'] = 'BpmnGateway';
                $data['bean_object'] = 'pmse_BpmnGateway';
                $data['bound_element'] = 'bpmnGateway';
                $data['uid_field'] = 'gat_uid';
                $data['element_name'] = 'gat_name';
                break;
            case 'events':
                $data['bean'] = 'BpmnEvent';
                $data['bean_object'] = 'pmse_BpmnEvent';
                $data['bound_element'] = 'bpmnEvent';
                $data['uid_field'] = 'evn_uid';
                $data['element_name'] = 'evn_name';
                break;
            case 'flows':
                $data['bean'] = 'BpmnFlow';
                $data['bean_object'] = 'pmse_BpmnFlow';
                $data['bound_element'] = 'bpmnFlow';
                $data['uid_field'] = 'flo_uid';
                $data['element_name'] = 'flo_name';
                break;
            case 'pools':
                $data['bean'] = 'BpmnLaneset';
                $data['bean_object'] = 'pmse_BpmnLaneset';
                $data['bound_element'] = 'bpmnLaneset';
                $data['uid_field'] = 'lns_uid';
                break;
            case 'lanes':
                $data['bean'] = 'BpmnLane';
                $data['bean_object'] = 'pmse_BpmnLane';
                $data['bound_element'] = 'bpmnLane';
                $data['uid_field'] = 'lan_uid';
                break;
            case 'data':
                $data['bean'] = 'BpmnData';
                $data['bean_object'] = 'pmse_BpmnData';
                $data['bound_element'] = 'bpmnData';
                $data['uid_field'] = 'dat_uid';
                break;
            case 'participants':
                $data['bean'] = 'BpmnParticipant';
                $data['bean_object'] = 'pmse_BpmnParticipant';
                $data['bound_element'] = 'bpmnParticipant';
                $data['uid_field'] = 'par_uid';
                break;
        }
        return $data;
    }

    public function getEntityUid($key)
    {
        switch ($key) {
            case 'bpmnActivity':
                $bean = 'pmse_BpmnActivity';
                $uid = 'act_uid';
                break;
            case 'bpmnGateway':
                $bean = 'pmse_BpmnGateway';
                $uid = 'gat_uid';
                break;
            case 'bpmnEvent':
                $bean = 'pmse_BpmnEvent';
                $uid = 'evn_uid';
                break;
            case 'bpmnFlow':
                $bean = 'pmse_BpmnFlow';
                $uid = 'flo_uid';
                break;
            case 'bpmnLaneset':
                return 'id'; //'lns_uid';
            case 'bpmnLane':
                return 'id'; //'lan_uid';
            case 'bpmnData':
                return 'id'; //'dat_uid';
            case 'bpmnParticipant':
                return 'id'; //'par_uid';
            case 'bpmnArtifact':
                $bean = 'pmse_BpmnArtifact';
                $uid = 'art_uid';
                break;
        }
        return array('bean' => $bean, 'uid' => $uid);
    }

    public function getClassEntity($originClass)
    {
        switch ($originClass) {
            case "BpmnActivity":
                $bean_name = 'pmse_BpmnActivity';
                $uid_field = "act_uid";
                break;
            case "BpmnEvent":
                $bean_name = 'pmse_BpmnEvent';
                $uid_field = "evn_uid";
                break;
            case "BpmnGateway":
                $bean_name = 'pmse_BpmnGateway';
                $uid_field = "gat_uid";
                break;
            case "BpmnArtifact":
                $bean_name = 'pmse_BpmnArtifact';
                $uid_field = "art_uid";
                break;
        }
        return array("bean" => $bean_name, "uid_field" => $uid_field);
    }

    public function updateDiagramElements($entityData, $keysArray, $elementArray, $args = array())
    {
        $this->initWrapper();
        $action = strtolower($elementArray['action']);
        unset($elementArray['action']);
        $bean = $this->getBean($entityData['bean_object']);

        switch ($action) {
            case 'create':
                $elementArray['pro_id'] = $keysArray['pro_id'];
                $elementArray['prj_id'] = $keysArray['prj_uid'];
                $elementArray['name'] = $elementArray[$entityData['element_name']];
                $elementID = $this->create($bean, $elementArray);

                global $beanList;
                $tmpList = $beanList;
                $evn_module = !empty($this->processDefinition->pro_module) ? $this->processDefinition->pro_module : '';
                foreach ($tmpList as $key => $value) {
                    $elementArray['evn_message'] = isset($elementArray['evn_message']) ? $elementArray['evn_message'] : '';
                    if (strtoupper($value) == strtoupper($elementArray['evn_message'])) {
                        $evn_module = $key;
                    }
                }

                if ($entityData['bean'] == 'BpmnActivity') {
                    $tmpDefinition = $this->getBean('pmse_BpmActivityDefinition');
                    $tmpDefinition->new_with_id = true;
                    $tmpDefinition->id = $elementID;
                    $tmpDefinition->name = $elementArray['name'];
                    $tmpDefinition->act_type = ($bean->act_task_type == 'USERTASK' && $bean->act_type == 'TASK') ? $this->getDefaultDynaformView($bean->prj_id) : $bean->act_type; //Fix whenever a new record is added and no Form has been changed
                    //$tmpDefinition->act_type = 'EditView';
                    $tmpDefinition->pro_id = $bean->pro_id;

                    $tmpDefinition->save();
                } elseif ($entityData['bean'] == 'BpmnEvent') {
                    $tmpDefinition = $this->getBean('pmse_BpmEventDefinition');
                    $tmpDefinition->new_with_id = true;
                    $tmpDefinition->id = $elementID;
                    $tmpDefinition->evn_type = $bean->evn_type;
                    $tmpDefinition->evn_module = $evn_module;
                    $tmpDefinition->evn_status = 'ACTIVE';
                    $tmpDefinition->pro_id = $bean->pro_id;
                    $tmpDefinition->prj_id = $bean->prj_id;
                    $tmpDefinition->save();
                } elseif ($entityData['bean'] == 'BpmnGateway') {
                    $tmpDefinition = $this->getBean('pmse_BpmGatewayDefinition');
                    $tmpDefinition->new_with_id = true;
                    $tmpDefinition->id = $elementID;
                    $tmpDefinition->pro_id = $bean->pro_id;
                    $tmpDefinition->prj_id = $bean->prj_id;
                    $tmpDefinition->execution_mode = 'SYNC';
                    $tmpDefinition->save();
                }

                if ($entityData['bean'] != 'BpmnFlow') {
                    $bound = $this->getBean('pmse_BpmnBound');
                    $bound->bou_uid = create_guid(); //ADAMEngineUtils::generateUniqueID();
                    $bound->bou_x = $elementArray['bou_x'];
                    $bound->bou_y = $elementArray['bou_y'];
                    $bound->bou_width = $elementArray['bou_width'];
                    $bound->bou_height = $elementArray['bou_height'];
                    $bound->prj_id = $keysArray['prj_uid'];
                    $bound->dia_id = $keysArray['dia_id'];
                    $bound->bou_container = $elementArray['bou_container'];
                    switch ($elementArray['bou_container']) {
                        case 'bpmnDiagram':
                            $bound->element_id = $bound->dia_id;
                            break;
                    }
                    $bound->bou_element_type = $this->lowerFirstCharCase($entityData['bean']);
                    $bound->bou_element = $elementID;
                    $bound->new_with_id = true;
                    $bound->id = $bound->bou_uid;
                    $bound->save();
                }
                break;
            case 'update':
                $bean->retrieve_by_string_fields(array($entityData['uid_field'] => $elementArray[$entityData['uid_field']]));

                $id = $this->update($bean, $elementArray);
                $primaryField = $this->getPrimaryFieldName($bean);
                $elementID = $bean->fetched_row[$primaryField];

                if ($entityData['bean'] != 'BpmnFlow') {
                    $bound = $this->getBean('pmse_BpmnBound');
                    $bound->retrieve_by_string_fields(array(
                            'bou_element' => $elementID,
                            'bou_element_type' => $entityData['bound_element']
                        ));
                    if (isset($elementArray['bou_x'])) {
                        $bound->bou_x = $elementArray['bou_x'];
                    }
                    if (isset($elementArray['bou_y'])) {
                        $bound->bou_y = $elementArray['bou_y'];
                    }
                    if (isset($elementArray['bou_width'])) {
                        $bound->bou_width = $elementArray['bou_width'];
                    }
                    if (isset($elementArray['bou_height'])) {
                        $bound->bou_height = $elementArray['bou_height'];
                    }
                    if (isset($elementArray['bou_container'])) {
                        switch ($elementArray['bou_container']) {
                            case 'bpmnDiagram':
                                $bound->element_id = $bound->dia_id;
                                break;
//                            case 'bpmnLaneset':
//                                $laneset = $this->getBean('BpmnLaneset');
//                                $laneset->retrieve_by_string_fields(array('lns_uid' => $elementArray['element_uid']));
//                                $bound->element_id = $laneset->lns_id;
//                                break;
//                            case 'bpmnLane':
//                                $lane = $this->getBean('BpmnLane');
//                                $lane->retrieve_by_string_fields(array('lan_uid' => $elementArray['element_uid']));
//                                $bound->element_id = $laneset->lns_id;
//                                break;
                        }
                    }
                    $bound->save();
                }
                break;
            case 'remove':
                $primaryField = $this->getPrimaryFieldName($bean);
                $bean->retrieve_by_string_fields(array($entityData['uid_field'] => $elementArray[$entityData['uid_field']]));
                if ($entityData['bean'] == 'BpmnActivity') {
                    $tmpDefinition = $this->getBean('pmse_BpmActivityDefinition');
                    $tmpDefinition->retrieve_by_string_fields(array('id' => $bean->$primaryField));
                    $this->delete($tmpDefinition);
                } elseif ($entityData['bean'] == 'BpmnEvent') {
                    $tmpDefinition = $this->getBean('pmse_BpmEventDefinition');
                    $tmpDefinition->retrieve_by_string_fields(array('id' => $bean->$primaryField));
                    $this->delete($tmpDefinition);
                    if (!empty($tmpDefinition->fetched_row)) {
                        $relDepWrapper = new PMSERelatedDependencyWrapper();
                        $relDepWrapper->removeRelatedDependencies($tmpDefinition->fetched_row);
                        $relDepWrapper->removeActiveTimerEvents($tmpDefinition->fetched_row);
                    }                    
                }

                if ($this->delete($bean) && $entityData['bean'] != 'BpmnFlow') {
                    $bound = $this->getBean('pmse_BpmnBound');
                    $bound->retrieve_by_string_fields(array(
                            'bou_element' => $bean->fetched_row[$primaryField],
                            'bou_element_type' => $entityData['bound_element']
                        ));
                    $this->delete($bound);
                }
                break;
            default:
                break;
        }
    }

    /**
     *
     * @param type $id
     * @param type $elementEntity
     * @param type $uidField
     * @return type
     */
    public function getElementUid($id, $elementEntity, $uidField)
    {
        $bean = $this->getBean($elementEntity);

        $bean->retrieve_by_string_fields(array($this->getPrimaryFieldName($bean) => $id));

        $returnUidValue = isset($bean->$uidField) ? $bean->$uidField : '';

        return $returnUidValue;
    }

    /**
     *
     * @param type $projectId
     * @return type
     */
    public function getDefaultDynaformView($projectId)
    {
        $dynaformBean = $this->getBean('pmse_BpmDynaForm');
        $where = "prj_id='{$projectId}'";
        $orderBy = "id ASC";
        $rowList = $this->getSelectRows($dynaformBean, $orderBy, $where);
        $defaultDyn = isset($rowList['rowList'][0]['dyn_uid']) ? $rowList['rowList'][0]['dyn_uid'] : 'EditView';
        return $defaultDyn;
    }

    /**
     *
     * @param type $args
     */
    public function updateProcessDefinition($args)
    {
        $this->initWrapper();
        //Update ProcessDefinition
        $this->processDefinition = $this->getBean('pmse_BpmProcessDefinition')->retrieve_by_string_fields(array('prj_id' => $args['record']));
        //Update Diagrams
        $this->diagram = $this->getBean('pmse_BpmnDiagram')->retrieve_by_string_fields(array('prj_id' => $args['record']));
        //Update Process
        $this->process = $this->getBean('pmse_BpmnProcess')->retrieve_by_string_fields(array('prj_id' => $args['record']));

        foreach ($args as $key => $value) {
            $this->diagram->$key = $value;
            $this->process->$key = $value;
            $this->processDefinition->$key = $value;
        }

        $this->diagram->save();
        $this->process->save();
        $this->processDefinition->save();

        $this->notify();
    }

    /**
     *
     * @param PMSEObserver $observer
     */
    public function attach($observer)
    {
        $i = array_search($observer, $this->observers);
        if ($i === false) {
            $this->observers[] = $observer;
        }
    }

    /**
     *
     * @param PMSEObserver $observer
     */
    public function detach($observer)
    {
        if (!empty($this->observers)) {
            $i = array_search($observer, $this->observers);
            if ($i !== false) {
                unset($this->observers[$i]);
            }
        }
    }

    /**
     *
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}
