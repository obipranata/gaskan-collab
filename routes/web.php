<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AspirasiController;

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

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/form-user', [HomeController::class, 'create'])->name("form-user");
Route::post('/store', [HomeController::class, 'store'])->name("store");

Route::get('/', [AspirasiController::class, 'index'])->name("dashboard");
Route::get('/detail', [AspirasiController::class, 'create'])->name("detail-aspirasi");
