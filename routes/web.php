<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});

Route::get('/dosen/login', function () {
    return view('dosen.login');
});

Route::get('/dosen/change-password', function () {
    return view('dosen.change-password');
});


