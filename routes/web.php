<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('change-password', function () {
    return view('change-password');
});


Route::get('/dosen/login', function () {
    return view('dosen.login');
});

Route::get('/dosen/change-password', function () {
    return view('dosen.change-password');
});

