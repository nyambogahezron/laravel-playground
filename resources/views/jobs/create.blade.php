<x-layout>
    <x-slot name="heading">
        Create Job
    </x-slot>
    @section(section: 'title', content: 'Create Job')

    <div class="flex flex-col w-full h-full items-center justify-center">
        <form method="POST" action="/jobs" class="max-w-[800px] w-full">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900 capitalize">Create a new job</h2>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <x-form-label for="title">Title</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="title" id="title" type="text" required placeholder="Developer" />
                                <x-form-error name="title" />*
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <x-form-label for="salary">Salary</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="salary" id="salary" type="number" required placeholder='$.1000' />
                                <x-form-error name="salary" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-8 px-4">
                <x-button type="link" href='/jobs' class="text-red-600 bg-transparent border-0">
                    Cancel
                </x-button>
                <x-button class="text-white" type="submit">
                    Create
                </x-button>
            </div>
        </form>
    </div>
</x-layout>