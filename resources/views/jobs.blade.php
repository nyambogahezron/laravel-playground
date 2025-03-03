<x-layout>
    <x-slot name="heading">
        jobs Listings
    </x-slot>
    @section('title', 'About')
    <ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id']}}" >
                <strong>{{ $job['title'] }}</strong>
                <p>{{ $job['salary'] }}</p>
            </a>
        </li>

    @endforeach
    </ul>
</x-layout>