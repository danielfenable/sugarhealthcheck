<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['sugar']], function () {

	Route::get('home',"loginController@panelHandler");

    
    Route::get('/', "loginController@handleLogin");

    
    Route::get("logout","logoutController@logout");

    
    Route::get("fixperms","FixpermsController@handler");
    Route::post("fixperms","FixpermsController@perform");

});

Route::get('login', "loginController@handleLogin");

Route::post('login', "loginController@postLogin");