<div class="grid grid-cols-8 gap-6 hover:bg-slate-800 transition-colors duration-500 rounded-lg p-6">
    <div class="sm:col-span-2 col-span-8 text-slate-400">
        {{ $left }}
    </div>
    <div class="sm:col-span-6 col-span-8">
        <div class="mb-5">
            <h3 class="text-slate-200 text-xl font-semibold">
                {{ $title }}
            </h3>
            {{ $subtitle }}
        </div>
        {{ $body }}
    </div>
</div>
