<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    @vite(['resources/css/disableScrollbar.css'])
    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.2.3/dist/css/glide.core.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.2.3/dist/css/glide.theme.min.css">
    <script src="https://unpkg.com/@glidejs/glide@3.2.3/dist/glide.min.js"></script>
</head>

<body class="bg-slate-200 ">
    <div class="w-[375px] h-screen bg-white-50 mx-auto flex flex-col">
        <div class="h-fit bg-[url('/public/assets/img/bg-layout.png')] p-5 bg-cover border-b-4">
            <div class="relative flex justify-center items-center">
                <div class="absolute left-0 p-3 bg-white-100 rounded-full shadow-xl">
                    <a href="@yield('return_link')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M21.375 12C21.375 12.2984 21.2565 12.5846 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H6.46878L11.2988 17.9541C11.5101 18.1654 11.6289 18.4521 11.6289 18.751C11.6289 19.0499 11.5101 19.3365 11.2988 19.5478C11.0874 19.7592 10.8008 19.8779 10.5019 19.8779C10.203 19.8779 9.91638 19.7592 9.70503 19.5478L2.95503 12.7978C2.85015 12.6933 2.76694 12.5691 2.71016 12.4324C2.65337 12.2956 2.62415 12.149 2.62415 12.001C2.62415 11.8529 2.65337 11.7063 2.71016 11.5696C2.76694 11.4328 2.85015 11.3086 2.95503 11.2041L9.70503 4.4541C9.80968 4.34945 9.93391 4.26644 10.0706 4.20981C10.2074 4.15317 10.3539 4.12402 10.5019 4.12402C10.6499 4.12402 10.7964 4.15317 10.9332 4.20981C11.0699 4.26644 11.1941 4.34945 11.2988 4.4541C11.4034 4.55875 11.4864 4.68298 11.5431 4.81971C11.5997 4.95644 11.6289 5.10298 11.6289 5.25097C11.6289 5.39897 11.5997 5.54551 11.5431 5.68224C11.4864 5.81897 11.4034 5.9432 11.2988 6.04785L6.46878 10.875H20.25C20.5484 10.875 20.8345 10.9936 21.0455 11.2045C21.2565 11.4155 21.375 11.7017 21.375 12Z"
                                fill="#F54748" />
                        </svg>
                    </a>
                </div>
                <div>
                    <h1 class="font-semibold text-xl w-full text-center">
                        Wet Land Square
                    </h1>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    @yield('script')
</body>

</html>
