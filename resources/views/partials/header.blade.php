<header id="header" class="relative">
    <div class="mx-auto max-w-2xl py-32 sm:py-28 lg:py-32">
        <div class="text-center">
            <div class="flex justify-center mb-10">
                <img class="w-64 max-sm:w-32 h-64 max-sm:h-32 rounded-full" src="{{ url('/img/profilePic.jpeg') }}" aria-label="Headshot" alt="Headshot">
            </div>
            <h1 class="text-4xl font-bold tracking-tight text-slate-200 sm:text-6xl">
                Hello there!
                <br>
                I'm <span class="text-sky-500">Andy Hayworth</span>.
            </h1>
            <p class="mt-6 text-lg leading-8 text-slate-300">
                A young, passionate full stack software engineer with over <span class="text-sky-500">{{ date("Y") - 2020 }} years</span> of professional experience
            </p>
        </div>
    </div>
</header>
