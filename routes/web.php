<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Admin Panel
Route::get('/laptop', function () {
    return view('Admin/laptop');
});

Route::get('/wifipassword', function () {
    return view('Admin/wifipassword');
});

Route::get('/storenumber', function () {
    return view('Admin/storenumber');
});

Route::get('/admin', function () {
    return view('Admin/index');
});