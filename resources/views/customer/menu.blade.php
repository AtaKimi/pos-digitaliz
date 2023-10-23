@extends('layouts.customer')

@php
    $tenant = $tenant;
@endphp

@section('judul')
    <p class="text-ellipsis">Temukan makanan favorit Anda!
    </p>
@endsection

@section('file-header')
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .scroll-none::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scroll-none {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        /* BUTTON ANIMATION */

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .fade-out {
            animation: fadeOut 0.5s ease-in-out;
            /* Adjust the duration and timing function as needed */
        }

        /* END OF BUTTON ANIMATION */
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const anchorLinks = document.querySelectorAll('a[href^="#"]');

            anchorLinks.forEach(function(link) {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const targetId = link.getAttribute("href");
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {

                        targetElement.style.scrollMarginTop = "100px";

                        targetElement.scrollIntoView({
                            behavior: "smooth",
                            block: "start",
                            inline: "nearest",
                        });


                    }
                });
            });
        });
    </script>
    <script>
        function handleButtonClick(button) {
            // Menghapus kelas 'bg-red-500', 'text-white', dan 'border-red-500' dari semua tombol
            document.querySelectorAll('.flex button').forEach(function(btn) {
                btn.classList.remove('bg-red-100', 'text-red-300', 'border-red-300');
            });

            // Menambahkan kelas 'bg-red-500', 'text-white', dan 'border-red-500' pada tombol yang diklik
            button.classList.add('bg-red-100', 'text-red-300', 'border-red-300');
        }
    </script>
@endsection
@section('title')
    {{ $tenant->name }}
@endsection
@section('content')
    {{-- Search & Navbar --}}
    <div id="all"></div>
    <div class="sticky top-0 z-20 bg-white-100 pt-1">
        {{-- Search --}}
        <div class="relative w-full px-3">
            <div class="absolute flex pl-3 items-center pointer-events-none">
                <svg class="w-4 h-4 my-3 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="simple-search"
                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search" required>
        </div>
        {{-- END OF Search --}}
        <div class="overflow-x-auto scroll-none mx-3">
            <div class="flex gap-x-[8px]">
                <a href="#all">
                    <button
                        class="h-fit min-w-fit my-4 text-xs px-[16px] py-[8px] rounded-full border border-grey-300
                                   transition-all duration-300 ease-in-out
                                   bg-grey-100
                                   text-black
                                   hover:bg-grey-200"
                        onclick="handleButtonClick(this)">
                        Semua
                    </button>
                </a>
                @foreach ($categories as $category)
                    <a href="#{{ $category->name }}">
                        <button
                            class="h-fit min-w-fit my-4 text-xs px-[16px] py-[8px] rounded-full border bg-grey-100 border-grey-300 hover:bg-grey-200
                                   transition-all duration-300 ease-in-out"
                            onclick="handleButtonClick(this)">
                            {{ $category->name }}
                        </button>
                    </a>
                @endforeach
            </div>
        </div>
        {{-- END OF Navbar --}}
    </div>
    {{-- END OF Search & Navbar --}}

    {{-- Product List by category --}}
    <livewire:customer-total-order :categories="$categories" :total />
@endsection

@section('file-footer')
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

        const categories = @json($categories);
        const totalItemsElement = document.getElementById('total-items');
        const totalPriceElement = document.getElementById('total-price');
        const orderSummary = document.getElementById('order-summary');

        // Initialize total price and items
        let totalPrice = 0;

        categories.forEach(category => {
            category.products.forEach(product => {
                const buttons = document.getElementById('buttons-' + product.id).getElementsByTagName(
                    "button");
                const count = document.getElementById('count-' + product.id);

                const updateVisibility = () => {
                    if (parseInt(count.textContent) < 1) {
                        buttons[0].classList.remove('fade-out');
                        buttons[0].classList.add('fade-in');
                        buttons[0].classList.remove('hidden');
                        buttons[1].classList.remove('flex');
                        buttons[2].classList.remove('flex');
                        buttons[1].classList.add('hidden');
                        buttons[2].classList.add('hidden');
                        count.classList.add('hidden');
                    } else if (parseInt(count.textContent) > 0) {
                        buttons[0].classList.add('hidden');
                        buttons[1].classList.add('flex');
                        buttons[2].classList.add('flex');
                        buttons[1].classList.remove('hidden');
                        buttons[2].classList.remove('hidden');
                        count.classList.remove('hidden');
                    }
                };

                // WHEN THE "TAMBAH" BUTTON CLICKED
                document.getElementById('tambah-btn-' + product.id).addEventListener('click', () => {
                    buttons[0].classList.add('fade-out');
                    ++count.innerText;
                    setTimeout(() => {
                        updateVisibility();
                        buttons[1].classList.add('fade-in');
                        buttons[2].classList.add('fade-in');
                    }, 500);
                });
            });
        });

        function getTotalItems() {
            const totalItems = document.getElementById('total-items').text;
            console.log(totalItems)
            return totalItems;
        }
    </script>
@endsection
