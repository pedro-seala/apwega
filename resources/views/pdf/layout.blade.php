<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    {{-- Bootstrap v4.6 --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />

    {{-- Custom style --}}
    @yield('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/printform.css') }}" />
</head>

<body>
    @yield('content')
</body>

</html>
