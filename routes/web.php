<?php

use Illuminate\Support\Facades\Route;

class job
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'salary' => '$1200',
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'salary' => '$4500',
            ],
            [
                'id' => 3,
                'title' => 'Java Developer',
                'salary' => '$3000',
            ],
            [
                'id' => 4,
                'title' => 'C# Developer',
                'salary' => '$2500',
            ],
            [
                'id' => 5,
                'title' => 'Ruby Developer',
                'salary' => '$2000',
            ],
        ];
    }
}


Route::get('/', function () {
    return View('home');
});


Route::get('jobs', action: function () {
    return view(
        'jobs',
        [

            'jobs' => job::all(),

        ]
    );
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {


    // $job = \Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] == $id;
    // });


    $job = \Illuminate\Support\Arr::first(job::all(), fn($job) => $job['id'] == $id);


    // dd($job);

    return view('job', ['job' => $job]);


});