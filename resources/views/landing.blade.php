@extends('layouts.app')


@section('file-header')
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .scroll-none::-webkit-scrollbar {
            display: none;
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
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
                <a href="#" class=" text-red-500 font-semibold rounded hidden md:block" aria-current="page">Masuk</a>
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
                        <a href="#slide-3"
                            class="block py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700">Support</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block md:hidden py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700">Masuk</a>
                    </li>
                    <li>
                        <a href="#"
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

            <h1
                class="text-white-50 font-semibold text-3xl md:text-5xl mb-7 md:mb-10 whitespace-pre-line leading-normal md:leading-snug"
                >Be The <span class=" text-yellow-500">Fastest</span>
                In Delivering
                Your <Span class="text-red-500">Food</Span></h1>

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
            <p
                class="font-semibold text-xl md:text-5xl md:leading-snug w-full md:w-1/2 mx-auto text-center md:whitespace-pre-line">Your Favorite Food
                Delivery Partner</p>
        </div>
        <div class="flex flex-wrap flex-col md:flex-row gap-0 md:gap-20 xl:gap-0 justify-evenly">
            <div class="p-2 md:mb-20">
                <div class="flex-row align-middle justify-center">
                    <div class="mx-auto w-72  md:w-96 md:h-96 md:mb-8 md:p-3">
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
                    <div class="mx-auto w-72  md:w-96 md:h-96 md:mb-8 md:p-3">
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
                    <div class="mx-auto w-72 md:w-96 md:h-96 md:mb-8 md:p-3">
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
                <button class="py-4 px-10 bg-red-500 hover:bg-red-700 text-lg text-white-50 font-semibold rounded-xl tracking-wide">
                    Lihat tim kami
                </button>
            </div>
        </div>
    </div>
    {{-- our team end --}}

    {{-- pricing --}}
    <div id="pricing" class="bg-no-repeat bg-cover flex flex-col md:flex-row gap-10 md:p-20 p-5 bg-[url('/public/assets/img/pricing.jpg')]">
      <div class="text-red-600">
        <h6 class="text-2xl tracking-widest font-medium mb-6">
          Gabung sekarang
        </h6>
        <h2 class="text-5xl font-bold mb-6">
          Pilih paket dan mulai bergabung!
        </h2>
        <p class="text-gray-900 text-lg mb-6">
          Temukan paket yang sesuai dengan kebutuhanmu dan bergabung bersama
          kami di wetland Square banjarmasin. UMKM Jaya!
        </p>
        <span class="flex items-center gap-2">
            <h6 class="text-xl">
                Lihat harga selengkapnya
            </h6>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
        </svg>
    </span>

      </div>
      {{-- <div class="bg-white-100 p-10 rounded-3xl">
        <h3 class="text-red-600 mb-2 text-[32px] font-medium">3 Bulan</h3>
        <p class="text-lg mb-9">
          Berlangganan bersama kami dengan paket 3 bulan. Bertempat di Wetland
          Square Banjarmasin.
        </p>
        <h2 class="text-[46px] font-semibold">Rp. 499.000</h2>
        <h4 class="text-2xl text-gray-600 leading-6 mb-9">Per outlet</h4>
        <div class="flex flex-row gap-5">
          <button
            class="px-8 py-2 w-full bg-red-500 font-medium rounded-xl text-white-100 tracking-wide"
          >
            Pilih paket
          </button>
          <button
            class="px-6 py-2 w-full border-2 border-red-500 font-medium rounded-xl text-red-500 tracking-wide"
          >
            Hubungi kami
          </button>
        </div>
      </div> --}}

      {{-- carousel test --}}

<div id="indicators-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-[450px] overflow-hidden rounded-2xl">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <div class="bg-white-100 p-10 rounded-2xl">
                <h3 class="text-red-600 mb-2 text-[32px] font-medium">3 Bulan</h3>
                <p class="text-lg mb-9">
                  Berlangganan bersama kami dengan paket 3 bulan. Bertempat di Wetland
                  Square Banjarmasin.
                </p>
                <h2 class="text-[46px] font-semibold">Rp. 499.000</h2>
                <h4 class="text-2xl text-gray-600 leading-6 mb-9">Per outlet</h4>
                <div class="flex flex-row gap-5">
                  <button
                    class="px-8 py-2 w-full bg-red-500 font-medium rounded-xl text-white-100 tracking-wide"
                  >
                    Pilih paket
                  </button>
                  <button
                    class="px-6 py-2 w-full border-2 border-red-500 font-medium rounded-xl text-red-500 tracking-wide"
                  >
                    Hubungi kami
                  </button>
                </div>
              </div>
            </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="bg-white-100 p-10 rounded-2xl">
                <h3 class="text-red-600 mb-2 text-[32px] font-medium">6 Bulan</h3>
                <p class="text-lg mb-9">
                  Berlangganan bersama kami dengan paket 6 bulan. Bertempat di Wetland
                  Square Banjarmasin.
                </p>
                <h2 class="text-[46px] font-semibold">Rp. 899.000</h2>
                <h4 class="text-2xl text-gray-600 leading-6 mb-9">Per outlet</h4>
                <div class="flex flex-row gap-5">
                  <button
                    class="px-8 py-2 w-full bg-red-500 font-medium rounded-xl text-white-100 tracking-wide"
                  >
                    Pilih paket
                  </button>
                  <button
                    class="px-6 py-2 w-full border-2 border-red-500 font-medium rounded-xl text-red-500 tracking-wide"
                  >
                    Hubungi kami
                  </button>
                </div>
              </div>
            </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="bg-white-100 p-10 rounded-2xl">
                <h3 class="text-red-600 mb-2 text-[32px] font-medium">1 Tahun</h3>
                <p class="text-lg mb-9">
                  Berlangganan bersama kami dengan paket 1 Tahun. Bertempat di Wetland
                  Square Banjarmasin.
                </p>
                <h2 class="text-[46px] font-semibold">Rp. 1.299.000</h2>
                <h4 class="text-2xl text-gray-600 leading-6 mb-9">Per outlet</h4>
                <div class="flex flex-row gap-5">
                  <button
                    class="px-8 py-2 w-full bg-red-500 font-medium rounded-xl text-white-100 tracking-wide"
                  >
                    Pilih paket
                  </button>
                  <button
                    class="px-6 py-2 w-full border-2 border-red-500 font-medium rounded-xl text-red-500 tracking-wide"
                  >
                    Hubungi kami
                  </button>
                </div>
              </div>
            </div>

    </div>
    <!-- Slider indicators -->
    {{-- <div id="slider-indicators" class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full bg-red-500" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0 bg-red-500"></button>
        <button type="button" class="w-3 h-3 rounded-full border-2 border-white-100" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full border-2 border-white-100" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div> --}}
    <!-- Slider controls -->
    {{-- <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button> --}}
</div>
<div id="slider-indicators" class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
    <button type="button" class="w-3 h-3 rounded-full bg-red-500" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0 bg-red-500"></button>
    <button type="button" class="w-3 h-3 rounded-full border-2 border-white-100" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
    <button type="button" class="w-3 h-3 rounded-full border-2 border-white-100" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
</div>



      {{-- carousel end --}}

    </div>
    {{-- pricing end --}}
@endsection

@section('file-footer')

@endsection
