@props([
    'experiences'
])

<x-app-layout>
    @include("partials.header")

    <div class="mx-auto w-11/12 sm:w-3/4 md:max-w-xl lg:max-w-2xl xl:max-w-3xl 2xl:max-w-4xl 3xl:max-w-7xl mb-24">
        @include("partials.links")
        @include("partials.experience", [$experiences])
    </div>

    <footer class="w-full bg-sky-400 text-slate-900 p-6 text-center">
        Built with Laravel, Tailwind, and SQLite. Deployed with Laravel Forge, AWS EC2, and AWS Route 53.
    </footer>
</x-app-layout>
