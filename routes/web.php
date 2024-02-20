<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return 'NIM : 2241720051 <br> Nama : Cinthya Achwatul Ifnu';
});


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
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/selamatdatang', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 2241720051 <br> Nama : Cinthya Achwatul Ifnu';
});
