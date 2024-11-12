<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CartController::class)->group(function(){
    Route::POST('buy-now','buyNow')->name('buy_now');

});

Route::GET('success',function(){
    return view('success');
})->name('success');

Route::GET('cencle',function(){
    return view('cencle');
})->name('cencle');
