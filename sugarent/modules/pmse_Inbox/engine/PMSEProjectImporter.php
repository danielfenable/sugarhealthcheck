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

require_once 'modules/pmse_Inbox/engine/PMSEEngineUtils.php';
require_once 'modules/pmse_Inbox/engine/PMSEImporter.php';
require_once 'modules/pmse_Project/clients/base/api/wrappers/PMSERelatedDependencyWrapper.php';

/**
 * Description of the ProjectImporter class
 * This class is in charge of the import of bpm files into Processes.
 */
class PMSEProjectImporter extends PMSEImporter
{

    /**
     * The import result
     * @var \stdClass
     */
    private $importResult;

    /**
     * The array of saved elements
     * @var array
     */
    private $savedElements = array();

    /**
     * The array of changed uid elements
     * @var array
     */
    private $changedUidElements = array();

    /**
     * The list of default flows
     * @var array
     */
    private $defaultFlowList = array();

    /**
     *
     * @var type
     */
    protected $dependenciesWrapper;

    /**
     * The target module from the import
     * @var string
     */
    protected $targetModule;

    /**
     * The class constructor
     * @codeCoverageIgnore
     */
    public function __construct()
    {
        $this->bean = BeanFactory::getBean('pmse_Project');
        $this->dependenciesWrapper = new PMSERelatedDependencyWrapper();
        $this->name = 'name';
        $this->id = 'prj_id';
        $this->extension = 'bpm';
        $this->module = 'prj_module';
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getSavedElements()
    {
        return $this->savedElements;
    }

    /**
     *
     * @param type $savedElements
     * @codeCoverageIgnore
     */
    public function setSavedElements($savedElements)
    {
        $this->savedElements = $savedElements;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getDependenciesWrapper()
    {
        return $this->dependenciesWrapper;
    }

    /**
     *
     * @param type $dependenciesWrapper
     * @codeCoverageIgnore
     */
    public function setDependenciesWrapper($dependenciesWrapper)
    {
        $this->dependenciesWrapper = $dependenciesWrapper;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getDefaultFlowList()
    {
        return $this->defaultFlowList;
    }

    /**
     *
     * @param type $defaultFlowList
     * @codeCoverageIgnore
     */
    public function setDefaultFlowList($defaultFlowList)
    {
        $this->defaultFlowList = $defaultFlowList;
    }

    /**
     *
     * @return type
     * @codeCoverageIgnore
     */
    public function getChangedUidElements()
    {
        return $this->changedUidElements;
    }

    /**
     *
     * @param type $changedUidElements
     * @codeCoverageIgnore
     */
    public function setChangedUidElements($changedUidElements)
    {
        $this->changedUidElements = $changedUidElements;
    }

    /**
     * Sets the targetModule property
     * @param string $targetModule The target module for this project
     */
    public function setTargetModule($targetModule)
    {
        $this->targetModule = $targetModule;
    }

    /**
     * Gets the targetModule
     * @return string
     */
    public function getTargetModule()
    {
        return $this->targetModule;
    }

    /**
     * Save the project data into the bpm project, and process beans, validates the uniqueness of
     * ids and also saves the rest.
     * @param $projectData
     * @return bool|void
     */
    public function saveProjectData($projectData)
    {
        global $current_user;
        $projectBean = $this->getBean();
        $keysArray = array();

        // This will be needed down the road
        $this->setTargetModule($projectData[$this->module]);

        unset($projectData[$this->id]);
        //Unset common fields
        $this->unsetCommonFields($projectData);
        if (!isset($projectData['assigned_user_id'])) {
            $projectData['assigned_user_id'] = $current_user->id;
        }

        if (isset($projectData['prj_name']) && !empty($projectData['prj_name'])) {
            $name = $this->getNameWithSuffix($projectData['prj_name']);
        } else {
            $name = $this->getNameWithSuffix($projectData[$this->name]);
        }

        $projectData['name'] = $name;
        $projectData['process']['name'] = $name;
        $projectData['diagram']['name'] = $name;

        $diagramData = (!empty($projectData['diagram'])) ? $projectData['diagram'] : array();
        $processData = (!empty($projectData['process'])) ? $projectData['process'] : array();
        $processDefinitionData = (!empty($projectData['definition'])) ? $projectData['definition'] : array();
        $dynaFormData = (!empty($projectData['dynaforms'])) ? $projectData['dynaforms'] : array();

        unset($projectData['diagram'], $projectData['process'], $projectData['definition'], $projectData['dynaforms']);

        $projectData['prj_uid'] = PMSEEngineUtils::generateUniqueID();
        $projectData['prj_status'] = 'INACTIVE';

        foreach ($projectData as $key => $value) {
            if (isset($projectBean->field_defs[$key])){
                $projectBean->$key = $value;
            }
        }

        $keysArray['prj_id'] = $projectBean->save();

        $diagramBean = BeanFactory::newBean('pmse_BpmnDiagram');
        unset($diagramData['dia_id']);
        $diagramData['prj_id'] = $keysArray['prj_id'];
        $diagramData['dia_uid'] = PMSEEngineUtils::generateUniqueID();
        foreach ($diagramData as $key => $value) {
            if (isset($diagramBean->field_defs[$key])){
                $diagramBean->$key = $value;
            }
        }
        $keysArray['dia_id'] = $diagramBean->save();

        $processBean = BeanFactory::newBean('pmse_BpmnProcess');
        unset($processData['pro_id']);
        $processData['prj_id'] = $keysArray['prj_id'];
        $processData['dia_id'] = $keysArray['dia_id'];
        $processData['pro_uid'] = PMSEEngineUtils::generateUniqueID();
        foreach ($processData as $key => $value) {
            if (isset($processBean->field_defs[$key])){
                $processBean->$key = $value;
            }
        }
        $keysArray['pro_id'] = $processBean->save();

        $processDefinitionBean = BeanFactory::newBean('pmse_BpmProcessDefinition');
        unset($projectData['definition']['pro_id']);
        $processDefinitionData['prj_id'] = $keysArray['prj_id'];
        foreach ($processDefinitionData as $key => $value) {
            if (isset($processDefinitionBean->field_defs[$key])){
                $processDefinitionBean->$key = $value;
            }
        }
        $processDefinitionBean->id = $keysArray['pro_id'];
        $processDefinitionBean->pro_status = 'INACTIVE';
        $processDefinitionBean->new_with_id = true;
        $processDefinitionBean->save();

        $this->saveProjectActivitiesData($diagramData['activities'], $keysArray);
        $this->saveProjectEventsData($diagramData['events'], $keysArray);
        $this->saveProjectGatewaysData($diagramData['gateways'], $keysArray);
        $this->saveProjectArtifactsData($diagramData['artifacts'], $keysArray);
        $this->saveProjectFlowsData($diagramData['flows'], $keysArray);
        $this->saveProjectDynaFormsData($diagramData['flows'], $keysArray);
        $this->processDefaultFlows();
        return $keysArray['prj_id'];
    }

    /**
     * @codeCoverageIgnore
     * @deprecated since version 1.612
     */
    public function getFileProjectData($filePath)
    {
        return false;
    }

    /**
     * Save the project activities data.
     * @param array $activitiesData
     * @param array $keysArray
     */
    public function saveProjectActivitiesData($activitiesData, $keysArray)
    {
        foreach ($activitiesData as $element) {
            $activityBean = BeanFactory::getBean('pmse_BpmnActivity');
            $boundBean = BeanFactory::getBean('pmse_BpmnBound');
            $definitionBean = BeanFactory::getBean('pmse_BpmActivityDefinition');

            list($element, $definition, $bound) = $this->getElementDefinition($element);

            $element['prj_id'] = $keysArray['prj_id'];
            $element['pro_id'] = $keysArray['pro_id'];
            $previousId = $element['id'];
            unset($element['id']);

            $previousUid = $element['act_uid'];
            $element['act_uid'] = PMSEEngineUtils::generateUniqueID();
            $this->changedUidElements[$previousUid] = array('new_uid' => $element['act_uid'] );
            foreach ($element as $key => $value) {
                // Handle sanitization of the JSON string for activity fields
                // See MACAROON-867
                if ($key === 'act_fields') {
                    $value = PMSEEngineUtils::sanitizeImportActivityFields($element, $this->getTargetModule());
                }

                if (isset($activityBean->field_defs[$key])){
                    $activityBean->$key = $value;
                }
            }
            $currentID = $activityBean->save();

            if (!isset($this->savedElements['bpmnActivity'])) {
                $this->savedElements['bpmnActivity'] = array();
                $this->savedElements['bpmnActivity'][$previousId] = $currentID;
            } else {
                $this->savedElements['bpmnActivity'][$previousId] = $currentID;
            }

            $bound['bou_uid'] = PMSEEngineUtils::generateUniqueID();
            $bound['prj_id'] = $keysArray['prj_id'];
            $bound['dia_id'] = $keysArray['dia_id'];
            $bound['element_id'] = $keysArray['dia_id'];
            $bound['bou_element'] = $currentID;
            foreach ($bound as $key => $value) {
                if (isset($boundBean->field_defs[$key])){
                    $boundBean->$key = $value;
                }
            }
            $boundBean->save();

            $definition['pro_id'] = $keysArray['pro_id'];
            if ($element['act_task_type'] == 'SCRIPTTASK' &&
                $element['act_script_type'] == 'BUSINESS_RULE') {
                //TODO implement automatic import for business rules
                $definition['act_fields'] = '';
            }
            foreach ($definition as $key => $value) {
                if (isset($definitionBean->field_defs[$key])){
                    $definitionBean->$key = $value;
                }
            }
            $definitionBean->id = $currentID;
            $definitionBean->new_with_id = true;
            $definitionBean->save();
        }
    }

    /**
     * Save the project events data.
     * @param array $eventsData
     * @param array $keysArray
     */
    public function saveProjectEventsData($eventsData, $keysArray)
    {
        foreach ($eventsData as $element) {
            $eventBean = BeanFactory::getBean('pmse_BpmnEvent');
            $boundBean = BeanFactory::getBean('pmse_BpmnBound');
            $definitionBean = BeanFactory::getBean('pmse_BpmEventDefinition');

            list($element, $definition, $bound) = $this->getElementDefinition($element);

            $element['prj_id'] = $keysArray['prj_id'];
            $element['pro_id'] = $keysArray['pro_id'];
            $previousId = $element['id'];
            unset($element['id']);

            $previousUid = $element['evn_uid'];
            $element['evn_uid'] = PMSEEngineUtils::generateUniqueID();
            $this->changedUidElements[$previousUid] = array('new_uid' => $element['evn_uid'] );
            foreach ($element as $key => $value) {
                if (isset($eventBean->field_defs[$key])){
                    $eventBean->$key = $value;
                }
            }
            $currentID = $eventBean->save();

            if (!isset($this->savedElements['bpmnEvent'])) {
                $this->savedElements['bpmnEvent'] = array();
                $this->savedElements['bpmnEvent'][$previousId] = $currentID;
            } else {
                $this->savedElements['bpmnEvent'][$previousId] = $currentID;
            }

            $bound['bou_uid'] = PMSEEngineUtils::generateUniqueID();
            $bound['prj_id'] = $keysArray['prj_id'];
            $bound['dia_id'] = $keysArray['dia_id'];
            $bound['element_id'] = $keysArray['dia_id'];
            $bound['bou_element'] = $currentID;
            foreach ($bound as $key => $value) {
                if (isset($boundBean->field_defs[$key])){
                    $boundBean->$key = $value;
                }
            }
            $boundBean->save();

            $definition['pro_id'] = $keysArray['pro_id'];
            if ($element['evn_type'] == 'INTERMEDIATE' &&
                $element['evn_marker'] == 'MESSAGE' &&
                $element['evn_behavior'] == 'THROW' ) {
                //TODO implement automatic import for emails templates
                $definition['evn_criteria'] = '';
            }
            foreach ($definition as $key => $value) {
                if (isset($definitionBean->field_defs[$key])){
                    $definitionBean->$key = $value;
                }
            }
            $definitionBean->id = $currentID;
            $definitionBean->new_with_id = true;
            $definitionBean->save();

            if (!empty($currentID)) {
                $definitionBean->evn_id = $currentID;
                $this->dependenciesWrapper->processRelatedDependencies($eventBean->toArray() + $definitionBean->toArray());
            }
        }
    }

    /**
     * Save the project gateways data.
     * @param array $gatewaysData
     * @param array $keysArray
     */
    public function saveProjectGatewaysData($gatewaysData, $keysArray)
    {
        foreach ($gatewaysData as $element) {
            $gatewayBean = BeanFactory::getBean('pmse_BpmnGateway');
            $boundBean = BeanFactory::getBean('pmse_BpmnBound');
            $definitionBean = BeanFactory::getBean('pmse_BpmGatewayDefinition');

            list($element, $definition, $bound) = $this->getElementDefinition($element);

            $element['prj_id'] = $keysArray['prj_id'];
            $element['pro_id'] = $keysArray['pro_id'];
            $previousId = $element['id'];
            unset($element['id']);

            $previousUid = $element['gat_uid'];
            $element['gat_uid'] = PMSEEngineUtils::generateUniqueID();
            $this->changedUidElements[$previousUid] = array('new_uid' => $element['gat_uid'] );
            foreach ($element as $key => $value) {
                if (isset($gatewayBean->field_defs[$key])){
                    $gatewayBean->$key = $value;
                }
            }
            $currentID = $gatewayBean->save();

            if (!isset($this->savedElements['bpmnGateway'])) {
                $this->savedElements['bpmnGateway'] = array();
                $this->savedElements['bpmnGateway'][$previousId] = $currentID;
            } else {
                $this->savedElements['bpmnGateway'][$previousId] = $currentID;
            }

            $bound['bou_uid'] = PMSEEngineUtils::generateUniqueID();
            $bound['prj_id'] = $keysArray['prj_id'];
            $bound['dia_id'] = $keysArray['dia_id'];
            $bound['element_id'] = $keysArray['dia_id'];
            $bound['bou_element'] = $currentID;
            foreach ($bound as $key => $value) {
                if (isset($boundBean->field_defs[$key])){
                    $boundBean->$key = $value;
                }
            }
            $boundBean->save();

            $definition['pro_id'] = $keysArray['pro_id'];
            foreach ($definition as $key => $value) {
                if (isset($definitionBean->field_defs[$key])){
                    $definitionBean->$key = $value;
                }
            }
            $definitionBean->id = $currentID;
            $definitionBean->new_with_id = true;
            $definitionBean->save();

            if (!empty($gatewayBean->gat_default_flow)) {
                $this->defaultFlowList[$element['gat_default_flow']] = array(
                    'bean' => 'BpmnGateway',
                    'id' => $currentID,
                    'default_flow_field' => 'gat_default_flow',
                    'default_flow_value' => $element['gat_default_flow'],
                );
            }
        }
    }

    public function saveProjectArtifactsData($gatewaysData, $keysArray)
    {
        foreach ($gatewaysData as $element) {
            $artifactBean = BeanFactory::getBean('pmse_BpmnArtifact');
            $boundBean = BeanFactory::getBean('pmse_BpmnBound');

            list($element, $definition, $bound) = $this->getElementDefinition($element);

            $element['prj_id'] = $keysArray['prj_id'];
            $element['pro_id'] = $keysArray['pro_id'];
            $previousId = $element['id'];
            unset($element['id']);

            $previousUid = $element['art_uid'];
            $element['art_uid'] = PMSEEngineUtils::generateUniqueID();
            $this->changedUidElements[$previousUid] = array('new_uid' => $element['art_uid'] );
            foreach ($element as $key => $value) {
                if (isset($artifactBean->field_defs[$key])){
                    $artifactBean->$key = $value;
                }
            }
            $currentID = $artifactBean->save();

            if (!isset($this->savedElements['bpmnArtifacts'])) {
                $this->savedElements['bpmnArtifacts'] = array();
                $this->savedElements['bpmnArtifacts'][$previousId] = $currentID;
            } else {
                $this->savedElements['bpmnArtifacts'][$previousId] = $currentID;
            }

            $bound['bou_uid'] = PMSEEngineUtils::generateUniqueID();
            $bound['prj_id'] = $keysArray['prj_id'];
            $bound['dia_id'] = $keysArray['dia_id'];
            $bound['element_id'] = $keysArray['dia_id'];
            $bound['bou_element'] = $currentID;
            foreach ($bound as $key => $value) {
                if (isset($boundBean->field_defs[$key])){
                    $boundBean->$key = $value;
                }
            }
            $boundBean->save();
        }
    }

    /**
     * Save the project flows data.
     * @param array $flowsData
     * @param array $keysArray
     */
    public function saveProjectFlowsData($flowsData, $keysArray)
    {
        foreach ($flowsData as $element) {
            $flowBean = BeanFactory::getBean('pmse_BpmnFlow');
            $element['prj_id'] = $keysArray['prj_id'];
            $element['pro_id'] = $keysArray['pro_id'];
            $element['dia_id'] = $keysArray['dia_id'];
            $previousId = $element['id'];
            unset($element['id']);
            foreach ($element as $key => $value) {
                if (isset($flowBean->field_defs[$key])){
                    switch ($key) {
                        case 'flo_element_origin':
                            if (!empty($value)) {
                                $flowBean->$key = $this->savedElements[$element['flo_element_origin_type']][$value];
                            }
                            break;
                        case 'flo_element_dest':
                            if (!empty($value)) {
                                $flowBean->$key = $this->savedElements[$element['flo_element_dest_type']][$value];
                            }
                            break;
                        default:
                            $flowBean->$key = $value;
                    }
                }
            }

            $previousUid = $flowBean->flo_uid;
            $flowBean->flo_uid = PMSEEngineUtils::generateUniqueID();
            $currentID = $flowBean->save();
            if (!isset($this->savedElements['bpmnFlows'])) {
                $this->savedElements['bpmnFlows'] = array();
                $this->savedElements['bpmnFlows'][$previousId] = $currentID;
            } else {
                $this->savedElements['bpmnFlows'][$previousId] = $currentID;
            }
        }
    }

    /**
     * Save the project dyna forms data.
     * @param array $flowsData
     * @param array $keysArray
     */
    public function saveProjectDynaFormsData($dynaFormsData, $keysArray)
    {
        foreach ($dynaFormsData as $element) {
            $dynaFormsBean = BeanFactory::getBean('pmse_BpmDynaForm');
            $element['prj_id'] = $keysArray['prj_id'];
            $element['pro_id'] = $keysArray['pro_id'];
            $element['dia_id'] = $keysArray['dia_id'];
            $previousId = $element['id'];
            unset($element['id']);
            foreach ($element as $key => $value) {
                if (isset($dynaFormsBean->field_defs[$key])){
                    $dynaFormsBean->$key = $value;
                }
            }

            $previousUid = $dynaFormsBean->flo_uid;
            $dynaFormsBean->flo_uid = PMSEEngineUtils::generateUniqueID();
            $currentID = $dynaFormsBean->save();
            if (!isset($this->savedElements['bpmnArtifacts'])) {
                $this->savedElements['bpmnArtifacts'] = array();
                $this->savedElements['bpmnArtifacts'][$previousId] = $currentID;
            } else {
                $this->savedElements['bpmnArtifacts'][$previousId] = $currentID;
            }
        }
    }

    /**
     * Save the project elements data.
     * @param $elementsData
     * @param $keysArray
     * @param $beanType
     * @param bool $generateBound
     * @param bool $generateWithId
     * @param string $field_uid
     * @deprecated
     */
    public function saveProjectElementsData(
        $elementsData,
        $keysArray,
        $beanType,
        $generateBound = false,
        $generateWithId = false,
        $field_uid = ''
    ) {
         foreach ($elementsData as $element) {
            $boundBean = BeanFactory::getBean('pmse_BpmnBound');
            $elementBean = BeanFactory::getBean($beanType);

            $element['prj_id'] = $keysArray['prj_id'];
            $element['pro_id'] = $keysArray['pro_id'];
            $element['dia_id'] = $keysArray['dia_id'];
            foreach ($element as $key => $value) {
                if (strpos($key, '_name') !== false) {
                    $elementBean->name = $value;
                } else {
                    $elementBean->$key = $value;
                }
                if ($generateBound) {
                    $boundBean->$key = $value;
                }
                if (strpos($key, '_uid') !== false) {
                    $uid = $key;
                }
            }
            $savedId = $elementBean->save();

            if (!empty($savedId)) {
                $this->savedElements[$beanType][$elementBean->$uid] = $savedId;
            }
            if (!empty($field_uid)) {
                $elementBean->$field_uid = PMSEEngineUtils::generateUniqueID();
            }
            if ($generateBound) {
                switch($beanType) {
                    case 'pmse_BpmnArtifact':
                        $element_type = 'bpmnArtifact';
                        break;
                    default:
                        $element_type = '';
                }
                $boundBean->bou_uid = PMSEEngineUtils::generateUniqueID();
                $boundBean->dia_id = $keysArray['dia_id'];
                $boundBean->element_id = $keysArray['dia_id'];
                $boundBean->bou_element_type = $element_type;
                $boundBean->bou_element = $savedId;
                $boundBean->save();
            }
        }
    }

    /**
     * @codeCoverageIgnore
     * Displays the import result response as a JSON string
     */
    public function displayResponse()
    {
        echo json_encode($this->importResult);
    }

    /**
     * Additional processing to the default flows
     */
    public function processDefaultFlows()
    {
        foreach ($this->defaultFlowList as $defaultFlow) {
            $elementBean = BeanFactory::getBean('pmse_' . $defaultFlow['bean'], $defaultFlow['id']);
            if (!empty($elementBean)) {
                $flowBean = BeanFactory::getBean('pmse_BpmnFlow', $this->savedElements['bpmnFlows'][$defaultFlow['default_flow_value']]);
                if (!empty($flowBean)){
                    $elementBean->$defaultFlow['default_flow_field'] = $flowBean->id;
                    $elementBean->save();
                }
            }
        }
    }

    /**
     * Change name of modules to new version
     * @codeCoverageIgnore
     * @param $message
     * @return mixed
     * @deprecated
     */
    private function changeEventMessage($message)
    {
        $arr = array(
            'LEAD' => 'Leads',
            'OPPORTUNITIES' => 'Opportunities',
            'DOCUMENTS' => 'Documents'
        );
        if (key_exists($message, $arr)) {
            return $arr[$message];
        } else {
            return $message;
        }
    }

    private function getElementDefinition($element)
    {
        $definition = array();
        $bound = array();
        if (!empty($element)) {
            foreach ($element as $key => $value) {
                $pos = strpos($key, 'bound_');
                if ($pos !== false) {
                    $bound[substr($key, strlen('bound_'))] = $value;
                    unset($element[$key]);
                }
                $pos = strpos($key, 'def_');
                if ($pos !== false) {
                    $definition[substr($key, strlen('def_'))] = $value;
                    unset($element[$key]);
                }
            }
        } else {
            $element = array();
        }
        return array($element, $definition, $bound);
    }

}
