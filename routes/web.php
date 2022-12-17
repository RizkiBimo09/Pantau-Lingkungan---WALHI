<?php

use App\Http\Controllers\WalhiController;
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

Route::get('/', [WalhiController::class, 'home']);
Route::get('/pLingkungan', [WalhiController::class, 'PLingkungan']);
Route::get('/artikel', [WalhiController::class, 'Artikel']);
Route::get('/detailartikel', [WalhiController::class, 'DetailArtikel']);
Route::get('/lapor', [WalhiController::class, 'Lapor']);
Route::get('/faq', [WalhiController::class, 'Faq']);
Route::get('/dashboard', [WalhiController::class, 'Dashboard']);
Route::get('/login', [WalhiController::class, 'Login']);
Route::post('/login', [WalhiController::class, 'authenticate']);
Route::get('/register', [WalhiController::class, 'register']);
Route::post('/register', [WalhiController::class, 'store']);
Route::post('/logout', [WalhiController::class, 'logout']);

