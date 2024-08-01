<x-app-layout>
    <div>
        <form class="flex flex-col gap-4 max-w-2xl mx-auto p-4 sm:p-8 bg-slate-700 shadow sm:rounded-lg mt-6" method="post" action="{{ route("experiences.store") }}">
            @csrf

            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" max="150" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="company" :value="__('Company')" />
                <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" max="150" required/>
                <x-input-error :messages="$errors->get('company')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="company_url" :value="__('Company URL')" />
                <x-text-input id="company_url" class="block mt-1 w-full" type="url" name="company_url" :value="old('company_url')" max="300" required/>
                <x-input-error :messages="$errors->get('company_url')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="location" :value="__('Location')" />
                <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" max="100" required/>
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="type" :value="__('Type')" />
                <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('location')" max="50" required/>
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="time_frame" :value="__('Time Frame')" />
                <x-text-input id="time_frame" class="block mt-1 w-full" type="text" name="time_frame" :value="old('time_frame')" max="50" required/>
                <x-input-error :messages="$errors->get('time_frame')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="bullet_points" :value="__('Bullet Points')" />
                <x-textarea id="bullet_points" class="block mt-1 w-full" name="bullet_points" :value="old('bullet_points')" required>
                </x-textarea>
                <x-input-error :messages="$errors->get('bullet_points')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="tags" :value="__('Tags')" />
                <x-text-input id="tags" class="block mt-1 w-full" type="text" name="tags" :value="old('tags')" max="500" required/>
                <x-input-error :messages="$errors->get('tags')" class="mt-2" />
            </div>

            <div>
                <x-primary-button>
                    Create
                </x-primary-button>
                <a href="{{ route('admin') }}" class="underline text-white">Back</a>
            </div>
        </form>
    </div>
</x-app-layout>
