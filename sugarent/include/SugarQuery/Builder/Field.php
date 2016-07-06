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

require_once 'include/SugarQuery/Builder/Field/Condition.php';
require_once 'include/SugarQuery/Builder/Field/Groupby.php';
require_once 'include/SugarQuery/Builder/Field/Having.php';
require_once 'include/SugarQuery/Builder/Field/Orderby.php';
require_once 'include/SugarQuery/Builder/Field/Raw.php';
require_once 'include/SugarQuery/Builder/Field/Select.php';

/**
 * SugarQuery_Builder_Field
 * @api
 */

class SugarQuery_Builder_Field
{
    /**
     * @var string Field
     */
    public $field;

    /**
     * @var string table/table alias
     */
    public $table;
    /**
     * @var bool|string field alias (must be db compatible)
     */
    public $alias = false;

    /**
     * @var bool|string field alias when returning data as an array (abstracting away database alias length)
     */
    public $original_alias = false;
    /**
     * @var string the fields bean table
     */
    public $bean_table;
    /**
     * @var bool custom field
     */
    public $custom = false;
    /**
     * @var string custom bean table
     */
    public $custom_bean_table = '';
    /**
     * @var array the field defs
     */
    public $def = array();

    /**
     * @var bool future use, is this field FTS enabled
     */
    public $ftsEnabled = false;

    /**
     * @var string module name
     */
    public $moduleName = false;

    /**
     * @var bool is this field a non-db field
     */
    public $nonDb = false;

    /**
     * Makin' the magic in the sugar field
     * @param $field
     * @param SugarQuery $query
     */
    public function __construct($field, SugarQuery $query)
    {
        if (is_array($field)) {
            $this->field = $field[0];
            $this->alias = $field[1];
            if (!empty($field[2])) {
                $this->original_alias = $field[2];
            }
        } else {
            $this->field = $field;
        }

        if ($query->getFromBean()) {
            $this->setupField($query);
            $this->shouldMarkNonDb();
            }
        }

    /**
     * Setup the field parts
     * @param SugarQuery $query
     */
    public function setupField($query)
    {
        $this->query = $query;

        $this->def = $this->getFieldDef();

        // if its a linking table let it slide
        if (!empty($this->query->join[$this->table]->options['linkingTable'])){
            $this->nonDb = 0;
        } elseif (empty($this->def) && $this->field != '*') {
            $this->nonDb = 1;
            return;
        }

        $this->jta = $this->getJoin();
        if ((!empty($this->def) && $this->field != 'id_c') || $this->field == '*') {
            $this->expandField();
        }
    }

    /**
     * Get the field def from the correct bean
     * @return array
     */
    public function getFieldDef()
    {
        $bean = $this->query->getFromBean();
        $this->table = $bean->getTableName();

        $def = array();

        if (strstr($this->field, '.')) {
            list($this->table, $this->field) = explode('.', $this->field);
        }

        if ($bean &&
            ($bean->getTableName() == $this->table || $this->table == $this->query->getFromAlias()) &&
            !empty($bean->field_defs[$this->field])
        ) {
            $this->table = $this->query->getFromAlias();
            $def = $bean->field_defs[$this->field];
            $this->moduleName = $bean->module_name;
        }
        else if ($bean && ($bean->getTableName().'_cstm') == $this->table && !empty($bean->field_defs[$this->field])) {
            $def = $bean->field_defs[$this->field];
            $this->moduleName = $bean->module_name;
        } else {
            $bean = $this->query->getTableBean($this->table);

            if (!empty($bean->field_defs[$this->field])) {
                $this->moduleName = $bean->module_name;
                $def = $bean->field_defs[$this->field];
            }
        }

        $this->checkCustomField($bean);

        return $def;
    }

    /**
     * Check if the current field needs to join the custom table
     * @param SugarBean|null $bean
     *
     */
    public function checkCustomField($bean = null)
    {
        if (empty($bean)) {
            $bean = BeanFactory::getBean($this->moduleName);
        }
        if (!empty($bean)) {
            // Initialize def for now, in case $this->field isn't in field_defs
            $def = array();
            if (isset($bean->field_defs[$this->field])) {
                $def = $bean->field_defs[$this->field];
            }

            if ((isset($def['source']) && $def['source'] == 'custom_fields') || $this->field == 'id_c') {
                $this->custom = true;
                $this->custom_bean_table = $bean->get_custom_table_name();
                $this->bean_table = $bean->getTableName();
                if (substr($this->table, -5) != "_cstm") {
                    $this->standardTable = $this->table;
                    $this->table = $this->table . "_cstm";
                }
            }
        }
    }


