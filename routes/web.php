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
})->name('guest-homepage');

Route::get('/cards', function () {
    $comicsData = config('comicsData');
    $mainBottomData = config('mainBottomData');
    return view('guest.main-cards', [ 'comicsData' => $comicsData, 'mainBottomData' => $mainBottomData]);
})->name('guest-cards');

Route::get('/cards/{index}', function ($index) {
    $comicsData = config('comicsData');
    $mainBottomData = config('mainBottomData');
    if (is_numeric($index) && $index >= 0 && $index < count($comicsData)) {
        return view('guest.singleCard', [ 'comicsData' => $comicsData[$index], 'mainBottomData' => $mainBottomData]);
    } else {
        abort(404);
    }

});
