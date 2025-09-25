<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('home'); // resources/views/home.blade.php
});

// Halaman About
Route::get('/about', function () {
    return view('about'); // resources/views/about.blade.php
});

// Halaman Contact
Route::get('/contact', function () {
    return view('contact'); // resources/views/contact.blade.php
});

// Halaman Dashboard
Route::get('/dashboard', function () {
    return view('dashboard'); // resources/views/dashboard.blade.php
});
