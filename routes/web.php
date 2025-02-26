<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/a', function () {
    return view('admin/index');
});

Route::get('/admin', function () {
    return view('admin/laptop');
});