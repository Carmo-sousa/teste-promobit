<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Promobit') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-200">
        <div class="min-h-screen flex flex-col items-center justify-center sm:flex sm:justify-center sm:items-center">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-800">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-800">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-800 border border-gray-800 p-2 rounded hover:bg-gray-800 hover:text-gray-200 transition">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="flex flex-col">
                <div class="container my-5">
                    <h1 class="text-gray-900 text-6xl sm:text-8xl">Metatron<span class="text-orange-400">.</span>dev</h1>
                </div>
            </div>
            <div class="sm:hidden">
                <a href="{{ route('login') }}" class="m-3 text-lg">Entrar</a>
                <a href="{{ route('register') }}" class="p-1 text-lg border-solid border-2 border-slate-800 rounded-md">Registrar</a>
            </div>
        </div>
    </body>
</html>
