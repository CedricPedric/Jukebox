<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Genres') }}
        </h2>
    </x-slot>
    <div class="py-12">


    <div class="flex-container">
    @foreach($genres as $Genre)   
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/genre/{{$Genre->id}}">
                    {{$Genre->name}}
                    </a>
                </div>
            </div>
            <br>
    @endforeach
    </div>
    </div>
</x-app-layout>





