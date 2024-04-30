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
        <!-- Favicon icon -->
        <link rel="icon" href="{{ url('') }}/assets/images/favicon.svg" type="image/x-icon" />

        <!-- font css -->
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/tabler-icons.min.css">
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/feather.css">
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/fontawesome.css">
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/material.css">

        <!-- vendor css -->
        <link rel="stylesheet" href="#" id="rtl-style-link">
        <link rel="stylesheet" href="{{ url('') }}/assets/css/style.css" id="main-style-link">
        <!-- Scripts -->

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
