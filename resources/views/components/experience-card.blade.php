@props([
    'experience'
])

<li>
    <x-resume-card>
        <x-slot:left>
            {{ $experience["time_frame"] }}
        </x-slot:left>
        <x-slot:title>
            {{ $experience["title"] }} · <a href="{{ $experience["company_url"] }}" target="_blank">{{ $experience["company"] }}<span class="inline-flex align-top"><i class="ml-2 text-xs fa-solid fa-arrow-up-right-from-square"></i></span></a>
        </x-slot:title>
        <x-slot:subtitle>
            <div class="text-slate-400">{{ $experience["location"] }}</div>
            <div class="text-slate-400">{{ $experience["type"] }}</div>
        </x-slot:subtitle>
        <x-slot:body>
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
        </x-slot:body>
    </x-resume-card>
</li>
