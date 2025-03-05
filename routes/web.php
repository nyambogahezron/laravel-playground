<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::view(uri: '/', view: 'home');
Route::view(uri: '/contact', view: 'contact');

Route::resource(name: 'jobs', controller: JobController::class);



