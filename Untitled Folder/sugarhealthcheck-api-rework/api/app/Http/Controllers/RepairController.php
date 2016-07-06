<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

use App\Enable\Server\Repair;

class RepairController extends Controller
{
    public function handler()
    {
        $repair = new Repair();
        $output = $repair->perform();
        return $output;
    }
}


?>