<?php

namespace App\Enable\Server;

use App\Http\Requests\Sugar\Auth\Client;

use App\Http\Requests\GenericCalls\Call;

use Session;


class CallAccess
{
    public function perform($system, $user)
    {
         // Insert row in oauth table and then place in browser.

        $call = new Call();
        $result = $call->post("access", $system, json_encode($user));
        return $result;
    }
}


?>