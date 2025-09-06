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
    return view('home.home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.aboutus');
})->name('about-us');

Route::get('/resume', function () {
    return view('pages.resume');
})->name('resume');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');