<x-card>
    <x-card.header>
        <x-table.table-title>
            <x-slot:sub_title> All your orders are being shown here </x-slot:sub_title>
            <x-slot:title> Order Table</x-slot:title>
        </x-table.table-title>
        <div class="flex gap-2 items-center">
            <x-filter />
            <x-filter.reset-button />
        </div>
    </x-card.header>
    <x-table>
        <x-slot:header>
            <x-table.th scope="col">
                Code
            </x-table.th>
            <x-table.th scope="col">
                Nama Meja
            </x-table.th>
            <x-table.th scope="col">
                Total Tagihan Meja
            </x-table.th>
            <x-table.th scope="col">
                Status Order
            </x-table.th>
            <x-table.th scope="col">
                Action
            </x-table.th>
        </x-slot:header>

        @forelse ($orders as $order)
            <x-table.tr>
                <x-table.th scope="row"> {{ $order->code }} </x-table.th>
                <x-table.td>{{ $order->desk->name }}</x-table.td>
                <x-table.td>Rp. {{ $order->total }}</x-table.td>
                <x-table.td>
                    <button disabled
                        class="flex justify-center align-middle w-full py-1 rounded-full
                        @if ($order->status == App\Enums\OrderStatus::PENDING) bg-yellow-300 text-yellow-950                          
                        @elseif($order->status == App\Enums\OrderStatus::COOKING) bg-blue-200 text-blue-950
                        @elseif($order->status == App\Enums\OrderStatus::SERVING) bg-purple-200 text-purple-950
                        @elseif($order->status == App\Enums\OrderStatus::DONE)  bg-green-400 text-green-950
                        @elseif($order->status == App\Enums\OrderStatus::CANCELED) bg-red-500 text-white-50 @endif
                        ">{{ App\Enums\OrderStatus::fromValue(intval($order->status))->description }}
                    </button>
                </x-table.td>
                <x-table.td class="flex justify-center">
                    <a href="{{ route('tenant-order-show', ['tenant' => $tenant, 'order' => $order]) }}"
                        class="block w-fit focus:outline-none text-white bord border border-yellow-400 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.8037 8.49976C16.8037 8.49976 13.8037 2.99976 8.80371 2.99976C3.80371 2.99976 0.803711 8.49976 0.803711 8.49976C0.803711 8.49976 3.80371 13.9998 8.80371 13.9998C13.8037 13.9998 16.8037 8.49976 16.8037 8.49976ZM1.97641 8.49976C2.03334 8.41297 2.09825 8.31653 2.17098 8.21217C2.50587 7.73169 3.00002 7.09266 3.63582 6.45686C4.92474 5.16794 6.68433 3.99976 8.80371 3.99976C10.9231 3.99976 12.6827 5.16794 13.9716 6.45686C14.6074 7.09266 15.1016 7.73169 15.4364 8.21217C15.5092 8.31653 15.5741 8.41297 15.631 8.49976C15.5741 8.58654 15.5092 8.68298 15.4364 8.78734C15.1016 9.26783 14.6074 9.90685 13.9716 10.5427C12.6827 11.8316 10.9231 12.9998 8.80371 12.9998C6.68433 12.9998 4.92474 11.8316 3.63582 10.5427C3.00002 9.90685 2.50587 9.26783 2.17098 8.78734C2.09825 8.68298 2.03334 8.58654 1.97641 8.49976Z"
                                fill="#FDC55E" />
                            <path
                                d="M8.80371 5.99976C7.423 5.99976 6.30371 7.11904 6.30371 8.49976C6.30371 9.88047 7.423 10.9998 8.80371 10.9998C10.1844 10.9998 11.3037 9.88047 11.3037 8.49976C11.3037 7.11904 10.1844 5.99976 8.80371 5.99976ZM5.30371 8.49976C5.30371 6.56676 6.87072 4.99976 8.80371 4.99976C10.7367 4.99976 12.3037 6.56676 12.3037 8.49976C12.3037 10.4328 10.7367 11.9998 8.80371 11.9998C6.87072 11.9998 5.30371 10.4328 5.30371 8.49976Z"
                                fill="#FDC55E" />
                        </svg>
                    </a>
                </x-table.td>
            </x-table.tr>
        @empty
        @endforelse
    </x-table>

    {{ $orders->links('pagination.tenant') }}
</x-card>
