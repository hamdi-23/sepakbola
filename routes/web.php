<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klasemenController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [klasemenController::class, 'index'])->name('index');
Route::post('/', [klasemenController::class, 'tambah'])->name('tambah.data');
Route::get('/skor', [klasemenController::class, 'skor'])->name('skor');
Route::post('/skor', [klasemenController::class, 'tambahskor'])->name('tambah.skor');
Route::get('/klasemen', [klasemenController::class, 'klasemen'])->name('klasemen');