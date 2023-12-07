<?php

use Ballybran\Facades\Route;
use Ballybran\Http\{Request, Response};

Route::get('/', function(Request $request): Response {
    return view('index');
});

Route::get('/controller', 'IndexController@main');

Route::controller('/test', 'TestController');
