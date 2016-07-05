<?php

namespace App\Enable\Server;

use App\Http\Requests;

class Users
{

    function perform($system )
    {

        $db = \DBManagerFactory::getInstance();
        $user_sql
            = "SELECT id ,user_name,first_name,last_name,last_login,is_admin,
               date_entered , receive_notifications,status,external_auth_only,team_set_id FROM users WHERE deleted = 0";

        $result = $GLOBALS['db']->query($user_sql);
        if (!$result) return false;
        $users = array();
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
              $users[] = $row;
        }
        foreach ($users as $key => $value) {
                if ($value['external_auth_only'] == '1') {
                    unset($users[$key]);
                }
        }
        return $users;

    }
}


