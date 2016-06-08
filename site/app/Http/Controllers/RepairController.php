<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use View;

use Session;

use Redirect;

use App\Enable\Server\CallRepair;

use App\Enable\Server\CallList;

class RepairController extends Controller
{
    public function handler(){
    	$list = new CallList();
    	$list_result = json_decode($list->perform());	
		return \View::make('panel/list/list')->with(array("list" => $list_result, "action" => "repair" ));

	} 

   public function perform(Request $request){

    	$repair = new CallRepair();
    	$result = $repair->perform($request->system);
        return view::make("panel/output/output")->with("output",$result);


    }   
}
