<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;


Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'findOne']);

Route::post('/users',[UserController::class,'store']);

Route::get('/addresses',[AddressController::class,'index']);
Route::get('/addresses/{id}',[AddressController::class,'findOne']);

Route::post('/addresses',[AddressController::class,'store']);

Route::get('/invoices',[InvoiceController::class,'index']);
Route::get('/invoices/{id}',[InvoiceController::class,'findOne']);

Route::post('/invoices',[InvoiceController::class,'store']);

