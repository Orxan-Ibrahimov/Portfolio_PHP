<?php

use App\Http\Controllers\Client\PagesController;
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

Route::get('/', [PagesController::class, 'home']);
Route::get('resume', [PagesController::class, 'resume']);
Route::get('about', [PagesController::class, 'about']);
Route::get('portfolio', [PagesController::class, 'portfolio']);
Route::get('portfolio/{portfolio}', [PagesController::class, 'portfolio_details']);
Route::get('contact', [PagesController::class, 'contact']);
Route::post('t', [PagesController::class, 'contact_create']);

Route::get('/services', function () {
    return view('client.pages.services');
});

// -------------Admin ----------------
Route::get('/admin', function () {
    return view('admin.layout');
});

Route::get('/register', function () {
    return view('admin.auth.register');
});
