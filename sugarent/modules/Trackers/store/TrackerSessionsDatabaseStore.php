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
 * $Id$
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('modules/Trackers/store/Store.php');
class TrackerSessionsDatabaseStore implements Store {

    public function flush($monitor) {
        global $db;
       $metrics = $monitor->getMetrics();

       if(isset($monitor->client_ip) && strlen($monitor->client_ip) > 45)
       {
          $monitor->client_ip = substr($monitor->client_ip, 0, 45);
       }

       $columns = array();
       $values = array();
       foreach($metrics as $name=>$metric) {
       	  if(!empty($monitor->$name)) {
       	  	 $columns[] = $name;
       	  	 $values[] = $db->quoteType($metrics[$name]->_type, $monitor->$name);
       	  }
       } //foreach

       if(empty($values)) {
       	  return;
       }

       if($db->supports("auto_increment_sequence")) {
          $values[] = $db->getAutoIncrementSQL($monitor->table_name,'id');
          $columns[] = 'id';
       }

       if ( empty($monitor->round_trips) ) $monitor->round_trips = 0;
       if ( empty($monitor->active) ) $monitor->active = 1;
       if ( empty($monitor->seconds) ) $monitor->seconds = 0;

       if($monitor->round_trips == 1) {
		  $query = "INSERT INTO $monitor->table_name (" .implode("," , $columns). " ) VALUES ( ". implode("," , $values). ')';
		  $db->query($query);
       } else {
           if(!empty($monitor->date_end)) {
               $date_end = $db->quoteType('datetime', $monitor->date_end);
           } else {
               $date_end = 'NULL';
           }
       	  $query = "UPDATE $monitor->table_name SET date_end = $date_end , seconds = $monitor->seconds, active = $monitor->active, round_trips = $monitor->round_trips WHERE session_id = '{$monitor->session_id}'";
       	  $GLOBALS['db']->query($query);
       }
    }
}

?>
