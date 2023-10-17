@extends('layouts.customer')

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
@endsection
@section('title')
{{ $tenant->name }}
@endsection
@section('content')
    {{-- Search & Navbar --}}
    <div class="px-5">
        {{-- Search --}}
        <div class="relative w-full">
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

        {{-- Navbar --}}
        <div class="flex overflow-auto scroll-none w-full">
            <div class="flex gap-x-[8px]">
                <button
                    class="h-fit min-w-fit my-4 text-xs text-red-500 px-[16px] py-[8px] bg-red-100 rounded-full border-red-500 border-[1px]">Semua</button>
                @foreach ($categories as $category)
                    <button
                        class="h-fit min-w-fit my-4 text-xs px-[16px] py-[8px] bg-grey-100 rounded-full border-grey-300 border-[1px]">
                        {{ $category->name }}
                    </button>
                @endforeach

            </div>
        </div>
        {{-- END OF Navbar --}}
    </div>
    {{-- END OF Search & Navbar --}}

    {{-- Menu List --}}
    <div id="menulist" class="px-5 pb-5">
        @forelse ($categories as $category)
            {{-- Makanan --}}
            <div class="flex flex-col gap-y-3 mb-3">
                <h3 class="p-3">{{ $category->name }}</h3>
                @forelse($category->products as $product)
                    <div class="shadow-card rounded-[12px] flex items-center justify-between p-3">
                        <div id="open-modal-btn" class=" flex items-center gap-x-[16px]">
                            <img class="min-w-[74px] h-[74px] rounded-[12px]"
                                src="{{ $product->getFirstMediaUrl('default') }}" alt="Makanan" />
                            <div class="flex flex-col justify-between w-full">
                                <p class="text-[14px] text-[#2E2E2E] font-[500px]">{{ $product->name }}</p>
                                <p class="text-[12px] text-grey-600 mb-[12px]">
                                    {{ Str::limit($product->description, 20, '...') }}</p>
                                <p class="text-yellow-500 font-[700]"> Rp{{ number_format($product->price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                        <div id="buttons" class="relative flex justify-evenly w-[61.5px] h-[27px]">
                            <button
                                class="absolute w-fit h-fit px-[12px] py-[6px] text-[10px] bg-[#FDC55E] text-[#FFF] rounded-[6px]">Tambah</button>
                            <button
                                class="absolute items-center justify-center w-1/3 h-full py-[6px] -right-2 bg-[#FDC55E] text-[#FFF] rounded-[6px] hidden">+</button>
                            <p id="count" class="absolute hidden text-[#FDC55E]">0</p>
                            <button
                                class="absolute items-center justify-center w-1/3 h-full py-[6px] -left-2 bg-[#FDC55E] text-[#FFF] rounded-[6px] hidden">-</button>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        @empty
        @endforelse
    </div>


    {{-- END OF Menu List --}}

    {{-- Modal --}}
    <div id="overlay" class="fixed inset-0 bg-black-400 opacity-50 z-40 hidden"></div>
    <div id="close-modal-btn" class="fixed inset-0 bg-black-400 opacity-50 z-41 hidden"></div>

    <div id="modal" class="fixed transform translate-y-[100%] transition duration-300 bottom-0 z-50 hidden">
        <div id="modal-content"
            class="modal-content flex flex-col items-center bg-white-50 px-5 pt-2 rounded-t-3xl shadow-lg w-[375px] h-[80vh]">
            {{-- RED LINE --}}
            <hr class="bg-red-500 w-5 h-[3px] rounded-full">

            {{-- IMAGE SLIDE --}}
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden rounded-xl min-[300px]:h-[42vh]">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 rounded-xl" data-carousel-item>
                        <img src="https://s3-alpha-sig.figma.com/img/497f/5fba/6facc35de248d660c9a01e05c7e341d3?Expires=1696809600&Signature=gOmhqoF9BQGJLyUJO8I~NP2v5sa7u86sPUic1Tp1gdN~xS1FB5C5MQsz2TyIsoBKoaXA0Cx1UVOtkNCA2TAAx4TbZkWs4XbhYVvDZ5KUxa0sXq~7yQK01Njl21Gk-ZpKoYBcNekQzn9SK-hvtN1raqKkfWlBKAXAeCMqA4KBJG8mVPo1pTvws9cfuBFvQJk2g8FloggFZAAKTLZ8eWBcXh39H4aFaVaBT-pDQhmFYIucei5FsU6Rwoe5W-PgQdbiC2kuRNTceAzadQZv3h4fDK0deUrLM~lVctcBguV82FzpE11IGopWSMmAumEyD3KTXgAP-WcC2YmyMWC-P~Iegw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            class="absolute block w-full rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 rounded-xl" data-carousel-item>
                        <img src="https://s3-alpha-sig.figma.com/img/b8e1/4495/ded37369d4dea9f38515a4aab12060f9?Expires=1696809600&Signature=ai1p8xLm31UHiiE4IhwGRvV9iqyRJX1JyNPDcW45dANKSCiv8kDEYbKPEglEEzds1Modd1ojTZmwo0IiMc7WDsAhhtlBo2s1yhhECqb5CRddpbaPTTp87Xc9htdEEwd5lOqW1KX5OAOisKmdMA1OgMSSj3Y-feKI31uQLoGjNWHRiKJL~jsb2hgt1g7zOhrriHTImpme71E2kOI37LfsSfX7D5MlGz~8XbqcVzT3FDMOooYwGiUcQGnlk4ywjc0XUBW4kUCAAOgz2oKOGXUnCMg79uTGG5TrNzHjStw5xn7geR48-BgBwkObd7R8qZ61-ry4kt9PaQydOqLydPj5Hg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            class="absolute block w-full rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 rounded-xl" data-carousel-item>
                        <img src="https://s3-alpha-sig.figma.com/img/8261/e312/f4e2b2f4e548bc666f15578637a7fc27?Expires=1696809600&Signature=kups9oeK4clUCKGNjuh0IDqW~n5ENUR30GVHVIK87cOZyladS9jgyf0L-x5rGr7FuPJQ~yYasGsdpNDCMPEgPvX-5dDDQc2OPMai~wk-vsgoY4bKEClO4wXWQRSTkVUZTbEs54rgL5hUTzEP3VbvwjhI5UZRv3czyBrQaE9IrbT~iqeZifpCe58tohqgsaxOixYdiOokSYk8q6YmlChGZeeK36EJ70T09KUACG2FWY8hA2InwovEEdwT1aYyZwuYv1322-YXejcRLLjzCgQ7kLbhJtRoEPP~hS69bRzqKFaSF0gM1W2t3u6egMlYEjySQgKxkku6qirzFpB0hqMa4g__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            class="absolute block w-full rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-1 -translate-x-1/2 bottom-0 left-1/2">
                    <button type="button" class="w-2 h-2 rounded-full bg-red-500" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-2 h-2 rounded-full bg-red-500" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-2 h-2 rounded-full bg-red-500" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
            </div>

            {{-- DESCRIPTION --}}
            <div class="flex flex-col my-7 gap-y-2">
                <p class="text-xl font-[600]">Ayam Lalapan</p>
                <p class="text-gray-600 text-sm">Ayam dengan sayuran kangkung ditabur dengan sambal yang merusak tampilan.
                </p>
                <p class="self-end text-xl font-[700]">Rp32.500</p>
            </div>

            {{-- RED BUTTON --}}
            <button class="bg-red-500 text-white-50 rounded-full py-2 w-full text-center"
                style="background-image: url('{{ asset('assets/img/add-desc.png') }}');">Tambah Pesanan</button>
        </div>
    </div>
    {{-- END OF Modal --}}

    {{-- Order Detail --}}

    <div id="order-detail" style="background-image: url('{{ asset('assets/img/order-detail.png') }}');"
        class="fixed transform transition translate-y-[200px] duration-500 justify-between items-center bottom-9 z-40 w-[345px] px-8 py-2 rounded-full place-self-center text-white-50 bg-red-500 hidden">
        <div>
            <p class="inline text-[14px] m-0">1</p>
            <p class="inline text-[14px] m-0">Item</p>
            <p class="text-[18px] font-[700] -mt-1">Total</p>
        </div>
        <div class="flex gap-x-2 text-xl font-[700]">
            <p>Rp32.500</p>
            <img src={{ URL('assets/img/solar_bag-2-bold.png') }}>
        </div>
    </div>

    {{-- END OF Order Detail --}}
@endsection

@section('file-footer')
<script>
    // MODAL LOGIC
    const modal = document.getElementById("modal");
    const modalContent = document.getElementById("modal-content");
    const menulist = document.getElementById("menulist");
    const overlay = document.getElementById("overlay");
    const openModalBtn = document.getElementById("open-modal-btn");
    const closeModalBtn = document.getElementById("close-modal-btn");

function openModal() {
    modal.classList.remove("hidden");
    setTimeout(() => {
        modal.classList.remove("translate-y-[100%]");
        modal.classList.add("translate-y-0")
    }, 100);

    overlay.classList.remove("hidden");
}

    function closeModal() {
        modal.classList.remove("translate-y-0")
        modal.classList.add("translate-y-[100%]");
        setTimeout(() => {
            modal.classList.add("hidden");
            overlay.classList.add("hidden");
        }, 300);
    }

openModalBtn.addEventListener("click", openModal);
closeModalBtn.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

    // BUTTON LOGIC
    const buttons = document.getElementById('buttons').getElementsByTagName("button");
    const count = document.getElementById('count');
    const updateVisibility = () => {
        if (parseInt(count.textContent) < 1) {
            buttons[0].classList.remove('fade-out');
            buttons[0].classList.add('fade-in');
            buttons[0].classList.remove('hidden');
            buttons[1].classList.remove('flex');
            buttons[2].classList.remove('flex');
            buttons[1].classList.add('hidden');
            buttons[2].classList.add('hidden');
            document.getElementById('count').classList.add('hidden');
            document.getElementById('order-detail').classList.add('translate-y-[200px]');
            document.getElementById('order-detail').classList.remove('translate-y-0');
            setTimeout(() => {
                document.getElementById('order-detail').classList.add('hidden');
                document.getElementById('order-detail').classList.remove('flex');
            }, 300);
        } else if (parseInt(count.textContent) > 0) {
            document.getElementById('order-detail').classList.remove('hidden');
            document.getElementById('order-detail').classList.add('flex');
            buttons[0].classList.add('hidden');
            buttons[1].classList.add('flex');
            buttons[2].classList.add('flex');
            buttons[1].classList.remove('hidden');
            buttons[2].classList.remove('hidden');
            document.getElementById('count').classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('order-detail').classList.add('translate-y-0');
                document.getElementById('order-detail').classList.remove('translate-y-[200px]');
            }, 100);

        }
    }

    // WHEN THE "TAMBAH" BUTTON CLICKED
    buttons[0].addEventListener('click', () => {
        buttons[0].classList.add('fade-out');
        ++count.innerText;
        setTimeout(() => {
            updateVisibility();
            buttons[1].classList.add('fade-in');
            buttons[2].classList.add('fade-in');
        }, 500);
    })

    // WHEN THE '+' BUTTON CLICKED
    buttons[1].addEventListener('click', () => {
        ++count.innerText;
    })

    // WHEN THE '-' BUTTON CLICKED
    buttons[2].addEventListener('click', () => {
        --count.innerText;
        setTimeout(() => {
            updateVisibility();
        }, 500);
    })
</script>
@endsection
