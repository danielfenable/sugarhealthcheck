<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\Sugar\Auth\Client;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
use App\Http\Requests\Sugar\Auth\Datapush;

class loginController extends Controller
{
    public function handleLogin(){

    	if(Session::has('user')){
    		return redirect('/home');
    	}
    	return \View::make('login');
    }

    public function postLogin(Request $request){

	    	$rules = array(
			    'password' => 'required',
			    'username' => 'required' 
			);
	    

		    $validator = Validator::make(Input::all(), $rules);

		    if ($validator->fails()) {
			    return Redirect::to('login')
			        ->withErrors($validator) // send back all errors to the login form
			        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
			} 
			else {
		    // create our user data for the authentication
			    $userdata = array(
			        'username'  => Input::get('username'),
			        'password'  => Input::get('password')
			    );
			// Attempt auth with Sugar
			    $sugar_request = new Client(env("SUGAR_URL",FALSE),$userdata["username"],$userdata["password"]);
			    $sugar_token = $sugar_request->getToken();

			    if($sugar_token == "need_login" || $sugar_token == NULL){
			       	return Redirect::to('login')
			        	  ->withErrors(
			        	  			array(
			        	  				"invalid" => "Your Sugar username or password is incorrect")
			        	  				);	    
				}
				else{
					 $username = trim($userdata["username"]);				
					 $filter_arguments = array(				          
          				"user_name" => $username
       				);
		

					$data = new Datapush($sugar_request);
					$user_details = $data->recordFilter('Users',$filter_arguments);	
										
					$user = new User([
									  "username" => $userdata['username'],
									  "email" => $user_details['records'][0]['email'][0]['email_address'],
									  "first_name" => $user_details['records'][0]['first_name'],
									  "last_name" => $user_details['records'][0]['last_name'],
									  "is_admin" => $user_details['records'][0]['is_admin']
									  ]);

					
					Session::put('user', $user);
					return redirect('/home');
				}	    
			}
    }
    
    public function panelHandler(){

    	$user = Session::get('user');
    	return \View::make('panel/index')
    								->with("username",$user->username)
    								->with("email",$user->email)	
    								->with("first_name",$user->first_name)
    								->with("last_name",$user->last_name)	
    								->with("is_admin",$user->is_admin);	
    }
}
