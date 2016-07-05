<?php

namespace App\Enable\Server;

use App\Http\Requests\GenericCalls\Call;

use App\Http\Requests\Sugar\Auth\Client;

use App\Enable\Direct\Modules;

use App\Enable\Server\CallRecover;

class CallRecover
{

    function getModuleList($system)
    {
        $modules = new Modules($system);
        $list = $modules->getList();
        if (!$list) return false;
        return $list;
    }

    function getRecordRange($date_range_1, $date_range_2, $system, $module)
    {
        $call = new Call();
        $dates = array();
        $dates["date_1"] = $date_range_1;
        $dates["date_2"] = $date_range_2;
        $dates["module"] = $module;
        $encoded = json_encode($dates);

        $result = $call->post("filter", $system, $encoded);
        $filtered_values = json_decode($result);
        return $filtered_values;
    }

    function perform($system, $id, $module)
    {
        $recover = new CallRecover();
        $call = new Call();
        $metadata = array();
        $metadata["system"] = $system;
        $metadata["module"] = $module;
        $metadata["id"] = $id;
        $metadata["list"] = $recover->getModuleList($system);
        $encoded = json_encode($metadata);

        $result = $call->post("recover", $system, $encoded);

        return $result;
    }
}


?>