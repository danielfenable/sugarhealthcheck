<?php

namespace App\Http\Controllers;

use App\Enable\Server\FixPerms;

use Illuminate\Http\Request;

class FixpermsController extends Controller
{
    function perform()
    {
        $fixperms = new FixPerms();
        $result = $fixperms->perform();
        return $result;
    }
}