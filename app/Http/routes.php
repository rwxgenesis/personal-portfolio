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

Route::get('/', 'PracticeController@home');

Route::get('about', [
    'as' => 'about', 'uses' => 'PracticeController@about'
]);

Route::get('contact', [
    'as' => 'contact', 'uses' => 'PracticeController@contact'
]);

Route::get('portfolio', 'PracticeController@portfolio');

Route::get('profile', ['as' => 'profile' , function () {
    return 'works.';
}]);

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