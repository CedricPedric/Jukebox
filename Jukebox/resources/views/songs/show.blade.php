<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{$songs->name}}
        </h2>
    </x-slot>
    <div class="py-12">
    <div style="text-align: center; color: white; flex-direction: row; font-size: 30px;">
        <h3>Description:</h3> 
        <p>{{$songs->description}}</p> 
    
        <h3>Duration: {{$songs->duration}} min</h3></div>
        
    <div class="flex-container">

    </div>
    </div>
</x-app-layout>