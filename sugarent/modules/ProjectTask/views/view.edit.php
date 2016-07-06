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
/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Calls module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

class ProjectTaskViewEdit extends ViewEdit 
{
    /**
 	 * @see SugarView::display()
 	 */
 	public function display() 
 	{
		global $beanFiles;
		require_once($beanFiles['ProjectTask']);
		
		$focus = BeanFactory::getBean('ProjectTask');
		if (isset($_REQUEST['record'])){
			$focus->retrieve($_REQUEST['record']);
		}
		
		$this->ss->assign('resource', $focus->getResourceName());
		
		if (isset($_REQUEST['fromGrid']) && $_REQUEST['fromGrid'] == '1'){
			$this->ss->assign('project_id', $focus->project_id);
			$this->ss->assign('FROM_GRID', true);
		}
		else{
			$this->ss->assign('FROM_GRID', false);
		}
		
 		parent::display();
 	}
}
