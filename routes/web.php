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
    return view('welcome');

});

Route::get('/history', function () {
    return view('history.history');

});

Route::get('/contact', function () {
    return view('contact.contact');

});

Route::get('/portfolio/project-1', function () {
    return view('portfolio.project-1');

});



