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
Route::get('/pLingkungan-INA', [WalhiController::class, 'PLingkunganINA']);
Route::get('/pLingkungan-EN', [WalhiController::class, 'PLingkunganEN']);
Route::get('/dashboard', [WalhiController::class, 'Dashboard']);
Route::get('/artikel', [WalhiController::class, 'Artikel']);
Route::get('/detailartikel', [WalhiController::class, 'DetailArtikel']);
Route::get('/lapor', [WalhiController::class, 'Lapor']);
Route::get('/faq', [WalhiController::class, 'Faq']);
