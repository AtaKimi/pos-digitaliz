@extends('layouts.waiter')

@section('content')
    <button type="button" class="pl-4 pt-1 text-sm font-semibold text-center inline-flex items-center focus:ring-gray-300 text-red-500">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 12H19M5 12L11 18M5 12L11 6" stroke="#F54748" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>                
        Kembali
    </button>
    <div class="w-full bg-white-200 rounded-xl p-8 mb-8">
        <h1 class="text-lg font-bold mb-6 text-center">Progress Status Order</h1>
        <div class="relative mb-24 md:mx-16">
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
                    <div class="flex flex-col items-center gap-2">
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
                        <div class="py-1 px-8 bg-grey-200 text-grey-800 rounded-2xl" id="cookSts">
                            <p class=" text-xs font-semibold">Cooking</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-5/5 rounded-full h-2.5 px-12">
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-blue-300 h-2.5 rounded-full" style="width: 0%"></div>
                </div>
            </div>
        </div>
        <div class="flex justify-end mr-16">
            <button class="flex bg-red-500 py-3 px-4 rounded-xl items-center" id="statusBtn">
                <p class="text-sm  text-white-50">Next Status</p>
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
        <div class="flex items-center mb-5">
            <h1 class="font-bold text-lg">Services</h1>
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

    {{-- js next status --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const progressBar = document.querySelector('.bg-blue-300');
            const pendingStatusBtn = document.querySelector('.bg-yellow-300');
            const cookingStatusBtn = document.querySelector('.bg-blue-200');
            const status = document.getElementById('statusBtn');
            const cook = document.getElementById('cookSts')

            let isPending = true;

            function toggleStatus() {
                if (isPending) {
                    // isPending = !isPending;
                    progressBar.style.width = '100%';
                    progressBar.classList.add('duration-700');  
                    status.classList.remove('bg-red-500');
                    status.classList.add('bg-grey-500');
                    cook.classList.remove('bg-grey-200', 'text-grey-800');
                    cook.classList.add('bg-blue-200', 'text-blue-800');
                }
            }

            const nextStatusButton = document.getElementById('statusBtn');
            nextStatusButton.addEventListener('click', toggleStatus);
        });
    </script>
@endsection
