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

    $fumetti = config('comics');
    dump($fumetti);
    
    return view('home', ['fumetti' => $fumetti]);
});

Route::get('/{id}', function ($id) {

    $fumetti = config('comics');
    dump($id);
    $fumetto = $fumetti[$id];
    
    return view('prodotto', ['singoloFumetto' => $fumetto]);
})->name('prodotto');

