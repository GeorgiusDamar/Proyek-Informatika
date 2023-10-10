<?php

use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Route;

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
// MobilController
Route::get('/mobil', [MobilController::class, 'index'])->name('mobil');

Route::get('/tambahmobil', [MobilController::class, 'tambahmobil'])->name('tambahmobil');

//untuk insert ke database
Route::post('/insertdata', [MobilController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id_mobil}', [MobilController::class, 'tampilkandata'])->name('tampilkandata');

//jika akan menginputkan sesuatu, pakai POST
Route::post('/updatedata/{id_mobil}', [MobilController::class, 'updatedata'])->name('updatedata');


Route::get('/delete/{id_mobil}', [MobilController::class, 'delete'])->name('delete');
