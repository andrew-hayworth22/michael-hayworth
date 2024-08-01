@props([
    "experiences"
])
<x-app-layout xmlns="http://www.w3.org/1999/html">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl mb-2">Administration</h1>
                <div class="flex gap-2">
                    <a href="{{ route('home') }}" class="underline">Back to Site</a>
                    <a href="{{ route('profile.edit') }}" class="underline">Profile</a>
                </div>
            </div>
            <div class="bg-slate-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold tracking-tight text-sky-500 sm:text-4xl mb-2">Experience</h2>
                    <ol class="text-sky-100 underline mb-4">
                        @foreach($experiences as $experience)
                            <li>
                                <a href="{{ route('experiences.edit', $experience['id']) }}">{{ $experience->order . '. ' . $experience->title }}</a>
                            </li>
                        @endforeach
                    </ol>
                    <a href="{{ route('experiences.create') }}" class="text-sky-100 underline">Create Experience</a>
                </div>
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold tracking-tight text-sky-500 sm:text-4xl mb-2">Education</h2>
                    <ol class="text-sky-100 underline mb-4">
                        @foreach($educations as $education)
                            <li>
                                <a href="{{ route('educations.edit', $education['id']) }}">{{ $education->order . '. ' . $education->degree }}</a>
                            </li>
                        @endforeach
                    </ol>
                    <a href="{{ route('educations.create') }}" class="text-sky-100 underline">Create Education</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
