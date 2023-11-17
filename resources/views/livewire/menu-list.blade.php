<div class="overflow-y-scroll pb-24" x-data="{
    toggle: false,
    product: {
        img: '',
        name: '',
        description: '',
        'price': 0
    }
}">
    @forelse ($categories as $category)
        {{-- Product --}}
        <div class="flex flex-col gap-y-3 mb-3">
            <h3 id="{{ $category->name }}"
                class="p-3 mx-3 text-gray-900 shadow-md w-fit rounded-lg font-bold tracking-wide">{{ $category->name }}
            </h3>
            @forelse($category->products as $product)
                <div class="shadow-card rounded-[12px] flex items-center justify-between p-3 mx-3">
                    <div id="open-modal-btn" class=" flex items-center gap-x-[16px]">
                        <img class="w-20 h-20 rounded-xl"
                            x-on:click="toggle=!toggle; product.img='{{ $product->getFirstMediaUrl('default') }}'; product.name='{{ $product->name }}'; product.price='Rp{{ number_format($product->price, 0, ',', '.') }}'; product.description='{{ $product->description }}'"
                            src="{{ $product->getFirstMediaUrl('default') }}" alt="Makanan" />
                        <div class="flex flex-col justify-between w-full">
                            <p class="text-[14px] text-[#2E2E2E] font-[500px]">{{ $product->name }}</p>
                            <p class="text-[12px] text-grey-600 mb-[12px]">
                                {{ Str::limit($product->description, 20, '...') }}</p>
                            <p class="text-yellow-500 font-[700]">Rp{{ number_format($product->price, 0, ',', '.') }}
                            </p>
                        </div>
                    </div>

                    <livewire:tambah-button :$product :$desk />
                </div>
            @empty
            @endforelse
        </div>
    @empty
    @endforelse

    <a href="{{ route('customer-cart', [$tenant->id, $desk->id]) }}">
        <livewire:customer-total :$desk />
    </a>

    <div id="modal" x-show="toggle" class="absolute bottom-0 z-50" x-transition>
        <div id="modal-content"
            class="modal-content flex flex-col p-5 justify-end items-center border-4 bg-white-50 pt-2 rounded-t-3xl shadow-lg w-[375px]">
            <div class="relative w-full">
                <div class=" overflow-hidden rounded-xl min-[300px]:h-[42vh]">
                    <div class="rounded-xl">
                        <button class="absolute top-6 right-2 z-50" x-on:click="toggle = !toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="fill-red-500"
                                viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </button>
                        <img x-bind:src="product.img"
                            class="absolute block w-full rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
            </div>

            <div class="flex flex-col w-full my-7 gap-y-2">
                <p class="text-xl font-[600]" x-text="product.name"></p>
                <p class="text-gray-600 text-sm" x-text="product.description"></p>
                <p class="self-end text-xl font-[700]" x-text="product.price"></p>
            </div>

            <button class="bg-red-500 text-white-50 rounded-full py-2 w-full text-center"
                style="background-image: url('{{ asset('assets/img/add-desc.png') }}');">Tambah
                Pesanan</button>
        </div>
    </div>
</div>