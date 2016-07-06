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
require_once("include/SugarSearchEngine/Interface.php");
require_once('include/SearchForm/SugarSpot.php');

/**
 * This class is an adapter to the existing SugarSpot/UnifiedSearch capabilities and is the default
 * search engine if no other external engines have been configured.
 * @api
 */
class SugarSearchEngine implements SugarSearchEngineInterface{


    public function search($query, $offset = 0, $limit = 20, $options = array() )
    {
        $sugarSpot = new SugarSpot();
        return $sugarSpot->search($query, $offset, $limit, $options);

    }

    /**
     * No-op
     *
     * @param $bean
     */
    public function indexBean($bean, $batched = TRUE) {}

    /**
     * No-op
     *
     * @param $bean
     */
    public function delete(SugarBean $bean) {}


    /**
     * No-op
     */
    public function bulkInsert(array $docs) {}

    /**
     * No-op
     */
    public function createIndexDocument($bean, $searchFields = null) {}

    /**
     * No-op
     */
    public function getServerStatus() {}

    /**
     * No-op
     */
    public function createIndex($recreate = false){}

    /**
     *
     * Given a field type, determine whether this type can be enabled for full text search.
     *
     * @abstract
     * @param string $type Sugar field type
     * @return boolean whether the field type can be enabled for full text search
     */
    public function isTypeFtsEnabled($type)
    {
        return false;
    }

}