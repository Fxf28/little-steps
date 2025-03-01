<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('gambar/nest.png') }}">


    <title>Baby Fuel</title>

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>
