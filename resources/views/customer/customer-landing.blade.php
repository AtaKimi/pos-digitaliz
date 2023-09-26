@extends('layouts.app-customer')

@section('file-header')
@endsection

@section('content')
    <div class="bg-white-100 h-screen min-h-screen">

        <div class="relative mx-auto">
            <img src="{{ asset('assets/img/hd-lp-cs.png') }}" class="" alt="">
            <div class="absolute bottom-3 left-0 right-0">
                <img src="{{ asset('assets/img/anya-profile.png') }}"
                    class="rounded-full w-[120px] border-4 border-white-100 mx-auto" alt="">
            </div>
        </div>
        <div class=" px-5">
            <div class="text-center mb-3">
                <h1 class="text-xl font-semibold mb-2">
                    Wet Land Square
                </h1>
                <p class="text-xs">
                    Pusat ruang kreatif yang dibangun dengan pondasi semangat berkontribusi insan kreatif Banua untuk saling
                    berkolaborasi dengan memadukan tiga pilar utama yaitu collaboration, entrepreneur, dan education.
                </p>
            </div>
            <div class="text-xs bg-gray-100 rounded-xl flex flex-col gap-3 p-5 mb-10">
                <div class="flex flex-row items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                        fill="none">
                        <path
                            d="M8.33331 8.11909C7.85971 8.11909 7.40551 7.93095 7.07062 7.59607C6.73574 7.26118 6.5476 6.80697 6.5476 6.33337C6.5476 5.85977 6.73574 5.40557 7.07062 5.07068C7.40551 4.7358 7.85971 4.54766 8.33331 4.54766C8.80691 4.54766 9.26112 4.7358 9.596 5.07068C9.93089 5.40557 10.119 5.85977 10.119 6.33337C10.119 6.56788 10.0728 6.80008 9.9831 7.01674C9.89336 7.23339 9.76182 7.43025 9.596 7.59607C9.43018 7.76188 9.23333 7.89342 9.01668 7.98316C8.80002 8.0729 8.56782 8.11909 8.33331 8.11909ZM8.33331 1.33337C7.00723 1.33337 5.73546 1.86016 4.79778 2.79784C3.8601 3.73552 3.33331 5.00729 3.33331 6.33337C3.33331 10.0834 8.33331 15.6191 8.33331 15.6191C8.33331 15.6191 13.3333 10.0834 13.3333 6.33337C13.3333 5.00729 12.8065 3.73552 11.8688 2.79784C10.9312 1.86016 9.6594 1.33337 8.33331 1.33337Z"
                            fill="#101010" />
                    </svg>
                    <span>
                        Jl. Kenangan yang kita lewati bersama
                    </span>
                </div>
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center gap-3 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="false"
                            aria-controls="accordion-flush-body-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1" width="10" height="10"
                                viewBox="0 0 10 10" fill="none">
                                <g clip-path="url(#clip0_920_5516)">
                                    <path
                                        d="M5 0C7.7615 0 10 2.2385 10 5C10 7.7615 7.7615 10 5 10C2.2385 10 0 7.7615 0 5C0 2.2385 2.2385 0 5 0ZM4.535 2.7905C4.44244 2.7905 4.35367 2.82727 4.28822 2.89272C4.22277 2.95817 4.186 3.04694 4.186 3.1395V5.93C4.186 6.123 4.342 6.279 4.535 6.279H7.3255C7.37241 6.28078 7.4192 6.27307 7.46306 6.25635C7.50692 6.23962 7.54696 6.21422 7.58077 6.18166C7.61459 6.1491 7.64149 6.11005 7.65986 6.06685C7.67824 6.02365 7.68771 5.97719 7.68771 5.93025C7.68771 5.88331 7.67824 5.83685 7.65986 5.79365C7.64149 5.75045 7.61459 5.7114 7.58077 5.67884C7.54696 5.64628 7.50692 5.62088 7.46306 5.60416C7.4192 5.58743 7.37241 5.57972 7.3255 5.5815H4.8835V3.1395C4.8835 3.04703 4.8468 2.95833 4.78146 2.8929C4.71611 2.82746 4.62747 2.79063 4.535 2.7905Z"
                                        fill="#101010" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_920_5516">
                                        <rect width="10" height="10" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>
                                <span class="text-green-500">Buka</span>,<span> 08:00 - 23:00</span>
                            </p>
                            <svg data-accordion-icon class="w-2 h-2  rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-2 px-6 dark:border-gray-700">
                            <ul class="list-none space-y-2 ml-0.5">
                                <li>
                                    <span class="">Senin</span>,<span> 08:00 - 23:00</span>
                                </li>
                                <li>
                                    <span class="">Selasa</span>,<span> 08:00 - 23:00</span>
                                </li>
                                <li>
                                    <span class="">Rabu</span>,<span> 08:00 - 23:00</span>
                                </li>
                                <li>
                                    <span class="">Kamis</span>,<span> 08:00 - 23:00</span>
                                </li>
                                <li>
                                    <span class="">Jum'at</span>,<span class="text-red-500"> Tutup</span>
                                </li>
                                <li>
                                    <span class="">Sabtu</span>,<span> 08:00 - 23:00</span>
                                </li>
                                <li>
                                    <span class="">Minggu</span>,<span> 08:00 - 23:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1" width="12" height="12" viewBox="0 0 12 12"
                        fill="none">
                        <path
                            d="M6.0005 1C8.762 1 11.0005 3.2385 11.0005 6C11.0005 8.7615 8.762 11 6.0005 11C5.11688 11.0014 4.24882 10.7676 3.4855 10.3225L1.0025 11L1.6785 8.516C1.23304 7.75244 0.999019 6.884 1.0005 6C1.0005 3.2385 3.239 1 6.0005 1ZM4.2965 3.65L4.1965 3.654C4.13176 3.65794 4.06849 3.67495 4.0105 3.704C3.95626 3.73471 3.90674 3.77311 3.8635 3.818C3.8035 3.8745 3.7695 3.9235 3.733 3.971C3.54806 4.21145 3.44848 4.50666 3.45 4.81C3.451 5.055 3.515 5.2935 3.615 5.5165C3.8195 5.9675 4.156 6.445 4.6 6.8875C4.707 6.994 4.812 7.101 4.925 7.2005C5.47669 7.68623 6.13412 8.03652 6.845 8.2235L7.129 8.267C7.2215 8.272 7.314 8.265 7.407 8.2605C7.55261 8.25298 7.6948 8.21355 7.8235 8.145C7.88897 8.11127 7.95287 8.07457 8.015 8.035C8.015 8.035 8.0365 8.021 8.0775 7.99C8.145 7.94 8.1865 7.9045 8.2425 7.846C8.284 7.803 8.31999 7.7525 8.3475 7.695C8.3865 7.6135 8.4255 7.458 8.44149 7.3285C8.4535 7.2295 8.45 7.1755 8.44849 7.142C8.4465 7.0885 8.402 7.033 8.3535 7.0095L8.0625 6.879C8.0625 6.879 7.62749 6.6895 7.3615 6.5685C7.33366 6.55635 7.30383 6.5494 7.2735 6.548C7.23929 6.54449 7.20472 6.54834 7.17212 6.55929C7.13952 6.57024 7.10964 6.58804 7.0845 6.6115C7.082 6.6105 7.04849 6.639 6.687 7.077C6.66625 7.10488 6.63767 7.12595 6.6049 7.13753C6.57213 7.1491 6.53665 7.15066 6.503 7.142C6.47042 7.13327 6.43851 7.12224 6.4075 7.109C6.3455 7.083 6.324 7.073 6.2815 7.055C5.99453 6.92977 5.72884 6.76057 5.494 6.5535C5.43099 6.4985 5.3725 6.4385 5.3125 6.3805C5.11579 6.19212 4.94436 5.979 4.8025 5.7465L4.77299 5.699C4.75181 5.66708 4.73468 5.63265 4.722 5.5965C4.703 5.523 4.7525 5.464 4.7525 5.464C4.7525 5.464 4.874 5.331 4.9305 5.259C4.9855 5.189 5.03199 5.121 5.062 5.0725C5.121 4.9775 5.1395 4.88 5.1085 4.8045C4.9685 4.4625 4.8235 4.122 4.6745 3.784C4.645 3.717 4.5575 3.669 4.478 3.6595C4.451 3.6565 4.424 3.6535 4.397 3.6515C4.32985 3.64816 4.26256 3.64883 4.1955 3.6535L4.296 3.6495L4.2965 3.65Z"
                            fill="#101010" />
                    </svg>
                    <span>
                        +62 812 3456 7890
                    </span>
                </div>
            </div>
            <div class="pb-10">
                <p class="text-xs mb-1 text-center">
                    Ingin membeli sesuatu?
                </p>
                <button
                    class="flex items-center gap-2 mx-auto px-3 py-1 bg-red-500 hover:bg-red-700 rounded text-white-100">
                    <span>
                        Daftar Menu
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                        fill="none">
                        <path
                            d="M8 0.5C12.1421 0.5 15.5 3.85786 15.5 8C15.5 12.1421 12.1421 15.5 8 15.5C3.85786 15.5 0.5 12.1421 0.5 8C0.5 3.85786 3.85786 0.5 8 0.5ZM4.71875 7.53125C4.45987 7.53125 4.25 7.74112 4.25 8C4.25 8.25888 4.45987 8.46875 4.71875 8.46875H10.1496L8.13729 10.481C7.95423 10.6641 7.95423 10.9609 8.13729 11.144C8.32035 11.327 8.61715 11.327 8.80021 11.144L11.6127 8.33146C11.7958 8.1484 11.7958 7.8516 11.6127 7.66854L8.80021 4.85604C8.61715 4.67299 8.32035 4.67299 8.13729 4.85604C7.95423 5.0391 7.95423 5.3359 8.13729 5.51896L10.1496 7.53125H4.71875Z"
                            fill="white" />
                    </svg>
                </button>

            </div>

        </div>



    </div>
@endsection

@section('file-footer')
@endsection
