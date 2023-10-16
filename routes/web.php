<?php

use Illuminate\Support\Facades\Route;

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


