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

    $comics = config('comic-data');

    return view('home', [
        'user' => 'Stefano',
        'genres' => ['genere1', 'genere2', 'genere3'],
        'cards' => $comics,
    ]);
})->name('home');

Route::get('/comic/{id}', function ($id) {

    $comics = config('comic-data');

    if(is_numeric($id) && $id >= 0 && $id < count($comics)) {
        dump($comics[$id]);
    } else {
        abort(404);
    }

});

Route::get('/news', function () {
    return view('news', [

    ]);
})->name('news');