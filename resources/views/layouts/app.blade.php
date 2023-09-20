<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS Digitaliz</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const anchorLinks = document.querySelectorAll('a[href^="#"]');

            anchorLinks.forEach(function(link) {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const targetId = link.getAttribute("href");
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: "smooth",
                            block: "start",
                        });
                    }
                });
            });
        });
    </script>
    
    @yield('file-header')
</head>

<body>
    @yield('content')

    @yield('file-footer')
</body>

</html>
