<?php

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
    $comics = config('comics');
    // dd($comics);
    return view('home', compact('comics'));
})->name('home');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/chi_siamo', function () {
    return view('chi_siamo');
})->name('chi_siamo');

Route::get('/descrizione', function () {
    $comics = config('comics');
    // dd($comics);
    return view('documentazione', compact('comics'));
})->name('documentazione');
