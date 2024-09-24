<?php

use App\Http\Controllers\UsersControllers;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index']);
Route::post('/users/login', [UsersControllers::class, 'login']);
Route::get('/users', [UsersControllers::class, 'index'])->middleware('auth:sanctum');