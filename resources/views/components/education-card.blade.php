@props([
    'education'
])

<li>
    <x-card>
        <x-slot:left>
            {{ $education["time_frame"] }}
        </x-slot:left>
        <x-slot:title>
            {{ $education["degree"] }} · <a href="{{ $education["school_url"] }}" target="_blank">{{ $education["school"] }}<span class="inline-flex align-top"><i class="ml-2 text-xs fa-solid fa-arrow-up-right-from-square"></i></span></a>
        </x-slot:title>
        <x-slot:subtitle>
            <div class="text-slate-400">{{ $education["location"] }}</div>
            <div class="text-slate-400">{{ $education["type"] }}</div>
        </x-slot:subtitle>
        <x-slot:body>
            <ul class="list-disc text-slate-300 pl-4 mb-5">
                @foreach($education["bullet_points"] as $bullet)
                    <li>{{ $bullet }}</li>
                @endforeach
            </ul>
            <ul class="flex flex-wrap gap-4">
                @foreach($education["tags"] as $tag)
                    <x-tag>
                        {{ $tag }}
                    </x-tag>
                @endforeach
            </ul>
        </x-slot:body>
    </x-card>
</li>
