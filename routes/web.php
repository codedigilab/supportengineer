<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});




//adminarea
Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/admin/laptop', function () {
    return view('admin/laptop');
});