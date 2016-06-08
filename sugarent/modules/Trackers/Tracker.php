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


if(!class_exists('Tracker')){

require_once 'data/SugarBean.php';

class Tracker extends SugarBean
{
    var $module_dir = 'Trackers';
    var $table_name = 'tracker';
    var $object_name = 'Tracker';
    var $acltype = 'Tracker';
    var $acl_category = 'Trackers';
    var $disable_custom_fields = true;
    var $disable_row_level_security = true;
    var $column_fields = Array(
        "id",
        "monitor_id",
        "user_id",
        "module_name",
        "item_id",
        "item_summary",
        "date_modified",
        "action",
        "session_id",
        "visible"
    );

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @deprecated
     */
    public function Tracker()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * Return the most recently viewed items for this user.
     * The number of items to return is specified in sugar_config['history_max_viewed']
     * @param uid user_id
     * @param mixed module_name Optional - return only items from this module, a string of the module or array of modules
     * @return array list
     */
    function get_recently_viewed($user_id, $modules = '')
    {
        $path = 'modules/Trackers/BreadCrumbStack.php';
        if(defined('TEMPLATE_URL'))$path = SugarTemplateUtilities::getFilePath($path);
        require_once($path);
        if(empty($_SESSION['breadCrumbs'])) {
            $breadCrumb = new BreadCrumbStack($user_id, $modules);
            $_SESSION['breadCrumbs'] = $breadCrumb;
            $GLOBALS['log']->info(string_format($GLOBALS['app_strings']['LBL_BREADCRUMBSTACK_CREATED'], array($user_id)));
        } else {
			$breadCrumb = $_SESSION['breadCrumbs'];
	        $module_query = '';
	        if(!empty($modules)) {
	           $history_max_viewed = 10;
	           $module_query = is_array($modules) ? ' AND module_name IN (\'' . implode("','" , $modules) . '\')' :  ' AND module_name = \'' . $modules . '\'';
	        } else {
	           $history_max_viewed = (!empty($GLOBALS['sugar_config']['history_max_viewed']))? $GLOBALS['sugar_config']['history_max_viewed'] : 50;
	        }

	        $query = 'SELECT item_id, item_summary, module_name, id FROM ' . $this->table_name . ' WHERE id = (SELECT MAX(id) as id FROM ' . $this->table_name . ' WHERE user_id = \'' . $user_id . '\' AND deleted = 0 AND visible = 1' . $module_query . ')';
	        $result = $this->db->limitQuery($query,0,$history_max_viewed,true,$query);
	        while(($row = $this->db->fetchByAssoc($result))) {
	               $breadCrumb->push($row);
	        }
        }

        $list = $breadCrumb->getBreadCrumbList($modules);
        $GLOBALS['log']->info("Tracker: retrieving ".count($list)." items");
        return $list;
    }

    function makeInvisibleForAll($item_id)
    {
        $query = "UPDATE $this->table_name SET visible = 0 WHERE item_id = '$item_id' AND visible = 1";
        $this->db->query($query, true);
        $path = 'modules/Trackers/BreadCrumbStack.php';
        if(defined('TEMPLATE_URL'))$path = SugarTemplateUtilities::getFilePath($path);
        require_once($path);
        if(!empty($_SESSION['breadCrumbs'])){
            $breadCrumbs = $_SESSION['breadCrumbs'];
            $breadCrumbs->popItem($item_id);
        }
    }

    static function logPage()
    {
        $time_on_last_page = 0;
        //no need to calculate it if it is a redirection page
        if(empty($GLOBALS['app']->headerDisplayed ))return;
        if(!empty($_SESSION['lpage']))$time_on_last_page = time() - $_SESSION['lpage'];
        $_SESSION['lpage']=time();
    }

    /**
     * create_tables
     * Override this method to insert ACLActions for the tracker beans
     *
     */
    function create_tables(){
        $path = 'modules/Trackers/config.php';
        if(defined('TEMPLATE_URL'))$path = SugarTemplateUtilities::getFilePath($path);
        require($path);
        foreach($tracker_config as $key=>$configEntry) {
        if(isset($configEntry['bean']) && $configEntry['bean'] != 'Tracker') {
            $bean = BeanFactory::newBeanByName($configEntry['bean']);
            if($bean->bean_implements('ACL')) {
                  ACLAction::addActions($bean->getACLCategory(), $configEntry['bean']);
               }
        }
        }
        parent::create_tables();
    }

    /**
     * bean_implements
     * Override method to support ACL roles
     */
    function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
}
}
