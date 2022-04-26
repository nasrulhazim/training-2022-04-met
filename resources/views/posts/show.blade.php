<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-panel>
            {{ $post->content }} - <span class="text-red-500">Posted by {{ $post->user->name }} on {{ $post->created_at->format('l, d-m-y H:i:s') }}</span>
        </x-panel>
    </div>
</x-app-layout>
