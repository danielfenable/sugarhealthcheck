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

    public function perform(Request $request)
    {
        $system = Session::get('system')->name;
        $fixperms = new FixPerms();
        $result = $fixperms->perform($system);

        if ($result == 0) {
            $result = 'No Errors were encountered while performing the permission fix.';

            return view::make('panel/output/output')->with('output', $result);
        }
        $result = 'Errors encountered while performing fixperms, error code other than 0 recieved.';

        return view::make('panel/output/output')->with('output', $result);
    }
}
