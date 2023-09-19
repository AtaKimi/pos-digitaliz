@extends('layouts.app')




@section('content')
{{-- navbar --}}
<nav
class="bg-transparent absolute md:static dark:bg-gray-900 w-full z-20 top-0 left-0"
>
<div
id="navbar" class="max-w-full flex flex-wrap items-center justify-between mx-auto lg:mx-20 p-4"
>
  <a href="#hero">
    <img
      src="./assets/img/logo_pos.png"
      class="h-11 hidden md:block"
      alt="POS Logo"
    />
    <img
      src="./assets/img/logo_pos_white.png"
      class="h-11 block md:hidden"
      alt="POS Logo"
    />
  </a>
  <div class="flex md:order-2">
    <a
      href="#"
      class=" my-auto mr-6 py-2 pl-3 pr-4 text-red-500 font-semibold rounded hidden md:block"
      aria-current="page"
      >Masuk</a
    >
    <button
      type="button"
      class="hidden md:block text-white-50 bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
    >
      Get started
    </button>
    <button
      data-collapse-toggle="navbar-default"
      type="button"
      class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
      aria-controls="navbar-default"
      aria-expanded="false"
    >
      <span class="sr-only">Open main menu</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="31" height="21" viewBox="0 0 31 21" fill="none">
        <path d="M2.50098 2.50001H28.501M2.50098 10.5H28.501M2.50098 18.5H28.501" stroke="#F54748" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
  </div>
  <div
    class="ml-4 lg:ml-20 flex-grow items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
    id="navbar-default"
  >
    <ul
      class="flex flex-col lg:gap-2 p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white-50 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
    >
      <li>
        <a
          href="#hero"
          class="block py-2 pl-3 pr-4 text-white-50 bg-red-700 rounded md:bg-transparent md:text-red-500 md:p-0 underline underline-offset-8"
          aria-current="page"
          >Home</a
        >
      </li>
      <li>
        <a
          href="#about"
          class="block py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700"
          >About</a
        >
      </li>
      <li>
        <a
          href="#slide-4"
          class="block py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700"
          >Pricing</a
        >
      </li>
      <li>
        <a
          href="#slide-5"
          class="block py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700"
          >Our Team</a
        >
      </li>
      <li>
        <a
          href="#slide-3"
          class="block py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700"
          >Support</a
        >
      </li>
      <li>
        <a
          href="#"
          class="block md:hidden py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700"
          >Masuk</a
        >
      </li>
      <li>
        <a
          href="#"
          class="block md:hidden py-2 pl-3 pr-4 text-red-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white-50 dark:hover:bg-gray-700 dark:hover:text-white-50 md:dark:hover:bg-transparent dark:border-gray-700"
          >Get Started</a
        >
      </li>
    </ul>
  </div>
</div>
</nav>
{{-- end navbar --}}

{{-- scroll up button --}}
<a href="#navbar"
    class="fixed bottom-4 right-4 p-1 md:p-3 z-20 bg-red-500 text-white-50 rounded-xl shadow hover:bg-white-50 hover:text-gray-900">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
      class="w-6 h-6 inline-block align-text-bottom">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
  </a>
{{-- end scroll up button --}}

