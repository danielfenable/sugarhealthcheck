<?php

namespace App\Enable\Server;

use App\Http\Requests;

class FixPerms{

	function perform($system ){

		$sugar_system = env("SUGAR_ROOT") . $system;

		$output;
		$error_code;

		$test = exec("sudo /usr/local/bin/fixperms $sugar_system",$output,$error_code);

		return $error_code;
	}	
}


