@props([
    'experience'
])

<li class="grid grid-cols-8 gap-6 hover:bg-slate-800 transition-colors duration-500 rounded-lg p-6">
    <div class="sm:col-span-2 col-span-8 text-slate-400">{{ $experience["time_frame"] }}</div>
    <div class="sm:col-span-6 col-span-8">
        <div class="mb-5">
            <h3 class="text-slate-200 text-xl font-semibold">{{ $experience["title"] }}</h3>
            <div class="text-slate-400">{{ $experience["location"] }}</div>
            <div class="text-slate-400">{{ $experience["type"] }}</div>
        </div>
        <ul class="list-disc text-slate-300 pl-4 mb-5">
            @foreach($experience["bullet_points"] as $bullet)
                <li>{{ $bullet }}</li>
            @endforeach
        </ul>
        <ul class="flex flex-wrap gap-4">
            @foreach($experience["tags"] as $tag)
                <x-tag>
                    {{ $tag }}
                </x-tag>
            @endforeach
        </ul>
    </div>
</li>
