@extends('layouts.tenant')

@section('content')
    {{-- Header --}}
    <div class="rounded-2xl overflow-hidden shadow-lg bg-white-50 mb-5">
        <div class="p-4">
            <div class="flex items-center">
                <div class="mr-4 bg-red-50 rounded-xl p-5">
                    <!-- Icon di sini -->
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31.125 7.0625C32.3331 7.0625 33.3125 8.04188 33.3125 9.25V26.75C33.3125 27.9581 32.3331 28.9375 31.125 28.9375H4.875C3.66688 28.9375 2.6875 27.9581 2.6875 26.75V9.25C2.6875 8.04188 3.66688 7.0625 4.875 7.0625H31.125ZM4.875 4.875C2.45875 4.875 0.5 6.83375 0.5 9.25V26.75C0.5 29.1662 2.45875 31.125 4.875 31.125H31.125C33.5412 31.125 35.5 29.1662 35.5 26.75V9.25C35.5 6.83375 33.5412 4.875 31.125 4.875H4.875Z"
                            fill="#F54748" />
                        <path
                            d="M4.875 12.5312C4.875 11.9272 5.36469 11.4375 5.96875 11.4375H10.3438C10.9478 11.4375 11.4375 11.9272 11.4375 12.5312V14.7188C11.4375 15.3228 10.9478 15.8125 10.3438 15.8125H5.96875C5.36469 15.8125 4.875 15.3228 4.875 14.7188V12.5312Z"
                            fill="#F54748" />
                        <path
                            d="M4.875 19.0938C4.875 18.4897 5.36469 18 5.96875 18H16.9062C17.5103 18 18 18.4897 18 19.0938C18 19.6978 17.5103 20.1875 16.9062 20.1875H5.96875C5.36469 20.1875 4.875 19.6978 4.875 19.0938ZM4.875 23.4688C4.875 22.8647 5.36469 22.375 5.96875 22.375H8.15625C8.76031 22.375 9.25 22.8647 9.25 23.4688C9.25 24.0728 8.76031 24.5625 8.15625 24.5625H5.96875C5.36469 24.5625 4.875 24.0728 4.875 23.4688ZM11.4375 23.4688C11.4375 22.8647 11.9272 22.375 12.5312 22.375H14.7188C15.3228 22.375 15.8125 22.8647 15.8125 23.4688C15.8125 24.0728 15.3228 24.5625 14.7188 24.5625H12.5312C11.9272 24.5625 11.4375 24.0728 11.4375 23.4688ZM18 23.4688C18 22.8647 18.4897 22.375 19.0938 22.375H21.2812C21.8853 22.375 22.375 22.8647 22.375 23.4688C22.375 24.0728 21.8853 24.5625 21.2812 24.5625H19.0938C18.4897 24.5625 18 24.0728 18 23.4688ZM24.5625 23.4688C24.5625 22.8647 25.0522 22.375 25.6562 22.375H27.8438C28.4478 22.375 28.9375 22.8647 28.9375 23.4688C28.9375 24.0728 28.4478 24.5625 27.8438 24.5625H25.6562C25.0522 24.5625 24.5625 24.0728 24.5625 23.4688Z"
                            fill="#F54748" />
                    </svg>
                </div>
                <div>
                    <!-- Title di sini -->
                    <p class="font-bold text-xl text-gray-900">Service Payment</p>
                    <!-- Subtitle di sini -->
                    <p class="text-gray-600">Akses melihat tagihan pembayaran anda kepada pusat</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel --}}
    <div class="bg-white w-full rounded-3xl shadow-md mb-8 bg-white-50">
        <div class="flex items-center justify-between p-8">
            <h4 class="text-lg font-semibold">Daftar Tagihan</h4>
            <div class="flex gap-4">
                <form>
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3  pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-2 pl-10 text-sm text-gray-900  rounded-lg bg-gray-100 border-none py-3"
                            placeholder="Search" required>
                    </div>
                </form>
            </div>
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Date
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Jumlah
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bukti Transfer
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $service->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $service->created_at }}
                            </td>
                            <td class="px-6 py-4">
                                Rp.{{ number_format($service->price, 2, ',', '.') }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-11 h-12 bg-red-400" data-modal-target="modal-transaction"
                                        data-modal-toggle="modal-transaction"></div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p>Tidak ada data</p>
                    @endforelse

                </tbody>
            </table>

            <div class="grid grid-cols-3 items-center px-6 py-3">
                <p>Menampilkan : 1-10 dari 100 hasil</p>
                <nav aria-label="Page navigation example" class="col-span-2">
                    <ul class="flex gap-3">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border-none rounded-lg ">Prev</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight  bg-red-500 text-white-50 border border-gray-300 rounded-lg ">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight  bg-white-50 border border-gray-300 rounded-lg ">2</a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white-50 border-none rounded-lg rounded-r-lg ">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    {{-- MODAL TRANSACTION --}}
    <!-- Modal -->
    <div data-te-modal-init data-te-backdrop="false"
        class="static left-0 top-0 z-[1055] block h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalComponents" tabindex="-1" aria-labelledby="exampleModalComponentsLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative w-auto opacity-100 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:my-7 min-[576px]:max-w-[500px]">
            <div
                class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="exampleModalComponentsLabel">
                        Modal title
                    </h5>
                    <button type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="relative flex-auto p-4" data-te-modal-body-ref>
                    Modal body text goes here.
                </div>
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button type="button"
                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
                    </button>
                    <button type="button"
                        class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
