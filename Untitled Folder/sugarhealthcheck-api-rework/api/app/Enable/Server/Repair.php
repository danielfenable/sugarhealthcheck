<?php

namespace App\Enable\Server;

use App\Http\Requests;

class Repair
{

    function perform()
    {

        error_reporting(E_WARNING && E_STRICT && E_ERROR);
        chdir(SUGAR_BASE_DIR);
        global $current_user;
        $current_user = new \User();
        $current_user->retrieve('1');

        $GLOBALS['log']->debug('-----> Repair Called via Sugar Health-check <-------');
        $repair = new \RepairAndClear();
        $repair->repairAndClearAll(array('clearAll'), array(translate('LBL_ALL_MODULES')), true, true);
        $exit_on_cleanup = true;
        sugar_cleanup(false);

        if (class_exists('DBManagerFactory')) {
            $db = \DBManagerFactory::getInstance();
            $db->disconnect();
        }
    }
}


