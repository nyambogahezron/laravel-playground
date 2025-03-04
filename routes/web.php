<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;
use App\Models\Job;


Route::get(uri: '/', action: function (): View {
    return View(view: 'home');
});

Route::get(uri: 'jobs', action: function (): View {
    return view(
        view: 'jobs.index',
        data: [

            'jobs' => Job::with(relations: 'employer')->latest()->simplePaginate(perPage: 10),

        ]
    );
});

Route::get(uri: '/jobs/create', action: function (): View {

    return view(view: 'jobs.create');

});


Route::get(uri: '/jobs/{id}', action: function ($id): View {

    $job = Job::find(id: $id);

    return view(view: 'jobs.show', data: ['job' => $job]);

});

Route::post(uri: '/jobs', action: function () {

    //validation
    request()->validate(rules: [
        'title' => 'min:3|required',
        'salary' => 'required'
    ]);

    Job::create(attributes: [
        'title' => request(key: 'title'),
        'salary' => request(key: 'salary'),
        'employer_id' => 1
    ]);

    return redirect(to: '/jobs');

});

Route::get(uri: '/contact', action: function (): View {
    return view(view: 'contact');
});
