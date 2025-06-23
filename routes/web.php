<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AbcController;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[AboutController::class,'About'])->name('about.page');
Route::get('/contact',[ContactController::class,'contact'])->name('contact.page');


//Customer
Route::get('/customer',[CustomerController::class,'index'])->name('customer');
Route::post('/customer/save',[CustomerController::class,'save'])->name('customer.save');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/{id}/update', [CustomerController::class, 'update'])->name('customer.updated');
Route::delete('/customer/{id}/delete', [CustomerController::class, 'Delete'])->name('customer.delete');





Route::get('/letter/{char}', [AbcController::class, 'show'])->name('letter.show');


//users 
Route::get('/users',[userscontroller::class,'index'])->name('index.view');
Route::get('/users/create',[userscontroller::class,'create'])->name('crate.users');
Route::post('/users/store',[userscontroller::class,'store'])->name('crate.store');
Route::get('/users/{id}/edit', [userscontroller::class, 'edit'])->name('users.edit');
Route::post('/users/{id}/update', [userscontroller::class, 'update'])->name('users.update');
Route::delete('/users/{id}/delete', [userscontroller::class, 'Delete'])->name('users.delete');



// Product
Route::get('/product',[ProductController::class,'index'])->name('index');
Route::post('/product/save',[ProductController::class,'save'])->name('product.save');


