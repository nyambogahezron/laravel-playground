<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::view(uri: '/', view: 'home');
Route::view(uri: '/contact', view: 'contact');

Route::get(uri: 'jobs', action: [JobController::class, 'index']);
Route::get(uri: '/jobs/create', action: [JobController::class, 'create'])->middleware('auth');
Route::get(uri: '/jobs/{job}', action: [JobController::class, 'show']);
Route::get(uri: '/jobs/{job}/edit', action: [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');
Route::patch(uri: '/jobs/{job}', action: [JobController::class, 'update'])
    ->middleware('auth')
    ->can('edit', 'job');
Route::delete(uri: '/jobs/{job}', action: [JobController::class, 'destroy'])->middleware('auth')
    ->can('edit', 'job');
Route::post(uri: '/jobs', action: [JobController::class, 'store'])->middleware('auth');


Route::get('/register', [RegisterUserController::class, 'index']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);