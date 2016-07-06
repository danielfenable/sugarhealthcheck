<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

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

class Relationship extends SugarBean
{

    public $object_name = 'Relationship';
    public $module_dir = 'Relationships';
    public $new_schema = true;
    public $table_name = 'relationships';

	public $id;
	public $relationship_name;
	public $lhs_module;
	public $lhs_table;
	public $lhs_key;
	public $rhs_module;
	public $rhs_table;
	public $rhs_key;
	public $join_table;
	public $join_key_lhs;
	public $join_key_rhs;
	public $relationship_type;
	public $relationship_role_column;
	public $relationship_role_column_value;
	public $reverse;
	public $relationship_role_columns;

    public $_self_referencing;

    /**
     * Used to hold the listing of relationship names for use in existence checks.
     * This addresses an issue in which the cap for queries was being reached by
     * non admins given admin rights to make changes in studio.
     *
     * @var array
     */
    public static $relCacheInternal = array();

    /**
     * This is a deprecated method, please start using __construct() as this
     * method will be removed in a future version.
     *
     * @deprecated since 7.0.0. Use __construct() instead.
     */
    public function Relationship()
    {
        $GLOBALS['log']->deprecated('Calls to Relationship::Relationship() are deprecated.');
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    /*returns true if the relationship is self referencing. equality check is performed for both table and
     * key names.
     */
    function is_self_referencing()
    {
        if (empty($this->_self_referencing)) {
            $this->_self_referencing = false;

            //is it self referencing, both table and key name from lhs and rhs should  be equal.
            if ($this->lhs_table == $this->rhs_table && $this->lhs_key == $this->rhs_key) {
                $this->_self_referencing = true;
            }
        }
        return $this->_self_referencing;
    }

    /**
     * Returns true if a relationship with provided name exists
     *
     * @param string $relationship_name The name of the relationship to check
     * @param DBManager $db A DBManager object
     * @return boolean
     */
    function exists($relationship_name, $db)
    {
        // Cache the list of relationships internally to prevent an insane
        // number of queries from running
        if (empty(self::$relCacheInternal)) {
            $query = "SELECT relationship_name FROM relationships WHERE deleted=0";
            $result = $db->query($query, true, " Error searching relationships table..");
            while ($row = $db->fetchByAssoc($result)) {
                self::$relCacheInternal[$row['relationship_name']] = 1;
            }
        }

        return isset(self::$relCacheInternal[$relationship_name]);
    }

    function delete($relationship_name, &$db)
    {

        $query = "UPDATE relationships SET deleted=1 WHERE deleted=0 AND relationship_name = '" . $relationship_name . "'";
        $result = $db->query($query, true, " Error updating relationships table for " . $relationship_name);

        // Unset this from the exists array in case we need it in the same request
        unset(self::$relCacheInternal[$relationship_name]);

        // Rebuild the cache
        $this->rebuild_relationship_cache();
    }


    function get_other_module($relationship_name, $base_module, &$db)
    {
        //give it the relationship_name and base module
        //it will return the module name on the other side of the relationship

        $query = "SELECT relationship_name, rhs_module, lhs_module FROM relationships WHERE deleted=0 AND relationship_name = '" . $relationship_name . "'";
        $result = $db->query($query, true, " Error searching relationships table..");
        $row = $db->fetchByAssoc($result);
        if ($row != null) {

            if ($row['rhs_module'] == $base_module) {
                return $row['lhs_module'];
            }
            if ($row['lhs_module'] == $base_module) {
                return $row['rhs_module'];
            }
        }

        return false;


        //end function get_other_module
    }

	/**
	 * (non-PHPdoc)
	 * @see SugarBean::convertRow()
	 */
	public function convertRow($row)
	{
	    $row = parent::convertRow($row);
	    if (!empty($row['relationship_role_columns'])) {
	        $row['relationship_role_columns'] = json_decode($row['relationship_role_columns']);
	    }
	    return $row;
	}

    /**
	 * Return the module name on the other side of the relationship
	 * @param string $lhs_module Left side module
	 * @param string $rhs_module Right side module
	 * @param DBManager $db
	 * @return string|null
	 */
    public function retrieve_by_sides($lhs_module, $rhs_module, $db)
	{
        //give it the relationship_name and base module
        //it will return the module name on the other side of the relationship
		$query = "SELECT * FROM relationships WHERE deleted=0 AND lhs_module = '" . $lhs_module."' AND rhs_module = '" . $rhs_module . "'";
		$result = $db->query($query, true, " Error searching relationships table.");
		$row  =  $db->fetchByAssoc($result);
		if ($row != null) {
			return $this->convertRow($row);
		}

        return null;
    }

    public function retrieve_by_modules($lhs_module, $rhs_module, $db, $type = '')
    {
        //give it the relationship_name and base module
        //it will return the module name on the other side of the relationship

        $query = "	SELECT * FROM relationships
					WHERE deleted=0
					AND (
					(lhs_module = '" . $lhs_module . "' AND rhs_module = '" . $rhs_module . "')
					OR
					(lhs_module = '" . $rhs_module . "' AND rhs_module = '" . $lhs_module . "')
					)
					";
        if (!empty($type)) {
            $query .= " AND relationship_type='$type'";
        }
        $result = $db->query($query, true, " Error searching relationships table..");
        $row = $db->fetchByAssoc($result);
        if ($row != null) {

            return $row['relationship_name'];

        }

        return null;


        //end function retrieve_by_sides
    }


    function retrieve_by_name($relationship_name)
    {

        if (empty($GLOBALS['relationships'])) {
            $this->load_relationship_meta();
        }
        if (!array_key_exists($relationship_name, $GLOBALS['relationships'])) {
            $def = SugarRelationshipFactory::getInstance()->getRelationshipDef($relationship_name);
            if (!empty($def)) {
                $GLOBALS['relationships'][$relationship_name] = $def;
            }
        }

        if (array_key_exists($relationship_name, $GLOBALS['relationships'])) {

            foreach ($GLOBALS['relationships'][$relationship_name] as $field => $value) {
                $this->$field = $value;
            }
        } else {
            $GLOBALS['log']->fatal('Error fetching relationship from cache ' . $relationship_name);
            return false;
        }
    }

    function load_relationship_meta()
    {
        if (!$this->cache_exists()) {
            $this->build_relationship_cache();
        }
        include(Relationship::cache_file_dir() . '/' . Relationship::cache_file_name_only());
        $GLOBALS['relationships'] = $relationships;
    }

    function build_relationship_cache($modulesChanged = array())
    {
        if (!empty($modulesChanged)) {
            $relationships = $GLOBALS['relationships'];
            $module1 = $modulesChanged[0];
            $module2 = !empty($modulesChanged[1]) ? $modulesChanged[1] : $modulesChanged[0];
            $query = "SELECT * FROM relationships WHERE (rhs_module = '{$module1}' AND lhs_module = '{$module2}') OR (rhs_module = '{$module2}' AND lhs_module = '{$module2}')";
        } else {
            $query = "SELECT * FROM relationships WHERE deleted=0";
            $relationships = array();
        }

        $result = $this->db->query($query);

        while (($row = $this->db->fetchByAssoc($result)) != null) {
            $row = $this->convertRow($row);
            $relationships[$row['relationship_name']] = $row;
        }

        sugar_mkdir($this->cache_file_dir(), null, true);
        $out = "<?php \n \$relationships = " . var_export($relationships, true) . ";";
        sugar_file_put_contents_atomic(
            Relationship::cache_file_dir() . '/' . Relationship::cache_file_name_only(),
            $out
        );

        SugarRelationshipFactory::deleteCache();
    }


    public static function cache_file_dir()
    {
        return sugar_cached("modules/Relationships");
    }

    public static function cache_file_name_only()
    {
        return 'relationships.cache.php';
    }

    public static function delete_cache()
    {
        $filename = Relationship::cache_file_dir() . '/' . Relationship::cache_file_name_only();
        if (file_exists($filename)) {
            unlink($filename);
        }
        SugarRelationshipFactory::deleteCache();

        // Delete the internal cache as well
        self::$relCacheInternal = array();
    }


    function trace_relationship_module($base_module, $rel_module1_name, $rel_module2_name = "")
    {
        global $beanList;
        global $dictionary;

        $temp_module = BeanFactory::getBean($base_module);

        $rel_attribute1_name = $temp_module->field_defs[strtolower($rel_module1_name)]['relationship'];
        $rel_module1 = $this->get_other_module($rel_attribute1_name, $base_module, $temp_module->db);
        $rel_module1_bean = BeanFactory::getBean($rel_module1);

        if ($rel_module2_name != "") {
            if ($rel_module2_name == 'ProjectTask') {
                $rel_module2_name = strtolower($rel_module2_name);
            }
            $rel_attribute2_name = $rel_module1_bean->field_defs[strtolower($rel_module2_name)]['relationship'];
            $rel_module2 = $this->get_other_module(
                $rel_attribute2_name,
                $rel_module1_bean->module_dir,
                $rel_module1_bean->db
            );
            $rel_module2_bean = BeanFactory::getBean($rel_module2);
            return $rel_module2_bean;

        } else {
            //no rel_module2, so return rel_module2 bean
            return $rel_module1_bean;
        }

	//end function trace_relationship_module
	}

    public function rebuild_relationship_cache($modules = array())
    {
        if (empty($modules) || !$this->cache_exists()) {
            static::delete_cache();
            $this->load_relationship_meta();
        } else {
            if (empty($GLOBALS['relationships'])) {
                $this->load_relationship_meta();
            }
            $this->build_relationship_cache($modules);
        }
    }

    /**
     * @see SugarBean::bean_implements
     * @param string $interface
     * @return bool
     */
    function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }
        return false;
    }

    protected function cache_exists() {
        return file_exists(Relationship::cache_file_dir() . '/' . Relationship::cache_file_name_only());
    }
}
