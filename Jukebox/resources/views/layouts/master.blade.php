<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('title')</title>
    @stack('styles')
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
    @include('layouts.nav')
    <main> 
        @yield('content')
    </main>
    <footer>
        Cedric Francis 2023
    <footer>
    @stack('scripts')
</body>
</html>