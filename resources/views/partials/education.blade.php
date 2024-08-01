@props([
    'educations'
])

<div>
    <h2 class="text-2xl font-bold tracking-tight text-sky-500 sm:text-4xl mb-2">Education</h2>

    <ol>
        @foreach($educations as $education)
            <x-education-card :education="$education"/>
        @endforeach
    </ol>
</div>
