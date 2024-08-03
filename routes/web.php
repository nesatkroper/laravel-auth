<?php

use App\Http\Controllers\app\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::resource('sale', 'App\http\controllers\app\SaleController');
Route::get('sale/increase', [App\http\controllers\app\saleController::class, 'increase'])->name('sale.increase');

// Route for EmployeeController
Route::resource('emp', 'App\Http\Controllers\app\EmployeeController');

// Route for CustomerController
Route::resource('cus', "App\Http\Controllers\app\CustomerController");

// Route for AuthController
Route::resource('auth', "App\Http\Controllers\app\AuthUserController");

// Route for ProductController
Route::resource('pro', "App\Http\Controllers\app\ProductController");
Route::post('pro/softdelete', [App\Http\Controllers\app\ProductController::class, 'softDelete'])->name('pro.softDelete');
Route::post('pro/addProduct', [App\Http\Controllers\app\ProductController::class, 'addProduct'])->name('pro.addProduct');



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
