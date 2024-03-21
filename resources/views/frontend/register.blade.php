<!DOCTYPE html>
<html class="h-full bg-white">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body class="relative h-full">


    <div class="flex flex-col justify-center min-h-full px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="w-20 h-20 mx-auto" src="{{ asset('user-assets/img/1.png') }}" alt="logo">
            <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center text-gray-900">
                Register Your Information
            </h2>
        </div>

        <livewire:register-information />

        
    </div>


    @livewireScripts
</body>

</html>
