<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanPerjalananController;
use App\Http\Controllers\HomeController;
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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', function () {
    return view('Register');
});

Route::post('/register', [AuthController::class, 'register']);

Route::get('/home', [HomeController::class, 'index']);

Route::resource('catatan-perjalanan', CatatanPerjalananController::class);

