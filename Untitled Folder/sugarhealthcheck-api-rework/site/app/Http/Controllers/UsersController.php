<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use View;

use Session;

use Redirect;

use App\Enable\Server\CallUsers;

use App\Enable\Server\CallList;

class UsersController extends Controller
{
    public function perform(Request $request)
    {
        $system = Session::get('system')->name;
        $users = new CallUsers();
        $result = $users->perform($system);
        if (!$result) return "could not connect to sugar, query returned false";

        $decoded =  json_decode($result);
        $html = "";

        foreach ($decoded as $record) {
            $html .="<div> <table>";
            foreach ($record as $key => $value) {
                $html .= "<tr> <td> <p> <strong>" . $key . "</td> </strong> <td>  &nbsp;  &nbsp; " . $value . "   &nbsp;  &nbsp;</td></tr>";
            }
            $html .="</table></div> <br> <br>";
        }
        return view::make("panel/output/output")->with("output", $html);


    }

}
