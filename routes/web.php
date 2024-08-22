<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\loginsign;
use App\Http\Controllers\adminController;
use App\Http\Controllers\PayController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/new',function(){
    return view('new');

});

Route::get('/signup',function(){
    return view('signup');

});

Route::get('/login',function(){
    return view('login');
});

Route::get('/about',function(){
    return view('about');

});

Route::get('/profile',function(){
    return view('profile');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/pay',function(){
    return view('pay');
});

Route::get('/intro',function(){
    return view('intro');
});

Route::get('/admin',function(){
    return view('admin');
});

Route::post('/signup',[SignupController::class,'signin']);
Route::post('/profile',[ProfileController::class,'profiledata']);
Route::post('/contact',[ContactController::class,'comment']);
Route::post('/login',[loginsign::class,'indexlog']);
Route::post('/admin',[adminController::class,'salarydetail']);
Route::get('/payf', [PayController::class, 'paysheet']);
Route::get('/payO', [PayController::class, 'paysheets']);

