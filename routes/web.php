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

Route::get('/', function () {
    return view('fitur.dashboard');
});

Route::get('/datausaha', function () {
    return view('fitur.datausaha');
});

Route::get('/pengelola', function () {
    return view('fitur.pengelola');
});

Route::get('/akun', function () {
    return view('fitur.akun');
});

Route::get('/pemasok', function () {
    return view('fitur.pemasok');
});

Route::get('/detilpemasok', function () {
    return view('fitur.detil.pemasok');
});
