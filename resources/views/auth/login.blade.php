<x-layout>
    <x-slot name="heading">
        Login
    </x-slot>
    @section(section: 'title', content: 'Create Job')

    <div class="flex flex-col w-full h-full items-center justify-center">
        <form method="POST" action="/login" class="max-w-[800px] w-full">
            @csrf

            <div class="space-y-2">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <x-form-label for="email">Email</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="email" id="email" type="email" :value="old('email')" required
                                    placeholder="johndoe@gmail.com" />
                                <x-form-error name="email" />*
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <x-form-label for="password">Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="password" id="password" type="password" :value="old('password')"
                                    required placeholder="Doe" />
                                <x-form-error name="password" />*
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-8 px-4">

                <x-button class="text-white" type="submit">
                    Login
                </x-button>
            </div>
        </form>

        <div class="w-fulll items-center justify-center flex mx-auto">
            <a href="/register" class="text-blue-500">Dont have an account? Register</a>
        </div>
    </div>
</x-layout>