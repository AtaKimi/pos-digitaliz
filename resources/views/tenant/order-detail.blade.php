@extends('layouts.tenant')

@section('content')
    <div class="rounded-2xl overflow-hidden shadow-lg bg-white-50 mb-5">
        <div class="p-4">
            <div class="flex items-center">
                <div class="mr-4 bg-red-100 rounded-xl p-4">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="#F54748" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.5 1.66667C0.5 1.02233 1.02233 0.5 1.66667 0.5H5.16667C5.70201 0.5 6.16866 0.864347 6.2985 1.38371L7.24424 5.16667H34.3333C34.6804 5.16667 35.0094 5.32119 35.2311 5.58826C35.4527 5.85533 35.544 6.20722 35.48 6.54834L31.98 25.215C31.8766 25.7668 31.3947 26.1667 30.8333 26.1667H28.5H12.1667H9.83333C9.27192 26.1667 8.79011 25.7668 8.68665 25.215L5.19306 6.58254L4.25576 2.83333H1.66667C1.02233 2.83333 0.5 2.311 0.5 1.66667ZM7.73908 7.5L10.8016 23.8333H29.8651L32.9276 7.5H7.73908ZM12.1667 26.1667C9.58934 26.1667 7.5 28.256 7.5 30.8333C7.5 33.4107 9.58934 35.5 12.1667 35.5C14.744 35.5 16.8333 33.4107 16.8333 30.8333C16.8333 28.256 14.744 26.1667 12.1667 26.1667ZM28.5 26.1667C25.9227 26.1667 23.8333 28.256 23.8333 30.8333C23.8333 33.4107 25.9227 35.5 28.5 35.5C31.0773 35.5 33.1667 33.4107 33.1667 30.8333C33.1667 28.256 31.0773 26.1667 28.5 26.1667ZM12.1667 28.5C13.4553 28.5 14.5 29.5447 14.5 30.8333C14.5 32.122 13.4553 33.1667 12.1667 33.1667C10.878 33.1667 9.83333 32.122 9.83333 30.8333C9.83333 29.5447 10.878 28.5 12.1667 28.5ZM28.5 28.5C29.7887 28.5 30.8333 29.5447 30.8333 30.8333C30.8333 32.122 29.7887 33.1667 28.5 33.1667C27.2113 33.1667 26.1667 32.122 26.1667 30.8333C26.1667 29.5447 27.2113 28.5 28.5 28.5Z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-xl text-gray-900">Order</p>
                    <p class="text-gray-600 text-xs hidden md:block">Akses melihat pesanan pelanggan sesuai nomor meja</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-white-200 rounded-xl p-8 mb-8">
        <h1 class="text-lg font-bold mb-6">Progress status order</h1>
        <div class="relative mb-24">
            <div class="absolute -top-3 w-full">
                <div class="flex justify-between">
                    <div class="flex flex-col items-center gap-2">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1812_6734)">
                                <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                <mask id="mask0_1812_6734" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="38" height="38">
                                    <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                </mask>
                                <g mask="url(#mask0_1812_6734)">
                                </g>
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    fill="white" />
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    stroke="#69A2FF" stroke-width="4.7472" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1812_6734">
                                    <rect width="37.9776" height="37.9776" rx="18.9888" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00036 0L9.9338 7.12081H0.0669165L5.00036 0Z" fill="#835F1D" />
                        </svg>
                        <div class="py-1 px-8 bg-yellow-300 rounded-2xl">
                            <p class="text-yellow-700 text-xs font-semibold">Pending</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center  gap-2">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1812_6734)">
                                <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                <mask id="mask0_1812_6734" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="38" height="38">
                                    <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                </mask>
                                <g mask="url(#mask0_1812_6734)">
                                </g>
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    fill="white" />
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    stroke="#69A2FF" stroke-width="4.7472" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1812_6734">
                                    <rect width="37.9776" height="37.9776" rx="18.9888" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00036 0L9.9338 7.12081H0.0669165L5.00036 0Z" fill="#835F1D" />
                        </svg>
                        <div class="py-1 px-8 bg-blue-100 rounded-2xl">
                            <p class="text-blue-700 text-xs font-semibold">Cooking</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center  gap-2">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1812_6734)">
                                <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                <mask id="mask0_1812_6734" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                    x="0" y="0" width="38" height="38">
                                    <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                </mask>
                                <g mask="url(#mask0_1812_6734)">
                                </g>
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    fill="white" />
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    stroke="#69A2FF" stroke-width="4.7472" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1812_6734">
                                    <rect width="37.9776" height="37.9776" rx="18.9888" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00036 0L9.9338 7.12081H0.0669165L5.00036 0Z" fill="#835F1D" />
                        </svg>
                        <div class="py-1 px-8 bg-violet-300 rounded-2xl">
                            <p class="text-violet-700 text-xs font-semibold">Serving</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center  gap-2">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1812_6734)">
                                <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                <mask id="mask0_1812_6734" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                    x="0" y="0" width="38" height="38">
                                    <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                </mask>
                                <g mask="url(#mask0_1812_6734)">
                                </g>
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    fill="white" />
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    stroke="#69A2FF" stroke-width="4.7472" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1812_6734">
                                    <rect width="37.9776" height="37.9776" rx="18.9888" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00036 0L9.9338 7.12081H0.0669165L5.00036 0Z" fill="#835F1D" />
                        </svg>
                        <div class="py-1 px-8 bg-green-200 rounded-2xl">
                            <p class="text-green-800 text-xs font-semibold">Done</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center  gap-2">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1812_6734)">
                                <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                <mask id="mask0_1812_6734" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                    x="0" y="0" width="38" height="38">
                                    <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                </mask>
                                <g mask="url(#mask0_1812_6734)">
                                </g>
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    fill="white" />
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    stroke="#69A2FF" stroke-width="4.7472" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1812_6734">
                                    <rect width="37.9776" height="37.9776" rx="18.9888" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00036 0L9.9338 7.12081H0.0669165L5.00036 0Z" fill="#835F1D" />
                        </svg>
                        <div class="py-1 px-8 bg-gray-200 rounded-2xl">
                            <p class="text-gray-700 text-xs font-semibold">Cancel</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-4/5 rounded-full h-2.5 ps-12 pr-16">
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-blue-300 h-2.5 rounded-full" style="width: 33.33%"></div>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button class="flex bg-grey-200 py-3 px-4 rounded-xl items-center">
                <p class="text-sm  text-gray-700 mr-2">Next Order</p>
                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.875 7.5C0.875 10.8827 3.61726 13.625 7 13.625C10.3827 13.625 13.125 10.8827 13.125 7.5C13.125 4.11726 10.3827 1.375 7 1.375C3.61726 1.375 0.875 4.11726 0.875 7.5ZM14 7.5C14 11.366 10.866 14.5 7 14.5C3.13401 14.5 0 11.366 0 7.5C0 3.63401 3.13401 0.5 7 0.5C10.866 0.5 14 3.63401 14 7.5ZM3.9375 7.0625C3.69588 7.0625 3.5 7.25838 3.5 7.5C3.5 7.74162 3.69588 7.9375 3.9375 7.9375H9.00628L7.12814 9.81564C6.95729 9.98649 6.95729 10.2635 7.12814 10.4344C7.29899 10.6052 7.57601 10.6052 7.74686 10.4344L10.3719 7.80936C10.5427 7.6385 10.5427 7.36149 10.3719 7.19064L7.74686 4.56564C7.57601 4.39479 7.29899 4.39479 7.12814 4.56564C6.95729 4.73649 6.95729 5.01351 7.12814 5.18436L9.00628 7.0625H3.9375Z"
                        fill="#776B6B" />
                </svg>
            </button>
        </div>
    </div>

    <div class="w-full bg-white-50 rounded-xl p-4">
        <div class="flex justify-between bg-grey-100 p-4 rounded-xl mb-6">
            <div>
                <div class="w-32 h-32 mb-6">
                    <img src="{{ asset('assets/img/logo_detail_order.png') }}" alt="">
                </div>
                <div>
                    <p class="text-sm text-grey-700 mb-3">Invoice to:</p>
                    <h1 class="text-xl font-semibold tracking-widest">MEJA 1</h1>
                </div>
            </div>
            <div class="text-end">
                <p class="text-xs text-gray-600">UUID</p>
                <h1 class="text-lg font-bold mb-14">#AF-001</h1>
                <p class="text-sm text-gray-700">Issued On</p>
                <p class="text-sm font-semibold mb-4">December 7, 2022</p>
                <p class="text-sm text-gray-700">Payment due</p>
                <p class="text-sm font-semibold">December 22, 2022</p>
            </div>
        </div>
        <div class="flex justify-between items-center mb-5">
            <h1 class="font-bold text-lg">Services</h1>
            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                class="flex bg-yellow-500 py-3 px-4 rounded-xl items-center">
                <p class="text-sm  text-white-50 mr-2">Cetak Struck</p>
                <svg width="14" height="15" viewBox="0 0 14 15" class="fill-white-50"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.875 7.5C0.875 10.8827 3.61726 13.625 7 13.625C10.3827 13.625 13.125 10.8827 13.125 7.5C13.125 4.11726 10.3827 1.375 7 1.375C3.61726 1.375 0.875 4.11726 0.875 7.5ZM14 7.5C14 11.366 10.866 14.5 7 14.5C3.13401 14.5 0 11.366 0 7.5C0 3.63401 3.13401 0.5 7 0.5C10.866 0.5 14 3.63401 14 7.5ZM3.9375 7.0625C3.69588 7.0625 3.5 7.25838 3.5 7.5C3.5 7.74162 3.69588 7.9375 3.9375 7.9375H9.00628L7.12814 9.81564C6.95729 9.98649 6.95729 10.2635 7.12814 10.4344C7.29899 10.6052 7.57601 10.6052 7.74686 10.4344L10.3719 7.80936C10.5427 7.6385 10.5427 7.36149 10.3719 7.19064L7.74686 4.56564C7.57601 4.39479 7.29899 4.39479 7.12814 4.56564C6.95729 4.73649 6.95729 5.01351 7.12814 5.18436L9.00628 7.0625H3.9375Z" />
                </svg>
            </button>
        </div>

        <div class="relative overflow-x-auto ">
            <table class="w-full text-sm text-left text-gray-700">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50 font-bold border-black border-b">
                    <tr>
                        <th scope="col" class="px-10 py-6 w-full">
                            Nama
                        </th>
                        <th scope="col" class="px-10 py-6">
                            Qty
                        </th>
                        <th scope="col" class="px-10 py-6">
                            Harga
                        </th>
                        <th scope="col" class="px-10 py-6">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b font-semibold">
                        <td class="px-6 py-6">
                            Nasi Padang
                        </td>
                        <td class="px-6 py-6">
                            1
                        </td>
                        <td class="px-6 py-6">
                            Rp.20.000.00
                        </td>
                        <td class="px-6 py-6">
                            Rp.20.000.00
                        </td>
                    </tr>
                    <tr class="bg-white border-b font-semibold">
                        <td class="px-6 py-6">
                            Nasi Padang
                        </td>
                        <td class="px-6 py-6">
                            1
                        </td>
                        <td class="px-6 py-6">
                            Rp.20.000.00
                        </td>
                        <td class="px-6 py-6">
                            Rp.20.000.00
                        </td>
                    </tr>
                    <tr class="bg-white border-b font-semibold">
                        <td class="px-6 py-6">
                            Nasi Padang
                        </td>
                        <td class="px-6 py-6">
                            1
                        </td>
                        <td class="px-6 py-6">
                            Rp.20.000.00
                        </td>
                        <td class="px-6 py-6">
                            Rp.20.000.00
                        </td>
                    </tr>
                    <tr class=" font-semibold">
                        <td class="px-6 py-6">
                            Nasi Padang
                        </td>
                        <td class="px-6 py-6">
                            1
                        </td>
                        <td class="px-6 py-6">
                            Rp.20.000.00
                        </td>
                        <td class="px-6 py-6">
                            Rp.20.000.00
                        </td>
                    </tr>
                    <tr class=" font-semibold">
                        <td class="px-6 py-4" colspan="2">

                        </td>
                        <td class="px-6 py-4">
                            Subtotal
                        </td>
                        <td class="px-6 py-4">
                            Rp.80.000.00
                        </td>
                    </tr>
                    <tr class=" font-semibold">
                        <td class="px-6 py-4" colspan="2">

                        </td>
                        <td class="px-6 py-4">
                            Tax (10%)
                        </td>
                        <td class="px-6 py-4">
                            Rp.8.000.00
                        </td>
                    </tr>
                    <tr class=" font-semibold">
                        <td class="px-6 py-4" colspan="2">

                        </td>
                        <td class="px-6 py-4">
                            Service Change
                        </td>
                        <td class="px-6 py-4">
                            Rp.8.000.00
                        </td>
                    </tr>
                    <tr class=" font-semibold">
                        <td class="px-6 py-4" colspan="2">

                        </td>
                        <td class="px-6 py-4 bg-gray-300 rounded-s-full">
                            Total
                        </td>
                        <td class="px-6 py-4  bg-gray-300 rounded-e-full">
                            Rp.96.000.00
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-end">
                <div class="">

                </div>
            </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden mx-auto w-fit p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white-50 rounded-lg shadow p-10">
                <!-- Modal header -->
                <div class="relative mb-8 rounded-t">
                    <div class="flex justify-center">
                        <h3 class="text-xl text-center font-bold text-gray-900">
                            Cetak Struck
                        </h3>
                    </div>
                    <button type="button"
                        class="top-0 right-0 absolute text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="defaultModal">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="flex items-center flex-col gap-4"><svg width="100" height="100"
                            viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="100" height="100" rx="50" fill="#FC5F5F" />
                            <path
                                d="M42.5 32.5C39.7386 32.5 37.5 34.7386 37.5 37.5V40H62.5V37.5C62.5 34.7386 60.2614 32.5 57.5 32.5H42.5Z"
                                fill="white" />
                            <path
                                d="M57.5 52.5H42.5C41.1193 52.5 40 53.6193 40 55V62.5C40 63.8807 41.1193 65 42.5 65H57.5C58.8807 65 60 63.8807 60 62.5V55C60 53.6193 58.8807 52.5 57.5 52.5Z"
                                fill="white" />
                            <path
                                d="M30 47.5C30 44.7386 32.2386 42.5 35 42.5H65C67.7614 42.5 70 44.7386 70 47.5V55C70 57.7614 67.7614 60 65 60H62.5V55C62.5 52.2386 60.2614 50 57.5 50H42.5C39.7386 50 37.5 52.2386 37.5 55V60H35C32.2386 60 30 57.7614 30 55V47.5ZM36.25 50C36.9404 50 37.5 49.4404 37.5 48.75C37.5 48.0596 36.9404 47.5 36.25 47.5C35.5596 47.5 35 48.0596 35 48.75C35 49.4404 35.5596 50 36.25 50Z"
                                fill="white" />
                        </svg>
                        <p class="text-gray-400">Apakah anda yakin untuk mencetak struck ini?</p>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-center p-6 space-x-2 rounded-b">
                    <button data-modal-hide="defaultModal" type="button"
                        class="text-white  focus:ring-4 focus:outline-none font-semibold rounded-lg text-lg px-12 py-4 text-center  mr-4">
                        Batalkan</button>
                    <button data-modal-hide="defaultModal" type="button"
                        class="rounded-lg text-lg font-semibold px-12 py-4 bg-red-500 text-white-50">Cetak</button>
                </div>
            </div>
        </div>
    </div>
@endsection
