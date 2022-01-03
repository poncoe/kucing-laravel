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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/tentang', function () {
    return view('tentang');
})->middleware(['guest'])->name('tentang');

/* Route Admin */

Route::get('/petunjuk-penggunaan', function () {
    return view('petunjuk-penggunaan');
})->middleware(['auth'])->name('petunjuk-penggunaan');

require __DIR__.'/auth.php';
