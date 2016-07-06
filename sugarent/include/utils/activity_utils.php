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

function build_related_list_by_user_id($bean, $user_id,$where) {
    $bean_id_name = strtolower($bean->object_name).'_id';

    $select = "SELECT {$bean->table_name}.* from {$bean->rel_users_table},{$bean->table_name} ";

    $auto_where = ' WHERE ';
    if(!empty($where)) {
        $auto_where .= $where. ' AND ';
    }

    $auto_where .= " {$bean->rel_users_table}.{$bean_id_name}={$bean->table_name}.id AND {$bean->rel_users_table}.user_id='{$user_id}' AND {$bean->table_name}.deleted=0 AND {$bean->rel_users_table}.deleted=0";

    $bean->add_team_security_where_clause($select);

    $query = $select.$auto_where;

    $result = $bean->db->query($query, true);

    $list = array();

    while($row = $bean->db->fetchByAssoc($result)) {
        $newbean = clone $bean;
        $row = $newbean->convertRow($row);
        $newbean->fetched_row = $row;
        $newbean->fromArray($row);

        $newbean->processed_dates_times = array();
        $newbean->check_date_relationships_load();
        $newbean->fill_in_additional_detail_fields();

        $list[] = $newbean;
    }

    return $list;
}
?>
