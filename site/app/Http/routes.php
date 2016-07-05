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

    Route::group(['middleware' => ['admin']], function ()
    {
         Route::get('admin', 'loginController@adminHandler');
    }
    );

    Route::get('home', 'loginController@panelHandler');
    Route::post('system', 'loginController@systemSet');
    Route::get('support', 'loginController@panelHandler');

    Route::get('/', 'loginController@handleLogin');

    Route::get('logout', 'LogoutController@logout');

    Route::get('fixperms', 'FixpermsController@perform');

    Route::get('repair', 'RepairController@perform');

    Route::get('users', 'UsersController@perform');

    Route::get('recover', 'RecoverController@recoverCount');
    Route::post('recoverlist', 'RecoverController@recoverList');
    Route::post('recover', 'RecoverController@perform');

    Route::get('config', 'ConfigController@handler');
    Route::post('configlist', 'ConfigController@configKeys');
    Route::post('configvalues', 'ConfigController@values');
    Route::post('config', 'ConfigController@perform');

    Route::get('info', 'InfoController@perform');

    Route::get('access', 'AccessController@handler');
    Route::post('access', 'AccessController@perform');
    Route::get('plugin', 'AccessController@pluginDownload');
}
);

Route::get('login', 'loginController@handleLogin');

Route::post('login', 'loginController@postLogin');
