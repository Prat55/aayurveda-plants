<!DOCTYPE html>
<html class="h-full bg-white">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body class="h-full relative">


    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-20 w-20" src="{{ asset('user-assets/img/1.png') }}" alt="logo">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Register Your Information
            </h2>
        </div>

        <livewire:register-information />
    </div>


    @livewireScripts
</body>

</html>
