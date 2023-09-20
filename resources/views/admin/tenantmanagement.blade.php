@extends('layouts.admin')

@section('content')

    <div class="rounded-2xl overflow-hidden shadow-lg bg-white-50 mb-5">
        <div class="p-4">
            <div class="flex items-center">
                <div class="mr-4 bg-yellow-50 rounded-xl p-5">
                <!-- Icon di sini -->
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.0625 10.3438C7.0625 9.7397 7.55219 9.25001 8.15625 9.25001H21.2812C21.8853 9.25001 22.375 9.7397 22.375 10.3438C22.375 10.9478 21.8853 11.4375 21.2812 11.4375H8.15625C7.55219 11.4375 7.0625 10.9478 7.0625 10.3438Z" fill="#FDC55E"/>
                    <path d="M7.0625 14.7188C7.0625 14.1147 7.55219 13.625 8.15625 13.625H21.2812C21.8853 13.625 22.375 14.1147 22.375 14.7188C22.375 15.3228 21.8853 15.8125 21.2812 15.8125H8.15625C7.55219 15.8125 7.0625 15.3228 7.0625 14.7188Z" fill="#FDC55E"/>
                    <path d="M7.0625 19.0938C7.0625 18.4897 7.55219 18 8.15625 18H21.2812C21.8853 18 22.375 18.4897 22.375 19.0938C22.375 19.6978 21.8853 20.1875 21.2812 20.1875H8.15625C7.55219 20.1875 7.0625 19.6978 7.0625 19.0938Z" fill="#FDC55E"/>
                    <path d="M7.0625 23.4688C7.0625 22.8647 7.55219 22.375 8.15625 22.375H21.2812C21.8853 22.375 22.375 22.8647 22.375 23.4688C22.375 24.0728 21.8853 24.5625 21.2812 24.5625H8.15625C7.55219 24.5625 7.0625 24.0728 7.0625 23.4688Z" fill="#FDC55E"/>
                    <path d="M7.0625 27.8438C7.0625 27.2397 7.55219 26.75 8.15625 26.75H21.2812C21.8853 26.75 22.375 27.2397 22.375 27.8438C22.375 28.4478 21.8853 28.9375 21.2812 28.9375H8.15625C7.55219 28.9375 7.0625 28.4478 7.0625 27.8438Z" fill="#FDC55E"/>
                    <path d="M25.6562 9.25001C25.0522 9.25001 24.5625 9.7397 24.5625 10.3438C24.5625 10.9478 25.0522 11.4375 25.6562 11.4375H27.8438C28.4478 11.4375 28.9375 10.9478 28.9375 10.3438C28.9375 9.7397 28.4478 9.25001 27.8438 9.25001H25.6562Z" fill="#FDC55E"/>
                    <path d="M25.6562 13.625C25.0522 13.625 24.5625 14.1147 24.5625 14.7188C24.5625 15.3228 25.0522 15.8125 25.6562 15.8125H27.8438C28.4478 15.8125 28.9375 15.3228 28.9375 14.7188C28.9375 14.1147 28.4478 13.625 27.8438 13.625H25.6562Z" fill="#FDC55E"/>
                    <path d="M25.6562 18C25.0522 18 24.5625 18.4897 24.5625 19.0938C24.5625 19.6978 25.0522 20.1875 25.6562 20.1875H27.8438C28.4478 20.1875 28.9375 19.6978 28.9375 19.0938C28.9375 18.4897 28.4478 18 27.8438 18H25.6562Z" fill="#FDC55E"/>
                    <path d="M25.6562 22.375C25.0522 22.375 24.5625 22.8647 24.5625 23.4688C24.5625 24.0728 25.0522 24.5625 25.6562 24.5625H27.8438C28.4478 24.5625 28.9375 24.0728 28.9375 23.4688C28.9375 22.8647 28.4478 22.375 27.8438 22.375H25.6562Z" fill="#FDC55E"/>
                    <path d="M25.6562 26.75C25.0522 26.75 24.5625 27.2397 24.5625 27.8438C24.5625 28.4478 25.0522 28.9375 25.6562 28.9375H27.8438C28.4478 28.9375 28.9375 28.4478 28.9375 27.8438C28.9375 27.2397 28.4478 26.75 27.8438 26.75H25.6562Z" fill="#FDC55E"/>
                    <path d="M5.6484 1.91412C5.39979 1.66551 5.04684 1.55157 4.6998 1.60789C4.35276 1.6642 4.05395 1.88391 3.89672 2.19837L2.80297 4.38587C2.72703 4.53775 2.6875 4.70521 2.6875 4.87501V33.3125H1.59375C0.989689 33.3125 0.5 33.8022 0.5 34.4063C0.5 35.0103 0.989689 35.5 1.59375 35.5H34.4062C35.0103 35.5 35.5 35.0103 35.5 34.4063C35.5 33.8022 35.0103 33.3125 34.4062 33.3125H33.3125V4.87501C33.3125 4.70521 33.273 4.53775 33.197 4.38587L32.1033 2.19837C31.946 1.88391 31.6472 1.6642 31.3002 1.60789C30.9532 1.55157 30.6002 1.66551 30.3516 1.91412L28.9375 3.32822L27.5234 1.91412C27.0963 1.48698 26.4037 1.48698 25.9766 1.91412L24.5625 3.32822L23.1484 1.91412C22.7213 1.48698 22.0287 1.48698 21.6016 1.91412L20.1875 3.32822L18.7734 1.91412C18.3463 1.48698 17.6537 1.48698 17.2266 1.91412L15.8125 3.32822L14.3984 1.91412C13.9713 1.48698 13.2787 1.48698 12.8516 1.91412L11.4375 3.32822L10.0234 1.91412C9.59626 1.48698 8.90374 1.48698 8.4766 1.91412L7.0625 3.32822L5.6484 1.91412ZM5.17463 4.53394L6.2891 5.64841C6.71624 6.07555 7.40876 6.07555 7.8359 5.64841L9.25 4.23431L10.6641 5.64841C11.0912 6.07555 11.7838 6.07555 12.2109 5.64841L13.625 4.23431L15.0391 5.64841C15.4662 6.07555 16.1588 6.07555 16.5859 5.64841L18 4.23431L19.4141 5.64841C19.8412 6.07555 20.5338 6.07555 20.9609 5.64841L22.375 4.23431L23.7891 5.64841C24.2162 6.07555 24.9088 6.07555 25.3359 5.64841L26.75 4.23431L28.1641 5.64841C28.5912 6.07555 29.2838 6.07555 29.7109 5.64841L30.8254 4.53394L31.125 5.13321V33.3125H4.875V5.13321L5.17463 4.53394Z" fill="#FDC55E"/>
                </svg>                    
                </div>
                <div>
                <!-- Title di sini -->
                <p class="font-bold text-xl text-gray-900">Tenant Management</p>
                <!-- Subtitle di sini -->
                <p class="text-gray-600">Akses mengatur pada tenant</p>
                </div>
            </div>
        </div>
  </div>
    
  
