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
    </style>
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
            <input type="text" id="simple-search"
                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search" required>
        </div>
        {{-- END OF Search --}}

        {{-- Navbar --}}
        <div class="flex overflow-auto scroll-none w-full">
            <div class="flex gap-x-[8px]">
                <button
                    class="h-fit min-w-fit my-4 text-xs text-red-500 px-[16px] py-[8px] bg-red-100 rounded-full border-red-500 border-[1px]">Semua</button>
                <button
                    class="h-fit min-w-fit my-4 text-xs px-[16px] py-[8px] bg-grey-100 rounded-full border-grey-300 border-[1px]">Makanan</button>
                <button
                    class="h-fit min-w-fit my-4 text-xs px-[16px] py-[8px] bg-grey-100 rounded-full border-grey-300 border-[1px]">Minuman</button>
                <button
                    class="h-fit min-w-fit my-4 text-xs px-[16px] py-[8px] bg-grey-100 rounded-full border-grey-300 border-[1px]">Burger</button>
                <button
                    class="h-fit min-w-fit my-4 text-xs px-[16px] py-[8px] bg-grey-100 rounded-full border-grey-300 border-[1px]">Roti
                    Bakar</button>
                <button
                    class="h-fit min-w-fit my-4 text-xs px-[16px] py-[8px] bg-grey-100 rounded-full border-grey-300 border-[1px]">Ice
                    Cream</button>
            </div>
        </div>
        {{-- END OF Navbar --}}
    </div>
    {{-- END OF Search & Navbar --}}

    {{-- Menu List --}}
    <div class="px-5 pb-5">
        <div class="flex flex-col gap-y-3 mb-3">
            <h3 class="p-3">Makanan</h3>
            <div id="open-modal-btn" class="shadow-card rounded-[12px] flex items-center gap-x-[16px] p-3">
                <img class="min-w-[74px] h-[74px] rounded-[12px]"
                    src="https://s3-alpha-sig.figma.com/img/e418/c50d/fd26836e69d0061a803ad948ef56bc26?Expires=1696809600&Signature=HO0ii2Dpx4EcZrBx6aN52a-dM1V1Qn~IIPYC4eZRBAFQT2yGIEPMte8j~UZxyd2KqZsAihZbqhk7C~5XLoO149TpVzkwiBbwrAYWf1NLCtj2UU1N8n~pMFrnMyPIn201U2CsI5XktAT6IMydZmTwRG9wwCqKIDJK1ppvMlZVbgp2UEyJILXIVJebLPyom8CDNGtyinO7cTVsCYhuLo8Dkl7a~Dc6zrEgczJu~Dfb4kLZFibZtWg2K6cE5ueNjBANvFmR9viqpaewhFo8QNX18NNjZhkaLL884TuHYcKoQ84koPP-VTKQPd1bJ38WNHLBB78gjoGrhZAMh94hpU8V4Q__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt="Makanan" />
                <div class="flex justify-between items-center w-full">
                    <div>
                        <p class="text-[14px] text-[#2E2E2E] font-[500px]">Ayam Lalapan</p>
                        <p class="text-[12px] text-grey-600 mb-[12px]">Nasi, Ayam (dada/paha)</p>
                        <p class="text-yellow-500 font-[700]">Rp. 32.500</p>
                    </div>
                    <button
                        class="w-fit h-fit px-[12px] py-[6px] text-[10px] bg-[#FDC55E] text-[#FFF] rounded-[6px]">Tambah</button>
                </div>
            </div>
            <div class="shadow-card rounded-[12px] flex items-center gap-x-[16px] p-3">
                <img class="min-w-[74px] h-[74px] rounded-[12px]"
                    src="https://s3-alpha-sig.figma.com/img/e939/d8c6/6883fc6fff31886cfad32239a2ba2a9e?Expires=1696809600&Signature=Oj0a~th-jm2mHSj552lGkSSjNOL8DxZQgEaO4afJW~EN9tCTpAjsZ-6ayErzUWZTR9jHhI8InNNhbcvaR3jLGW6dmuHtKHURXDnj0Kv0qlGAywvsPv5h6vIJ5tEtmuYcJ4m~rDEjgGFclUcPl-JMF6etClumT9Qv2rnAh52caG-hSwiNOHYWzX9NQdwb8YoA9P88pNmmOsj6QM8bbuj-CQUOMQm3aKdZs159Fi45Lx~0~nluIWGVqXEA6uY89JvGbC1s~rL~hXM8mEHkCF14b9xlv5O2AdghSnpTQJpZ86yR3oPJbQp6DXZkZpJaNW6YhKJVYmCHPwGrfx83ozNp0w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt="Makanan" />
                <div class="flex justify-between items-center w-full">
                    <div>
                        <p class="text-[14px] text-[#2E2E2E] font-[500px]">Nasi Goreng</p>
                        <p class="text-[12px] text-grey-600 mb-[12px]">Nasi Goyyenggg</p>
                        <p class="text-yellow-500 font-[700]">Rp12.000</p>
                    </div>
                    <button
                        class="w-fit h-fit px-[12px] py-[6px] text-[10px] bg-[#FDC55E] text-[#FFF] rounded-[6px]">Tambah</button>
                </div>
            </div>
            <div class="shadow-card rounded-[12px] flex items-center gap-x-[16px] p-3">
                <img class="min-w-[74px] h-[74px] rounded-[12px]"
                    src="https://s3-alpha-sig.figma.com/img/25d9/70c1/b83b4089756774189916fc1087bfe315?Expires=1696809600&Signature=gUA8~lCA3hXARotxE1t06T9QkjQ2wE5d3Un7mFf3MXTn8Zv2Qla4G0hCOUMb8iAOdv2QlSQqv2EyyAZ-6B2u8dAPuq~gUrjsxnqc74iQRWiHBtZ-VptMuzLxztA2TOD9LwPclsaGBa6G3ruODKo6FVf70c8TVXyNoB3Fk08PnJede6TwroqLGddM~YpPQ-bRp3ofEzGDIyDmJVaFEELrE02Z~mxhIGz8x4aTVLqUJ-Gd8PJGhMjrwKm4NlyRI8tTpH~mlh7slk-xTGsrMbEL30fDhoW7qzUBGh2HsVummOVryADWNPbZZEujiIkvve8WNHp6lJNsvqkYTk53YSrG4A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt="Makanan" />
                <div class="flex justify-between items-center w-full">
                    <div>
                        <p class="text-[14px] text-[#2E2E2E] font-[500px]">Ayam Panggang</p>
                        <p class="text-[12px] text-grey-600 mb-[12px]">Nasi, Ayam (dada/paha)</p>
                        <p class="text-yellow-500 font-[700]">Rp32.500</p>
                    </div>
                    <button
                        class="w-fit h-fit px-[12px] py-[6px] text-[10px] bg-[#FDC55E] text-[#FFF] rounded-[6px]">Tambah</button>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-y-3">
            <h3 class="p-3">Minuman</h3>
            <div class="shadow-card rounded-[12px] flex items-center gap-x-[16px] p-3">
                <img class="min-w-[74px] max-w-[74px] h-[74px] rounded-[12px]"
                    src="https://s3-alpha-sig.figma.com/img/64d0/4b5b/4ffacdbdf2ec6f23ae3f87b3a48c013b?Expires=1696809600&Signature=U2FtbIyJGWmxKuR9KlIs9sm3WEyAHBqebPB0430K-rqlWyhFt-XRKQGhPOUuJOTRoepo-iCxxgPpBLMZN-4rgCkZ7JxVvOvWsv4mYbd226BNX1Ss7Lt~CpxonsJYI87Y-ac2bTDlYDonf66wX6vdcqVuhGYFeW6Yh0GGT3y1Q2b2upK~JDXpzmg5GMzj-tGEaVdTN6Tzi1JPMlIZANtDVwIMiZIX6GJXmCpOpKuNFZUyXTo91NriL8JxEeGxxuM1fcUXuQrb7l1lbZL7tAkQtdN~iWhI3tKU7LVmyhbHsCwxMHTv~vgiB-HTVgh4cEh~bTCt1eT7TdDNogKvGy-6rg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt="Makanan" />
                <div class="flex justify-between items-center w-full">
                    <div>
                        <p class="text-[14px] text-[#2E2E2E] font-[500px]">Es Teh</p>
                        <p class="text-[12px] text-grey-600 mb-[12px]">Teh pakai es dan gula</p>
                        <p class="text-yellow-500 font-[700]">Rp. 6.000</p>
                    </div>
                    <button
                        class="w-fit h-fit px-[12px] py-[6px] text-[10px] bg-[#FDC55E] text-[#FFF] rounded-[6px]">Tambah</button>
                </div>
            </div>
            <div class="shadow-card rounded-[12px] flex items-center gap-x-[16px] p-3">
                <img class="min-w-[74px] max-w-[74px] h-[74px] rounded-[12px]"
                    src="https://s3-alpha-sig.figma.com/img/4d8b/8d72/a46f01b48fc0e569db4a141c6db49283?Expires=1696809600&Signature=fjn~shkAlgKPcWOqs4sWaHcqYWufzV-MDgCMB43D-DeaoHW5kzQ-gQwhZGbTa9N8CFCNzObTct5NhJGEPzeT8XBYzXkZ~wRLbG2TaVg2CMQT7WEEQnoRBHKuTvfnz6P15gw2X0e3oNq4U~Jz~9CWukikGuO8h40cM43Nna~cBu0snpFzUJwUrBDoaXobGLp23oJXy~1xPBxsKXSpWK7DPx5d1tqqnyDQ6R22ohmakJcjDDTDoYzQYC-KgC4oeroTLUsvvhd3opH0iOubW5Alu~Gjz97jdxcfj1yENbgJHmZtjc~VMIG1Jvb9U1cZeZ2zRwmt1~lXPC3Qmb9yLJnBIA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt="Makanan" />
                <div class="flex justify-between items-center w-full">
                    <div>
                        <p class="text-[14px] text-[#2E2E2E] font-[500px]">Es Milo</p>
                        <p class="text-[12px] text-grey-600 mb-[12px]">Masak Aer biar mateng</p>
                        <p class="text-yellow-500 font-[700]">Rp. 6.000</p>
                    </div>
                    <button
                        class="w-fit h-fit px-[12px] py-[6px] text-[10px] bg-[#FDC55E] text-[#FFF] rounded-[6px]">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF Menu List --}}

    {{-- MODAL --}}
    <div id="overlay" class="fixed inset-0 bg-black-400 opacity-50 z-40 hidden"></div>
    <div id="close-modal-btn" class="fixed inset-0 bg-black-400 opacity-50 z-41 hidden"></div>

    <div id="modal" class="fixed bottom-0 justify-center z-50 hidden">
        <div
            class="modal-content flex flex-col items-center bg-white-50 px-5 pt-2 rounded-t-3xl shadow-lg w-[375px] h-[80vh]">
            {{-- RED LINE --}}
            <hr class="bg-red-500 w-5 h-[3px] rounded-full">

            {{-- IMAGE SLIDE --}}
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden rounded-xl min-[350px]:h-[42vh]">
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
                    <button type="button" class="w-2 h-2 rounded-full bg-red-500" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-2 h-2 rounded-full bg-red-500" aria-current="false"
                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-2 h-2 rounded-full bg-red-500" aria-current="false"
                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
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
            <button class="bg-red-500 text-white-50 rounded-full py-2 w-full text-center">Tambah Pesanan</button>
        </div>
    @endsection
