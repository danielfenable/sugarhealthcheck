<?php
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
require_once 'modules/pmse_Inbox/engine/PMSELogger.php';
require_once 'modules/pmse_Inbox/engine/PMSEEngineUtils.php';

class PMSERelatedModule {

    private $logger;

    private $relatedRecordApi;

    public function __construct()
    {
        $this->logger = PMSELogger::getInstance();
        $this->relatedRecordApi = new RelateRecordApi();
    }

    protected function getBean($module)
    {
        $bean = BeanFactory::getBean($module);
        if (empty($bean))
            throw new Exception("No bean for module $module");
        return $bean;
    }

    protected function newBean($module)
    {
        $bean = BeanFactory::newBean($module);
        if (empty($bean))
            throw new Exception("No bean for module $module");
        return $bean;
    }

    public function getRelatedModule($moduleBean, $linkField)
    {
        $fieldName = $linkField;
        if (empty($moduleBean->field_defs[$fieldName]))
            throw new Exception("Unable to find field {$fieldName}");

        if(!$moduleBean->load_relationship($fieldName))
            throw new Exception("Unable to load relationship $fieldName");

        $relatedBean = $moduleBean->$fieldName->getBeans(array('limit' => 1));

        if (!empty($relatedBean)) {
            return current($relatedBean);
        } else {
            return null;
        }
    }

    public function getRelatedModuleName($moduleBeanName, $linkField)
    {
        $moduleBean = $this->newBean($moduleBeanName);

        if (!$moduleBean->load_relationship($linkField))
            throw new Exception("Unable to load relationship $linkField");

        if (!empty($moduleBean->field_defs[$linkField])) {
            $moduleName = $moduleBean->$linkField->getRelatedModuleName();
        } else {
            $moduleName = $moduleBeanName;
        }
        return $moduleName;
    }

    public function getRelatedBeans($filter, $relationship = 'all')
    {
        global $beanList;
        if (isset($beanList[$filter])) {
            $newModuleFilter = $filter;
        } else {
            $newModuleFilter = array_search($filter, $beanList);
        }
        $output_11 = array(); // Logic container for one-to-one and many-to-one
        $output_1m = array(); // Logic container for one-to-many and many-to-many(not implemented yet)
        $output = array();
        $moduleBean = $this->getBean($newModuleFilter);

        foreach($moduleBean->get_linked_fields() as $link => $def) {
            if (!empty($def['type']) && $def['type'] == 'link' && $moduleBean->load_relationship($link)) {
                $relatedModule = $moduleBean->$link->getRelatedModuleName();
                if (!in_array($relatedModule, PMSEEngineUtils::getSupportedModules('related'))) {
                    continue;
                }
                if (in_array($link, PMSEEngineUtils::$relatedBlacklistedLinks)) {
                    continue;
                }
                $relType = $moduleBean->$link->getType(); //returns 'one' or 'many' for the cardinality of the link
                $label = empty($def['vname']) ? $link : translate($def['vname'], $filter);
                $moduleLabel = translate("LBL_MODULE_NAME", $relatedModule);
                if ($moduleLabel == "LBL_MODULE_NAME") {
                    $moduleLabel = translate($relatedModule);
                }
                
                // Parentheses value
                $pval = "$moduleLabel (" . trim($label, ':') . ": $link)";
                $ret = array(
                    'value' => $link,
                    'text' => $pval,
                    'module' => $moduleLabel,
                    'relationship' => $def['relationship'],
                );
                if ($relType == 'one') {
                    $output_11[] = $ret;
                } else {
                    $output_1m[] = $ret;
                }
            }
        }

        switch ($relationship) {
            case 'one-to-one':
            case 'one':
                $output = $output_11;
                break;
            case 'one-to-many':
            case 'many':
                $output = $output_1m;
                break;
            case 'all':
            default:
                $output = array_merge($output_11, $output_1m);
                break;
        }

        // Needed to multisort on the label
        foreach ($output as $k => $o) {
            $labels[$k] = $o['text'];
        }

        // Sort on the label
        array_multisort($labels, SORT_ASC, $output);
        $moduleName = (translate("LBL_MODULE_NAME", $filter) == "LBL_MODULE_NAME") ? $filter : translate("LBL_MODULE_NAME", $filter);
        $filterArray = array('value' => $filter, 'text' => '<' . $moduleName . '>', 'module' => $filter, 'relationship' => $filter);
        array_unshift($output, $filterArray);

        $res['search'] = $filter;
        $res['success'] = true;
        $res['result'] = $output;

        return $res;
    }

    public function getFieldValue($newBean, $field)
    {
        global $timedate;
        $value= '';
        $def = $newBean->field_defs[$field];
        if ($def['type'] == 'datetime' || $def['type'] == 'datetimecombo'){
            $theDate = (!empty($newBean->fetched_row[$field])) ? $newBean->fetched_row[$field] : $newBean->$field;
            $value = $timedate->fromDb($theDate);
        } else if ($def['type'] == 'bool') {
            $value = ($newBean->$field == 1) ? true : false;
        } else {
            $value = $newBean->$field;
        }
        return $value;
    }

    public function addRelatedRecord($moduleBean, $linkField, $fields)
    {
        $fieldName = $linkField;
        if (empty($moduleBean->field_defs[$fieldName]))
            throw new Exception("Unable to find field {$fieldName}");

        if(!$moduleBean->load_relationship($fieldName))
            throw new Exception("Unable to load relationship $fieldName");

        $rModule = $moduleBean->$fieldName->getRelatedModuleName();

        $relatedModuleBean = $this->newBean($rModule);

        foreach ($fields as $key => $value) {
            if (isset($relatedModuleBean->field_defs[$key])) {
                $relatedModuleBean->$key = $value;
            }
        }

        if (isset($relatedModuleBean->field_defs['parent_type'], $relatedModuleBean->field_defs['parent_id'])) {
            $relatedModuleBean->parent_type = $moduleBean->module_dir;
            $relatedModuleBean->parent_id = $moduleBean->id;
        }

        $relatedModuleBean->save();

        if (!$relatedModuleBean->in_save) {
            $rel_id = $relatedModuleBean->id;
            $moduleBean->$fieldName->add($rel_id);
            return $relatedModuleBean;
        } else {
            return null;
        }
    }
}
