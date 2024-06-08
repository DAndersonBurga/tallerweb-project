<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.aboutUs');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/reviews', function () {
    return view('pages.reviews');
});
