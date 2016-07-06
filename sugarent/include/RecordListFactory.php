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

/**
 * Factory to create Record Lists.
 */
class RecordListFactory
{
    /**
     * Retrieves the data for a record list
     * @param string $id
     * @param $user
     *
     * @return array id, module, records
     */
    public static function getRecordList($id, $user = null)
    {
        $data = null;
        $db = DBManagerFactory::getInstance();

        if ($user == null) {
            $user = $GLOBALS['current_user'];
        }

        $ret = $db->query("SELECT * FROM record_list WHERE id = '".$db->quote($id)."' AND assigned_user_id = '".$db->quote($user->id)."'",true);

        $row = $db->fetchByAssoc($ret, false);

        if (!empty($row['records'])) {
            $data = $row;
            $data['records'] = json_decode($data['records']);
        }

        return $data;
    }

    /**
     * Saves a record list object and returns the id
     * @param      $recordList
     * @param      $module
     * @param      $id
     * @param      $user
     *
     * @return string
     */
    public static function saveRecordList($recordList, $module, $id = null, $user = null)
    {
        global $dictionary;
        include_once 'metadata/recordListMetaData.php';

        $db = DBManagerFactory::getInstance();

        if ($user == null) {
            $user = $GLOBALS['current_user'];
        }

        $currentTime = $GLOBALS['timedate']->nowDb();

        if (empty($id)) {
            $id = create_guid();
            $db->insertParams(
                'record_list',
                $dictionary['RecordList']['fields'],
                array(
                    'id' => $id,
                    'assigned_user_id' => $user->id,
                    'module_name' => $module,
                    'records' => json_encode($recordList),
                    'date_modified' => $currentTime,
                ),
                null,
                true,
                true
            );
        } else {
            $db->updateParams(
                'record_list',
                $dictionary['RecordList']['fields'],
                array(
                    'records' => json_encode($recordList),
                    'date_modified' => $currentTime,
                ),
                array('id' => $id),
                null,
                true,
                true
            );
        }

        return $id;
    }

    /**
     * Deletes a record list based on record list id
     * @param $recordListId
     *
     * @return mixed
     */
    public static function deleteRecordList($recordListId)
    {
        $db = DBManagerFactory::getInstance();
        $ret = $db->query("DELETE FROM record_list WHERE id = '".$db->quote($recordListId)."'",true);

        return $ret;
    }
}
