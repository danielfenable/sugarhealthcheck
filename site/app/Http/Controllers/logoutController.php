<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use View;

use Session;

use Redirect;

class logoutController extends Controller
{
    public function logout(){
	    Session::flush();
	    return Redirect::to('login');	
	}    
}
