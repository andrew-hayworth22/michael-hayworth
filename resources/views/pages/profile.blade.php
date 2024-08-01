<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl mb-2">Profile</h1>
                <div class="flex gap-2">
                    <a href="{{ route('admin') }}" class="underline">Back</a>
                </div>
            </div>
            <x-card>
                <div class="max-w-xl">
                    @include('partials.update-profile-information-form')
                </div>
            </x-card>
            <x-card>
                <div class="max-w-xl">
                    @include('partials.update-password-form')
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
