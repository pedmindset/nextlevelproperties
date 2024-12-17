<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('/real-estate', function(){
    return view('real');
})->name('real-estate');

Route::get('/Infrastructure', function(){
    return view('infras');
})->name('infrastructure');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');
