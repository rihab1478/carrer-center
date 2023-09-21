<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtulisateurController;

use App\Http\Controllers\UsersController;
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
    return view('welcome');
});
Route::get('/welcome/about', function () {
    return view('front-end.about');
});
Route::get('/welcome/events', function () {
    return view('front-end.events');
});
Route::get('/welcome/contact', function () {
    return view('front-end.contact');
});
Route::get('/welcome/login', function () {
    return view('front-end.connect');
});
Route::get('/welcome/indexuser', function () {
    return view('back-end.indexuser');
});
Route::get('/welcome/indexadmin', function () {
    return view('back-end.indexadmin');
});
Route::get('/welcome/actualite', function () {
    return view('back-end.actualite');
});
Route::get('/welcome/offre', function () {
    return view('back-end.offre');
});
Route::get('/welcome/cv', function () {
    return view('back-end.cv');
    
});

Route::get('/welcome/profil', function () {
    return view('back-end.profil');
    
});



Route::get('/users', [UsersController::class, 'index']);

Route::get('/utulisateur', [UtulisateurController::class, 'index']);

