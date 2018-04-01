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




Route::get('/', 'MainController@index')->name('index');

Route::get('/oneItem/{slug}', [
    'uses' => 'MainController@show',
    'as' => 'oneItem'
]);

Route::resource('/admin', 'ProductController');

Route::auth();

Route::get('/home', 'HomeController@index');
