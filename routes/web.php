<?php

use Illuminate\Support\Facades\Route;

// Root route redirects to login
Route::get('/', function () {
    return view('login');
});

// Login routes
Route::get('/login', function () {
    return view('login');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

// Dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
})->name('dashboardadmin');

// Lomba (Competition) routes
Route::get('/lomba', function () {
    return view('lomba');
})->name('lomba');

Route::get('/detaillomba', function () {
    return view('detaillomba');
})->name('detaillomba');

// Beasiswa (Scholarship) routes
Route::get('/beasiswa', function () {
    return view('beasiswa');
})->name('beasiswa');

Route::get('/detailbeasiswa', function () {
    return view('detailbeasiswa');
})->name(name: 'detailbeasiswa');

// Community service (Abdimas) routes
Route::get('/abdimas', function () {
    return view('abdimas');
})->name('abdimas');

// Research routes
Route::get('/penelitian', function () {
    return view('penelitian');
})->name('penelitian');

// FAQ route
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Procedure route
Route::get('/prosedure', function () {
    return view('prosedure');
})->name('prosedure');

// Profile route
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/pendataanLomba', function () {
    return view('pendataanLomba');
})->name('pendataanLomba');

Route::get('/pendataanBeasiswa', function () {
    return view('pendataanBeasiswa');
})->name('pendataanBeasiswa');

Route::get('/daftarAbdimas', function () {
    return view('daftarAbdimas');
})->name('daftarAbdimas');