    /**
     * Determine if the field needs a join to make the query succeed.  Return either the join table alias or false
     * @return bool| string
     * @throws SugarQueryException
     */
    public function getJoin()
    {
        $jta = false;
        if(!isset($this->def['source']) || $this->def['source'] == 'db') {
            return false;
        }
        if (isset($this->def['type']) && $this->def['type'] == 'relate'
            || (isset($this->def['source']) && $this->def['source'] == 'non-db'
                // For some reason the full_name field has 'link' => true
                && isset($this->def['link']) && $this->def['link'] !== true)
        ) {
            $params = array(
                'joinType' => 'LEFT',
            );
            if (!isset($this->def['link'])) {
                if (!isset($this->def['id_name']) || !isset($this->def['module'])) {
                    throw new SugarQueryException("No ID field Name or Module Name");
                }
                // we may need to put on our detective hat and see if we can
                // hunt down a relationship
                $farBean = BeanFactory::newBean($this->def['module']);

                // check if relate field refers some other field as id_name, otherwise we may get infinite recursion
                if ($this->def['id_name'] != $this->def['name']
                    // check and see if we need to do the join, it may already be done.
                    && (!$this->query->getJoinAlias($farBean->table_name)
                        || !$this->query->getJoinAlias($this->def['name']))) {
                    //Custom relate fields may have the id field on the custom table, need to check for that.
                    $idField = new SugarQuery_Builder_Field($this->def['id_name'], $this->query);
                    $idField->setupField($this->query);
                    $idField->checkCustomField();
                    if ($idField->custom) {
                        $this->custom = true;
                        $this->query->joinCustomTable($this->query->getFromBean());
                    }
                    //Now actually join the related table
                    $jta = $this->query->getJoinTableAlias($this->def['name']);
                    $join = $this->query->joinRaw(
                        " LEFT JOIN {$farBean->table_name} {$jta} ON {$idField->table}.{$this->def['id_name']} = {$jta}.id ",
                        array('alias' => $jta)
                    );
                    $join->bean = $farBean;
                }
            }
            if (!empty($this->def['link']) && !$this->query->getJoinAlias($this->def['link'])) {
                if ($this instanceof SugarQuery_Builder_Field_Select) {
                    $params['team_security'] = false;
                }
                if (isset($this->def['id_name']) && $this->def['id_name'] != $this->def['name']) {
                    //Custom relate fields may have the id field on the custom table, need to check for that.
                    $idField = new SugarQuery_Builder_Field_Select($this->def['id_name'], $this->query);
                    $idField->setupField($this->query);
                    $idField->checkCustomField();
                    if ($idField->custom) {
                        $this->custom = true;
                        $this->query->joinCustomTable($this->query->getFromBean());
                    }
                }
                $join = $this->query->join($this->def['link'], $params);
                $jta = $join->joinName();
            } elseif(!empty($this->def['link']) && $this->query->getJoinAlias($this->def['link'])) {
                $jta = $this->query->getJoinAlias($this->def['link']);
            }

            if (!empty($this->def['rname_link'])) {
                $jta = $this->query->getJoinAlias($this->def['link']);
                $this->query->rname_link = $jta;
                $this->table = !empty($this->query->join[$jta]->relationshipTableAlias) ? $this->query->join[$jta]->relationshipTableAlias : $jta;
            }
        }
        return $jta;
    }

    /**
     * Mark a field as non-db
     */
    public function markNonDb()
    {
        $this->nonDb = true;
    }

    /**
     * check if a field is non-db
     * @return bool
     */
    public function isNonDb()
    {
        return $this->nonDb;
    }

    /**
     * Determines if a field should be marked nonDb and calls markNondb if so
     */
    public function shouldMarkNonDb()
    {
        if ((isset($this->def['source']) && $this->def['source'] == 'non-db') && empty($this->def['rname_link'])) {
            $this->markNonDb();
        }
    }

    /**
     * Will clean the field by using the vardefs to determine if the field can be added to the query
     * it will also add additional fields to the query or modify the table, field variables of the object
     * so that on compilation the field is a correct db field.
     */
    public function expandField()
    {
    }

    /**
     * Gets a field name from a field, which could be already aliased to a table
     * 
     * @param string $field The field to get the name from
     * @return string
     */
    public function getTrueFieldNameFromField($field)
    {
        if (strpos($field, '.') === false) {
            return $field;
        }
        
        $parts = explode('.', $field);
        return $parts[1];
    }

}
