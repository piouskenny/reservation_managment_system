<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Reservation System</title>

    @livewireStyles

</head>

<body class="lg:px-20 px-6 py-4 h-fit">
    @yield('content')
    @livewireScripts
</body>

</html>
