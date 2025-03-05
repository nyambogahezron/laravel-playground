<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::view(uri: '/', view: 'home');
Route::view(uri: '/contact', view: 'contact');

Route::resource(name: 'jobs', controller: JobController::class);

Route::get('/register', [RegisterUserController::class, 'index']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);