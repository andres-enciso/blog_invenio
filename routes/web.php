<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get("login", [AuthController::class, "login"])->name('login')->middleware('checkSession');
Route::post("postLogin", [AuthController::class, "postLogin"])->name('post.login')->middleware('checkSession');

Route::get("inicio", [BlogController::class, "index"])->name('index')->middleware('checkSession');

Route::get("detalle/{any}", [BlogController::class, "detalle"])->name('detalle')->middleware('checkSession');

Route::get("form/{any}", [BlogController::class, "form"])->name('form')->middleware('checkSession');

Route::post("postEntrada", [BlogController::class, "postEntrada"])->name('post.entrada')->middleware('checkSession');
Route::post("updateEntrada", [BlogController::class, "updateEntrada"])->name('update.entrada')->middleware('checkSession');
Route::get('/entradas', [BlogController::class, 'searchEntradas'])->name('buscar.entradas')->middleware('checkSession');;