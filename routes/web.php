<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
})->name('dashboardadmin');

Route::get('/lomba', function () {
    return view('lomba');
})->name(name: 'lomba');

Route::get('/detaillomba', function () {
    return view('detaillomba');
})->name(name: 'detaillomba');

Route::get('/beasiswa', function () {
    return view('beasiswa');
})->name('beasiswa');

Route::get('/detailbeasiswa', function () {
    return view('detailbeasiswa');
});

Route::get('/abdimas', function () {
    return view('abdimas');
})->name(name: 'abdimas');

Route::get('/penelitian', function () {
    return view('penelitian');
})->name(name: 'penelitian');

Route::get('/faq', function () {
    return view('faq');
})->name(name: 'faq');

Route::get('/prosedure', function () {
    return view('prosedure');
})->name(name: 'prosedure');





