<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body class="bg-white-50">
    {{-- -------------------------------- Contentr start ----------------------------------------------- --}}
    @yield('content')
    {{-- -------------------------------- Contentr end ----------------------------------------------- --}}

    @yield('script')
</body>

</html>
