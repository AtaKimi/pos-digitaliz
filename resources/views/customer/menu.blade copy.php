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
    <livewire:total :total="0" >

    </livewire:total>



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
    <div id="menulist" class="pb-5">
        @forelse ($categories as $category)
            {{-- Product --}}
            <div id="{{ $category->name }}" class="flex flex-col gap-y-3 mb-3">
                <h3 class="p-3 mx-3">{{ $category->name }}</h3>
                @forelse($category->products as $product)
                    <div class="shadow-card rounded-[12px] flex items-center justify-between p-3 mx-3">
                        <div id="open-modal-btn-{{ $product->id }}" class=" flex items-center gap-x-[16px]">
                            <img class="min-w-[74px] h-[74px] rounded-[12px]"
                                src="{{ $product->getFirstMediaUrl('default') }}" alt="Makanan" />
                            <div class="flex flex-col justify-between w-full">
                                <p class="text-[14px] text-[#2E2E2E] font-[500px]">{{ $product->name }}</p>
                                <p class="text-[12px] text-grey-600 mb-[12px]">
                                    {{ Str::limit($product->description, 20, '...') }}</p>
                                <p class="text-yellow-500 font-[700]">Rp{{ number_format($product->price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>

                        <div id="buttons-{{ $product->id }}" class="relative flex justify-evenly w-[61.5px] h-[27px]">
                            <button id="tambah-btn-{{ $product->id }}"
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
                    @include('customer.modal')



                @empty
                @endforelse
            </div>
        @empty
        @endforelse
        {{-- END OF Menu List --}}
        <div id="order-summary" style="background-image: url('{{ asset('assets/img/order-detail.png') }}');"
            class="fixed transform transition translate-y-[200px] mx-1 duration-500 justify-between items-center bottom-9 z-40 w-[345px] px-8 py-2 rounded-full place-self-center text-white-50 bg-red-500 hidden">
            <div>
                <p class="inline text-[14px] m-0" id="total-items">0</p>
                <p class="inline text-[14px] m-0">Items</p>
                <p class="text-[18px] font-[700] -mt-1">Total</p>
            </div>
            <div class="flex gap-x-2 text-xl font-[700]">
                <p id="total-price">Rp.0</p>
                <img src={{ URL('assets/img/solar_bag-2-bold.png') }}>
            </div>
        </div>

    </div>

@endsection

@section('file-footer')
    @stack('script')
    <script>
        // BUTTON LOGIC
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
                    const totalItems = getTotalItems();

                    if (totalItems < 1) {
                        orderSummary.classList.add('translate-y-[200px]');
                        orderSummary.classList.remove('translate-y-0');
                        setTimeout(() => {
                            orderSummary.classList.add('hidden');
                            orderSummary.classList.remove('flex');
                        }, 300);
                    } else {
                        orderSummary.classList.remove('hidden');
                        orderSummary.classList.add('flex');
                        setTimeout(() => {
                            orderSummary.classList.add('translate-y-0');
                            orderSummary.classList.remove('translate-y-[200px]');
                        }, 100);

                    }

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
                    updateTotalPrice(product.price); // Update total price
                    setTimeout(() => {
                        updateVisibility();
                        buttons[1].classList.add('fade-in');
                        buttons[2].classList.add('fade-in');
                    }, 500);
                });

                // WHEN THE '+' BUTTON CLICKED
                document.getElementById('plus-btn-' + product.id).addEventListener('click', () => {
                    ++count.innerText;
                    updateTotalPrice(product.price); // Update total price
                    updateVisibility();
                });

                // WHEN THE '-' BUTTON CLICKED
                document.getElementById('minus-btn-' + product.id).addEventListener('click', () => {
                    --count.innerText;
                    updateTotalPrice(product.price); // Update total price
                    setTimeout(() => {
                        updateVisibility();
                    }, 500);
                });
            });
        });

        function getTotalItems() {
            let totalItems = 0;

            categories.forEach(category => {
                category.products.forEach(product => {
                    const count = document.getElementById('count-' + product.id);
                    totalItems += parseInt(count.textContent);
                });
            });

            return totalItems;
        }

        // Function to update total price
        function updateTotalPrice(productPrice) {
            totalPrice = 0;

            categories.forEach(category => {
                category.products.forEach(product => {
                    const count = document.getElementById('count-' + product.id);
                    totalPrice += parseInt(count.textContent) * product.price;
                });
            });

            totalItemsElement.textContent = getTotalItems();
            totalPriceElement.textContent = formatCurrency(totalPrice);
        }

        // Function to format currency (customize as needed)
        function formatCurrency(amount) {
            return 'Rp.' + amount.toLocaleString('id-ID');
        }
    </script>
@endsection
