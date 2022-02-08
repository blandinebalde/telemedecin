<?php

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

Route::get('/login', function () {
    return view('page.login');
})->name('login'); 


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/register', function () {
    return view('page.register');
})->name('register');

Route::get('/forgot_password', function () {
    return view('page.forgot_password');
})->name('forgot_password');

Route::get('/doctors', function () {
    return view('page.doctors');
})->name('doctors');

Route::get('/rendez-vous', function () {
    return view('page.rv');
})->name('rv');

Route::get('/payment', function () {
    return view('page.payment');
})->name('payment');

Route::get('/centre', function () {
    return view('page.centre');
})->name('centre');

Route::get('/consultation', function () {
    return view('page.consultation');
})->name('consultation');

