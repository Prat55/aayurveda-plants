<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aayurveda | Plants Information</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> --}}


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body style="padding: 0 20px 0 20px ">
    <nav class="flex py-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="/"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                    <i class="px-2 fa fa-home"></i>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <i class="px-2 fa fa-angle-right"></i>
                    <a href="#"
                        class="text-sm font-medium text-gray-700 ms-1 hover:text-blue-600 md:ms-2 dark:text-gray-700 ">Plants</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="flex flex-wrap justify-center w-full gap-4 px-2 py-3">
        @forelse ($plants as $plant)
            @php
                $plantName = Str::replace(' ', '_', Str::lower($plant->local_name));
            @endphp
            <a href="/plant/{{ $plant->token }}/{{ $plantName }}"
                class="items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700">
                <img class="object-cover w-full rounded-t-lg md:rounded-none md:rounded-s-lg"
                    src="{{ asset('storage/' . $plant->plant_img) }}" alt="{{ $plant->scientific_name }}"
                    style="height: 250px;width:350px">
                <div class="px-2 py-4 leading-normal">
                    <span class="py-1 font-semibold">Scientific
                        Name:&nbsp;</span><span>{{ $plant->scientific_name ?: '-' }}</span><br>

                    <span class="font-semibold">Local
                        name:&nbsp;</span><span>{{ $plant->getShortLocalName() ?: '-' }}</span><br>
                    <span class="font-semibold">Place to find:&nbsp;</span><span>{{ $plant->place ?: '-' }}</span><br>
                    <span class="font-semibold">Root:&nbsp;</span><span>{{ $plant->getShortRoot() ?: '-' }}</span><br>
                    <span class="font-semibold">Stem:&nbsp;</span><span>{{ $plant->getShortStem() ?: '-' }}</span><br>
                    <span
                        class="font-semibold">Leaves:&nbsp;</span><span>{{ $plant->getShortLeaves() ?: '-' }}</span><br>
                    <span
                        class="font-semibold">Flowers:&nbsp;</span><span>{{ $plant->getShortFlower() ?: '-' }}</span><br>
                    <span class="font-semibold">Use:&nbsp;</span><span>{{ $plant->getShortUses() }}</span><br>
                </div>
            </a>
        @empty
            <div class="text-center">Not found!</div>
        @endforelse
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    @livewireScripts
</body>

</html>
