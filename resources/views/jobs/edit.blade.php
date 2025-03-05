<x-layout>
    <x-slot name="heading">
        Edit Job: {{ $job->title }}
    </x-slot>
    @section(section: 'title', content: 'Create Job')

    <div>
        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('PATCH')

            <div class="space-y-12">

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900 capitalize">Create a new job</h2>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <x-form-label for="title">Title</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="title" id="title" type="text" value="{{ $job->title}}" required
                                    placeholder="Developer" />
                                <x-form-error name="title" />*
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <x-form-label for="salary">Salary</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="salary" id="salary" type="number" required placeholder='$.1000'
                                    value="{{ $job->salary}}" />
                                <x-form-error name="salary" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <div>
                    <x-button form="delete-job" type="button" class="rounded-md bg-red-600 text-white">Delete</x-button>
                </div>
                <div class="flex items-center gap-x-6">

                    <x-button type="submit" class="rounded-md bg-indigo-600 text-white">Update</x-button>
                </div>
            </div>
        </form>
        <form action="/jobs/{{ $job->id }}" method="POST" class="hidden" id="delete-job">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>