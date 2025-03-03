<x-layout>
    <x-slot name="heading">
        job
    </x-slot>
    @section('title', 'About')
   <h2>{{ $job['title'] }}</h2>

   <p>
    <h4>{{ $job['salary'] }}</h4>
   </p>
</x-layout>