<div class="p-6 bg-white-50 border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between pb-6">
        <div>
            <p class="text-lg font-semibold text-gray-700">Tenant List</p>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-xl">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-s text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="py-10">
                    <th scope="col" class="text-center w-1 px-3">
                        No
                    </th>
                    <th scope="col" class="text-left">
                        Nama Tenant
                    </th>
                    <th scope="col" class="text-left">
                        Nama User
                    </th>
                    <th scope="col" class="text-center">
                        Status Pembayaran
                    </th>
                    <th scope="col" class="text-center">
                        Status
                    </th>
                    <th scope="col" class="text-center w-30">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <tr class="bg-white-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-center">
                    <th scope="row" class="font-normal text-gray-900 whitespace-nowrap dark:text-white py-5">
                        1
                    </th>
                    <th scope="row" class="font-normal text-gray-900 whitespace-nowrap dark:text-white py-5">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <!-- kode di sini -->
                                <p class="text-gray-500 text-xs text-left">#12345</p>
                                <!-- nama di sini -->
                                <p class="">Forger Coffee</p>
                            </div>
                        </div>
                    </th>
                    <td class="text-gray-900 py-5">
                        <div class="flex items-center">
                            <img class="w-8 h-8 rounded-full mr-1" src="{{url('assets/img/anya-profile.png')}}" alt="Rounded avatar">
                            <div>
                                <!-- Title di sini -->
                                <p class="text-left font-medium">Anya Forger</p>
                                <!-- Subtitle di sini -->
                                <p class="text-gray-500 text-xs">anyacomel@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-5">
                        <p class="w-30 bg-green-100 text-green-800 text-xs font-medium mr-2 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300 text-center">Lunas</p>
                    </td>
                    <td class="py-5">
                        <label class="relative inline-flex items-center mr-2 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-14 h-6 bg-green-500 rounded-full peer peer-focus:ring-4 peer-checked:after:translate-x-8 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[3px] after:bg-white-50 after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-500"></div>
                        </label>
                    </td>
                    <td class="py-5">
                        <button type="button" class="text-yellow-500 border border-yellow-400 hover:bg-yellow-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-1 dark:border-yellow-500 dark:text-yellow-500 dark:hover:text-white dark:focus:ring-yellow-500 dark:hover:bg-yellow-500">
                            <svg width="15" height="15" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2461 10.5C18.2461 10.5 15.2461 5 10.2461 5C5.24609 5 2.24609 10.5 2.24609 10.5C2.24609 10.5 5.24609 16 10.2461 16C15.2461 16 18.2461 10.5 18.2461 10.5ZM3.41879 10.5C3.47572 10.4132 3.54063 10.3168 3.61337 10.2124C3.94825 9.73193 4.4424 9.0929 5.0782 8.45711C6.36713 7.16818 8.12671 6 10.2461 6C12.3655 6 14.1251 7.16818 15.414 8.45711C16.0498 9.0929 16.5439 9.73193 16.8788 10.2124C16.9516 10.3168 17.0165 10.4132 17.0734 10.5C17.0165 10.5868 16.9516 10.6832 16.8788 10.7876C16.5439 11.2681 16.0498 11.9071 15.414 12.5429C14.1251 13.8318 12.3655 15 10.2461 15C8.12671 15 6.36713 13.8318 5.0782 12.5429C4.4424 11.9071 3.94825 11.2681 3.61337 10.7876C3.54063 10.6832 3.47572 10.5868 3.41879 10.5Z" fill="#FDC55E"/>
                                <path d="M10.2461 8C8.86538 8 7.74609 9.11929 7.74609 10.5C7.74609 11.8807 8.86538 13 10.2461 13C11.6268 13 12.7461 11.8807 12.7461 10.5C12.7461 9.11929 11.6268 8 10.2461 8ZM6.74609 10.5C6.74609 8.567 8.3131 7 10.2461 7C12.1791 7 13.7461 8.567 13.7461 10.5C13.7461 12.433 12.1791 14 10.2461 14C8.3131 14 6.74609 12.433 6.74609 10.5Z" fill="#FDC55E"/>
                            </svg>
                        </button>
                        <button type="button" class="text-red-500 border border-red-400 hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-500 dark:hover:bg-red-500">
                            <svg width="15" height="15" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.44434 3.5H12.4443C12.7205 3.5 12.9443 3.72386 12.9443 4V5H8.94434V4C8.94434 3.72386 9.16819 3.5 9.44434 3.5ZM13.9443 5V4C13.9443 3.17157 13.2728 2.5 12.4443 2.5H9.44434C8.61591 2.5 7.94434 3.17157 7.94434 4V5H5.44999C5.44659 4.99997 5.44319 4.99997 5.43978 5H4.44434C4.16819 5 3.94434 5.22386 3.94434 5.5C3.94434 5.77614 4.16819 6 4.44434 6H4.98274L5.8355 16.6595C5.91865 17.6989 6.78641 18.5 7.82913 18.5H14.0595C15.1023 18.5 15.97 17.6989 16.0532 16.6595L16.9059 6H17.4443C17.7205 6 17.9443 5.77614 17.9443 5.5C17.9443 5.22386 17.7205 5 17.4443 5H16.4489C16.4455 4.99997 16.4421 4.99997 16.4387 5H13.9443ZM15.9027 6L15.0564 16.5797C15.0148 17.0994 14.5809 17.5 14.0595 17.5H7.82913C7.30777 17.5 6.87389 17.0994 6.83231 16.5797L5.98593 6H15.9027ZM8.41498 7.00086C8.69064 6.98465 8.92726 7.19497 8.94347 7.47064L9.44347 15.9706C9.45969 16.2463 9.24936 16.4829 8.9737 16.4991C8.69803 16.5154 8.46141 16.305 8.4452 16.0294L7.9452 7.52936C7.92898 7.2537 8.13931 7.01708 8.41498 7.00086ZM13.4737 7.00086C13.7494 7.01708 13.9597 7.2537 13.9435 7.52936L13.4435 16.0294C13.4273 16.305 13.1906 16.5154 12.915 16.4991C12.6393 16.4829 12.429 16.2463 12.4452 15.9706L12.9452 7.47064C12.9614 7.19497 13.198 6.98465 13.4737 7.00086ZM10.9443 7C11.2205 7 11.4443 7.22386 11.4443 7.5V16C11.4443 16.2761 11.2205 16.5 10.9443 16.5C10.6682 16.5 10.4443 16.2761 10.4443 16V7.5C10.4443 7.22386 10.6682 7 10.9443 7Z" fill="#FF8081"/>
                            </svg>                                
                        </button>
                    </td>
                </tr>
                
                <tr class="bg-white-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-center">
                    <th scope="row" class="font-normal text-gray-900 whitespace-nowrap dark:text-white py-5">
                        2
                    </th>
                    <th scope="row" class="font-normal text-gray-900 whitespace-nowrap dark:text-white py-5">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <!-- kode di sini -->
                                <p class="text-gray-500 text-xs text-left">#12345</p>
                                <!-- nama di sini -->
                                <p class="">Forger Coffee</p>
                            </div>
                        </div>
                    </th>
                    <td class="text-gray-900 py-5">
                        <div class="flex items-center">
                            <img class="w-8 h-8 rounded-full mr-1" src="{{url('assets/img/anya-profile.png')}}" alt="Rounded avatar">
                            <div>
                                <!-- Title di sini -->
                                <p class="text-left font-medium">Anya Forger</p>
                                <!-- Subtitle di sini -->
                                <p class="text-gray-500 text-xs">anyacomel@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-5">
                        <p class="w-30 bg-red-200 text-red-800 text-xs font-medium mr-2 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300 text-center">Belum bayar</p>
                    </td>
                    <td class="py-5">
                        <label class="relative inline-flex items-center mr-2 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-14 h-6 bg-green-500 rounded-full peer peer-focus:ring-4 peer-checked:after:translate-x-8 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[3px] after:bg-white-50 after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-500"></div>
                        </label>
                    </td>
                    <td class="py-5">
                        <button type="button" class="text-yellow-500 border border-yellow-400 hover:bg-yellow-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-1 dark:border-yellow-500 dark:text-yellow-500 dark:hover:text-white dark:focus:ring-yellow-500 dark:hover:bg-yellow-500">
                            <svg width="15" height="15" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2461 10.5C18.2461 10.5 15.2461 5 10.2461 5C5.24609 5 2.24609 10.5 2.24609 10.5C2.24609 10.5 5.24609 16 10.2461 16C15.2461 16 18.2461 10.5 18.2461 10.5ZM3.41879 10.5C3.47572 10.4132 3.54063 10.3168 3.61337 10.2124C3.94825 9.73193 4.4424 9.0929 5.0782 8.45711C6.36713 7.16818 8.12671 6 10.2461 6C12.3655 6 14.1251 7.16818 15.414 8.45711C16.0498 9.0929 16.5439 9.73193 16.8788 10.2124C16.9516 10.3168 17.0165 10.4132 17.0734 10.5C17.0165 10.5868 16.9516 10.6832 16.8788 10.7876C16.5439 11.2681 16.0498 11.9071 15.414 12.5429C14.1251 13.8318 12.3655 15 10.2461 15C8.12671 15 6.36713 13.8318 5.0782 12.5429C4.4424 11.9071 3.94825 11.2681 3.61337 10.7876C3.54063 10.6832 3.47572 10.5868 3.41879 10.5Z" fill="#FDC55E"/>
                                <path d="M10.2461 8C8.86538 8 7.74609 9.11929 7.74609 10.5C7.74609 11.8807 8.86538 13 10.2461 13C11.6268 13 12.7461 11.8807 12.7461 10.5C12.7461 9.11929 11.6268 8 10.2461 8ZM6.74609 10.5C6.74609 8.567 8.3131 7 10.2461 7C12.1791 7 13.7461 8.567 13.7461 10.5C13.7461 12.433 12.1791 14 10.2461 14C8.3131 14 6.74609 12.433 6.74609 10.5Z" fill="#FDC55E"/>
                            </svg>
                        </button>
                        <button type="button" class="text-red-500 border border-red-400 hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-1 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-500 dark:hover:bg-red-500">
                            <svg width="15" height="15" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.44434 3.5H12.4443C12.7205 3.5 12.9443 3.72386 12.9443 4V5H8.94434V4C8.94434 3.72386 9.16819 3.5 9.44434 3.5ZM13.9443 5V4C13.9443 3.17157 13.2728 2.5 12.4443 2.5H9.44434C8.61591 2.5 7.94434 3.17157 7.94434 4V5H5.44999C5.44659 4.99997 5.44319 4.99997 5.43978 5H4.44434C4.16819 5 3.94434 5.22386 3.94434 5.5C3.94434 5.77614 4.16819 6 4.44434 6H4.98274L5.8355 16.6595C5.91865 17.6989 6.78641 18.5 7.82913 18.5H14.0595C15.1023 18.5 15.97 17.6989 16.0532 16.6595L16.9059 6H17.4443C17.7205 6 17.9443 5.77614 17.9443 5.5C17.9443 5.22386 17.7205 5 17.4443 5H16.4489C16.4455 4.99997 16.4421 4.99997 16.4387 5H13.9443ZM15.9027 6L15.0564 16.5797C15.0148 17.0994 14.5809 17.5 14.0595 17.5H7.82913C7.30777 17.5 6.87389 17.0994 6.83231 16.5797L5.98593 6H15.9027ZM8.41498 7.00086C8.69064 6.98465 8.92726 7.19497 8.94347 7.47064L9.44347 15.9706C9.45969 16.2463 9.24936 16.4829 8.9737 16.4991C8.69803 16.5154 8.46141 16.305 8.4452 16.0294L7.9452 7.52936C7.92898 7.2537 8.13931 7.01708 8.41498 7.00086ZM13.4737 7.00086C13.7494 7.01708 13.9597 7.2537 13.9435 7.52936L13.4435 16.0294C13.4273 16.305 13.1906 16.5154 12.915 16.4991C12.6393 16.4829 12.429 16.2463 12.4452 15.9706L12.9452 7.47064C12.9614 7.19497 13.198 6.98465 13.4737 7.00086ZM10.9443 7C11.2205 7 11.4443 7.22386 11.4443 7.5V16C11.4443 16.2761 11.2205 16.5 10.9443 16.5C10.6682 16.5 10.4443 16.2761 10.4443 16V7.5C10.4443 7.22386 10.6682 7 10.9443 7Z" fill="#FF8081"/>
                            </svg>                                
                        </button>
                    </td>
                </tr>

                <tr class="bg-white-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-center">
                    <th scope="row" class="font-normal text-gray-900 whitespace-nowrap dark:text-white py-5">
                        3
                    </th>
                    <th scope="row" class="font-normal text-gray-900 whitespace-nowrap dark:text-white py-5">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <!-- kode di sini -->
                                <p class="text-gray-500 text-xs text-left">#12345</p>
                                <!-- nama di sini -->
                                <p class="">Forger Coffee</p>
                            </div>
                        </div>
                    </th>
                    <td class="text-gray-900 py-5">
                        <div class="flex items-center">
                            <img class="w-8 h-8 rounded-full mr-1" src="{{url('assets/img/anya-profile.png')}}" alt="Rounded avatar">
                            <div>
                                <!-- Title di sini -->
                                <p class="text-left font-medium">Anya Forger</p>
                                <!-- email di sini -->
                                <p class="text-gray-500 text-xs">anyacomel@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-5">
                        <p class="w-30 bg-green-100 text-green-800 text-xs font-medium mr-2 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300 text-center">Lunas</p>
                    </td>
                    <td class="py-5">
                        <label class="relative inline-flex items-center mr-2 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="w-14 h-6 bg-green-500 rounded-full peer peer-focus:ring-4 peer-checked:after:translate-x-8 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[3px] after:bg-white-50 after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-500"></div>
                        </label>
                    </td>
                    <td class="py-5">
                        <button type="button" class="text-yellow-500 border border-yellow-400 hover:bg-yellow-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-1 dark:border-yellow-500 dark:text-yellow-500 dark:hover:text-white dark:focus:ring-yellow-500 dark:hover:bg-yellow-500">
                            <svg width="15" height="15" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2461 10.5C18.2461 10.5 15.2461 5 10.2461 5C5.24609 5 2.24609 10.5 2.24609 10.5C2.24609 10.5 5.24609 16 10.2461 16C15.2461 16 18.2461 10.5 18.2461 10.5ZM3.41879 10.5C3.47572 10.4132 3.54063 10.3168 3.61337 10.2124C3.94825 9.73193 4.4424 9.0929 5.0782 8.45711C6.36713 7.16818 8.12671 6 10.2461 6C12.3655 6 14.1251 7.16818 15.414 8.45711C16.0498 9.0929 16.5439 9.73193 16.8788 10.2124C16.9516 10.3168 17.0165 10.4132 17.0734 10.5C17.0165 10.5868 16.9516 10.6832 16.8788 10.7876C16.5439 11.2681 16.0498 11.9071 15.414 12.5429C14.1251 13.8318 12.3655 15 10.2461 15C8.12671 15 6.36713 13.8318 5.0782 12.5429C4.4424 11.9071 3.94825 11.2681 3.61337 10.7876C3.54063 10.6832 3.47572 10.5868 3.41879 10.5Z" fill="#FDC55E"/>
                                <path d="M10.2461 8C8.86538 8 7.74609 9.11929 7.74609 10.5C7.74609 11.8807 8.86538 13 10.2461 13C11.6268 13 12.7461 11.8807 12.7461 10.5C12.7461 9.11929 11.6268 8 10.2461 8ZM6.74609 10.5C6.74609 8.567 8.3131 7 10.2461 7C12.1791 7 13.7461 8.567 13.7461 10.5C13.7461 12.433 12.1791 14 10.2461 14C8.3131 14 6.74609 12.433 6.74609 10.5Z" fill="#FDC55E"/>
                            </svg>
                        </button>
                        <button type="button" class="text-red-500 border border-red-400 hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-500 dark:hover:bg-red-500">
                            <svg width="15" height="15" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.44434 3.5H12.4443C12.7205 3.5 12.9443 3.72386 12.9443 4V5H8.94434V4C8.94434 3.72386 9.16819 3.5 9.44434 3.5ZM13.9443 5V4C13.9443 3.17157 13.2728 2.5 12.4443 2.5H9.44434C8.61591 2.5 7.94434 3.17157 7.94434 4V5H5.44999C5.44659 4.99997 5.44319 4.99997 5.43978 5H4.44434C4.16819 5 3.94434 5.22386 3.94434 5.5C3.94434 5.77614 4.16819 6 4.44434 6H4.98274L5.8355 16.6595C5.91865 17.6989 6.78641 18.5 7.82913 18.5H14.0595C15.1023 18.5 15.97 17.6989 16.0532 16.6595L16.9059 6H17.4443C17.7205 6 17.9443 5.77614 17.9443 5.5C17.9443 5.22386 17.7205 5 17.4443 5H16.4489C16.4455 4.99997 16.4421 4.99997 16.4387 5H13.9443ZM15.9027 6L15.0564 16.5797C15.0148 17.0994 14.5809 17.5 14.0595 17.5H7.82913C7.30777 17.5 6.87389 17.0994 6.83231 16.5797L5.98593 6H15.9027ZM8.41498 7.00086C8.69064 6.98465 8.92726 7.19497 8.94347 7.47064L9.44347 15.9706C9.45969 16.2463 9.24936 16.4829 8.9737 16.4991C8.69803 16.5154 8.46141 16.305 8.4452 16.0294L7.9452 7.52936C7.92898 7.2537 8.13931 7.01708 8.41498 7.00086ZM13.4737 7.00086C13.7494 7.01708 13.9597 7.2537 13.9435 7.52936L13.4435 16.0294C13.4273 16.305 13.1906 16.5154 12.915 16.4991C12.6393 16.4829 12.429 16.2463 12.4452 15.9706L12.9452 7.47064C12.9614 7.19497 13.198 6.98465 13.4737 7.00086ZM10.9443 7C11.2205 7 11.4443 7.22386 11.4443 7.5V16C11.4443 16.2761 11.2205 16.5 10.9443 16.5C10.6682 16.5 10.4443 16.2761 10.4443 16V7.5C10.4443 7.22386 10.6682 7 10.9443 7Z" fill="#FF8081"/>
                            </svg>                                
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="flex flex-row items-center pt-2">
        <!-- Help text -->
        <p class="text-xs text-gray-700 dark:text-gray-400 mr-20">
            Menampilkan: <span class="font-semibold text-gray-900 dark:text-white">1</span> - <span class="font-semibold text-gray-900 dark:text-white">10</span> dari <span class="font-semibold text-gray-900 dark:text-white">100</span> Hasil
        </p>
        <!-- Buttons -->
        <div class="flex ml-10">
            <!-- Previous Button -->
            <a href="#" class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-500 hover:text-gray-800 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
              Prev
            </a>
            <ul class="inline-flex -space-x-px text-xs">
                <li>
                  <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-yellow-500 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white rounded-xl">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white rounded-xl">2</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white rounded-xl">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 hover:bg-gray-100 hover:text-grey-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white rounded-xl">...</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white rounded-xl">10</a>
                </li>
              </ul>
            <!-- Next Button -->
            <a href="#" class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-500 hover:text-gray-800 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
              Next
            </a>
          </div>
      </div>

</div>



@endsection