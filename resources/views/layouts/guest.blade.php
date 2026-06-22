<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ROX Angola') }} - Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <style>
            body { font-family: 'Inter', sans-serif; }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-black flex flex-col sm:justify-center items-center min-h-screen pt-6 sm:pt-0">
        <div>
            <a href="/">
                <img src="{{ asset('assets/logo-w.svg') }}" alt="ROX Logo" class="h-8">
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-10 px-8 py-10 bg-white overflow-hidden sm:rounded-sm shadow-xl">
            {{ $slot }}
        </div>
    </body>
</html>
