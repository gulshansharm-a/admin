<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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



Route::get('/generate-points', function () {
    return view('generatepoints');
});
Route::get('/Add', function () {
    return view('Add');
});


Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/distributor', function () {
    return view('Distributor');
});
Route::get('/Agent', function () {
    return view('Agent');
});
Route::get('/Player', function () {
    return view('Player');
});
Route::get('/OnlinePlayer', function () {
    return view('OnlinePlayer');
});



//login
Route::get('/login', [LoginController::class, 'view'])->name('login');
Route::post('/login', [LoginController::class, 'submit'])->name('login_submit');
