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

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

Route::get('/call-facebook', ['middleware' => ['auth', 'subscribed'], 'as' => 'fbk', function () {
    return Auth::user()->name . "....Now calling Mark Zuckerberg";
}]);

Route::get('/call-justiceleague', ['middleware' => ['auth', 'subscribed'], 'as' => 'jl', function () {
    return Auth::user()->name . "....Now calling Justice League";
}]);

Route::get('/call-billgates', ['middleware' => ['auth', 'subscribed'], 'as' => 'bg', function () {
    return Auth::user()->name . "....Now calling Bill Gates";
}]);
