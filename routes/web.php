<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/a', function () {
    return view('admin/index');
});

Route::get('/admin', function () {
    return view('admin/laptop');
});