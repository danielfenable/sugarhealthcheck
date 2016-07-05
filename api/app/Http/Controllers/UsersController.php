<?php

namespace App\Http\Controllers;

use App\Enable\Server\FixPerms;

use Illuminate\Http\Request;

use View;

use App\Enable\Server\Users;

class UsersController extends Controller
{
    function perform()
    {
        $users = new Users();
        $output = $users->perform($_SERVER['system']);
        return $output;
    }
}