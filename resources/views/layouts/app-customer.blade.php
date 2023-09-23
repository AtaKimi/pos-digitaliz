<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS Digitaliz</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('file-header')
</head>

{{-- <body class="mx-auto w-[375px]"> --}}
<body class="w-[375px] mx-auto">
    <div class="overflow-y-scroll h-screen">
        @yield('content')
    </div>
    @yield('file-footer')
</body>

</html>
