@extends('layouts.tenant')

@section('content')
    {{-- Header --}}
    <x-card class="mb-5">
        <div class="flex items-center">
            <div class="p-5 mr-4 bg-red-50 rounded-xl">
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
                <p class="text-xl font-bold text-gray-900">Service Payment</p>
                <!-- Subtitle di sini -->
                <p class="text-gray-600">Akses melihat tagihan pembayaran anda kepada pusat</p>
            </div>
        </div>
    </x-card>

    <div x-data="{ img_url: '' }">
        {{-- Tabel --}}
        <x-card>
            <x-card.header class="flex items-center justify-between mb-5">
                <x-table.table-title>
                    <x-slot:sub_title> Show yours payment records </x-slot:sub_title>
                    <x-slot:title> Tenant Service Payment </x-slot:title>
                </x-table.table-title>
                <x-filter />
            </x-card.header>

            <x-table>
                <x-slot:header>
                    <x-table.th>
                        ID
                    </x-table.th>
                    <x-table.th>
                        <div class="flex items-center">
                            Date
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </x-table.th>
                    <x-table.th>
                        <div class="flex items-center text-start">
                            Jumlah
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </x-table.th>
                    <x-table.th>
                        Bukti Transfer
                    </x-table.th>
                </x-slot:header>
                @forelse ($payments as $payment)
                    <x-table.tr>
                        <x-table.th>
                            {{ $payment->id }}
                        </x-table.th>
                        <x-table.td>
                            {{ \Carbon\Carbon::parse($payment->transfer_at)->format('d-m-Y') }}
                        </x-table.td>
                        <x-table.td>
                            Rp {{ number_format($payment->total, 2, ',', '.') }}
                        </x-table.td>
                        <x-table.td>
                            <button @click="img_url = '{{ $payment->getFirstMediaUrl('default') }}'"
                                data-modal-target="modal-transaction" data-modal-toggle="modal-transaction">
                                <div class="flex items-center justify-center">
                                    <div class="h-12 w-11">
                                        <img src="{{ $payment->getFirstMediaUrl('default') }}" alt="">
                                    </div>
                                </div>
                            </button>
                        </x-table.td>
                    </x-table.tr>
                @empty
                    <x-table.tr>
                        <x-table.td colspan="4">tidak ada data</x-table.td>
                    </x-table.tr>
                @endforelse
            </x-table>
            {{ $payments->links('pagination.tenant') }}
        </x-card>

        {{-- MODAL PAYMENT --}}

        <x-modal id="modal-transaction" :with_button="false">
            <x-slot:title>Bukti Transfer</x-slot:title>
            <div class="w-full h-full ">
                <img x-bind:src="img_url" alt=""
                    class="w-full h-full border-2 g border-black-400 rounded-xl">
            </div>
        </x-modal>
    </div>
@endsection
