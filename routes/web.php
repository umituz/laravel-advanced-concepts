<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/component', function () {
    return view('component', [
        'info' => 'I am AWESOME!'
    ]);
});

Route::get('/http/get', 'HttpController@get');
Route::get('/http/post', 'HttpController@post');
