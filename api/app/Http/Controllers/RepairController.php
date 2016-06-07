<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

use App\Enable\Server\list_sugars;

class RepairController extends Controller
{
        public function handler(){
                $sugars = new Sugars();
                $list_sugars = $sugars->listSugars();
        return View::make('panel/repair')->with("sugars",$list_sugars);
    }
}

?>