<!-- This example requires Tailwind CSS v2.0+ -->
<div class="px-4 sm:px-6 lg:px-8 w-full">
    <div class="flex justify-between py-4 sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">{{ $title }}</h1>
            <p class="mt-2 text-sm text-gray-700">{{ $description }}</p>
        </div>
        @isset($newRoute)
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ $newRoute }}"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                    New Record</a>
            </div>
        @endisset
    </div>
    <div class="mt-2 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                @isset($paginate)
                    <div class="py-2">
                        {{ $paginate }}
                    </div>
                @endisset
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            {{ $header }}
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            {{ $slot }}
                        </tbody>
                    </table>
                </div>
                @isset($footer)
                    <div class="py-2">
                        {{ $footer }}
                    </div>
                @endisset
            </div>
        </div>
    </div>
</div>
