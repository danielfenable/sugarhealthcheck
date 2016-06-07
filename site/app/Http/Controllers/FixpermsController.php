<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use View;

use Session;

use Redirect;

use App\Enable\Server\FixPerms;

use App\Enable\Server\CallList;

class FixpermsController extends Controller
{
    public function handler(){

    	$list = new CallList();
    	$list_result = json_decode($list->perform());	
		return \View::make('panel/list/list')->with(array("list" => $list_result, "action" => "fixperms" ));
    }

    public function perform(Request $request){

    	$fixperms = new FixPerms();
    	$result = $fixperms->perform($request->system);

        if($result == 0){
            $result = "No Errors were encountered while performing the permission fix.";
            return view::make("panel/output/output")->with("output",$result);
        }
        $result = "Errors encountered while performing fixperms, error code other than 0 recieved.";
    	return view::make("panel/output/output")->with("output",$result); 

    }

}
