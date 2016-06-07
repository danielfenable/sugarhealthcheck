<?php

namespace App\Enable\Server;

use App\Http\Requests\GenericCalls\Call;

class FixPerms{

	function perform($system){

		$call = new Call();
		$result = $call->get("fixperms",$system);

		return $result;
	}
}


?>