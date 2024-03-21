<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aayurveda | {{ $medicine->tablet_name }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> --}}

    <link rel="stylesheet" href="{{ asset('user-assets/css/style3.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body style="padding: 0 20px 0 20px">
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
                    <a href="{{ route('medicines') }}"
                        class="text-sm font-medium text-gray-700 ms-1 hover:text-blue-600 md:ms-2 dark:text-gray-700 ">Medicines</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <i class="px-2 fa fa-angle-right"></i>
                    <a href="#"
                        class="text-sm font-medium text-gray-700 ms-1 hover:text-blue-600 md:ms-2 dark:text-gray-700 ">{{ $medicine->tablet_name }}</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="flex w-full gap-4 px-3 py-3" id="image-box">

        <a class="items-center w-full overflow-hidden bg-white border border-gray-200 rounded shadow round ed-lg md:max-w-xl hover:bg-gray-100 dark:border-gray-700 md:block"
            id="image-box2">
            <div class="w-1/2 md:w-full">
                <img class="object-cover h-full overflow-hidden rounded-t-lg md:rounded-none md:rounded-s-lg"
                    src="{{ asset('storage/' . $medicine->medicine_img) }}" alt="{{ $medicine->tablet_name }}"
                    style="height: 100%;width:100%">
            </div>
            <div class="px-2 py-4 leading-normal rounded md:w-full md:px-0 sm:text-start">
                <span class="py-1 font-semibold">
                    Medicine Name:&nbsp;
                </span>
                <span>{{ $medicine->tablet_name ?: '-' }}</span><br>

                @if ($medicine->where_to_get)
                    <span class="font-semibold">
                        Where to get:&nbsp;
                    </span>
                    <span>{{ $medicine->where_to_get }}</span><br>
                @endif

                @if ($medicine->ingrediency)
                    <span class="font-semibold">Ingrediency:&nbsp;</span>
                    <span>{{ $medicine->ingrediency }}</span><br>
                @endif

                <span class="font-semibold">Use:&nbsp;</span>
                <span>{{ $medicine->use ?: '-' }}</span><br>

                @if ($medicine->note)
                    <span class="font-semibold text-red-500">Note:&nbsp;</span>
                    <span class="text-red-500">{{ $medicine->note }}</span><br>
                @endif
            </div>
        </a>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @livewireScripts
</body>

</html>
