<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-panel>
            <div class="flex flex-col sm:justify-center items-center">
                <form method="POST" action="{{ route('posts.store') }}" class="w-full sm:max-w-md ">
                    @csrf

                    <div>
                        <x-jet-label for="title" value="{{ __('Title') }}" />
                        <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                            required autofocus  />
                        <x-form.error name="title" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="content" value="{{ __('Content') }}" />
                        <x-jet-input id="content" class="block mt-1 w-full" name="content" :value="old('content')"
                            required />
                        <x-form.error name="content" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="text-gray-300 hover:text-indigo-600" href="{{ route('posts.index') }}">Cancel</a>
                        <x-jet-button class="ml-4">
                            {{ __('Add Post') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </x-panel>
    </div>
</x-app-layout>
