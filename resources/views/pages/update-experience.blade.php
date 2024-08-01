@props([
    "experience"
])
<x-app-layout>
    <div>
        <x-card class="max-w-2xl mx-auto mt-6">
            <form class="flex flex-col gap-4" method="post" action="{{ route("experiences.update", $experience["id"]) }}">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $experience["id"] }}">

                <div>
                    <x-input-label for="order" :value="__('Order')" />
                    <x-text-input id="order" class="block mt-1 w-full" type="number" min="1" name="order" :value="$experience['order']" required autofocus />
                    <x-input-error :messages="$errors->get('order')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$experience['title']" max="150" required/>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="company" :value="__('Company')" />
                    <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="$experience['company']" max="150" required/>
                    <x-input-error :messages="$errors->get('company')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="company_url" :value="__('Company URL')" />
                    <x-text-input id="company_url" class="block mt-1 w-full" type="url" name="company_url" :value="$experience['company_url']" max="300" required/>
                    <x-input-error :messages="$errors->get('company_url')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="location" :value="__('Location')" />
                    <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="$experience['location']" max="100" required/>
                    <x-input-error :messages="$errors->get('location')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="type" :value="__('Type')" />
                    <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="$experience['type']" max="50" required/>
                    <x-input-error :messages="$errors->get('type')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="time_frame" :value="__('Time Frame')" />
                    <x-text-input id="time_frame" class="block mt-1 w-full" type="text" name="time_frame" :value="$experience['time_frame']" max="50" required/>
                    <x-input-error :messages="$errors->get('time_frame')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="bullet_points" :value="__('Bullet Points')" />
                    <x-textarea id="bullet_points" class="block mt-1 w-full" name="bullet_points" required>
                        {{ $experience['bullet_points'] }}
                    </x-textarea>
                    <x-input-error :messages="$errors->get('bullet_points')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="tags" :value="__('Tags')" />
                    <x-text-input id="tags" class="block mt-1 w-full" type="text" name="tags" :value="$experience['tags']" max="500" required/>
                    <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                </div>

                <div>
                    <x-primary-button>
                        Update
                    </x-primary-button>
                    <a href="{{ route('admin') }}" class="underline text-white">Back</a>
                </div>
            </form>
            <form action="{{ route('experiences.destroy', $experience['id']) }}" method="post" class="mt-4">
                @csrf
                @method('DELETE')
                <x-danger-button>
                    Delete
                </x-danger-button>
            </form>
        </x-card>
    </div>
</x-app-layout>
