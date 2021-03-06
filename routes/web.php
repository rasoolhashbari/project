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
    return view('index');
});

Route::get('questions/create', function () {
    return view('questions.create');
});

Route::get('questions', function () {
    return view('questions.index');
});

Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});

Route::get('403', function () {
    return view('errors.403');
});
Route::get('404', function () {
    return view('errors.404');
});
Route::get('500', function () {
    return view('errors.500');
});
Route::get('index', function () {
    return view('blog.index');
});
Route::get('show', function () {
    return view('blog.show');
});

