<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Waiter</title>
    @vite(['resources/css/output.css','resources/js/app.js'])
    @yield('file-header')
</head>
<body>
    @yield('content')

    @yield('file-footer')
</body>
</html>