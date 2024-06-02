<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route:: get('/about', function(){
    return view('about', ['nama'=>'khoirul aryan perdana']);
});

route :: get('/home', function(){
    return view('home');
});

route :: get('/contact', function(){
    return view('contact');
});

route :: get('/store', function(){
    return view('store');
});
