<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Bootstrap v4.6 --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />

    {{-- Custom style --}}
    <link rel="stylesheet" href="{{ asset('css/printform.css') }}" />

    {{ $customStyles }}
</head>

<body>
    {{ $slot }}
</body>

</html>
