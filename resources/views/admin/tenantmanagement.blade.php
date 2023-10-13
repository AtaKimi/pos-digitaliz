@extends('layouts.admin')

@section('content')
    <div class="rounded-2xl overflow-hidden shadow-lg bg-white-50 mb-5">
        <div class="p-4">
            <div class="flex items-center">
                <div class="mr-4 bg-yellow-50 rounded-xl p-5">
                    <!-- Icon di sini -->
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.0625 10.3438C7.0625 9.7397 7.55219 9.25001 8.15625 9.25001H21.2812C21.8853 9.25001 22.375 9.7397 22.375 10.3438C22.375 10.9478 21.8853 11.4375 21.2812 11.4375H8.15625C7.55219 11.4375 7.0625 10.9478 7.0625 10.3438Z"
                            fill="#FDC55E" />
                        <path
                            d="M7.0625 14.7188C7.0625 14.1147 7.55219 13.625 8.15625 13.625H21.2812C21.8853 13.625 22.375 14.1147 22.375 14.7188C22.375 15.3228 21.8853 15.8125 21.2812 15.8125H8.15625C7.55219 15.8125 7.0625 15.3228 7.0625 14.7188Z"
                            fill="#FDC55E" />
                        <path
                            d="M7.0625 19.0938C7.0625 18.4897 7.55219 18 8.15625 18H21.2812C21.8853 18 22.375 18.4897 22.375 19.0938C22.375 19.6978 21.8853 20.1875 21.2812 20.1875H8.15625C7.55219 20.1875 7.0625 19.6978 7.0625 19.0938Z"
                            fill="#FDC55E" />
                        <path
                            d="M7.0625 23.4688C7.0625 22.8647 7.55219 22.375 8.15625 22.375H21.2812C21.8853 22.375 22.375 22.8647 22.375 23.4688C22.375 24.0728 21.8853 24.5625 21.2812 24.5625H8.15625C7.55219 24.5625 7.0625 24.0728 7.0625 23.4688Z"
                            fill="#FDC55E" />
                        <path
                            d="M7.0625 27.8438C7.0625 27.2397 7.55219 26.75 8.15625 26.75H21.2812C21.8853 26.75 22.375 27.2397 22.375 27.8438C22.375 28.4478 21.8853 28.9375 21.2812 28.9375H8.15625C7.55219 28.9375 7.0625 28.4478 7.0625 27.8438Z"
                            fill="#FDC55E" />
                        <path
                            d="M25.6562 9.25001C25.0522 9.25001 24.5625 9.7397 24.5625 10.3438C24.5625 10.9478 25.0522 11.4375 25.6562 11.4375H27.8438C28.4478 11.4375 28.9375 10.9478 28.9375 10.3438C28.9375 9.7397 28.4478 9.25001 27.8438 9.25001H25.6562Z"
                            fill="#FDC55E" />
                        <path
                            d="M25.6562 13.625C25.0522 13.625 24.5625 14.1147 24.5625 14.7188C24.5625 15.3228 25.0522 15.8125 25.6562 15.8125H27.8438C28.4478 15.8125 28.9375 15.3228 28.9375 14.7188C28.9375 14.1147 28.4478 13.625 27.8438 13.625H25.6562Z"
                            fill="#FDC55E" />
                        <path
                            d="M25.6562 18C25.0522 18 24.5625 18.4897 24.5625 19.0938C24.5625 19.6978 25.0522 20.1875 25.6562 20.1875H27.8438C28.4478 20.1875 28.9375 19.6978 28.9375 19.0938C28.9375 18.4897 28.4478 18 27.8438 18H25.6562Z"
                            fill="#FDC55E" />
                        <path
                            d="M25.6562 22.375C25.0522 22.375 24.5625 22.8647 24.5625 23.4688C24.5625 24.0728 25.0522 24.5625 25.6562 24.5625H27.8438C28.4478 24.5625 28.9375 24.0728 28.9375 23.4688C28.9375 22.8647 28.4478 22.375 27.8438 22.375H25.6562Z"
                            fill="#FDC55E" />
                        <path
                            d="M25.6562 26.75C25.0522 26.75 24.5625 27.2397 24.5625 27.8438C24.5625 28.4478 25.0522 28.9375 25.6562 28.9375H27.8438C28.4478 28.9375 28.9375 28.4478 28.9375 27.8438C28.9375 27.2397 28.4478 26.75 27.8438 26.75H25.6562Z"
                            fill="#FDC55E" />
                        <path
                            d="M5.6484 1.91412C5.39979 1.66551 5.04684 1.55157 4.6998 1.60789C4.35276 1.6642 4.05395 1.88391 3.89672 2.19837L2.80297 4.38587C2.72703 4.53775 2.6875 4.70521 2.6875 4.87501V33.3125H1.59375C0.989689 33.3125 0.5 33.8022 0.5 34.4063C0.5 35.0103 0.989689 35.5 1.59375 35.5H34.4062C35.0103 35.5 35.5 35.0103 35.5 34.4063C35.5 33.8022 35.0103 33.3125 34.4062 33.3125H33.3125V4.87501C33.3125 4.70521 33.273 4.53775 33.197 4.38587L32.1033 2.19837C31.946 1.88391 31.6472 1.6642 31.3002 1.60789C30.9532 1.55157 30.6002 1.66551 30.3516 1.91412L28.9375 3.32822L27.5234 1.91412C27.0963 1.48698 26.4037 1.48698 25.9766 1.91412L24.5625 3.32822L23.1484 1.91412C22.7213 1.48698 22.0287 1.48698 21.6016 1.91412L20.1875 3.32822L18.7734 1.91412C18.3463 1.48698 17.6537 1.48698 17.2266 1.91412L15.8125 3.32822L14.3984 1.91412C13.9713 1.48698 13.2787 1.48698 12.8516 1.91412L11.4375 3.32822L10.0234 1.91412C9.59626 1.48698 8.90374 1.48698 8.4766 1.91412L7.0625 3.32822L5.6484 1.91412ZM5.17463 4.53394L6.2891 5.64841C6.71624 6.07555 7.40876 6.07555 7.8359 5.64841L9.25 4.23431L10.6641 5.64841C11.0912 6.07555 11.7838 6.07555 12.2109 5.64841L13.625 4.23431L15.0391 5.64841C15.4662 6.07555 16.1588 6.07555 16.5859 5.64841L18 4.23431L19.4141 5.64841C19.8412 6.07555 20.5338 6.07555 20.9609 5.64841L22.375 4.23431L23.7891 5.64841C24.2162 6.07555 24.9088 6.07555 25.3359 5.64841L26.75 4.23431L28.1641 5.64841C28.5912 6.07555 29.2838 6.07555 29.7109 5.64841L30.8254 4.53394L31.125 5.13321V33.3125H4.875V5.13321L5.17463 4.53394Z"
                            fill="#FDC55E" />
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


    <div class="p-2 bg-white-50 border border-gray-200 rounded-3xl shadow">
        <div class="flex items-center justify-between py-3 px-2">
            <div>
                <p class="text-lg font-semibold text-gray-700">Tenant List</p>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search">
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-2xl">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 bg-gray-50">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                No
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Tenant
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama User
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tenants as $tenant)
                        <tr class="bg-white-50 border-b hover:bg-gray-50">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    {{ $loop->iteration }}
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="">
                                        <!-- kode di sini -->
                                        <p class="text-gray-500 text-xs">#{{ $tenant->code }}</p>
                                        <!-- nama di sini -->
                                        <p class="">{{ $tenant->name }}</p>
                                    </div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <img class="rounded-full w-10 h-10"
                                        src="{{ $tenant->user->getFirstMediaUrl('default') }}" alt="">
                                    <div>
                                        <h1 class="font-medium text-gray-900 whitespace-nowrap">
                                            {{ $tenant->user->name }}
                                        </h1>
                                        <p class="text-xs font-normal">{{ $tenant->user->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <p
                                    class="w-30 bg-red-200 text-red-800 text-xs font-medium mr-2 py-0.5 rounded-full text-center">
                                    Belum bayar</p>
                            </td>
                            <td class="px-6 py-4">
                                <label class="relative inline-flex cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                    <div
                                        class="w-14 h-6 bg-green-600 rounded-full peer peer-checked:after:translate-x-8 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[3px] after:bg-white-50 after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-500">
                                    </div>
                                </label>
                            </td>
                            <td class="px-6 py-4">
                                <button type="button"
                                    class="text-yellow-500 border border-yellow-400 hover:bg-yellow-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-1">
                                    <svg width="15" height="15" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.2461 10.5C18.2461 10.5 15.2461 5 10.2461 5C5.24609 5 2.24609 10.5 2.24609 10.5C2.24609 10.5 5.24609 16 10.2461 16C15.2461 16 18.2461 10.5 18.2461 10.5ZM3.41879 10.5C3.47572 10.4132 3.54063 10.3168 3.61337 10.2124C3.94825 9.73193 4.4424 9.0929 5.0782 8.45711C6.36713 7.16818 8.12671 6 10.2461 6C12.3655 6 14.1251 7.16818 15.414 8.45711C16.0498 9.0929 16.5439 9.73193 16.8788 10.2124C16.9516 10.3168 17.0165 10.4132 17.0734 10.5C17.0165 10.5868 16.9516 10.6832 16.8788 10.7876C16.5439 11.2681 16.0498 11.9071 15.414 12.5429C14.1251 13.8318 12.3655 15 10.2461 15C8.12671 15 6.36713 13.8318 5.0782 12.5429C4.4424 11.9071 3.94825 11.2681 3.61337 10.7876C3.54063 10.6832 3.47572 10.5868 3.41879 10.5Z"
                                            fill="#FDC55E" />
                                        <path
                                            d="M10.2461 8C8.86538 8 7.74609 9.11929 7.74609 10.5C7.74609 11.8807 8.86538 13 10.2461 13C11.6268 13 12.7461 11.8807 12.7461 10.5C12.7461 9.11929 11.6268 8 10.2461 8ZM6.74609 10.5C6.74609 8.567 8.3131 7 10.2461 7C12.1791 7 13.7461 8.567 13.7461 10.5C13.7461 12.433 12.1791 14 10.2461 14C8.3131 14 6.74609 12.433 6.74609 10.5Z"
                                            fill="#FDC55E" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="text-red-500 border border-red-400 hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2"
                                    data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                                    <svg width="15" height="15" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.44434 3.5H12.4443C12.7205 3.5 12.9443 3.72386 12.9443 4V5H8.94434V4C8.94434 3.72386 9.16819 3.5 9.44434 3.5ZM13.9443 5V4C13.9443 3.17157 13.2728 2.5 12.4443 2.5H9.44434C8.61591 2.5 7.94434 3.17157 7.94434 4V5H5.44999C5.44659 4.99997 5.44319 4.99997 5.43978 5H4.44434C4.16819 5 3.94434 5.22386 3.94434 5.5C3.94434 5.77614 4.16819 6 4.44434 6H4.98274L5.8355 16.6595C5.91865 17.6989 6.78641 18.5 7.82913 18.5H14.0595C15.1023 18.5 15.97 17.6989 16.0532 16.6595L16.9059 6H17.4443C17.7205 6 17.9443 5.77614 17.9443 5.5C17.9443 5.22386 17.7205 5 17.4443 5H16.4489C16.4455 4.99997 16.4421 4.99997 16.4387 5H13.9443ZM15.9027 6L15.0564 16.5797C15.0148 17.0994 14.5809 17.5 14.0595 17.5H7.82913C7.30777 17.5 6.87389 17.0994 6.83231 16.5797L5.98593 6H15.9027ZM8.41498 7.00086C8.69064 6.98465 8.92726 7.19497 8.94347 7.47064L9.44347 15.9706C9.45969 16.2463 9.24936 16.4829 8.9737 16.4991C8.69803 16.5154 8.46141 16.305 8.4452 16.0294L7.9452 7.52936C7.92898 7.2537 8.13931 7.01708 8.41498 7.00086ZM13.4737 7.00086C13.7494 7.01708 13.9597 7.2537 13.9435 7.52936L13.4435 16.0294C13.4273 16.305 13.1906 16.5154 12.915 16.4991C12.6393 16.4829 12.429 16.2463 12.4452 15.9706L12.9452 7.47064C12.9614 7.19497 13.198 6.98465 13.4737 7.00086ZM10.9443 7C11.2205 7 11.4443 7.22386 11.4443 7.5V16C11.4443 16.2761 11.2205 16.5 10.9443 16.5C10.6682 16.5 10.4443 16.2761 10.4443 16V7.5C10.4443 7.22386 10.6682 7 10.9443 7Z"
                                            fill="#FF8081" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="55" class="text-center py-5">tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <nav class="flex items-center pt-4 py-2 px-2" aria-label="Table navigation">
                <p class="text-xs text-gray-700 mr-20">
                    Menampilkan: <span class="font-semibold text-gray-900">1</span> - <span
                        class="font-semibold text-gray-900">10</span> dari <span
                        class="font-semibold text-gray-900">100</span> Hasil
                </p>
                <!-- Buttons -->
                <div class="flex ml-10">
                    <!-- Previous Button -->
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-500 hover:text-gray-800">
                        Prev
                    </a>
                    <ul class="inline-flex -space-x-px text-xs">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-yellow-500 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 rounded-xl">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 rounded-xl">2</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 rounded-xl">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 hover:bg-gray-100 hover:text-grey-700 rounded-xl">...</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 rounded-xl">10</a>
                        </li>
                    </ul>
                    <!-- Next Button -->
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-500 hover:text-gray-800">
                        Next
                    </a>
                </div>
            </nav>
        </div>
        <!-- POPUP HAPUS -->
        <div id="popup-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-50 max-w-md max-h-full bg-white-50 rounded-xl">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                    <div class="p-6 text-center">
                        <svg width="60" height="60" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 text-gray-400 w-15 h-15">
                            <rect width="100" height="100" rx="50" fill="#FC5F5F" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M47.5 30C47.0358 30.0002 46.5809 30.1297 46.1862 30.3739C45.7914 30.6181 45.4725 30.9673 45.265 31.3825L43.455 35H35C34.337 35 33.7011 35.2634 33.2322 35.7322C32.7634 36.2011 32.5 36.837 32.5 37.5C32.5 38.163 32.7634 38.7989 33.2322 39.2678C33.7011 39.7366 34.337 40 35 40V65C35 66.3261 35.5268 67.5979 36.4645 68.5355C37.4021 69.4732 38.6739 70 40 70H60C61.3261 70 62.5979 69.4732 63.5355 68.5355C64.4732 67.5979 65 66.3261 65 65V40C65.663 40 66.2989 39.7366 66.7678 39.2678C67.2366 38.7989 67.5 38.163 67.5 37.5C67.5 36.837 67.2366 36.2011 66.7678 35.7322C66.2989 35.2634 65.663 35 65 35H56.545L54.735 31.3825C54.5275 30.9673 54.2086 30.6181 53.8138 30.3739C53.4191 30.1297 52.9642 30.0002 52.5 30H47.5ZM42.5 45C42.5 44.337 42.7634 43.7011 43.2322 43.2322C43.7011 42.7634 44.337 42.5 45 42.5C45.663 42.5 46.2989 42.7634 46.7678 43.2322C47.2366 43.7011 47.5 44.337 47.5 45V60C47.5 60.663 47.2366 61.2989 46.7678 61.7678C46.2989 62.2366 45.663 62.5 45 62.5C44.337 62.5 43.7011 62.2366 43.2322 61.7678C42.7634 61.2989 42.5 60.663 42.5 60V45ZM55 42.5C54.337 42.5 53.7011 42.7634 53.2322 43.2322C52.7634 43.7011 52.5 44.337 52.5 45V60C52.5 60.663 52.7634 61.2989 53.2322 61.7678C53.7011 62.2366 54.337 62.5 55 62.5C55.663 62.5 56.2989 62.2366 56.7678 61.7678C57.2366 61.2989 57.5 60.663 57.5 60V45C57.5 44.337 57.2366 43.7011 56.7678 43.2322C56.2989 42.7634 55.663 42.5 55 42.5Z"
                                fill="white" />
                        </svg>
                        <h3 class="mb-5 text-sm font-normal text-gray-500">Apakah Anda yakin ingin
                            menghapus tenant ini?</h3>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batalkan</button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-white-50 bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
