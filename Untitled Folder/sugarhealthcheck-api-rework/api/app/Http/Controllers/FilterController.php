<?php

namespace App\Http\Controllers;

use App\Enable\Server\FixPerms;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    function perform(Request $request)
    {
        error_reporting(E_WARNING && E_STRICT && E_ERROR);
        $module =  strtolower($request->module);
        $date_1 = $request->date_1;
        $date_2 = $request->date_2;
        $db = \DBManagerFactory::getInstance();
        $sql = "SELECT name , id, date_entered, date_modified
                FROM $module WHERE deleted = 1 AND date_modified BETWEEN '$date_1' AND '$date_2'";
        if (!$result = $GLOBALS['db']->query($sql)) {

            $sql = "SELECT first_name, last_name, id, date_entered, date_modified, created_by
                    FROM $module WHERE deleted = 1 AND date_modified BETWEEN '$date_1' AND '$date_2'";
            $result = $GLOBALS['db']->query($sql);
        }
        $records = array();

       while($row = $GLOBALS['db']->fetchByAssoc($result) )
       {
            $records[] = $row;
       }
            return $records;
    }

}