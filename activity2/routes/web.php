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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/serveices', function () {
    return view('services');
});

Route::get('/services1', function () {
    return view('services1');
});

Route::get('/services2', function () {
    return view('services2');
});

Route::get('/services3', function () {
    return view('services3');
});

Route::get('/login', function () {
    return view('login');
});
