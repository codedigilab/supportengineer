<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Admin Panel
Route::get('/laptop', function () {
    return view('admin.laptop');
});

Route::get('/wifipassword', function () {
    return view('admin.wifipassword');
});

Route::get('/storenumber', function () {
    return view('admin.storenumber');
});

Route::get('/camera', function () {
    return view('admin.camera');
});

Route::get('/solution', function () {
    return view('admin.solution');
});

Route::get('/admin', function () {
    return view('admin.index');
});