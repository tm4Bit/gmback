<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="relative h-screen w-screen">
        {{ $slot }}
        @livewireScripts
    </body>
</html>
