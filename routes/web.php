<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\AuthController;

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
Route::get('/aspirasi', [HomeController::class, 'index_aspirasi'])->name("index");
Route::get('/aspirasi/create', [HomeController::class, 'create'])->name("create");
Route::post('/store', [HomeController::class, 'store'])->name("store");

Route::get('/', [AspirasiController::class, 'index'])->name("dashboard");
Route::get('/detail/{email}', [AspirasiController::class, 'detail'])->name("detail-aspirasi")->middleware(["withAuth"]);

Route::get("/list-admin", [AuthController::class, "index"])->name("list-admin")->middleware(["withAuth"]);
Route::any("/add-admin", [AuthController::class, "addAdmin"])->name("add-admin")->middleware(["withAuth"]);
Route::any("login", [AuthController::class, "login"])->name("login")->middleware(["noAuth"]);
Route::any("logout", [AuthController::class, "logout"])->name("logout")->middleware(["withAuth"]);
Route::get("/destroy/{id}", [AuthController::class, 'destroy'])->name('destroy')->middleware(["withAuth"]);
