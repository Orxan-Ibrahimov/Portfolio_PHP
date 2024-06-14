<?php

use App\Http\Controllers\Client\PagesController;
use App\Http\Controllers\Client\MessageController;
use App\Models\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::post('contact', [MessageController::class, 'store']);


Route::get('/lang/{locale}', function (string $locale) {
    $languages = Language::all()-> pluck('short_name') -> toArray();
    if (in_array($locale, $languages)) {
        Log::channel('language')-> info('old Language is '.App::getLocale(). ' and new language is '. $locale);
        Session::put('locale', $locale);
    }

    return redirect()->back();
});
// Route::resource('contact', MessageController::class);
Route::get('/services', function () {
    return view('client.pages.services');
});

// -------------Admin ----------------
// Route::get('/admin', function () {
//     return view('admin.layout');
// });

// Route::get('/register', function () {
//     return view('admin.auth.register');
// });
