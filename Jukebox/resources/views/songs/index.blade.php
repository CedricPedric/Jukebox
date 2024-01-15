<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Songs') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            @foreach($songs as $song)
            <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class='MusicTitle'>{{$song->name}}</h2>
                    <p class="Description">{{$song->genre}}</p>
                    <a href="/songs/{{$song->id}}">[Description]</a> <br>
                    <a href="/songs/{{$song->id}}">[Add to Playlist]</a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</x-app-layout>


