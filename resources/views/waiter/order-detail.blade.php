@extends('layouts.waiter')

@section('content')
    <a href="{{ route('waiter-index', Auth::user()->waiter->tenant_id) }}">
        <x-back-button class="mb-5">Kembali</x-back-button>
    </a>
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
                                <mask id="mask0_1812_6734" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="38" height="38">
                                    <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                </mask>
                                <g mask="url(#mask0_1812_6734)">
                                </g>
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    fill="white" />
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    stroke="
                                    @if ($order->status > App\Enums\OrderStatus::CANCELED) #69A2FF
                                    @else
                                        lightgray @endif
                                    "
                                    stroke-width="4.7472" />
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
                        <div
                            class="py-1 px-8 rounded-2xl
                        @if (intval($order->status) > App\Enums\OrderStatus::CANCELED) bg-yellow-300 text-yellow-800
                        @else
                        bg-grey-200 text-grey-700 @endif">
                            <p class="text-xs font-semibold">Pending</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1812_6734)">
                                <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                <mask id="mask0_1812_6734" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="38" height="38">
                                    <circle cx="18.9888" cy="18.9888" r="18.9888" fill="#F0F0F0" />
                                </mask>
                                <g mask="url(#mask0_1812_6734)">
                                </g>
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    fill="white" />
                                <rect x="8.54352" y="8.54496" width="20.8888" height="20.8888" rx="10.4444"
                                    stroke="
                                    @if ($order->status > App\Enums\OrderStatus::PENDING) #69A2FF
                                    @else
                                    lightgray @endif
                                    "
                                    stroke-width="4.7472" />
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
                        <div
                            class="py-1 px-8  rounded-2xl
                        @if (intval($order->status) > App\Enums\OrderStatus::PENDING) bg-blue-200 text-blue-900
                        @else
                        bg-grey-200 text-grey-700 @endif">
                            <p class=" text-xs font-semibold">
                                @if ($order->status == App\Enums\OrderStatus::PENDING)
                                    Cooking
                                @else
                                    {{ App\Enums\OrderStatus::fromValue(intval($order->status))->description }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-5/5 rounded-full h-2.5 px-12">
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-blue-300 h-2.5 rounded-full"
                        style="
                    @if ($order->status == App\Enums\OrderStatus::PENDING) width: 0;
                    @elseif($order->status == App\Enums\OrderStatus::CANCELED) width: 100%; background-color: lightgray; @endif">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end mr-16">
            <form action="{{ route('waiter-detail-order-next-status', [$tenant->id, $order->id]) }}" method="post">
                @csrf
                @method('PUT')
                <button
                    class="flex items-center gap-2 py-3 px-4 rounded-xl
                @if ($order->status == App\Enums\OrderStatus::PENDING) border border-red-500 text-red-500
                @else
                hidden @endif">
                    <p class="text-sm
                    font-medium">
                        Next Status
                    </p>
                    <svg width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg"
                        class="fill-red-500">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.875 7.5C0.875 10.8827 3.61726 13.625 7 13.625C10.3827 13.625 13.125 10.8827 13.125 7.5C13.125 4.11726 10.3827 1.375 7 1.375C3.61726 1.375 0.875 4.11726 0.875 7.5ZM14 7.5C14 11.366 10.866 14.5 7 14.5C3.13401 14.5 0 11.366 0 7.5C0 3.63401 3.13401 0.5 7 0.5C10.866 0.5 14 3.63401 14 7.5ZM3.9375 7.0625C3.69588 7.0625 3.5 7.25838 3.5 7.5C3.5 7.74162 3.69588 7.9375 3.9375 7.9375H9.00628L7.12814 9.81564C6.95729 9.98649 6.95729 10.2635 7.12814 10.4344C7.29899 10.6052 7.57601 10.6052 7.74686 10.4344L10.3719 7.80936C10.5427 7.6385 10.5427 7.36149 10.3719 7.19064L7.74686 4.56564C7.57601 4.39479 7.29899 4.39479 7.12814 4.56564C6.95729 4.73649 6.95729 5.01351 7.12814 5.18436L9.00628 7.0625H3.9375Z" />
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div class="w-full bg-white-50 rounded-xl p-4">
        {{-- <div class="flex justify-between bg-grey-100 p-4 rounded-xl mb-6">
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
        </div> --}}

    </div>

    <x-card>
        <div class="flex justify-between bg-grey-100 p-4 rounded-xl mb-6">
            <div>
                <div class="w-32 h-32 mb-6">
                    <img src="{{ asset('assets/img/logo_detail_order.png') }}" alt="">
                </div>
                <div>
                    <p class="text-sm text-grey-700 mb-3">Invoice to:</p>
                    <h1 class="text-xl font-semibold tracking-wide">{{ $order->desk->name }}</h1>
                </div>
            </div>
            <div class="text-end">
                <div class="mb-14">
                    <p class="text-xs text-gray-600">UUID</p>
                    <h1 class="text-lg font-bold ">{{ $order->code }}</h1>
                </div>
                <div class="mb-4">
                    <p class="text-sm text-gray-700">Issued On</p>
                    <p class="text-sm font-semibold mb-4">{{ $order->created_at->format('F d, Y') }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-sm text-gray-700">Last Updated</p>
                    <p class="text-sm font-semibold mb-4">{{ $order->updated_at->format('F d, Y') }}</p>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center mb-5">
            <h1 class="font-bold text-lg">Items</h1>
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

        <x-table>
            <x-slot:header>
                <th scope="col" class="px-10 py-6 ">
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
            </x-slot:header>
            @forelse ($order->orderDetail as $detail)
                <tr class="border-b font-semibold">
                    <td class="px-6 py-6 text-start">
                        {{ $detail->product->name }}
                    </td>
                    <td class="px-6 py-6">
                        {{ $detail->quantity }}
                    </td>
                    <td class="px-6 py-6">
                        {{ $detail->product->price }}
                    </td>
                    <td class="px-6 py-6">
                        Rp. {{ number_format($detail->price, 2) }}
                    </td>
                </tr>
            @empty
            @endforelse
            <tr class=" font-semibold">
                <td class="px-6 py-4" colspan="2">

                </td>
                <td class="px-6 py-4 border-b">
                    Subtotal
                </td>
                <td class="px-6 py-4 border-b">
                    Rp. {{ number_format($order->getSubTotal(), 2) }}
                </td>
            </tr>
            @if ($order->tax != null)
                <tr class=" font-semibold">
                    <td class="px-6 py-4" colspan="2">

                    </td>
                    <td class="px-6 py-4 border-b">
                        Tax ({{ $order->tax->percentage }}%)
                    </td>
                    <td class="px-6 py-4 border-b">
                        Rp. {{ number_format($order->tax->tax_total, 2) }}
                    </td>
                </tr>
            @endif
            <tr class=" font-semibold">
                <td class="px-6 py-4" colspan="2">

                </td>
                <td class="px-6 py-4 border-b">
                    Service Change
                </td>
                <td class="px-6 py-4 border-b">
                    Rp. {{ number_format($order->getService()->price, 2) }}
                </td>
            </tr>
            <tr class=" font-semibold">
                <td class="px-6 py-4" colspan="2">

                </td>
                <td class="px-6 py-4 border-b font-extrabold">
                    TOTAL
                </td>
                <td class="px-6 py-4 border-b font-extrabold">
                    Rp. {{ number_format($order->total, 2) }}
                </td>
            </tr>
        </x-table>
    </x-card>

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
