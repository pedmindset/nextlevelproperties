<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
 Route :: get('about', function(){
    return view('about');
 });

Route::get('/real-estate', function(){
    return view('real');
});

Route::get('/Infrastructure', function(){
    return view('infras');
});
Route::get('/contact', function(){
    return view('contact');
});