<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;
use App\Models\Job;


Route::get('/', function (): View {
    return View('home');
});


Route::get('jobs', action: function (): View {
    return view(
        'jobs',
        [

            'jobs' => Job::with(relations: 'employer')->get(),

        ]
    );
});

Route::get('/contact', function (): View {
    return view(view: 'contact');
});

Route::get('/jobs/{id}', function ($id): View {

    $job = Job::find($id);

    return view('job', ['job' => $job]);


});