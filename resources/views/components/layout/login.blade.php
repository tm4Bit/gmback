<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="relative h-screen w-screen">
        {{ $slot }}
        @livewireScripts
    </body>
</html>
