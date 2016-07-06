<?php

namespace App\Http\Controllers;

use Auth;

use View;

use Session;

use Redirect;

use Illuminate\Http\Request;

use App\Enable\Server\CallSystemInfo;

use App\Enable\Server\CallUsers;

use App\Enable\Server\CallList;

use App\Enable\Server\CallAccess;

class AccessController extends Controller
{

    public function handler()
    {
        $usernames = array();
        $system = Session::get('system')->name;
        $users = new CallUsers();
        $result = $users->perform($system);
        $plugin_warning = 'If you do not have the Enable healthcheck injector,
                           <a href="plugin"> click here to download it.</a>
                           <br> <br> <a href =
                               "https://www.maketecheasier.com/manually-install-extensions-google-chrome/">Install Guide
                           </a>';

        if (!$result) return "could not connect to sugar, query returned false";
        $decoded =  json_decode($result);
        foreach ($decoded as $key) {
            $usernames[] = $key->user_name;
        };
        return \View::make('panel/list/list')->with(
            array(
                  "list_value" => $usernames,
                  "action" => "access",
                  "list_info" => "Choose a user to log-in as. <br>" . $plugin_warning . '<br>'
                 )
        );
    }
    public function perform(Request $request)
    {
        $user['user'] = trim($request->list_value);
        $system = Session::get('system')->name;
        $access = new CallAccess();
        $result = $access->perform($system, $user);
        dd($result);
        if ($result == 'false' || !$result) return 'Could not get access token.';
        // Have O-Auth refresh ID
        return "<div id='auth_token'>" . $result . "</div>" . "<div id='system'>" . env(
            'REMOTE_SUGAR_URL', true
        ) . $system . "</div>";
    }
    public function pluginDownload(){
        $app = base_path();
        if (file_exists($app . "/resources/enable_injector.crx")) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($app . '/resources/enable_injector.crx').'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($app . '/resources/enable_injector.crx'));
            readfile($app . '/resources/enable_injector.crx');
            return;
        }
        return "Could not find plugin for download.";
    }
}
