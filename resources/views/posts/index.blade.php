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
                    <x-table.th>
                        Owner
                    </x-table.th>
                    <x-table.th>

                    </x-table.th>
                </x-slot:header>
                @foreach ($posts as $post)
                {{-- @php $post->load('user') @endphp --}}
                    <tr>
                        <x-table.td>
                            {{ $post->title }}
                        </x-table.td>
                        <x-table.td>
                            {{ $post->user->name }}
                        </x-table.td>
                        <x-table.td>
                            <div class="inline-flex">
                                <a class="px-2 hover:text-indigo-600" href="{{ route('posts.show', $post) }}">
                                    Details
                                </a>
                                <a class="px-2 hover:text-indigo-600" href="{{ route('posts.edit', $post) }}">
                                    Edit
                                </a>
                                <form method="POST" action="{{ route('posts.destroy', $post) }}" class="hover:text-red-600">
                                    @csrf @method('DELETE')

                                    <a class="px-2" href="#" onclick="event.preventDefault();
                                        if(confirm('Are you sure want to delete this record?')) {
                                            this.closest('form').submit();
                                        }
                                    ">Delete</a>
                                </form>
                            </div>
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
