<?php

namespace App\Http\Controllers;

use App\Enable\Server\FixPerms;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
    function handler()
    {
        $modules = new Modules();
        $result = $modules->perform();
        return $result;
    }
}