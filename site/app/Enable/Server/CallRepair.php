<?php

namespace App\Enable\Server;

use App\Http\Requests\GenericCalls\Call;

class CallRepair{

	function perform($system){

		$call = new Call();
		$result = $call->get("repair",$system);

		return $result;
	}
}


?>