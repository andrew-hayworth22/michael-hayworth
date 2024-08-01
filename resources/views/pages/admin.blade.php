@props([
    "experiences"
])
<x-app-layout xmlns="http://www.w3.org/1999/html">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl mb-2">Administration</h1>
                <div class="flex gap-2">
                    <a href="{{ route('home') }}" class="underline">Site</a>
                    <a href="{{ route('profile.edit') }}" class="underline">Profile</a>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <x-card>
                    <header>
                        <h2 class="text-lg font-medium text-white">
                            {{ __('Experience') }}
                        </h2>

                        <p class="mt-1 text-sm text-slate-300">
                            {{ __("List of work experiences") }}
                        </p>
                    </header>
                    <ol class="text-sky-100 underline mb-4 mt-6">
                        @foreach($experiences as $experience)
                            <li>
                                <a href="{{ route('experiences.edit', $experience['id']) }}">{{ $experience->order . '. ' . $experience->title }}</a>
                            </li>
                        @endforeach
                    </ol>
                    <a href="{{ route('experiences.create') }}" class="text-sky-100 underline">Create Experience</a>
                </x-card>
                <x-card>
                    <header>
                        <h2 class="text-lg font-medium text-white">
                            {{ __('Education') }}
                        </h2>

                        <p class="mt-1 text-sm text-slate-300">
                            {{ __("List of educational degrees") }}
                        </p>
                    </header>
                    <ol class="text-sky-100 underline mb-4 mt-6">
                        @foreach($educations as $education)
                            <li>
                                <a href="{{ route('educations.edit', $education['id']) }}">{{ $education->order . '. ' . $education->degree }}</a>
                            </li>
                        @endforeach
                    </ol>
                    <a href="{{ route('educations.create') }}" class="text-sky-100 underline">Create Education</a>
                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>
