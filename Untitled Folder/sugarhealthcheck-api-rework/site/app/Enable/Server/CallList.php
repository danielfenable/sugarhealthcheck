<?php

namespace App\Enable\Server;

use App\Http\Requests\GenericCalls\Call;

class CallList
{

	function perform()
    {
        $call = new Call();
        $result = $call->get();
        return $result;
    }
}


?>