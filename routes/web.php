<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('laptop');
});


//Admin Panel
Route::get('/laptop', function () {
    return view('laptop');
});

Route::get('/wifipassword', function () {
    return view('wifipassword');
});

Route::get('/storenumber', function () {
    return view('storenumber');
});

Route::get('/camera', function () {
    return view('camera');
});

Route::get('/solution', function () {
    return view('solution');
});

Route::get('/admin', function () {
    return view('index');
});