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
    return view('client.pages.home');
});

Route::get('/about', function () {
    return view('client.pages.about');
});

Route::get('/resume', function () {
    return view('client.pages.resume');
});

Route::get('/services', function () {
    return view('client.pages.services');
});

Route::get('/portfolio', function () {
    return view('client.pages.portfolio');
});

Route::get('/portfolio-details', function () {
    return view('client.pages.portfolio-details');
});

Route::get('/contact', function () {
    return view('client.pages.contact');
});

// -------------Admin ----------------
Route::get('/admin', function () {
    return view('admin.layout');
});