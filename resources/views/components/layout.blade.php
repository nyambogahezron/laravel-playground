<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- tailwindcss --}}
    @vite(['resources/css/app.css'])

    <title>@yield('title', 'Laravel')</title>



</head>

<body>

    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-8"
                                src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-link :active="request()->is('/')" href="/">Home</x-link>
                                <x-link :active="request()->is('jobs')" href="/jobs">Jobs</x-link>
                                <x-link :active="request()->is('contact')" href="/contact">Contact</x-link>

                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row gap-3.5">
                        @guest
                            <x-link :active="request()->is('login')" href="/login">Login</x-link>
                            <x-link :active="request()->is('register')" href="/register">Register</x-link>
                        @endguest

                        @auth
                            <form action="/logout" method="post">
                                @csrf
                                @method('POST')
                                <x-button type="button" class="px-5 py-2 bg-blue-500 text-white">Logout</x-button>
                            </form>
                        @endauth

                    </div>

                </div>
            </div>


        </nav>

        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
                <x-button href="/jobs/create">create job</x-button>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>







</body>

</html>