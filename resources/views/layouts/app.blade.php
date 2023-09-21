<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <div class="navbar">
            @include('layouts.navigation')
        </div>

        <!-- Page Content -->
        <main class="flex main">
            {{-- sidebar --}}
            @include('layouts.sidebar.sidebar')

            {{-- main-content --}}
            <div id="main-content" class="flex-1 overflow-y-auto"
                data-overlayscrollbars-initialize>

                {{ $slot }}
            </div>
        </main>
    </div>

    @include('sweetalert::alert')
</body>

</html>
