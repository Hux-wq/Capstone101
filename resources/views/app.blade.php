<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @include('_partials.style')

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>

    <body class="antialiased">
        
        @include('_partials.header')

        @include('_partials.sidebar')

        <main id="main" class="main">

            @yield('Component')

        </main>


        @include('_partials.footer')

        @include('_partials.script')

    </body>

</html>
