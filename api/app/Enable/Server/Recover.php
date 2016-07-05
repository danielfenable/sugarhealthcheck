<?php

namespace App\Enable\Server;

use App\Http\Requests;

class Recover
{
    function __construct($id, $module)
    {
        // Front-end likes capital letter first,
        // DB likes lower.
        $this->lower_module = $module;
        $this->upper_module = ucfirst($module);
        $this->id = $id;
    }

    public function checkAndRecoverBase()
    {
        // Turn off errors else sugar will stress out.

        error_reporting(E_WARNING && E_STRICT && E_ERROR);

        // Search for base record to recover.

        $sql = " SELECT id, deleted FROM $this->lower_module WHERE id = '$this->id' LIMIT 1 ";
        $record = array();
        $reporting = array();

        $db = \DBManagerFactory::getInstance();

        if (!$result = $GLOBALS['db']->query($sql)) {
            $reporting['Error']['Query Failed'] = "Query Failed to execute, query was:
                                          SELECT id ,deleted FROM $this->lower_module WHERE id = '$this->id' LIMIT 1 ";
            return $reporting;
        }

        while ($row = $GLOBALS['db']->fetchByAssoc($result) ) {
            $record['id'] = $row['id'];
            $record['deleted'] = $row['deleted'];
        }

        // If not deleted, do a simple recover.

        if ($record['deleted'] = 1) {

            $sql = "UPDATE $this->lower_module SET deleted = 0 WHERE id = '$this->id'";

            if (!$result = $GLOBALS['db']->query($sql)) {
                   $reporting['Error']['Query Failed'] = "Query Failed to execute, query was:
                                                 UPDATE $this->lower_module SET deleted = 0 WHERE id = '$this->id'";
                   return $reporting;
            }

            // Double check it has actually been deleted so we can move on.

            $sql = " SELECT id ,deleted FROM $this->lower_module WHERE id = '$this->id'";
            $result = $GLOBALS['db']->query($sql);
            $record = array();

            while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
                 $record['id'] = $row['id'];
                 $record['deleted'] = $row['deleted'];
            }

            // If it hasn't, evac.

            if ($record['deleted'] != 0) {
                $reporting['Error']['Query Failed'] = "Record was not able to be deleted
                                              when performing a check after update
                                              query.";
                return $reporting;
            }

            // Now it has been recovered and we have the
            // ID, we return the Bean upon success.

            $bean = \BeanFactory::retrieveBean($this->upper_module, $this->id);
            return $bean;


        } else {
               $reporting['error']["error_deleted_status"] = "Record does not have
                                                              a value of deleted = 1, cancelled recovery";
               return $reporting;
        }


    }
    public function undeleteRelates($bean, $module)
    {

        $reporting = array();
        $id = $bean->id;
        $module_singular = strtolower($bean->object_name);
        $table = $bean->table_name;
        foreach ($bean->get_linked_fields() as $key => $value) {

            $rel = $bean->field_defs[$key]['relationship'];
            $relationships[] = array_merge(
                $GLOBALS['dictionary'][$rel]['relationships'],
                $GLOBALS['dictionary'][$bean->object_name]['relationships']
            );
        }

        foreach ($relationships as $relate) {
            foreach ($relate as $key => $value) {
                if($value["relationship_role_column"] ) continue;
                $db = \DBManagerFactory::getInstance();
                $join_table = $value['join_table'];
                $select = "SELECT " . $module_singular ."_id , id FROM $join_table WHERE deleted = 1 AND "
                                                             .  $module_singular ."_id = '$id' ";
                $result = $GLOBALS['db']->query($select);
                if ($result == false) {
                          $select_2 = "SELECT " . $value['join_key_lhs'] . ", id FROM $join_table
                                                                               WHERE deleted = 1 AND ".
                                                                               $value['join_key_lhs'] ." = '$id' ";
                          $result = $GLOBALS['db']->query($select_2);

                    if ($result->num_rows < 1) {
                             $select_3 = "SELECT " . $value['join_key_rhs'] . ", id FROM $join_table WHERE deleted = 1 AND "
                                                                            .  $value['join_key_rhs'] ." = '$id' ";
                             $result = $GLOBALS['db']->query($select_3);

                        if ($result->num_rows < 1) {
                                 $reporting["Error"]["Query Failed"][$join_table]
                                     = "<br> No Records found for record relationship ".
                                       "under table: $join_table<br><br>";
                              continue;

                        } else {
                              $correct_column = $value['join_key_rhs'];
                        }
                    } else {
                              $correct_column = $value['join_key_lhs'];
                    }
                } else {
                      $correct_column = $module_singular ."_id";
                }
                if ($result->num_rows < 1) {

                    $reporting["Error"]["Query Failed"][$join_table] = "<br> No Records found for record relationship ".
                                                                                  "under table: $join_table<br><br>";
                    continue;
                }

                while ($row = $GLOBALS['db']->fetchByAssoc($result)) {

                    $reporting['recordsLog'][$join_table] = $row . '<br>';
                }

                $update = " UPDATE $join_table SET deleted = 0 WHERE " . $correct_column. " = '$id' ";
                if (!$result = $GLOBALS['db']->query($update)) {
                      $reporting["Error"]["Query Failed"][][$join_table] = "<br>Update query failed: $update<br><br>";
                      continue;
                }
            }
        }
        return $reporting;
    }
}


