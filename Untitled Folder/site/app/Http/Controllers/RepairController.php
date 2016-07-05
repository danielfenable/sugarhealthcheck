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
    public function perform(Request $request)
    {
        $system = Session::get('system')->name;
        $repair = new CallRepair();
        $result = $repair->perform($system);

        $decoded =  html_entity_decode($result);
        return view::make("panel/output/output")->with("output", $decoded);
    }
}
