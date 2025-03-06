<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;


class JobController extends Controller
{
    public function index(): View
    {
        $jobs = Job::with(relations: 'employer')->latest()->simplePaginate(perPage: 10);

        return view(
            view: 'jobs.index',
            data: [

                'jobs' => $jobs,

            ]
        );
    }
    public function show(Job $job): View
    {
        return view(view: 'jobs.show', data: ['job' => $job]);
    }
    public function store(): RedirectResponse
    {
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
    }

    public function edit(Job $job)
    {
        // Gate::authorize('edit-job', $job);

        return view(view: 'jobs.edit', data: ['job' => $job]);
    }

    public function update(Job $job): RedirectResponse
    {

        //validation
        request()->validate(rules: [
            'title' => 'min:3|required',
            'salary' => 'required'
        ]);

        $job->update(attributes: [
            'title' => request(key: 'title'),
            'salary' => request(key: 'salary'),
        ]);

        return redirect(to: '/jobs/' . $job->id);
    }

    public function destroy(Job $job): RedirectResponse
    {
        $job->delete();

        return redirect(to: '/jobs');

    }

    public function create(): View
    {
        return view(view: 'jobs.create');
    }

}
