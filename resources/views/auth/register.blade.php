<x-layout>
    <x-slot name="heading">
        Register
    </x-slot>
    @section(section: 'title', content: 'Register')

    <div class="flex flex-col w-full h-full items-center justify-center">
        <form method="POST" action="/register" class="max-w-[800px] w-full">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <x-form-label for="first_name">First Name</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="first_name" id="first_name" type="text" required
                                    placeholder="John" />
                                <x-form-error name="first_name" />*
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <x-form-label for="last_name">Last Name</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="last_name" id="last_name" type="text" required placeholder="Doe" />
                                <x-form-error name="last_name" />*
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <x-form-label for="email">Email</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="email" id="email" type="email" required
                                    placeholder="johndoe@gmail.com" />
                                <x-form-error name="email" />*
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <x-form-label for="password">Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="password" id="password" type="password" required />
                                <x-form-error name="password" />*
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="password_confirmation" id="password_confirmation" type="password"
                                    required />
                                <x-form-error name="password_confirmation" />*
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-8 px-4">

                <x-button class="text-white" type="submit">
                    Register
                </x-button>
            </div>
        </form>

        <div class="w-fulll items-center justify-center flex mx-auto">
            <a href="/login" class="text-blue-500">Already have an account? Login</a>
        </div>
    </div>
</x-layout>