<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KucingController;
use App\Http\Controllers\HomeyController;
use Illuminate\Support\Facades\DB;

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
    return view('homey.welcome')->name('homey');
});

Route::get('/tentang', function () {
    return view('tentang');
})->middleware(['guest'])->name('tentang');

/* Route Admin */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/petunjuk-penggunaan', function () {
    return view('petunjuk-penggunaan');
})->middleware(['auth'])->name('petunjuk-penggunaan');

/* Route Restful, View & Guest Data Jenis Kucing */

Route::resource('jeniskucing', KucingController::class);
Route::resource('homey', HomeyController::class);

Route::get('jenisKucing', function () {
    return view('jeniskucing.index');
})->middleware(['auth'])->name('jenisKucing');


require __DIR__ . '/auth.php';
