<?php

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

Route::get('/', function () {

        // recupero array fumetti
        $fumetti = config('comics.fumetti');
        // recupero array icone
        $icone = config('comics.icone');
        // recupero array social
        $social = config('comics.social');
        
    return view('Home', compact('fumetti','icone','social'));
})->name('Home');


Route::get('/home/{id}', function ($id) {

    // recupero array fumetti
    $fumetti = config('comics.fumetti');
    // recupero array icone
    $icone = config('comics.icone');
    // recupero array social
    $social = config('comics.social');

    // prendo un elemento singolo dell'array fumetti
    $single = $fumetti[$id];
    
return view('card', compact('single','icone','social'));
})->name('card');


