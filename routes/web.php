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
    $headerData = config('headerData');
    $footerData = config('footerData');
    return view('layouts.app', ['headerData' => $headerData], ['footerData' => $footerData]);
});

Route::get('/cards', function () {
    $headerData = config('headerData');
    $footerData = config('footerData');
    $comicsData = config('comicsData');
    return view('guest.main-cards', ['headerData' => $headerData, 'footerData' => $footerData, 'comicsData' => $comicsData]);
});
