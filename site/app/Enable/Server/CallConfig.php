<?php

namespace App\Enable\Server;

use App\Http\Requests\GenericCalls\Call;

class CallConfig
{

    function getConfigKeys($system)
    {

        $call = new Call();
        $result = $call->get("configlist", $system);
        return json_decode($result);
    }

    function getOverrideKeys($system)
    {
        $call = new Call();
        $result = $call->get("overridekeys", $system);
        return $result;

    }

	function perform($system, $data)
    {
        $encoded = json_encode($data);
        $call = new Call();
        $result = $call->post("config", $system, $encoded);
        return $result;
    }
}


?>