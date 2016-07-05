<?php

namespace App\Enable\Server;

use App\Http\Requests\GenericCalls\Call;

class CallUsers
{

	function perform($system){

        $call = new Call();
        $result = $call->get(
            "users", $system
        );
        return $result;
    }
}


?>