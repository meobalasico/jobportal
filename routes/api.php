<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;




// Retrieve all users
Route::get('/users', [UserController::class, 'index']);

// Retrieve a specific user by ID
Route::get('/users/{id}', [UserController::class, 'show']);

// Create a new user
Route::post('/store', [UserController::class, 'store']);

// Update a user by ID
Route::post('/users/{id}', [UserController::class, 'update']);

// Delete a user by ID
Route::delete('/users/{id}', [UserController::class, 'destroy']);
