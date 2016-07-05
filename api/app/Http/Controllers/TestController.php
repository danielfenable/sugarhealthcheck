<?php

namespace App\Http\Controllers;

use App\Enable\Server\Sugars;

   class user{

   	public function __construct()
    {

        $this->id = '1';
    }

  }

     class consumer{

    public function __construct()
    {

        $this->id = 'e221eb79-da8a-f7cf-8038-576d4a90d60a';
    }

  }


class TestController extends Controller
{
    function perform()
    {
       error_reporting(E_WARNING && E_STRICT && E_ERROR);

       require SUGAR_BASE_DIR . "/clients/base/api/OAuth2Api.php";
       $more = array(
                   "grant_type"=>"refresh_token",
                   "refresh_token"=>"b90faaf7-26bf-12bd-c3e7-577a38e9e880",
                   "client_id"=>"sugar",
                   "client_secret"=>"");

       $auth = new \OAuth2Api();
       $api = $auth->registerApiRest();
       dd($auth->token($api, $more));



    }


}