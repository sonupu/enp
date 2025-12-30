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
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
@if (session('success'))
    <div class="mb-4 flex items-center justify-between rounded-lg 
                bg-green-50 border border-green-200 px-4 py-3 
                text-green-800 shadow-sm"
         role="alert">

        <div class="flex items-center gap-2">
            <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-7.5 7.5a1 1 0 01-1.414 0l-3.5-3.5a1 1 0 011.414-1.414L9.5 10.586l6.793-6.793a1 1 0 011.414 0z"
                      clip-rule="evenodd" />
            </svg>

            <span>{{ session('success') }}</span>
        </div>

        <button type="button"
                onclick="this.parentElement.remove()"
                class="text-green-600 hover:text-green-800 focus:outline-none">
            ✕
        </button>
    </div>
@endif


                {{ $slot }}
            </main>
        </div>
    </body>
</html>
