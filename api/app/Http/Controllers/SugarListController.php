<?php

namespace App\Http\Controllers;

use App\Enable\Server\Sugars;

class SugarListController extends Controller
{
    function returnSugars()
    {
        $sugars = new Sugars();
        $output = json_encode($sugars->listSugars());
        return $output;
    }
}