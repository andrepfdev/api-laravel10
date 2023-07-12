<?php

//use Illuminate\Http\Request;

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BookController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/users', UserController::class);
//Route::get('/users', [UserController::class, 'index']);
//Route::post('/users', [UserController::class, 'store']);
//Route::get('/users/{id}', [UserController::class, 'show']);
//Route::patch('/users/{id}', [UserController::class, 'update']);
//Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::apiResource('/books', BookController::class);
//Route::get('/books', [BookController::class, 'index']);
//Route::post('/books', [BookController::class, 'store']);
//Route::get('/books/{id}', [BookController::class, 'show']);
//Route::put('/books/{id}', [BookController::class, 'update']);
//Route::delete('/books/{id}', [BookController::class, 'destroy']);

Route::apiResource('/address', AddressController::class);

Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});