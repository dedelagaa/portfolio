<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Home\MainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.v1');
});

Route::get('/about', function () {
    return view('home.v1.about');
});

Route::get('/contact', function () {
    return view('home.v1.contact');
});

Route::get('/portfolio', function () {
    return view('home.v1.portfolio');
});


// 404 for undefined routes
Route::any('/{page?}', function () {
    return View::make('404');
})->where('page', '.*');