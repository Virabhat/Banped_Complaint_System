<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('HomePage');
});


Route::get('Login', function(){
    return view('Login & Register.Login');
});