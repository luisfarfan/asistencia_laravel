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

Route::get('/', function () {
    return view('index');
});

Route::get('menu', 'Front_controller@armarMenu');
Route::get('getrol', 'Usuario_controller@getByRol');

Route::get('login', function() {
    return view('login');
});

Route::post('autenticar', 'Usuario_controller@Authentication');
