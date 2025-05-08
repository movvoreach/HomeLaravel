<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AbcController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[AboutController::class,'About'])->name('about.page');
Route::get('/contact',[ContactController::class,'contact'])->name('contact.page');


//Customer
Route::get('/customer',[CustomerController::class,'index'])->name('customer');
Route::post('/customer/save',[CustomerController::class,'save'])->name('customer.save');



Route::get('/letter/{char}', [AbcController::class, 'show'])->name('letter.show');










