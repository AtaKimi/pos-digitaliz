{{-- Product --}}
<div id="{{ $category->name }}" class="flex flex-col gap-y-3 mb-3">
    <h3 class="p-3 mx-3">{{ $category->name }}</h3>
    @forelse($category->products as $product)
        <div class="shadow-card rounded-[12px] flex items-center justify-between p-3 mx-3">
            <div id="open-modal-btn-{{ $product->id }}" class=" flex items-center gap-x-[16px]">
                <img class="min-w-[74px] h-[74px] rounded-[12px]" src="{{ $product->getFirstMediaUrl('default') }}"
                    alt="Makanan" />
                <div class="flex flex-col justify-between w-full">
                    <p class="text-[14px] text-[#2E2E2E] font-[500px]">{{ $product->name }}</p>
                    <p class="text-[12px] text-grey-600 mb-[12px]">
                        {{ Str::limit($product->description, 20, '...') }}</p>
                    <p class="text-yellow-500 font-[700]">Rp{{ number_format($product->price, 0, ',', '.') }}
                    </p>
                </div>
            </div>

            <div id="buttons-{{ $product->id }}" class="relative flex justify-evenly w-[61.5px] h-[27px]">
                <button id="tambah-btn-{{ $product->id }}" wire:click="$parent.addOrder({{ intval($product->price)}})"
                    class="absolute w-fit h-fit px-[12px] py-[6px] text-[10px] bg-[#FDC55E] text-[#FFF] rounded-[6px]">Tambah</button>
                <button id="plus-btn-{{ $product->id }}"
                    class="absolute items-center justify-center w-1/3 h-full py-[6px] -right-2 bg-[#FDC55E] text-[#FFF] rounded-[6px] hidden">+</button>
                <p id="count-{{ $product->id }}" class="absolute hidden text-[#FDC55E]">0</p>
                <button id="minus-btn-{{ $product->id }}"
                    class="absolute items-center justify-center w-1/3 h-full py-[6px] -left-2 bg-[#FDC55E] text-[#FFF] rounded-[6px] hidden">-
                </button>
            </div>
        </div>
        {{-- Modal --}}
        <div id="overlay-{{ $product->id }}" class="fixed inset-0 bg-black-400 opacity-50 z-40 hidden"></div>
        <div id="close-modal-btn-{{ $product->id }}" class="fixed inset-0 bg-black-400 opacity-50 z-41 hidden">
        </div>
        <div id="modal-{{ $product->id }}"
            class="fixed transform translate-y-[100%] transition duration-300 bottom-0 z-50 hidden">
            <div id="modal-content-{{ $product->id }}"
                class="modal-content flex flex-col items-center bg-white-50 px-5 pt-2 rounded-t-3xl shadow-lg w-[375px] h-[80vh]">
                {{-- RED LINE --}}
                <hr class="bg-red-500 w-5 h-[3px] rounded-full">
                {{-- IMAGE SLIDE --}}
                @if (count($product->getMedia('default')) > 1)
                    <div id="default-carousel" class="relative w-full mt-3" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative overflow-hidden rounded-xl min-[300px]:h-[42vh]">
                            @foreach ($product->getMedia('default') as $image)
                                <div class="hidden duration-700 rounded-xl" data-carousel-item>
                                    <img src="{{ $image->getUrl() }}"
                                        class="absolute block w-full rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                            @endforeach
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-1 -translate-x-1/2 pt-2 left-1/2">
                            @foreach ($product->getMedia('default') as $index => $image)
                                <button type="button"
                                    class="w-2 h-2 rounded-full {{ $index === 0 ? 'bg-red-500' : 'bg-gray-300' }} {{ $index === $loop->index ? 'active' : '' }}"
                                    aria-current="{{ $index === $loop->index ? 'true' : 'false' }}"
                                    aria-label="Slide {{ $index + 1 }}"
                                    data-carousel-slide-to="{{ $index }}">
                                </button>
                            @endforeach
                        </div>

                    </div>
                @else
                    {{-- Display a single image without carousel --}}
                    <div class="relative w-full">
                        <div class="relative overflow-hidden rounded-xl min-[300px]:h-[42vh]">
                            <div class="rounded-xl">
                                <img src="{{ $product->getFirstMediaUrl('default') }}"
                                    class="absolute block w-full rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                @endif
                {{-- END OF Modal --}}

                {{-- DESCRIPTION --}}
                <div class="flex flex-col w-full my-7 gap-y-2">
                    <p class="text-xl font-[600]">{{ $product->name }}</p>
                    <p class="text-gray-600 text-sm">{{ $product->description }}
                    </p>
                    <p class="self-end text-xl font-[700]">Rp{{ number_format($product->price, 0, ',', '.') }}
                    </p>
                </div>

                {{-- RED BUTTON --}}
                <button class="bg-red-500 text-white-50 rounded-full py-2 w-full text-center"
                    wire:click="$parent.addOrder({{ $product->price }})"
                    style="background-image: url('{{ asset('assets/img/add-desc.png') }}');">Tambah
                    Pesanan</button>
            </div>
        </div>
        {{-- END OF Modal --}}
    @empty
    @endforelse
</div>
