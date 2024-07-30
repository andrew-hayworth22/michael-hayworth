@props([
    "experiences"
])
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl mb-2">Administration</h1>
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
            </div>
        </div>
    </div>
</x-app-layout>
