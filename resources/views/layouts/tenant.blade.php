<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('file-header')
</head>

<body class="bg-white-300 text-xs sm:text-sm md:text-md lg:text-base mx-auto">
    <div class="bg-red-500 h-80 w-full p-8 flex">
        {{-- -------------------------------- side bar start ----------------------------------------------- --}}
        @include('includes.sidebar-tenant')
        {{-- -------------------------------- side bar end ----------------------------------------------- --}}


        <div class="w-full xl:ml-80">
            {{-- -------------------------------- nav bar start ----------------------------------------------- --}}
            @include('includes.navbar')
            {{-- -------------------------------- nav bar end ----------------------------------------------- --}}

            {{-- -------------------------------- Contentr start ----------------------------------------------- --}}
            <div class="pb-8">
                @yield('content')
            </div>
            {{-- -------------------------------- Contentr end ----------------------------------------------- --}}

        </div>

    </div>

    @yield('script')
    @include('sweetalert::alert')
</html>
