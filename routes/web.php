<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
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

//Route::get('/project', function () {
//    return view('project');
//})->name('project');

//Route::get('/review', function () {
//    return view('review');
//})->name('review');



Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/review', [\App\Http\Controllers\PostController::class, 'makeReview'])->name('review');

Route::middleware('guest')->group(function () {

    Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

    Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');




});
Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
    //Создание отзыва
    Route::post('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('post');
});
