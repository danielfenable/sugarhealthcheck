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

require_once 'modules/pmse_Inbox/engine/PMSEExporter.php';

/**
 * Exports a record of table BusinessRules
 *
 * This class extends the class ADAMExporter to export a record
 * from the table BPMRuleSet to transport it from one instance to another.
 * @package PMSE
 * @codeCoverageIgnore
 */
class PMSEBusinessRuleExporter extends PMSEExporter
{
    protected $bean;
    protected $id;
    protected $uid;
    protected $name;
    protected $extension;

    public function __construct()
    {
        $this->bean = BeanFactory::getBean('pmse_Business_Rules'); //new BpmRuleSet();
        $this->uid = 'id';
        $this->name = 'name';
        $this->extension = 'pbr';
    }

}
