<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body class="bg-white-50 p-0 m-0">
    <div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center items-center p-8">
        @yield('side-img')
        {{-- -------------------------------- Contentr start ----------------------------------------------- --}}

        <div class="lg:px-8 lg:py-16 rounded-xl w-full" >
            @yield('content')
        </div>
        {{-- -------------------------------- Contentr end ----------------------------------------------- --}}
    </div>

    @yield('script')
    @include('sweetalert::alert')
</body>

</html>
