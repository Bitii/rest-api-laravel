<?php

use App\Http\Controllers\UsersControllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/users/login', [UsersControllers::class, 'login']);

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 */