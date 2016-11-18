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

Route::any('/','IndexController@getlunbo');
Route::any('common','IndexController@common');
Route::any('commonselect','IndexController@commonselect');
Route::any('getcontent','IndexController@getcontent');
Route::any('getnews','IndexController@getnews');
Route::any('userinfo','IndexController@userinfo');
Route::any('dormbook','IndexController@dormbook');
Route::any('arrive','IndexController@arrive');
Route::any('green','IndexController@green');
Route::any('delay','IndexController@delay');
Route::any('commonquestion','IndexController@commonquestion');
Route::any('uploaDate','IndexController@uploaDate');
Route::any('myask','IndexController@myask');
Route::any('reportCard','IndexController@reportCard');
Route::any('myanawer','IndexController@myanawer');


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
