@props([
    'education'
])
<x-app-layout>
    <div>
        <div class="max-w-2xl mx-auto mt-6">
            <form class="flex flex-col gap-4 p-4 sm:p-8 bg-slate-700 shadow sm:rounded-lg" method="post" action="{{ route("educations.update", $education['id']) }}">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $education["id"] }}">

                <div>
                    <x-input-label for="order" :value="__('Order')" />
                    <x-text-input id="order" class="block mt-1 w-full" type="number" min="1" name="order" :value="$education['order']" required autofocus />
                    <x-input-error :messages="$errors->get('order')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="degree" :value="__('Degree')" />
                    <x-text-input id="Degree" class="block mt-1 w-full" type="text" name="degree" :value="$education['degree']" max="150" required autofocus />
                    <x-input-error :messages="$errors->get('degree')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="school" :value="__('School')" />
                    <x-text-input id="School" class="block mt-1 w-full" type="text" name="school" :value="$education['school']" max="150" required/>
                    <x-input-error :messages="$errors->get('school')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="school_url" :value="__('School URL')" />
                    <x-text-input id="school_url" class="block mt-1 w-full" type="url" name="school_url" :value="$education['school_url']" max="300" required/>
                    <x-input-error :messages="$errors->get('school_url')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="location" :value="__('Location')" />
                    <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="$education['location']" max="100" required/>
                    <x-input-error :messages="$errors->get('location')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="type" :value="__('Type')" />
                    <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="$education['location']" max="50" required/>
                    <x-input-error :messages="$errors->get('type')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="time_frame" :value="__('Time Frame')" />
                    <x-text-input id="time_frame" class="block mt-1 w-full" type="text" name="time_frame" :value="$education['time_frame']" max="50" required/>
                    <x-input-error :messages="$errors->get('time_frame')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="bullet_points" :value="__('Bullet Points')" />
                    <x-textarea id="bullet_points" class="block mt-1 w-full" name="bullet_points" required>
                        {{ $education['bullet_points'] }}
                    </x-textarea>
                    <x-input-error :messages="$errors->get('bullet_points')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="tags" :value="__('Tags')" />
                    <x-text-input id="tags" class="block mt-1 w-full" type="text" name="tags" :value="$education['tags']" max="500" required/>
                    <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                </div>

                <div>
                    <x-primary-button>
                        Update
                    </x-primary-button>
                    <a href="{{ route('admin') }}" class="underline text-white">Back</a>
                </div>
            </form>
            <form action="{{ route('educations.destroy', $education['id']) }}" method="post" class="mt-4">
                @csrf
                @method('DELETE')
                <x-danger-button>
                    Delete
                </x-danger-button>
            </form>
        </div>
    </div>
</x-app-layout>
