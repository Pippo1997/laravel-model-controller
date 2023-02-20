<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicsController as ComicsController;

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

// ROUTE CON CONTROLLER

//Route della pagina principale
Route::get('/', [ComicsController::class, 'index'])->name('home');

//Route della seconda pagina con il comic in dettaglio
Route::get('/card/{slug}', [ComicsController::class, 'index'])->name('card');
