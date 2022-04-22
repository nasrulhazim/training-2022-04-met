<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-panel>
            <x-table title="Posts" description="List of posts in this application"
                newRoute="{{ route('posts.create') }}">
                <x-slot:header>
                    <x-table.th>
                        Title
                    </x-table.th>
                </x-slot:header>
                @foreach ($posts as $post)
                    <tr>
                        <x-table.td>
                            {{ $post->title }}
                        </x-table.td>
                    </tr>
                @endforeach
                <x-slot:footer>
                    {{ $posts->links() }}
                </x-slot:footer>
            </x-table>
        </x-panel>
    </div>
</x-app-layout>
