<?php

namespace App\Enable\Server;

use App\Http\Requests;

class FixPerms
{

    public static function perform($dir = null)
    {
        if (isset($dir)) $dir = rtrim($dir, "/") . '/';
        $sugar_system = env("SUGAR_ROOT") . $_SERVER['system'];
        $output;
        $error_code;
        exec("sudo /usr/local/bin/fixperms $sugar_system" . $dir, $output, $error_code);
        return $error_code;
    }
}


