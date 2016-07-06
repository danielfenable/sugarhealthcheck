<?php

namespace App\Http\Controllers;

use App\Enable\Server\FixPerms;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    function perform(Request $request)
    {
        require SUGAR_BASE_DIR . "/clients/base/api/OAuth2Api.php";
        error_reporting(E_WARNING && E_STRICT && E_ERROR);
        $user = $request->user;
        $unique_id = self::uuid();
        $unique_download = self::uuid();
        $db = \DBManagerFactory::getInstance();

        $sql = "SELECT id FROM oauth_consumer WHERE name = 'Standard OAuth Username & Password Key'";
        $result = $GLOBALS['db']->query($sql);
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
              $consumer = $row['id'];
        }
        if (!$consumer) {
             return array('error' => 'Could not get consumer key from table.');
        }
        $sql = "SELECT id FROM users WHERE user_name = '$user'";
        $result = $GLOBALS['db']->query($sql);
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
             $id = $row['id'];
        }
        if (!$id) {
             return array('error' => 'Could not get user id from table.');
        }
        $sql = "INSERT INTO oauth_tokens (id, consumer, tstate, token_ts, expire_ts,
                                          download_token, platform,
                                          deleted, assigned_user_id)
                                          VALUES
                                          ('$unique_id', '$consumer',
                                           2 ,1467210724,1468430324, '$unique_download', 'base', 0, '$id'
                                          )";
        $result = $GLOBALS['db']->query($sql);
        $more = array(
                   "grant_type"=>"refresh_token",
                   "refresh_token"=> $unique_id,
                   "client_id"=>"sugar",
                   "client_secret"=>"");

        $auth = new \OAuth2Api();
        $api = $auth->registerApiRest();
        $full_token = $auth->token($api, $more);
        $access_token = $full_token['access_token'];
        if ($access_token)return $access_token;
        return 'false';
    }

    function uuid()
    {
        $uid = uniqid(null, true);
        $rawid = strtoupper(sha1(uniqid(rand(), true)));
        return substr($uid, 6, 8).'-'.substr($uid, 0, 4).'-'.substr(sha1(substr($uid, 3, 3)), 0, 4)
               .'-'.substr(sha1(substr(time(), 3, 4)), 0, 4).'-'.strtolower(substr($rawid, 10, 12));
    }
}