<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
        @include('partials.head')
    </head>
    <body>
        <div>
            <h1>Hello, dashboard</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-button type="submit">Log out</x-button>
            </form>
        </div>
        @livewireScripts
    </body>
</html>
