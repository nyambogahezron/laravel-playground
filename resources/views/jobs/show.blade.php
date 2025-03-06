<x-layout>
    <x-slot name="heading">
        job
    </x-slot>
    @section('title', 'About')
    <h2>{{ $job['title'] }}</h2>

    <p>
    <h4>{{ $job['salary'] }}</h4>
    </p>

    @can('edit', $job)
        <x-button href="/jobs/{{$job->id}}/edit" class="bg-blue-500 text-blue-500 mt-5 px-6">Edit Job</x-button>
    @endcan

</x-layout>