<?php

namespace App\Enable\Direct\Helpers;

use App\Http\Requests\Sugar\Auth\Client;
use App\Http\Requests\Sugar\Auth\DataPush;

class SystemMetadataChecker
{

    function callList($system)
    {
        $url = env("REMOTE_SUGAR_URL", false).$system;
        $username = env("CUSTOMER_USERNAME", false);
        $password = env("CUSTOMER_PASSWORD", false);
        $sugar = new Client($url, $username, $password);
        $module_meta = $sugar->get("/metadata", array('type_filter' => 'full_module_list'));
        if (isset($module_meta['full_module_list'])) {
            $module_list = $module_meta['full_module_list'];
            return $module_list;
        } else {
            return array( 'error' => $module_list);
        }
    }
}


