<x-layout>
    <x-slot name="heading">
        jobs Listings
    </x-slot>
    @section('title', 'About')
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id']}}" class="block px-4 py-6 border-gray-50 rounded-lg shadow-sm">
                <div class="text-blue-600 font-bold">
                    {{ $job->employer->name}}
                </div>
                <strong>{{ $job['title'] }}</strong>
                <p>${{ $job['salary'] }}</p>
            </a>

        @endforeach
    </div>
</x-layout>