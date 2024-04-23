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
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/transfer', function () {
    return view('transferpoint');
});
Route::get('/changepin', function () {
    return view('changepin');
});

Route::get('/history', function () {
    return view('playerhistory');
});
Route::get('/draw', function () {
    return view('gamedraw');
});
Route::get('/jokerlist', function () {
    return view('jokerlist');
});
Route::get('/analysis', function () {
    return view('Analysis');
});
Route::get('/winning', function () {
    return view('winning');
});
Route::get('/balance', function () {
    return view('Balance');
});



//login
Route::get('/login', [LoginController::class, 'view'])->name('login');
Route::post('/login', [LoginController::class, 'submit'])->name('login_submit');
