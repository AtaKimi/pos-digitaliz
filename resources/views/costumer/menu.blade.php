@extends('layouts.customer')

@section('content')
    <div class="p-5">
        {{-- Search & Navbar --}}
        <div class="relative w-full">
            <div class="absolute flex pl-3 items-center pointer-events-none">
                <svg class="w-4 h-4 my-2.9 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="simple-search"
                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search" required>
        </div>
        <div class="flex">

        </div>
        {{-- END OF Search & Navbar --}}
    </div>
@endsection
