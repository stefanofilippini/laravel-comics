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
    return view('home', [
        'user' => 'Stefano',
        'genres' => ['genere1', 'genere2', 'genere3']
    ]);
})->name('home');

Route::get('/news', function () {
    return view('news', [

    ]);
})->name('news');