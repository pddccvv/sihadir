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

Route::get('/dosen/permits', function () {
    return view('dosen.permits');
});

Route::get('/mahasiswa/license', function () {
    return view('mahasiswa.license');
});

Route::get('/models', function () {
    return view('models.model');
})->name('models');
