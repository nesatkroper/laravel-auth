<?php

use App\Http\Controllers\app\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::resource('emp', 'App\Http\Controllers\app\EmployeeController');

Route::resource('cus', "App\Http\Controllers\app\CustomerController");

Route::resource('auth', "App\Http\Controllers\app\AuthUserController");

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
