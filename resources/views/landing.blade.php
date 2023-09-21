@extends('layouts.app')


@section('file-header')
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .scroll-none::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scroll-none {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
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
@endsection



@section('content')
    {{-- navbar --}}
    <nav class="bg-transparent absolute md:static dark:bg-gray-900 w-full z-20 top-0 left-0">
        <div id="navbar" class="max-w-full flex flex-wrap items-center justify-between mx-auto lg:mx-20 p-4">
            <a href="#hero">
                <img src="./assets/img/logo_pos.png" class="h-11 hidden md:block" alt="POS Logo" />
                <img src="./assets/img/logo_pos_white.png" class="h-11 block md:hidden" alt="POS Logo" />
            </a>
            <div class="flex md:order-2 items-center gap-4 xl:gap-8">
                <a href="#start" class=" text-red-500 font-semibold rounded hidden md:block" aria-current="page">Masuk</a>
                <button type="button"
                    class="hidden md:block text-white-50 bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Get started
                </button>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="21" viewBox="0 0 31 21"
                        fill="none">
                        <path d="M2.50098 2.50001H28.501M2.50098 10.5H28.501M2.50098 18.5H28.501" stroke="#F54748"
                            stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="ml-2 lg:ml-10 xl:ml-20 flex-grow items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                id="navbar-default">
                <ul
                    class="flex flex-col lg:gap-2 p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white-50 md:bg-white-100 md:flex-row md:space-x-4 lg:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#hero"
                            class="block py-2 pl-3 pr-4 text-white-50 bg-red-700 rounded md:bg-transparent md:text-red-500 md:p-0 underline underline-offset-8"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#pricing"
                            class="block py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#team"
                            class="block py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700">Our
                            Team</a>
                    </li>
                    <li>
                        <a href="#testimonial"
                            class="block py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700">Support</a>
                    </li>
                    <li>
                        <a href="#start"
                            class="block md:hidden py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700">Masuk</a>
                    </li>
                    <li>
                        <a href="#start"
                            class="block md:hidden py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700">Get
                            Started</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- end navbar --}}

    {{-- scroll to top button --}}
    <a href="#navbar"
        class="fixed bottom-4 right-4 p-1 md:p-3 z-50 bg-red-500 text-white-50 rounded-xl shadow hover:bg-white-50 hover:text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-6 h-6 inline-block align-text-bottom">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </a>
    {{-- end scroll to top button --}}

    {{-- hero --}}
    <div id="hero" class="bg-cover bg-center bg-no-repeat h-fit bg-[url('/public/assets/img/hero.jpg')]">
        <div class="flex flex-col md:pt-32 md:ps-20 p-5 pt-24">
            <div class="flex mb-5">
                <button
                    class="flex gap-1 md:gap-2 items-center bg-red-100 text-[10px] md:text-sm text-gray-900 p-1 md:py-2 font-semibold md:px-4 border-2 border-transparent rounded-full hover:bg-white-50 hover:text-red-500 hover:border-red-500">
                    <img src="./assets/img/play.svg" class="w-3 h-3 md:w-6 md:h-6">
                    <span>
                        Watch video
                    </span>
                </button>
            </div>

            <h1 class="text-white-50 font-semibold text-3xl md:text-5xl mb-7 md:mb-10 leading-normal md:leading-snug">
                Be The <span class=" text-yellow-500">Fastest</span> <br>
                In Delivering <br>
                Your <Span class="text-red-500">Food</Span>
            </h1>

            <div class="flex mb-7 md:flex-row flex-col gap-3">
                <button
                    class="bg-red-500 text-xs md:text-base text-white-50 p-2 md:py-3 md:px-6 w-fit rounded-lg hover:bg-red-700">
                    Daftar Tenant
                </button>
                <button
                    class="text-white-50 text-xs md:text-base border border-white w-fit rounded-lg p-2 md:py-3 md:px-6 hover:bg-gray-50 hover:text-gray-900 ">
                    Kenapa harus POS ?
                </button>
            </div>
            <div class=" mb-20 gap-3 hidden md:flex">

                <a
                    class="text-center  text-xs text-gray-900 py-5 px-5 rounded-xl whitespace-pre-line
          bg-[url('/public/assets/img/rectangle.png')]
          bg-no-repeat">Global
                    Reach
                    <span class="text-red-500 text-2xl">72 +</span>
                    Countries with
                    Excellent
                </a>




                <a
                    class="text-white-50 text-xs rounded-xl py-5 px-5  bg-[url('/public/assets/img/rectangle1.png')] md:bg-no-repeat">
                    <div class="mb-3 mt-3 flex gap-3 md:flex-row flex-col">
                        <div class=" flex -space-x-6 overflow-hidden">
                            <img class="inline-block h-10 w-10 rounded-full border-2 border-white "
                                src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
                            <img class="inline-block h-10 w-10 rounded-full border-2 border-white "
                                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
                            <img class="inline-block h-10 w-10 rounded-full border-2 border-white "
                                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                alt="" />
                            <img class="inline-block h-10 w-10 rounded-full border-2 border-white "
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
                            <img class="inline-block h-10 w-10 rounded-full border-2 border-white "
                                src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
                        </div>
                        <span class="whitespace-pre-line text-start">Trusted 12.000+ Businesses
                            World Wide
                        </span>
                    </div>
                    <Span class="">
                        Our Client's feedback is ivaluable to us!
                    </Span>
                    <div class="flex items-center float-right mt-5 hover:text-gray-900">
                        <span class="me-1 ">See Here</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>

                    </div>
                </a>
            </div>


        </div>
    </div>
    {{-- end hero --}}

    {{-- about us --}}
    <div id="about" class="h-fit mx-auto py-10 px-5 md:py-24 bg-red-100">
        <div class="mb-4 md:mb-8">
            <p class="font-semibold text-center text-red-500 text-sm md:text-2xl mb-2">
                About Us
            </p>
            <p class="font-semibold text-xl md:text-5xl md:leading-snug w-full md:w-1/2 mx-auto text-center">
                Your Favorite Food <br class="hidden md:block">
                Delivery Partner</p>
        </div>
        <div class="flex flex-wrap flex-col md:flex-row gap-0 md:gap-20 xl:gap-0 justify-evenly">
            <div class="p-2 md:mb-20">
                <div class="flex-row align-middle justify-center">
                    <div class="mx-auto w-full sm:w-72  md:w-96 md:h-96 md:mb-8 md:p-3">
                        <img src="./assets/img/1_1.png" class="w-full h-full hidden md:block md:mb-4" alt="" />
                        <img src="./assets/img/2_1.png" class="w-full h-full block md:hidden md:mb-4" alt="" />
                        <div class="text-center mb-4">
                            <h1 class="font-semibold text-xl md:text-3xl md:mb-5">Easy To Order</h1>
                            <p class="text-gray-700 md:text-2xl mx-auto">
                                You only need a few steps in ordeing food
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 md:mb-20">
                <div class="flex-row align-middle justify-center">
                    <div class="mx-auto w-full sm:w-72  md:w-96 md:h-96 md:mb-8 md:p-3">
                        <img src="./assets/img/1_2.png" class="w-full h-full hidden md:block md:mb-4" alt="" />
                        <img src="./assets/img/2_2.png" class="w-full h-full block md:hidden md:mb-4" alt="" />
                        <div class="text-center mb-4">
                            <h1 class="font-semibold text-xl md:text-3xl md:mb-5">Fastest Delivery</h1>
                            <p class="text-gray-700 md:text-2xl mx-auto">
                                You only need a few steps in ordeing food
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 md:mb-20">
                <div class="flex-row align-middle justify-center">
                    <div class="mx-auto w-full sm:w-72 md:w-96 md:h-96 md:mb-8 md:p-3">
                        <img src="./assets/img/1_3.png" class="w-full h-full hidden md:block md:mb-4" alt="" />
                        <img src="./assets/img/2_3.png" class="w-full h-full block md:hidden md:mb-4" alt="" />
                        <div class="text-center mb-4">
                            <h1 class="font-semibold text-xl md:text-3xl md:mb-5">Best Quality</h1>
                            <p class="text-gray-700 md:text-2xl mx-auto">
                                Not only fast for us quality is also number one.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- about us end --}}

    {{-- our team --}}
    <div id="team">
        <div class="container h-fit mx-auto p-5">
            <div class="text-center mb-10 md:mb-14 mt-10 md:mt-16">
                <div class="text-sm md:text-xl text-red-500 tracking-widest font-semibold mb-3">
                    <h6>Support & Meet Our Team</h6>
                </div>
                <div class="text-2xl md:text-5xl font-bold text-neutral-800">
                    <h3>Be a Part of Our Success</h3>
                </div>
            </div>
            <div class="flex flex-wrap gap-5 justify-evenly mb-20">
                <img src="./assets/img/dropbox.png" class="h-5 md:h-auto" alt="dropbox" />
                <img src="./assets/img/slack.png" class="h-5 md:h-auto" alt="slack" />
                <img src="./assets/img/amazon.png" class="h-5 md:h-auto" alt="amazon" />
                <img src="./assets/img/lattice.png" class="h-5 md:h-auto" alt="lattice" />
                <img src="./assets/img/woocommerce.png" class="h-5 md:h-auto" alt="woocommerce" />
            </div>

            <div class="relative h-fit overflow-x-auto scroll-none mb-10">
                <div class="flex justify-between gap-7">
                    <div class="">
                        <div
                            class="bg-no-repeat bg-center bg-cover rounded-xl w-[280px] h-[280px] bg-[url('/public/assets/img/person_1.png')] ">
                        </div>
                        <div class="flex justify-center">
                            <div class=" bg-white-100 drop-shadow-xl relative bottom-8 rounded-xl text-center px-12 py-2">
                                <p class="font-medium text-base">Devon lane</p>
                                <div class="flex justify-center">
                                    <svg width="49" height="2" viewBox="0 0 49 2" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1.32056" x2="49" y2="1.32056" stroke="#C8C2C2" />
                                    </svg>
                                </div>
                                <p class="text-xs text-gray-400 italic">CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div
                            class="bg-no-repeat bg-center bg-cover rounded-xl w-[280px] h-[280px] bg-[url('/public/assets/img/person_2.png')] ">
                        </div>
                        <div class="flex justify-center">
                            <div class=" bg-white-100 drop-shadow-xl relative bottom-8 rounded-xl text-center px-12 py-2">
                                <p class="font-medium text-base">Devon lane</p>
                                <div class="flex justify-center">
                                    <svg width="49" height="2" viewBox="0 0 49 2" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1.32056" x2="49" y2="1.32056" stroke="#C8C2C2" />
                                    </svg>
                                </div>
                                <p class="text-xs text-gray-400 italic">CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div
                            class="bg-no-repeat bg-center bg-cover rounded-xl w-[280px] h-[280px] bg-[url('/public/assets/img/person_3.png')] ">
                        </div>
                        <div class="flex justify-center">
                            <div class=" bg-white-100 drop-shadow-xl relative bottom-8 rounded-xl text-center px-12 py-2">
                                <p class="font-medium text-base">Devon lane</p>
                                <div class="flex justify-center">
                                    <svg width="49" height="2" viewBox="0 0 49 2" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1.32056" x2="49" y2="1.32056" stroke="#C8C2C2" />
                                    </svg>
                                </div>
                                <p class="text-xs text-gray-400 italic">CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div
                            class="bg-no-repeat bg-center bg-cover rounded-xl w-[280px] h-[280px] bg-[url('/public/assets/img/person_4.png')] ">
                        </div>
                        <div class="flex justify-center">
                            <div class=" bg-white-100 drop-shadow-xl relative bottom-8 rounded-xl text-center px-12 py-2">
                                <p class="font-medium text-base">Devon lane</p>
                                <div class="flex justify-center">
                                    <svg width="49" height="2" viewBox="0 0 49 2" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1.32056" x2="49" y2="1.32056" stroke="#C8C2C2" />
                                    </svg>
                                </div>
                                <p class="text-xs text-gray-400 italic">CEO</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="hidden md:flex justify-center mb-10">
                <button
                    class="py-4 px-10 bg-red-500 hover:bg-red-700 text-lg text-white-50 font-semibold rounded-xl tracking-wide">
                    Lihat tim kami
                </button>
            </div>
        </div>
    </div>
    {{-- our team end --}}

    {{-- pricing --}}
    <div id="pricing"
        class="bg-no-repeat bg-cover flex flex-wrap justify-center gap-0 md:gap-10 md:p-20 p-5 bg-[url('/public/assets/img/pricing.jpg')]">
        <div class="text-red-600 text-center w-[400px] md:w-[500px] xl:text-start">
            <h6 class="text-base md:text-xl  lg:text-2xl tracking-widest font-medium mb-2 lg:mb-6">
                Gabung sekarang
            </h6>
            <h2 class="text-2xl md:text-3xl lg:text-5xl font-bold mb-1 lg:mb-6">
                Pilih paket dan mulai bergabung!
            </h2>
            <p class="text-gray-900 text-xs md:text-base lg:text-lg mb-3 lg:mb-6">
                Temukan paket yang sesuai dengan kebutuhanmu dan bergabung bersama
                kami di wetland Square banjarmasin. UMKM Jaya!
            </p>
            <h6 class="text-sm md:text-base lg:text-xl flex justify-center xl:justify-start xl:items-center gap-1">
                Lihat harga selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </h6>


        </div>

        {{-- carousel --}}
        <div id="indicators-carousel" class="flex flex-col w-[350px] md:w-[400px]  lg:w-[500px]  gap-5 p-5 md:p-0"
            data-carousel="slide">
            <!-- Carousel wrapper -->
            <div
                class="relative h-[270px] md:h-[320px] lg:h-[400px]  overflow-hidden border border-red-500 bg-white-100 rounded-2xl">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out bg-white-100" data-carousel-item>
                    <div class="p-5 md:p-10">
                        <h3 class="text-red-600 mb-2 text-xl lg:text-2xl font-medium">3 Bulan</h3>
                        <p class="text-xs md:text-base  lg:text-lg mb-2 md:mb-4 lg:mb-8">
                            Berlangganan bersama kami dengan paket 3 bulan. Bertempat di Wetland
                            Square Banjarmasin.
                        </p>
                        <h2 class="text-2xl lg:text-5xl font-semibold">Rp. 499.000</h2>
                        <h4 class="text-lg lg:text-2xl text-gray-600 leading-6 mb-4 lg:mb-8">Per outlet</h4>
                        <div class="flex flex-row gap-5">
                            <button
                                class="py-2 w-full text-sm lg:text-base bg-red-500 hover:bg-red-700 font-medium rounded-xl text-white-100 tracking-wide">
                                Pilih paket
                            </button>
                            <button
                                class="py-2 w-full text-sm lg:text-base border lg:border-2 hover:text-gray-900 hover:border-transparent hover:bg-red-100 border-red-500 font-medium rounded-xl text-red-500 tracking-wide">
                                Hubungi kami
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out bg-white-100" data-carousel-item>
                    <div class="p-5 md:p-10">
                        <h3 class="text-red-600 mb-2 text-xl lg:text-2xl font-medium">3 Bulan</h3>
                        <p class="text-xs md:text-base lg:text-lg mb-2 md:mb-4 lg:mb-8">

                            Berlangganan bersama kami dengan paket 3 bulan. Bertempat di Wetland
                            Square Banjarmasin.
                        </p>
                        <h2 class="text-2xl lg:text-5xl font-semibold">Rp. 499.000</h2>
                        <h4 class="text-lg lg:text-2xl text-gray-600 leading-6 mb-4 lg:mb-8">Per outlet</h4>
                        <div class="flex flex-row gap-5">
                            <button
                                class="py-2 w-full text-sm lg:text-base bg-red-500 font-medium hover:bg-red-700  rounded-xl text-white-100 tracking-wide">
                                Pilih paket
                            </button>
                            <button
                                class="py-2 w-full text-sm lg:text-base border lg:border-2 border-red-500 hover:text-gray-900 hover:border-transparent hover:bg-red-100 font-medium rounded-xl text-red-500 tracking-wide">
                                Hubungi kami
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out bg-white-100" data-carousel-item>
                    <div class="p-5 md:p-10 ">
                        <h3 class="text-red-600 mb-2 text-xl lg:text-2xl font-medium">3 Bulan</h3>
                        <p class="text-xs md:text-base lg:text-lg mb-2 md:mb-4 lg:mb-8">

                            Berlangganan bersama kami dengan paket 3 bulan. Bertempat di Wetland
                            Square Banjarmasin.
                        </p>
                        <h2 class="text-2xl lg:text-5xl font-semibold">Rp. 499.000</h2>
                        <h4 class="text-lg lg:text-2xl text-gray-600 leading-6 mb-4 lg:mb-8">Per outlet</h4>
                        <div class="flex flex-row gap-5">
                            <button
                                class="py-2 w-full text-sm lg:text-base bg-red-500 font-medium hover:bg-red-700 rounded-xl text-white-100 tracking-wide">
                                Pilih paket
                            </button>
                            <button
                                class="py-2 w-full text-sm lg:text-base border lg:border-2 border-red-500 hover:text-gray-900 hover:border-transparent hover:bg-red-100 font-medium rounded-xl text-red-500 tracking-wide">
                                Hubungi kami
                            </button>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Slider indicators -->
            <div id="slider-indicators" class="relative z-30 flex space-x-3 mx-auto">
                <button type="button" class="w-3 h-3 rounded-full bg-red-500" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full border-2 border-white-100" aria-current="false"
                    aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full border-2 border-white-100" aria-current="false"
                    aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
        </div>
        {{-- carousel end --}}
    </div>
    {{-- pricing end --}}

    {{-- testimonial --}}
    <div id="testimonial" class="flex flex-wrap justify-center items-center gap-5 md:gap-0 p-10 md:pb-10 ">
        <div class="flex flex-col justify-center w-3/5 md:w-2/5">
            <img src="./assets/img/testimoni.png" alt="" />
            <div class="flex md:hidden items-center justify-center md:justify-start gap-2">
                <div class="flex flex-col items-center text-center justify-center">
                    <p>
                        <span class="font-bold text-xs">Theresa Mazzie</span> <span class="text-xs">. Backpackers </span>
                    </p>
                    <img src="{{ asset('assets/img/rate-s5.svg') }}" alt="" class="h-6" />
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 md:p-10 text-center md:text-start">
            <div class="mb-5 md:mb-10">
                <p class="text-red-500 md:text-xl lg:text-2xl font-semibold tracking-widest mb-1 md:mb-3">
                    What They Say
                </p>
                <h4 class="text-xl md:text-4xl lg:text-5xl font-semibold leading-tight">What Our Customer Say About Us</h4>
            </div>
            <p class="text-xs md:text-sm lg:text-base mb-5 md:mb-10">
                “Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s”
            </p>
            <div class="hidden md:flex items-center justify-center md:justify-start gap-2 mb-5 md:mb-10">
                <img class="rounded-full w-14 h-14" src="{{ asset('assets/img/anya-profile.png') }}" alt="">
                <div class="flex flex-col items-start justify-center">
                    <p>
                        <span class="font-bold">Theresa Mazzie</span> <span class="">. Backpackers </span>
                    </p>
                    <img src="{{ asset('assets/img/rate-s5.svg') }}" alt="" class="h-6" />
                </div>
            </div>
            <button
                class="bg-red-500 hover:bg-red-700 text-white-100 p-3 text-xs md:text-sm lg:text-base rounded-lg w-fit">
                Berikan Testimonial
            </button>
        </div>
    </div>
    {{-- testimonial end --}}

    {{-- contact us --}}
    <div id="contact"
        class="flex flex-col-reverse md:flex-row justify-center items-center px-5 py-10 md:py-20 md:gap-10 lg:gap-15 xl:gap-20">
        <div class="p-5 text-center justify-center md:text-start md:ps-10">
            <p class="text-red-500 text-sm md:text-base  lg:text-lg xl:text-xl font-semibold tracking-widest mb-3">
                Any Question ?
            </p>
            <h4 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-semibold leading-tight mb-3">We Are Ready To <br
                    class="hidden md:block"> Help 24 Hours</h4>
            <p class="text-xs lg:text-sm xl:text-base text-gray-500 mb-5">
                Dapatkan informasi lebih lengkap tentang aplikasi pos
            </p>
            <a
                class="text-xs lg:text-sm xl:text-base flex mx-auto md:mx-0 items-center content-center gap-2 text-red-500 bg-red-100 p-2 rounded-full w-fit mb-10">
                <p class="hidden md:flex bg-white-50 px-3 py-1 font-semibold rounded-full">Masih ragu?</p>
                <p class=" hidden md:block font-semibold">
                    Cari tahu paket paling tepat untuk bisnismu di sini
                </p>
                <p class="block md:hidden font-semibold">
                    Cari tahu paket paling tepat untukmu
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>

            </a>
            <div class="flex justify-center md:justify-start gap-4">
                <button
                    class="bg-red-500 hover:bg-red-700 text-white-100 px-4 md:px-8 lg:px-12 xl:px-16 py-3 text-xs md:text-sm lg:text-base xl:text-lg rounded-lg">
                    Jadwalkan Demo
                </button>
                <button
                    class="text-red-500 hover:text-gray-900 hover:border-transparent hover:bg-red-100 px-4 md:px-8 lg:px-12 xl:px-16 py-3 text-xs md:text-sm lg:text-base xl:text-lg rounded-lg border border-red-500">
                    Hubungi Kami
                </button>
            </div>
        </div>
        <div class="flex justify-center w-4/5 md:w-2/5 p-5">
            <img src="{{ asset('assets/img/contact.png') }}" alt="">
        </div>
    </div>
    {{-- end contact us --}}

    {{-- faq --}}
    <div class="flex flex-col items-center h-fit mx-5">
        <div>
            <p class="text-red-500 text-xs md:text-base text-center font-semibold tracking-widest mb-1">
                Question Point of Sale (POS)
            </p>
            <h4 class="text-2xl md:text-4xl font-bold text-center">
                Frequently Asked Questions
            </h4>
        </div>

        <div id="faq" class="my-10 grid grid-cols-1 md:grid-cols-2 gap-10">
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1" class="shadow-md shadow-red-100 py-3 px-4 rounded-lg">
                    <button type="button" class="flex justify-between gap-2 items-center w-full"
                        data-accordion-target="#accordion-collapse-body-1" aria-controls="accordion-collapse-body-1">
                        <p class="text-sm md:text-base">Apa itu Point Of Sale (POS)?</p>

                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                            fill="none">
                            <path
                                d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                fill="#F54748" />
                            <path
                                d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                fill="#F54748" />
                            <path
                                d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                fill="#F54748" />
                        </svg>
                        {{-- <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                          </svg> --}}


                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 shadow-md rounded-b-xl">
                        <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                    </div>
                </div>
            </div>
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-2" class="shadow-md shadow-red-100 py-3 px-4 rounded-lg">
                    <button type="button" class="flex justify-between items-center gap-2 w-full"
                        data-accordion-target="#accordion-collapse-body-2" aria-controls="accordion-collapse-body-2">
                        <p class="text-sm md:text-base">Bisakah saya pesan makanan dari tenant yang berbeda?</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                            fill="none">
                            <path
                                d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                fill="#F54748" />
                            <path
                                d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                fill="#F54748" />
                            <path
                                d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                fill="#F54748" />
                        </svg>

                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 shadow-md rounded-b-xl">
                        <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                    </div>
                </div>
            </div>
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-3" class="shadow-md shadow-red-100 py-3 px-4 rounded-lg">
                    <button type="button" class="flex justify-between gap-2 items-center w-full"
                        data-accordion-target="#accordion-collapse-body-3" aria-controls="accordion-collapse-body-3">
                        <p class="text-sm md:text-base">
                            Bagaimana cara memesan?
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                            fill="none">
                            <path
                                d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                fill="#F54748" />
                            <path
                                d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                fill="#F54748" />
                            <path
                                d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                fill="#F54748" />
                        </svg>

                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 shadow-md rounded-b-xl">
                        <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                    </div>
                </div>
            </div>
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-4" class="shadow-md shadow-red-100 py-3 px-4 rounded-lg">
                    <button type="button" class="flex justify-between gap-2 items-center w-full"
                        data-accordion-target="#accordion-collapse-body-4" aria-controls="accordion-collapse-body-4">
                        <p class="text-sm md:text-base">
                            Apa saja pilihan pembayaran yang tersedia?
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                            fill="none">
                            <path
                                d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                fill="#F54748" />
                            <path
                                d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                fill="#F54748" />
                            <path
                                d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                fill="#F54748" />
                        </svg>

                    </button>
                </h2>
                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                    <div class="p-5 shadow-md rounded-b-xl">
                        <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                    </div>
                </div>
            </div>
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-5" class="shadow-md shadow-red-100 py-3 px-4 rounded-lg">
                    <button type="button" class="flex justify-between gap-2 items-center w-full"
                        data-accordion-target="#accordion-collapse-body-5" aria-controls="accordion-collapse-body-5">
                        <p class="text-sm md:text-base">Berapa biaya layanan dari POS?</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                            fill="none">
                            <path
                                d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                fill="#F54748" />
                            <path
                                d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                fill="#F54748" />
                            <path
                                d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                fill="#F54748" />
                        </svg>

                    </button>
                </h2>
                <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                    <div class="p-5 shadow-md rounded-b-xl">
                        <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                    </div>
                </div>
            </div>
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-6" class="shadow-md  shadow-red-100 py-3 px-4 rounded-lg">
                    <button type="button" class="flex justify-between gap-2 items-center w-full"
                        data-accordion-target="#accordion-collapse-body-6" aria-controls="accordion-collapse-body-6">
                        <p class="text-sm md:text-base">Mengapa saya harus bergabung bersama POS?</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"
                            fill="none">
                            <path
                                d="M10.25 9.5C10.9404 9.5 11.5 9.50011 11.5 9.50011L19 9.50005C19.6904 9.50005 20.25 10.0597 20.25 10.7501C20.25 11.4404 19.6904 12.0001 19 12.0001H11.5H11.25C11.113 12.0001 10.4404 12.0001 9.75 12.0001C9.05964 12.0001 8.93429 12.0001 9 12.0001H1.5C0.809644 12.0001 0.25 11.4404 0.25 10.7501C0.25 10.0597 0.809644 9.50005 1.5 9.50005H9C9 9.50005 9.55964 9.5 10.25 9.5Z"
                                fill="#F54748" />
                            <path
                                d="M10.5 9.25C11.1904 9.25 11.75 9.25011 11.75 9.25011L19.25 9.25005C19.9404 9.25005 20.5 9.8097 20.5 10.5001C20.5 11.1904 19.9404 11.7501 19.25 11.7501H11.75H11.5C11.363 11.7501 10.6904 11.7501 10 11.7501C9.30964 11.7501 9.18429 11.7501 9.25 11.7501H1.75C1.05964 11.7501 0.5 11.1904 0.5 10.5001C0.5 9.8097 1.05964 9.25005 1.75 9.25005H9.25C9.25 9.25005 9.80964 9.25 10.5 9.25Z"
                                fill="#F54748" />
                            <path
                                d="M9.25 10.5C9.25 9.80964 9.25011 9.25 9.25011 9.25L9.25005 1.75C9.25005 1.05964 9.8097 0.5 10.5001 0.5C11.1904 0.5 11.7501 1.05964 11.7501 1.75L11.7501 9.25V9.5C11.7501 9.637 11.7501 10.3096 11.7501 11C11.7501 11.6904 11.7501 11.8157 11.7501 11.75V19.25C11.7501 19.9404 11.1904 20.5 10.5001 20.5C9.8097 20.5 9.25005 19.9404 9.25005 19.25V11.75C9.25005 11.75 9.25 11.1904 9.25 10.5Z"
                                fill="#F54748" />
                        </svg>

                    </button>
                </h2>
                <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                    <div class="p-5 shadow-md rounded-b-xl">
                        <p class="text-sm md:text-base">Yo nda tau ko tanya sayaaa</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="start" class="flex flex-col gap-4 justify-center items-center">
            <img src="{{ asset('assets/img/logo_pos.png') }}" alt="" class="h-20 md:h-28" />
            <h4 class="text-xl md:text-2xl font-semibold">Ready Build Your Future?</h4>
            <p class=" text-xs md:text-sm w-9/12 text-center">
                POS (Point of Sale) adalah platform yang memungkinkan Anda untuk mendaftar sebagai tenan dan meraih
                keuntungan tambahan.
                Daftar Sekarang!
            </p>
            <button
                class="text-sm md:text-base bg-red-500 text-white-100 hover:bg-red-700 py-3 px-10 md:px-16 rounded-lg font-semibold">
                Daftar
            </button>
        </div>
    </div>
    {{-- faq end --}}

    {{-- footer --}}
    <footer class="flex flex-col gap-10 bg-center bg-contain mt-10 md:mt-20 p-5 md:p-10 lg:p-15 text-white-100"
        style="background-image: url('assets/img/bg-ft.jpg')">
        <div class="flex flex-wrap md:flex-nowrap p-6 gap-8 md:gap-20">
            <div class="w-full flex flex-col gap-7">
                <svg width="118" height="110" viewBox="0 0 118 110" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M33.7354 27.1172C33.8214 27.0879 42.9697 23.7939 42.9697 23.7939L41.9779 33.7839C41.967 33.9727 41.867 34.6753 41.867 34.6753C41.4364 36.9215 39.8931 38.866 37.6637 39.6253C34.3666 40.7481 30.8099 38.8576 29.7258 35.4056C28.7051 32.1559 30.2381 28.674 33.1722 27.34C33.1722 27.34 33.5772 27.171 33.7354 27.1172Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.7667 71.2441C29.6893 71.6291 37.6314 80.1614 37.6314 90.6152C37.6314 101.314 29.3115 110 19.0657 110C8.81998 110 0.5 101.314 0.5 90.6152C0.5 82.9185 4.80602 76.2633 11.0378 73.1346L14.9477 82.3492C12.0928 83.904 10.1434 87.0236 10.1434 90.6152C10.1434 95.7573 14.1409 99.9321 19.0657 99.9321C23.9905 99.9321 27.9881 95.7573 27.9881 90.6152C27.9881 89.0202 27.6047 87.5183 26.9275 86.2052L19.7667 71.2441Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16.895 65.2446C13.6842 58.3625 10.1905 50.6949 8.40713 46.0735C7.94714 45.0335 7.53826 43.9637 7.18414 42.868C6.99978 42.3789 6.90121 42.1117 6.90121 42.1117C6.90121 42.1117 6.92493 42.1327 6.96874 42.1735C6.05241 39.1132 5.55957 35.8591 5.55957 32.4855C5.55957 14.5562 19.4998 0 36.671 0C53.844 0 67.7843 14.5562 67.7843 32.4855C67.7843 50.2546 55.5124 62.7841 40.9004 64.536L35.7364 52.3057C35.7547 52.3633 34.5371 52.2509 36.671 52.2509C47.1193 52.2509 55.6018 43.3944 55.6018 32.4855C55.6018 21.5767 47.1193 12.7203 36.671 12.7203C26.2245 12.7203 17.742 21.5767 17.742 32.4855C17.742 35.788 19.2041 39.5733 19.8923 41.6398C19.9671 41.544 29.0246 62.7965 33.5971 74.5904C29.8076 70.8424 24.6912 68.5424 19.0654 68.5424C18.8902 68.5424 18.7149 68.5447 18.5415 68.5491C18.1162 67.717 17.784 67.0758 17.5978 66.7127L16.895 65.2446Z"
                        fill="white" />
                    <path
                        d="M49.7672 71.1411H49.3417V74.6949H49.9128C50.7116 74.6949 51.3163 74.5403 51.738 74.2311C52.1561 73.922 52.365 73.4767 52.365 72.8952C52.365 72.289 52.1598 71.8452 51.7455 71.5638C51.3312 71.2822 50.6742 71.1411 49.7672 71.1411ZM49.2746 84.8514L42.4629 68.5874L49.5844 68.6987C50.6295 68.6987 51.4618 68.7754 52.0739 68.9285C52.686 69.0816 53.231 69.3385 53.705 69.6995C54.1977 70.0609 54.5783 70.5123 54.847 71.0542C55.1195 71.5958 55.254 72.1697 55.254 72.7756C55.254 74.1224 54.7798 75.1906 53.8281 75.9804C52.8763 76.7698 51.5887 77.1647 49.9577 77.1647C49.7897 77.1647 49.6628 77.1632 49.5769 77.1602C49.4911 77.1572 49.4126 77.1527 49.3417 77.1463V82.013L49.2746 84.8514Z"
                        fill="white" />
                    <path
                        d="M59.636 75.3563C59.636 76.5132 59.972 77.4816 60.6439 78.2624C61.3157 79.0428 62.1443 79.4328 63.1259 79.4328C64.1187 79.4328 64.9473 79.0443 65.6154 78.2669C66.2835 77.4895 66.6158 76.5192 66.6158 75.3563C66.6158 74.187 66.2835 73.2122 65.6154 72.4318C65.1302 71.8638 64.5592 71.5024 63.9023 71.3478C63.6559 71.2899 63.3984 71.2609 63.1259 71.2609C62.1443 71.2609 61.3157 71.651 60.6439 72.4318C59.972 73.2122 59.636 74.187 59.636 75.3563ZM56.3926 75.3563C56.3926 74.3705 56.5605 73.4476 56.9001 72.5878C57.2361 71.7277 57.7326 70.9578 58.3895 70.2786C59.0091 69.6294 59.7293 69.1322 60.5467 68.7862C61.3679 68.4406 62.2264 68.2676 63.1259 68.2676C64.0254 68.2676 64.8876 68.4421 65.7087 68.7907C66.5336 69.1397 67.2651 69.6419 67.9034 70.2966C68.5453 70.9518 69.0344 71.7093 69.3628 72.5694C69.695 73.4295 69.8629 74.3585 69.8629 75.3563C69.8629 76.1886 69.7473 76.972 69.5159 77.7069C69.2845 78.4414 68.941 79.1116 68.4856 79.7175C67.8399 80.5807 67.0487 81.2509 66.1119 81.7285C65.175 82.2058 64.1785 82.4446 63.1259 82.4446C62.2339 82.4446 61.3791 82.2701 60.5617 81.9215C59.7443 81.5725 59.0203 81.0704 58.3895 80.4156C57.7326 79.736 57.2361 78.9691 56.9001 78.1154C56.5605 77.2612 56.3926 76.3417 56.3926 75.3563Z"
                        fill="white" />
                    <path d="M75.2545 68.6987H72.1016V82.0126H75.2545V68.6987Z" fill="white" />
                    <path
                        d="M78.335 82.0132V68.2676H78.6373L86.9719 76.4188L86.8636 68.699H89.7712V82.5183H89.4987L81.1343 74.5473L81.2425 82.0132H78.335Z"
                        fill="white" />
                    <path
                        d="M95.486 82.0135L95.5494 71.3011L91.2832 71.4816V68.6992H102.82V71.4816H102.059L98.5503 71.2334L98.6398 82.0135H95.486Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M45.3652 94.1597C45.3652 93.1756 45.534 92.2536 45.8717 91.3913C46.2072 90.5314 46.7046 89.7634 47.3595 89.0828C47.9802 88.4344 48.699 87.9378 49.5205 87.5906C50.3396 87.2457 51.1998 87.0732 52.0989 87.0732C52.9979 87.0732 53.8605 87.2457 54.682 87.5952C55.5058 87.9447 56.2359 88.4459 56.8748 89.1012C57.5183 89.7565 58.0067 90.5153 58.3375 91.3752C58.6684 92.2352 58.8327 93.1641 58.8327 94.1597C58.8327 94.9943 58.7185 95.7761 58.4881 96.5119C58.2553 97.2453 57.913 97.9167 57.4567 98.5214C56.8132 99.386 56.0214 100.055 55.0836 100.533C54.1457 101.012 53.1508 101.251 52.0989 101.251C51.2067 101.251 50.3511 101.076 49.5342 100.726C48.7173 100.377 47.9916 99.8757 47.3595 99.2204C46.7046 98.5398 46.2072 97.7742 45.8717 96.9211C45.534 96.0658 45.3652 95.1461 45.3652 94.1597ZM54.5747 97.0844C54.5793 97.0798 54.5839 97.0752 54.5862 97.0729C55.2548 96.2934 55.5902 95.3231 55.5902 94.1597C55.5902 92.9916 55.2548 92.0167 54.5862 91.2373C53.9176 90.4555 53.0892 90.0347 52.0989 90.0646C51.7726 90.0761 51.5034 90.1681 51.3688 90.244L54.5747 97.0844Z"
                        fill="white" />
                    <path
                        d="M61.0391 100.818V87.5039H69.2504V90.2126L64.1109 90.1001L64.0436 93.0243L68.713 92.8663V95.5566L64.066 95.4441L64.1743 100.818H61.0391Z"
                        fill="white" />
                    <path
                        d="M77.0033 97.758C77.817 98.2601 77.6191 97.9073 78.1864 98.1096C78.7538 98.3116 79.3098 98.4124 79.8473 98.4124C80.3959 98.4124 80.8327 98.2917 81.1649 98.0498C81.4971 97.808 81.6614 97.4973 81.6614 97.1179C81.6614 96.5729 81.0716 95.961 79.8921 95.2814C79.7055 95.1712 79.5599 95.0854 79.4554 95.0241L78.5633 94.5194C77.6937 94.0233 77.0518 93.4633 76.63 92.839C76.212 92.2147 76.0029 91.5076 76.0029 90.7178C76.0029 89.6467 76.4061 88.7681 77.2049 88.0825C78.0073 87.3972 79.0448 87.0542 80.3138 87.0542C80.7804 87.0542 81.288 87.1095 81.8367 87.2197C82.3816 87.3295 82.9901 87.501 83.6583 87.7338C83.4268 87.5868 83.1991 90.5741 82.9752 90.4515C82.5833 90.2368 82.2062 90.0592 81.8442 89.9189C81.2731 89.6986 80.788 89.5884 80.3849 89.5884C79.9445 89.5884 79.5935 89.685 79.3397 89.8776C79.0822 90.0705 78.9553 90.3323 78.9553 90.6629C78.9553 90.8953 79.0299 91.1127 79.183 91.3146C79.336 91.5166 79.5637 91.7005 79.866 91.8656L81.415 92.7288C82.7101 93.4513 83.5798 94.1185 84.0277 94.7304C84.4718 95.3427 84.6958 96.0682 84.6958 96.9065C84.6958 98.2044 84.2592 99.2526 83.3783 100.051C82.5012 100.85 81.3365 101.25 79.8846 101.25C79.3919 101.25 78.8583 101.198 78.2798 101.094C77.705 100.989 77.0704 100.827 76.3762 100.607L77.0033 97.758Z"
                        fill="white" />
                    <path
                        d="M89.3272 97.9014H93.8173L91.6227 92.4164L89.3272 97.9014ZM84.9229 100.818L91.6562 87.0908H91.8578L98.4455 100.818H84.9229Z"
                        fill="white" />
                    <path d="M99.4385 100.818V87.5039H102.592L102.51 98.1596L107.743 97.9625V100.818H99.4385Z"
                        fill="white" />
                    <path
                        d="M116.697 92.1082V95.9538L112.352 95.3825V98.0174H116.563L117.499 97.9445V100.818H109.288V87.504H116.29L117.447 87.4453L117.429 90.2495H112.352V92.6554"
                        fill="white" />
                </svg>
                <p class="text-sm md:text-base">
                    Point of Sale (POS) adalah sebuah sistem yang digunakan dalam bisnis
                    untuk mengelola transaksi penjualan produk atau layanan kepada
                    pelanggan.
                </p>
            </div>
            <div class="w-full flex flex-col gap-3 md:gap-7">
                <h1 class="text-xl md:text-3xl font-bold">Navigasi</h1>
                <p class="text-sm md:text-base">Home</p>
                <p class="text-sm md:text-base">About</p>
                <p class="text-sm md:text-base">Contact</p>
                <p class="text-sm md:text-base">Blog</p>
            </div>
            <div class="w-full">
                <h1 class="text-xl md:text-3xl font-bold mb-7">Kontak Kami</h1>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-3 gap-3">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.5 33C26.3366 33 33.5 25.8366 33.5 17C33.5 8.16344 26.3366 1 17.5 1C8.66344 1 1.5 8.16344 1.5 17C1.5 25.8366 8.66344 33 17.5 33Z"
                                fill="white" stroke="white" stroke-width="1.5" />
                            <path
                                d="M9.55 12.555C9.65082 12.1132 9.89866 11.7188 10.2529 11.4363C10.6072 11.1538 11.0469 11 11.5 11H23.5C23.9531 11 24.3928 11.1538 24.7471 11.4363C25.1013 11.7188 25.3492 12.1132 25.45 12.555L17.5 17.414L9.55 12.555ZM9.5 13.697V20.801L15.303 17.243L9.5 13.697ZM16.261 17.83L9.691 21.857C9.85333 22.1993 10.1095 22.4884 10.4298 22.6908C10.75 22.8931 11.1212 23.0004 11.5 23H23.5C23.8788 23.0001 24.2498 22.8926 24.5698 22.6901C24.8899 22.4876 25.1459 22.1983 25.308 21.856L18.738 17.829L17.5 18.586L16.261 17.829V17.83ZM19.697 17.244L25.5 20.801V13.697L19.697 17.243V17.244Z"
                                fill="white" />
                        </svg>
                        <p class="text-sm md:text-xl">Hello@digitaliz.net</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg width="35" height="34" viewBox="0 0 35 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.5 33C26.3366 33 33.5 25.8366 33.5 17C33.5 8.16344 26.3366 1 17.5 1C8.66344 1 1.5 8.16344 1.5 17C1.5 25.8366 8.66344 33 17.5 33Z"
                                fill="white" stroke="white" stroke-width="1.5" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.3855 9.51017C11.5604 9.33546 11.7706 9.19993 12.0019 9.11256C12.2332 9.02519 12.4804 8.98798 12.7272 9.00339C12.974 9.01881 13.2147 9.08649 13.4333 9.20196C13.652 9.31743 13.8436 9.47805 13.9955 9.67317L15.7905 11.9792C16.1195 12.4022 16.2355 12.9532 16.1055 13.4732L15.5585 15.6632C15.5302 15.7766 15.5317 15.8954 15.5629 16.0081C15.5941 16.1207 15.6539 16.2234 15.7365 16.3062L18.1935 18.7632C18.2763 18.8459 18.3792 18.9058 18.492 18.937C18.6049 18.9682 18.7239 18.9696 18.8375 18.9412L21.0265 18.3942C21.2831 18.33 21.5509 18.325 21.8098 18.3796C22.0686 18.4342 22.3116 18.5469 22.5205 18.7092L24.8265 20.5032C25.6555 21.1482 25.7315 22.3732 24.9895 23.1142L23.9555 24.1482C23.2155 24.8882 22.1095 25.2132 21.0785 24.8502C18.4397 23.9217 16.0437 22.411 14.0685 20.4302C12.0878 18.4552 10.5771 16.0596 9.64847 13.4212C9.28647 12.3912 9.61147 11.2842 10.3515 10.5442L11.3855 9.51017Z"
                                fill="white" />
                        </svg>

                        <p class="text-sm md:text-base">+62 12893 21321</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-fit">
                            <svg width="35" height="34" viewBox="0 0 35 34" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.5 33C26.3366 33 33.5 25.8366 33.5 17C33.5 8.16344 26.3366 1 17.5 1C8.66344 1 1.5 8.16344 1.5 17C1.5 25.8366 8.66344 33 17.5 33Z"
                                    fill="white" stroke="white" stroke-width="1.5" />
                                <path
                                    d="M17.5 25C17.5 25 23.5 19.314 23.5 15C23.5 13.4087 22.8679 11.8826 21.7426 10.7574C20.6174 9.63214 19.0913 9 17.5 9C15.9087 9 14.3826 9.63214 13.2574 10.7574C12.1321 11.8826 11.5 13.4087 11.5 15C11.5 19.314 17.5 25 17.5 25ZM17.5 18C16.7044 18 15.9413 17.6839 15.3787 17.1213C14.8161 16.5587 14.5 15.7956 14.5 15C14.5 14.2044 14.8161 13.4413 15.3787 12.8787C15.9413 12.3161 16.7044 12 17.5 12C18.2956 12 19.0587 12.3161 19.6213 12.8787C20.1839 13.4413 20.5 14.2044 20.5 15C20.5 15.7956 20.1839 16.5587 19.6213 17.1213C19.0587 17.6839 18.2956 18 17.5 18Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <p class=" text-sm md:text-base">
                            <span class="font-medium">Gedung NHB Lantai 1, Kampus GIBS Jl. Trans Kalimantan</span>, Sungai
                            Lumbah, Alalak, Barito Kuala. Kalimantan Selatan Indonesia 70582
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="flex flex-col md:flex-row items-center md:justify-between gap-6 md:gap-0">
            <div class="flex gap-4">
                <svg width="39" height="37" viewBox="0 0 39 37" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.8629 36C30.0045 36 38.2259 28.165 38.2259 18.5C38.2259 8.83502 30.0045 1 19.8629 1C9.72136 1 1.5 8.83502 1.5 18.5C1.5 28.165 9.72136 36 19.8629 36Z"
                        fill="white" stroke="white" stroke-width="1.5" />
                    <path
                        d="M15.6484 14.9671C16.508 14.9671 17.2049 14.3029 17.2049 13.4835C17.2049 12.6642 16.508 12 15.6484 12C14.7887 12 14.0918 12.6642 14.0918 13.4835C14.0918 14.3029 14.7887 14.9671 15.6484 14.9671Z"
                        fill="white" />
                    <path
                        d="M16.9455 15.958H14.3512C14.208 15.958 14.0918 16.0688 14.0918 16.2053V23.623C14.0918 23.7595 14.208 23.8703 14.3512 23.8703H16.9455C17.0887 23.8703 17.2049 23.7595 17.2049 23.623V16.2053C17.2049 16.0688 17.0887 15.958 16.9455 15.958Z"
                        fill="white" />
                    <path
                        d="M24.6774 15.5469C23.5686 15.1849 22.1817 15.5029 21.3499 16.0731C21.3214 15.9667 21.2197 15.8876 21.0988 15.8876H18.5045C18.3613 15.8876 18.2451 15.9984 18.2451 16.1349V23.5526C18.2451 23.6891 18.3613 23.7999 18.5045 23.7999H21.0988C21.242 23.7999 21.3582 23.6891 21.3582 23.5526V18.2217C21.7775 17.8775 22.3176 17.7678 22.7597 17.9468C23.1882 18.1194 23.4337 18.5407 23.4337 19.102V23.5526C23.4337 23.6891 23.5499 23.7999 23.6931 23.7999H26.2874C26.4306 23.7999 26.5468 23.6891 26.5468 23.5526V18.604C26.5172 16.572 25.5143 15.8199 24.6774 15.5469Z"
                        fill="white" />
                </svg>
                <svg width="39" height="37" viewBox="0 0 39 37" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.3288 36C29.4703 36 37.6917 28.165 37.6917 18.5C37.6917 8.83502 29.4703 1 19.3288 1C9.18718 1 0.96582 8.83502 0.96582 18.5C0.96582 28.165 9.18718 36 19.3288 36Z"
                        fill="white" stroke="white" stroke-width="1.5" />
                    <path
                        d="M21.0001 14.0208H22.6876C22.8429 14.0208 22.9689 13.9076 22.9689 13.7682V12.2526C22.9689 12.1132 22.8429 12 22.6876 12H21.0001C19.2946 12 17.9063 13.2463 17.9063 14.7786V16.5468H15.9375C15.7823 16.5468 15.6562 16.6599 15.6562 16.7994V18.3149C15.6562 18.4544 15.7823 18.5675 15.9375 18.5675H17.9063V23.8721C17.9063 24.0115 18.0323 24.1247 18.1876 24.1247H19.8751C20.0303 24.1247 20.1563 24.0115 20.1563 23.8721V18.5675H22.1251C22.2461 18.5675 22.3535 18.4978 22.3923 18.3948L22.9548 16.8792C22.9835 16.8024 22.9689 16.7175 22.916 16.6513C22.8626 16.5857 22.7782 16.5468 22.6876 16.5468H20.1563V14.7786C20.1563 14.3608 20.5349 14.0208 21.0001 14.0208Z"
                        fill="white" />
                </svg>
                <svg width="39" height="37" viewBox="0 0 39 37" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                        d="M19.7955 36C29.9371 36 38.1585 28.165 38.1585 18.5C38.1585 8.83502 29.9371 1 19.7955 1C9.65398 1 1.43262 8.83502 1.43262 18.5C1.43262 28.165 9.65398 36 19.7955 36Z"
                        fill="white" stroke="white" stroke-width="1.5" />
                    <path
                        d="M25.7962 15.2647C25.711 15.1729 25.5736 15.1498 25.461 15.2064C25.3909 15.2416 25.2591 15.2878 25.1027 15.3334C25.3001 15.0762 25.4587 14.7882 25.5288 14.5293C25.5591 14.4177 25.5148 14.3001 25.4184 14.2336C25.3219 14.1677 25.1935 14.1677 25.0971 14.2336C24.9452 14.3375 24.2119 14.6497 23.7482 14.7508C22.7004 13.8511 21.481 13.7577 20.2134 14.4831C19.1829 15.0729 18.9587 16.2721 19.0024 17.0031C16.6438 16.7805 15.1777 15.5593 14.3525 14.5485C14.2947 14.4776 14.2017 14.4403 14.1142 14.4458C14.0223 14.4524 13.9393 14.5024 13.8922 14.5799C13.502 15.2257 13.3938 15.9396 13.5805 16.6447C13.6825 17.0295 13.8608 17.3686 14.0677 17.6434C13.9684 17.5956 13.8726 17.5357 13.7823 17.4642C13.6993 17.3972 13.5833 17.3845 13.4852 17.429C13.3876 17.4747 13.3254 17.5714 13.3254 17.6775C13.3254 18.8882 14.0979 19.6962 14.8195 20.1183C14.7029 20.1045 14.5812 20.0792 14.4584 20.0424C14.353 20.0111 14.2387 20.0424 14.1658 20.1238C14.0929 20.2046 14.0755 20.32 14.1209 20.4184C14.5263 21.2972 15.2943 21.9017 16.2446 22.121C15.4149 22.5986 14.3043 22.8328 13.2873 22.7179C13.1555 22.6998 13.0299 22.7817 12.9884 22.9059C12.947 23.0301 13.0013 23.1664 13.1174 23.2301C14.6603 24.0793 16.0551 24.3827 17.2605 24.3827C19.0147 24.3827 20.3687 23.7407 21.1928 23.2038C23.4146 21.7583 24.7994 19.163 24.6065 16.841C24.9626 16.5832 25.4952 16.1072 25.8254 15.5955C25.8938 15.4922 25.8814 15.3559 25.7962 15.2647Z"
                        fill="white" />
                </svg>
            </div>
            <div class="">
                <p class="text-sm md:text-base">
                    A product of
                    <span>
                        <img src="{{ asset('assets/img/text-d-ft.svg') }}" alt="Digitaliz"
                            class="inline w-20 h-6" /></span>
                </p>
            </div>
            <div>
                <p class="text-xs md:text-lg">© 2023 Digitaliz. All rights reserved</p>
            </div>
        </div>
    </footer>
    {{-- footer end --}}
@endsection

@section('file-footer')
@endsection
