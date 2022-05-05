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

//! PAGINA PRINCIPALE
Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/cards', function () {
    $comicsData = config('comicsData');
    return view('guest.main-cards', [ 'comicsData' => $comicsData]);
});
