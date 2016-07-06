<?php

namespace App\Http\Controllers;

use Auth;

use View;

use Session;

use Redirect;

use App\Enable\Server\CallSystemInfo;

class InfoController extends Controller
{

    public function perform()
    {
    	$output = array();
        $system = Session::get('system')->name;
        $info = new CallSystemInfo($system);
        $result = $info->contractFields($system);
        if (!isset($result['records'][0])) return 'No contract records results returned via api call';

        $output['flavor'] = $result['records'][0]['sugar_version_c'];
        $output['version'] = $result['records'][0]['version_c'];
        $output['next_validation'] = $result['records'][0]['validation_expire_c'];
        $output['licenced_users'] = $result['records'][0]['licenced_users_c'];
        $output['active_users'] = $result['records'][0]['active_users_c'];
        $output['mailserver'] = $result['records'][0]['mailserver_c'];
        $output['URL'] = $result['records'][0]['hosted_url_c'];
        $output['server_location'] = $result['records'][0]['server_location_c'];
        $output['license_expire'] = $result['records'][0]['license_expire_c'];
        return view::make("panel/info/show")->with("output", $output);

    }
}
