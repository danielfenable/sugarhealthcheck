<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'SugarListController@returnSugars');

$app->get('{system}/fixperms', 'FixpermsController@perform');

$app->get('{system}/repair', 'RepairController@handler');

$app->get('{system}/users', 'UsersController@perform');
$app->get('{system}/users/count', 'UsersController@count');

$app->get('{system}/modules', 'ModulesController@handler');

$app->post('{system}/recover', 'RecoverController@perform');

$app->post('{system}/filter', 'FilterController@perform');

$app->get('{system}/uniquekey', 'ConfigController@uniqueKey');

$app->get('{system}/configlist', 'ConfigController@keyList');
$app->get('{system}/overridekeys', 'ConfigController@overrideList');
$app->post('{system}/config', 'ConfigController@perform');

$app->get('{system}/test', 'TestController@perform');

$app->post('{system}/access', 'AccessController@perform');


