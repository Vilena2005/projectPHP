<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main-screen');
})->name('home');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about-us');
})->name('about');

Route::get('/calculator', function () {
    return view('construct');
})->name('calculator');

Route::get('/user', function () {
    return view('user');
})->name('user');
