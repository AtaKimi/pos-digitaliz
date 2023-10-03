@extends('layouts.customer', ['judul' => ' '])

@section('content')
    <div class="flex flex-col items-center justify-center pb-5">
        <h1 class="text-2xl font-semibold pt-3 pb-5">Order Completed</h1>
        <div class="flex items-center justify-center w-32 h-32 border border-red-500 rounded-full bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <svg width="82" height="60" viewBox="0 0 90 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M28 54.2399L9.49334 35.7333C8.49612 34.736 7.14361 34.1758 5.73334 34.1758C4.32306 34.1758 2.97055 34.736 1.97334 35.7333C0.976122 36.7305 0.415894 38.083 0.415894 39.4933C0.415894 40.1916 0.553434 40.883 0.820661 41.5281C1.08789 42.1733 1.47957 42.7595 1.97334 43.2533L24.2667 65.5466C26.3467 67.6266 29.7067 67.6266 31.7867 65.5466L88.2133 9.11992C89.2105 8.12271 89.7708 6.7702 89.7708 5.35992C89.7708 3.94965 89.2105 2.59714 88.2133 1.59992C87.2161 0.602711 85.8636 0.0424805 84.4533 0.0424805C83.0431 0.0424805 81.6905 0.602711 80.6933 1.59992L28 54.2399Z" fill="#F54748"/>
            </svg>                
        </div>
        <p class="text-xs text-gray-800 pt-8 w-44 text-center">Your  order is verified!</p>
        <p class="text-xs text-gray-800 w-44 text-center">Our team is cooking your food and serving it on your table as fast as we can!</p>

        <p class="text-[10px] text-gray-500 pt-12 pb-2">Want to order another menu?</p>
        <div>
            <button type="button" class="text-white-50 bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                <p class="pr-2">Daftar Menu</p>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0.5C12.1421 0.5 15.5 3.85786 15.5 8C15.5 12.1421 12.1421 15.5 8 15.5C3.85786 15.5 0.5 12.1421 0.5 8C0.5 3.85786 3.85786 0.5 8 0.5ZM4.71875 7.53125C4.45987 7.53125 4.25 7.74112 4.25 8C4.25 8.25888 4.45987 8.46875 4.71875 8.46875H10.1496L8.13729 10.481C7.95423 10.6641 7.95423 10.9609 8.13729 11.144C8.32035 11.327 8.61715 11.327 8.80021 11.144L11.6127 8.33146C11.7958 8.1484 11.7958 7.8516 11.6127 7.66854L8.80021 4.85604C8.61715 4.67299 8.32035 4.67299 8.13729 4.85604C7.95423 5.0391 7.95423 5.3359 8.13729 5.51896L10.1496 7.53125H4.71875Z" fill="white"/>
                </svg>                    
            </button>
        </div>
@endsection