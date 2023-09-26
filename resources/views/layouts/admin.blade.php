<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body class="bg-white-300">
    <div class="bg-warning-300 h-80 w-full p-8 flex">
        @include('includes.sidebar-admin')


        <div class="lg:ml-80  w-full">
            {{-- -------------------------------- nav bar start ----------------------------------------------- --}}
            @include('includes.navbar')
            {{-- -------------------------------- nav bar end ----------------------------------------------- --}}

            {{-- -------------------------------- Contentr start ----------------------------------------------- --}}
            @yield('content')
            {{-- -------------------------------- Contentr end ----------------------------------------------- --}}

        </div>

    </div>

    @yield('script')
</body>

</html>
