<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('detaillomba');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/detailbeasiswa', function () {
    return view('detailbeasiswa');
});

Route::get('/lomba', function () {
    return view('lomba');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
