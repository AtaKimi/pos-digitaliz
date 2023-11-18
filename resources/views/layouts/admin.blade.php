<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body class="bg-white-300">
    <div class="bg-warning-300 h-80 p-8 flex text-xs sm:text-sm md:text-md lg:text-base">
        @include('includes.sidebar-admin')
        
        <div class="lg:pl-80 w-full">
            @include('includes.navbar')

            @yield('content')
        </div>
    </div>
    @yield('script')
    @include('sweetalert::alert')
</body>

</html>
