<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Pages/home');
})->name('app_home');

// on peut aussi ecrire les fonctions de call back comme ci dessous en php
//Route::get('/', fn() => view('Pages/home'))->name('app_home');

// on peut aussi appeller une route directement sous Laravel
//Route::view('/','Pages/home')->name('app_home');

Route::get('/about_us', function () {
    return view('Pages/about');
})->name('app_about');

Route::get('/help', function () {
    return view('Pages/help');
})->name('app_help');



