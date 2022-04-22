<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                {{ $users->links() }}
                <ul>
                    @foreach ($users as $user)
                        <li class="px-4 py-4">{{ $user->name }}</li>
                    @endforeach
                </ul>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
