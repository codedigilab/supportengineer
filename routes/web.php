<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

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

Route::get('/admin/laptop', [LaptopController::class, 'showJsonData']);
Route::post('/admin/laptop', [LaptopController::class, 'handleForm'])->name('submit');