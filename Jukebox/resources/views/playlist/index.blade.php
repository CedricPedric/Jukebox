<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Playlists') }}
        </h2>

    </x-slot>
    <a href="/playlist/create" class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight">
            add new list
    </a>


    <div class="py-12">
    @foreach($playlist as $Playlist)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>{{ $Playlist->name }}</p>
                    <form action="{{ route('playlist.destroy', $Playlist) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" style="display: block; margin-left: auto;" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
        Delete
    </button>
</form>


                    </div>
                </div>
            </div>
            <br>
        @endforeach
    </div>
</x-app-layout>

