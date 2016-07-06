<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Sugar\Auth\Client;
use App\User;
use App\System;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
use App\Http\Requests\Sugar\Auth\Datapush;
use App\Enable\Server\CallList;
use App\Enable\Server\CallSystemInfo;


class LoginController extends Controller
{

    public function handleLogin()
    {
        if (Session::has('user')) {
            return redirect('/home');
        }
        return \View::make('login');
    }

    public function postLogin()
    {
        $rules = array(
        'password' => 'required',
        'username' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
        } else {
                $sugar_url = env('SUGAR_URL', false);
            // create our user data for the authentication
                $userdata = array(
                                 'username' => Input::get('username'),
                                 'password' => Input::get('password'),
                                 );
                // Attempt auth with Sugar
                $sugar_request = new Client($sugar_url, $userdata['username'], $userdata['password']);
                $sugar_token = $sugar_request->getToken();

                if ($sugar_token == 'need_login') {
                    return Redirect::to('login')
                      ->withErrors(
                          array(
                               'invalid' => 'Your Sugar username or password is incorrect',
                               )
                      );
                } else {
                    if ($sugar_token == null) {
                             die("No response received from $sugar_url , might be down.");
                    }
                        $username = trim($userdata['username']);
                        $filter_arguments = array(
                                                 'user_name' => $username,
                                                 );

                        $data = new Datapush($sugar_request);
                        $user_details = $data->recordFilter('Users', $filter_arguments);

                        $user = new User(
                            array(
                                 'username' => $userdata['username'],
                                 'email' => $user_details['records'][0]['email'][0]['email_address'],
                                 'first_name' => $user_details['records'][0]['first_name'],
                                 'last_name' => $user_details['records'][0]['last_name'],
                                 'is_admin' => $user_details['records'][0]['is_admin'],
                             )
                        );

                        Session::put('user', $user);
                        return redirect('/home');
                }
        }
    }

    public function panelHandler(Request $request)
    {
        $user = Session::get('user');
        $list = new CallList();
        $list_value = json_decode($list->perform());

        return \View::make('panel/system')
          ->with('username', $user->username)
          ->with('email', $user->email)
          ->with('first_name', $user->first_name)
          ->with('last_name', $user->last_name)
          ->with('is_admin', $user->is_admin)
          ->with('action', "system")
          ->with('list_value', $list_value);
    }
    public function systemSet(Request $request)
    {
        if ($request->system) {
            $systeminfo = new CallSystemInfo($request->system);
            $version = $systeminfo->version($request->system);
            $flavour = $systeminfo->flavour($request->system);
            $user = Session::get('user');
            $system = new System(
                array(
                      "name" => $request->system,
                      "flavour" => $flavour ,
                      "version" => $version
                )
            );
            Session::put('system', $system);
               return \View::make('panel/index')
                  ->with('username', $user->username)
                  ->with('email', $user->email)
                  ->with('first_name', $user->first_name)
                  ->with('last_name', $user->last_name)
                  ->with('is_admin', $user->is_admin)
                  ->with('system', $system->name);
        }
        return Redirect::to('login')
             ->withErrors(
                 array(
                      'invalid' => 'No system found in POST, please re-login,
                                    if problem persists please contact an admin.',
                      )
             );

    }

    public function adminHandler(Request $request)
    {
           $user = Session::get('user');
           return \View::make('panel/admin')
              ->with('username', $user->username)
              ->with('email', $user->email)
              ->with('first_name', $user->first_name)
              ->with('last_name', $user->last_name);

    }

}
