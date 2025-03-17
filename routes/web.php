<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/SablaonJonathan', action: 'App\Http\Controllers\ExampleController@index');