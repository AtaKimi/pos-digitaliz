@extends('layouts.waiter')

@section('content')
    {{-- table --}}
    <div class="relative m-10 overflow-x-auto shadow-md rounded-xl bg-white-100">
        <div class="flex flex-wrap justify-between gap-5 p-5">
            <h1 class="text-xl font-bold text-gray-900">
                Order List
            </h1>
            <div class="pb-4">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block p-2 pl-10 text-sm text-gray-900 placeholder-gray-400 bg-gray-100 border-none rounded-lg focus:ring-0 w-80 "
                        placeholder="Search">
                </div>
            </div>
        </div>

        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Meja
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total tagihan Meja
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status Order
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr class="border-b bg-white-50 hover:bg-gray-100">
                        <th scope="row" class="px-6 py-4">
                            <h1 class="font-medium text-gray-900 whitespace-nowrap">
                                {{ $order->desk->name }}
                            </h1>
                        </th>
                        <td class="px-6 py-4">
                            {{ $order->total }}
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="rounded-full inline-block w-full md:w-2/3 p-1 text-center text-sm font-semibold
                                @if ($order->status == 'pending') bg-yellow-200 text-yellow-800
                                @elseif($order->status == 'cooking') bg-blue-100 text-blue-800
                                @elseif($order->status == 'serving') bg-purple-200 text-purple-800
                                @elseif($order->status == 'done') bg-green-200 text-green-800
                                @elseif($order->status == 'canceled') bg-red-200 text-red-800 @endif">
                                {{ $order->status }}
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            <button class="p-2 border border-yellow-300 rounded-lg hover:bg-yellow-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                    fill="none">
                                    <path
                                        d="M16.4063 8.8988C16.4063 8.8988 13.4063 3.3988 8.40625 3.3988C3.40625 3.3988 0.40625 8.8988 0.40625 8.8988C0.40625 8.8988 3.40625 14.3988 8.40625 14.3988C13.4063 14.3988 16.4063 8.8988 16.4063 8.8988ZM1.57895 8.8988C1.63588 8.81201 1.70079 8.71558 1.77352 8.61122C2.10841 8.13073 2.60256 7.49171 3.23836 6.85591C4.52728 5.56699 6.28687 4.3988 8.40625 4.3988C10.5256 4.3988 12.2852 5.56699 13.5741 6.85591C14.2099 7.49171 14.7041 8.13073 15.039 8.61122C15.1117 8.71558 15.1766 8.81201 15.2336 8.8988C15.1766 8.98559 15.1117 9.08203 15.039 9.18639C14.7041 9.66687 14.2099 10.3059 13.5741 10.9417C12.2852 12.2306 10.5256 13.3988 8.40625 13.3988C6.28687 13.3988 4.52728 12.2306 3.23836 10.9417C2.60256 10.3059 2.10841 9.66687 1.77352 9.18639C1.70079 9.08203 1.63588 8.98559 1.57895 8.8988Z"
                                        fill="#FDC55E" />
                                    <path
                                        d="M8.40625 6.3988C7.02554 6.3988 5.90625 7.51809 5.90625 8.8988C5.90625 10.2795 7.02554 11.3988 8.40625 11.3988C9.78696 11.3988 10.9063 10.2795 10.9063 8.8988C10.9063 7.51809 9.78696 6.3988 8.40625 6.3988ZM4.90625 8.8988C4.90625 6.96581 6.47325 5.3988 8.40625 5.3988C10.3392 5.3988 11.9063 6.96581 11.9063 8.8988C11.9063 10.8318 10.3392 12.3988 8.40625 12.3988C6.47325 12.3988 4.90625 10.8318 4.90625 8.8988Z"
                                        fill="#FDC55E" />
                                </svg>
                                </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="55" class="py-5 text-center">tidak ada data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

        <div class="flex items-center justify-around">
            <p class="justify-center hidden text-xs md:flex">
                Menampilkan : 1-10 dari 100 hasil
            </p>
            <nav aria-label="Page navigation example" class="flex justify-center my-5">
                <ul class="inline-flex gap-1.5 -space-x-px text-xs">

                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-8 px-3 ml-0 leading-tight text-gray-500 bg-white-50 hover:text-gray-900 ">Prev</a>
                    </li>

                    <li>
                        <a href="#" aria-current="page"
                            class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-yellow-400 rounded-lg hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 border border-gray-300 rounded-lg bg-white-50 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 border border-gray-300 rounded-lg bg-white-50 hover:bg-gray-100 hover:text-gray-700">3</a>
                    </li>

                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 rounded-lg bg-white-50 hover:bg-gray-100 hover:text-gray-700 ">...</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 border border-gray-300 rounded-lg bg-white-50 hover:bg-gray-100 hover:text-gray-700">10</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-8 px-3 ml-0 leading-tight text-gray-500 bg-white-50 hover:text-gray-900 ">Next</a>
                    </li>
                </ul>
            </nav>

        </div>

    </div>




    </div>


    {{-- end table --}}
@endsection
