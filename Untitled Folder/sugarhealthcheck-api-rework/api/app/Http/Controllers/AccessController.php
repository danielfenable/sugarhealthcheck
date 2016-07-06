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

        $sql = "SELECT id FROM users WHERE user_name = '$user'";
        $result = $GLOBALS['db']->query($sql);
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
              $id = $row['id'];
        }
        $sql = "INSERT INTO oauth_tokens (id, consumer, tstate, token_ts, expire_ts,
                                          download_token, platform,
                                          deleted, assigned_user_id)
                                          VALUES
                                          ('$unique_id', 'e221eb79-da8a-f7cf-8038-576d4a90d60a',
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