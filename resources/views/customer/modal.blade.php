{{-- Modal --}}
<div>
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
                                aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}">
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
                style="background-image: url('{{ asset('assets/img/add-desc.png') }}');">Tambah
                Pesanan</button>


        </div>
    </div>
</div>

@push('script')
    <script>
        // MODAL LOGIC
        function openModal(productId) {
            const modal = document.getElementById(`modal-${productId}`);
            const overlay = document.getElementById(`overlay-${productId}`);

            modal.classList.remove("hidden");
            setTimeout(() => {
                modal.classList.remove("translate-y-[100%]");
                modal.classList.add("translate-y-0")
            }, 100);

            overlay.classList.remove("hidden");
        }

        function closeModal(productId) {
            const modal = document.getElementById(`modal-${productId}`);
            const overlay = document.getElementById(`overlay-${productId}`);

            modal.classList.remove("translate-y-0");
            modal.classList.add("translate-y-[100%]");
            setTimeout(() => {
                modal.classList.add("hidden");
                overlay.classList.add("hidden");
            }, 300);
        }

        // Ambil semua tombol untuk membuka modal
        const openModalBtns = document.querySelectorAll("[id^='open-modal-btn-']");
        // Tambahkan event listener untuk setiap tombol
        openModalBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                const productId = btn.id.split('-').pop(); // Dapatkan ID produk dari ID tombol
                openModal(productId);
            });
        });

        // Ambil semua tombol untuk menutup modal
        const closeModalBtns = document.querySelectorAll("[id^='close-modal-btn-']");
        // Tambahkan event listener untuk setiap tombol
        closeModalBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                const productId = btn.id.split('-').pop(); // Dapatkan ID produk dari ID tombol
                closeModal(productId);
            });
        });

        // Ambil semua elemen overlay
        const overlays = document.querySelectorAll("[id^='overlay-']");
        // Tambahkan event listener untuk setiap elemen overlay
        overlays.forEach((overlay) => {
            overlay.addEventListener("click", () => {
                const productId = overlay.id.split('-').pop(); // Dapatkan ID produk dari ID elemen overlay
                closeModal(productId);
            });
        });
    </script>
@endpush
