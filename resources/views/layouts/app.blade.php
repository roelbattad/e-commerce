<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer class="w-full bg-black text-white py-8">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="mb-8">
                        <ul class="flex items-center text-lg justify-between">
                            <li>Brand 1</li>
                            <li>Brand 2</li>
                            <li>Brand 3</li>
                            <li>Brand 4</li>
                            <li>Brand 5</li>
                            <li>Brand 6</li>
                        </ul>
                    </div>
                    <div class="mx-auto flex items-center justify-center space-x-8">
                        <p>{{ __('© 2023 E-Commerce') }}</p>
                        <ul class="flex items-center  space-x-4">
                            <li><a href="">Home</a></li>
                            <li><a href="">Shop</a></li>
                            <li><a href="">Categories</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
        @stack('modals')

        @livewireScripts
    </body>
</html>
