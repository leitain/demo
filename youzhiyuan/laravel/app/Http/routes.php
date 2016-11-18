<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('/','IndexController@index');
Route::any('common','IndexController@common');
Route::any('mustknow','IndexController@mustknow');
Route::any('notice','IndexController@notice');
Route::any('data','IndexController@data');
Route::any('noticeDetail','IndexController@noticeDetail');
Route::any('self','SelfController@index');
Route::any('selfreport','SelfController@selfreport');
Route::any('green','SelfController@green');
Route::any('delay','SelfController@delay');
Route::any('route','SelfController@route');
Route::any('arrive','SelfController@arrive');
Route::any('index','IndexController@index');
Route::any('help','HelpController@index');
Route::any('helpcommon','HelpController@common');
Route::any('commonquestion','HelpController@commonquestion');
Route::any('answer','HelpController@answer');
Route::any('myanswer','HelpController@myanswer');
Route::any('tiwen','HelpController@tiwen');
Route::any('uploaDate','HelpController@uploaDate');
Route::any('user','UserController@index');
Route::any('common','UserController@common');
Route::any('userinfo','UserController@userinfo');
Route::any('dormbook','UserController@dormbook');
Route::any('arrive','UserController@arrive');
Route::any('reportCard','UserController@reportCard');
Route::any('changepsw','UserController@changepsw');
Route::any('loginout','UserController@loginout');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
