@props([
    'experiences'
])

<div>
    <h2 class="text-2xl font-bold tracking-tight text-sky-500 sm:text-4xl mb-2">Experience</h2>

    <ol>
        @foreach($experiences as $experience)
            <x-experience-card :experience="$experience"/>
        @endforeach
    </ol>
</div>
