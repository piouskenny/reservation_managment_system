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
    <div class="flex justify-between justify-items-center items-center">
        <div class="mb-8">
            <h1 class="text-gray-300 text-md ">Welcome back!</h1>
            <h1 class="text-black font-semibold lg:text-4xl text-2xl">Piousuits Hotels</h1>
        </div>

        <div class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-12 lg:h-12 w-6 h-6 brand-color bg-brand">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              
        </div>
    </div>
    @yield('content')
    @livewireScripts
</body>

</html>
