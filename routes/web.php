<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('home',[LoginController::class,'home'])->name('home');
Route::post('LoginCheck',[LoginController::class,'LoginCheck'])->name('LoginCheck');

Route::get('Login', function(){
    return view('Login & Register.Login');
});

Route::middleware('admin')->group(function(){
    Route::get('admin',[AdminController::class,'admin'])->name('admin');
}); 

// Route::get('admin',function(){
//     return view('Layouts.AdminLayout');
// })->middleware('admin');