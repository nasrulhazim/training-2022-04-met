<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-panel>
            <div class="flex flex-col sm:justify-center items-center">
                <form method="POST" action="{{ route('users.store') }}" class="w-full sm:max-w-md ">
                    @csrf

                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                        <x-form.error name="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required />
                        <x-form.error name="email" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                        <x-form.error name="password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    {{-- <x-jet-validation-errors class="mb-4" /> --}}

                    <div class="flex items-center justify-end mt-4">
                        <a class="text-gray-300 hover:text-indigo-600" href="{{ route('users.index') }}">Cancel</a>
                        <x-jet-button class="ml-4">
                            {{ __('Add User') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </x-panel>
    </div>
</x-app-layout>
