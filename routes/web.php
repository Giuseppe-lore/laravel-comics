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
    return view('home');
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    $comics_series_array = config('comics');
    return view('comics', ['comics_series_array' => $comics_series_array]);
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop'); 
})->name('shop');

Route::get('/product/{id}', function ($id) {
    $comics_series_array = config('comics');
    $current_comics = [];

    foreach($comics_series_array as $comics_item) {
        if($comics_item['id'] == $id) {
            $current_comics = $comics_item;
        }
    }

    $data = [
        'current_comics' => $current_comics
    ];
        
    return view('single-product', $data);
})->name('single'); 