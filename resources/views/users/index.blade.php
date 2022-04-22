<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-4">
                <x-table title="Users" description="List of users in this application" newRoute="{{ route('users.create') }}">
                    <x-slot:header>
                        <x-table.th>
                            Name
                        </x-table.th>
                        <x-table.th>
                            E-mail
                        </x-table.th>
                    </x-slot:header>
                    @foreach ($users as $user)
                        <tr>
                            <x-table.td>
                                {{ $user->name }}
                            </x-table.td>
                            <x-table.td>
                                {{ $user->email }}
                            </x-table.td>
                        </tr>
                    @endforeach
                    <x-slot:footer>
                        {{ $users->links() }}
                    </x-slot:footer>
                </x-table>
        </div>
    </div>
</x-app-layout>
