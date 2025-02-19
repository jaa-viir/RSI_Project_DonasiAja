<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login'); // Mengarahkan ke file login.blade.php
})->name('login');

Route::get('/admindashboard', function () {
    return view('admindashboard'); // Mengarahkan ke file login.blade.php
})->name('admindashboard');

Route::get('/adminuserreq', function () {
    return view('adminuserreq'); // Mengarahkan ke file login.blade.php
})->name('adminuserreq');

Route::get('/admincrevent', function () {
    return view('admincrevent'); // Mengarahkan ke file login.blade.php
})->name('admincrevent');