{{-- hero --}}
<div id="hero" class="bg-cover bg-center bg-no-repeat lg:h-screen bg-[url('/public/assets/img/hero.png')]" >
    <div class="flex flex-col md:pt-32 md:ps-20 p-5 pt-24" >
      <div class="flex mb-7">
        <button class="flex gap-2 items-center bg-red-100 text-xs md:text-sm text-gray-900 py-1 md:py-2 font-semibold px-2 md:px-5 border-2 border-transparent rounded-full hover:bg-white-50 hover:text-red-500 hover:border-red-500" >
          <img src="./assets/img/play.svg" class="w-4 h-4">
          <span>
            Watch video
          </span>
        </button>
      </div>

      <h1 class="text-white-50 font-semibold text-3xl md:text-5xl mb-5 md:mb-7 whitespace-pre-line md:leading-tight">Be The <span class=" text-orange-400">Fastest</span>
        In Delivering
        Your <Span class="text-red-500">Food</Span>
      </h1>

      <div class="flex mb-7 md:flex-row flex-col gap-3">
        <button class="bg-red-500 text-xs md:text-base text-white-50 p-2 md:p-3 w-fit rounded-xl hover:bg-red-700" >
          Coba Gratis 14 hari
        </button>
        <button class="text-white-50 text-xs md:text-base border border-white w-fit rounded-xl p-2 md:p-3 hover:bg-gray-50 hover:text-gray-900 " >
          Kenapa harus POS ?
        </button>
      </div>
      <div class="mb-7 gap-3 hidden md:flex">
        {{-- <div class="w-40 h-40 bg-[url('/public/assets/img/rectangle.png')] bg-no-repeat bg-contain py-5 px-5 text-center">
          <a class=" text-xs text-gray-900  rounded-xl whitespace-pre-line
        hover:text-white-50">Global Reach
            <span class="text-red-500 text-2xl hover:text-gray-900">72 +</span>
            Countries with
            Excellent
          </a>
        </div> --}}


    <a class="text-center  text-xs text-gray-900 py-5 px-5 rounded-xl whitespace-pre-line
          bg-[url('/public/assets/img/rectangle.png')]
          bg-no-repeat
        hover:text-white-50">Global Reach
            <span class="text-red-500 text-2xl hover:text-gray-900">72 +</span>
            Countries with
            Excellent
      </a>




        <a class="text-white-50 text-xs rounded-xl py-5 px-5 hover:text-gray-900 bg-[url('/public/assets/img/rectangle1.png')] md:bg-no-repeat" >
          <div class="mb-3 mt-3 flex gap-3 md:flex-row flex-col">
            <div class=" flex -space-x-6 overflow-hidden">
              <img class="inline-block h-10 w-10 rounded-full border-2 border-white hover:border-gray-900" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""/>
              <img class="inline-block h-10 w-10 rounded-full border-2 border-white hover:border-gray-900" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""/>
              <img class="inline-block h-10 w-10 rounded-full border-2 border-white hover:border-gray-900" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt=""/>
              <img class="inline-block h-10 w-10 rounded-full border-2 border-white hover:border-gray-900" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""/>
              <img class="inline-block h-10 w-10 rounded-full border-2 border-white hover:border-gray-900" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""/>
          </div>
            <span class="whitespace-pre-line text-start">Trusted 12.000+ Businesses
              World Wide
            </span>
          </div>
          <Span class="">
            Our Client's feedback is ivaluable to us!
          </Span>
          <div class="flex items-center float-right mt-5">
            <span class="me-1">See Here</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>

          </div>
        </a>
      </div>


    </div>
</div>
{{-- end hero --}}

{{-- about us --}}
<div id="about" class="h-fit mx-auto py-10 sm:py-12 md:py-24 lg:py-32 bg-red-100">
    <div class="dm:md-4 md:mb-8 lg:mb-14">
      <p class="font-semibold text-center text-red-500 text-2xl mb-2">
        About Us
      </p>
      <p class="font-semibold text-5xl w-full md:w-1/2 mx-auto text-center">
        Your Favorite Food <br />
        Delivery Partner
      </p>
    </div>
    <div class="flex flex-wrap flex-col md:flex-row gap-0 md:gap-20 xl:gap-0 justify-evenly">
      <div class="p-2">
        <div class="flex-row align-middle justify-center">
          <div class="mx-auto w-3/4 h-3/4 lg:w-96 lg:h-96 mb-8 p-3">
            <img src="./assets/img/2_1.png" class="w-full h-full" alt="" />
            <div class="text-center">
              <h1 class="font-semibold text-3xl md:text-4xl lg:text-5xl mb-5">Easy To Order</h1>
              <p class="text-gray-700 text-3xl lg:text-2xl mx-auto">
                You only need a few steps in ordeing food
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="flex-row align-middle justify-center">
          <div class="mx-auto w-3/4 h-3/4  lg:w-96 lg:h-96 mb-8 p-3">
            <img src="./assets/img/2_2.png" class="w-full h-full" alt="" />
            <div class="text-center">
              <h1 class="font-semibold text-3xl md:text-4xl lg:text-5xl mb-5">Fastest Delivery</h1>
              <p class="text-gray-700 text-3xl lg:text-2xl mx-auto">
                You only need a few steps in ordeing food
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="flex-row align-middle justify-center">
          <div class="mx-auto w-3/4 h-3/4  lg:w-96 lg:h-96 mb-8 p-3">
            <img src="./assets/img/2_3.png" class="w-full h-full" alt="" />
            <div class="text-center">
              <h1 class="font-semibold text-3xl md:text-4xl lg:text-5xl mb-5">Best Quality</h1>
              <p class="text-gray-700 text-3xl lg:text-2xl mx-auto">
                Not only fast for us quality is also number one.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- about us end --}}

@endsection

@section('file-footer')

@endsection
