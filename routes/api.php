<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\RoleController;

Route::post('/register', [UserController::class, 'registerGuest']);
Route::post('/login', [UserController::class, 'loginWithCode']);

Route::get('/roles', [UserController::class, 'getRoles']);
Route::post('/users/{user}/choose-role', [UserController::class, 'chooseRole']);
//Route::get('/roles', [RoleController::class, 'index']);

Route::get('/quiz/{level}', [UserController::class, 'getQuiz']);

Route::post('/progress/update', [UserController::class, 'updateProgress']);
Route::get('/progress/{user_id}', [UserController::class, 'showProgress']);
