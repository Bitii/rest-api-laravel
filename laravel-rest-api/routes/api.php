<?php

use App\Http\Controllers\UsersControllers;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/users/login', [UsersControllers::class, 'login']);

Route::get('/users', [UsersControllers::class, 'index'])->middleware('auth:sanctum');