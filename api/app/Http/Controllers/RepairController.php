<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

use App\Enable\Server\Repair;

class RecoverController extends Controller
{
        public function perform(){		
        $repair = new Repair();
        $output = $repair->perform();
        return $output;

    }
}


?>