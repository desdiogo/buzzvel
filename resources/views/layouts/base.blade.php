<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="relative min-h-screen w-full p-8 flex justify-center">
            @yield('content')
        </div>
        @livewireScripts
    </body>
</html>
