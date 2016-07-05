<?php

namespace App\Http\Controllers;

use App\Enable\Server\FixPerms;

use Illuminate\Http\Request;

class FixpermsController extends Controller
{
	function perform(Request $request){
		if($system = $request->system){	
			$fixperms = new FixPerms();
			$result = $fixperms->perform($system);
			return $result;
		}
		return "No system variable passed.";
    }
}