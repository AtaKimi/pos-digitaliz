@extends('layouts.tenant')

@section('content')
    {{-- Header --}}
    <x-card class="mb-5">
        <div class="flex items-center">
            <div class="p-5 mr-4 bg-red-50 rounded-xl">
                <!-- Icon di sini -->
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                    <path
                        d="M13.625 2.6875H2.6875L2.6875 33.3125H13.625V2.6875ZM33.3125 2.6875H22.375V13.625H33.3125V2.6875ZM33.3125 22.375V33.3125H22.375V22.375H33.3125ZM0.5 2.6875C0.5 1.47938 1.47938 0.5 2.6875 0.5H13.625C14.8331 0.5 15.8125 1.47938 15.8125 2.6875V33.3125C15.8125 34.5206 14.8331 35.5 13.625 35.5H2.6875C1.47938 35.5 0.5 34.5206 0.5 33.3125V2.6875ZM20.1875 2.6875C20.1875 1.47938 21.1669 0.5 22.375 0.5H33.3125C34.5206 0.5 35.5 1.47938 35.5 2.6875V13.625C35.5 14.8331 34.5206 15.8125 33.3125 15.8125H22.375C21.1669 15.8125 20.1875 14.8331 20.1875 13.625V2.6875ZM22.375 20.1875C21.1669 20.1875 20.1875 21.1669 20.1875 22.375V33.3125C20.1875 34.5206 21.1669 35.5 22.375 35.5H33.3125C34.5206 35.5 35.5 34.5206 35.5 33.3125V22.375C35.5 21.1669 34.5206 20.1875 33.3125 20.1875H22.375Z"
                        fill="#F54748" />
                </svg>
            </div>
            <div>
                <!-- Title di sini -->
                <p class="text-xl font-bold text-gray-900">Product</p>
                <!-- Subtitle di sini -->
                <p class="text-gray-600">Akses mengedit, menambah atau menghapus menu resto kamu</p>
            </div>
        </div>
    </x-card>

    <x-card>
        <x-card.header>
            <x-table.table-title>
                <x-slot:sub_title> Show yours products </x-slot:sub_title>
                <x-slot:title> Products Items </x-slot:title>
            </x-table.table-title>
            <x-card.header>
                <form method="GET">
                    <select id="countries" class="flex items-center gap-2 p-1.5 sm:p-2 lg:px-4 lg:py-3 border rounded-lg"
                        onchange="this.closest('form').submit()" name="category">
                        <option>
                            Category
                        </option>
                        @foreach ($tenant->categories as $category)
                            <option value="{{ $category->id }}" @if (old('category') == strval($category->id)) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </form>
                <x-filter />
                <x-filter.reset-button />
                <x-tenant.button.create route="{{ route('tenant-product-create', $tenant->id) }}">Add
                    Product</x-tenant.button.create>
            </x-card.header>
        </x-card.header>

        <div class="products-container">
            <div class="flex-wrap gap-3 sm:flex">
                @foreach ($products as $product)
                    <x-card class="grow rounded-none border-b odd:border-r">
                        <form action="{{ route('tenant-product-update-status', [$tenant->id, $product->id]) }}"
                            method="POST", id="status-form-{{ $product->id }}" class="flex flex-col gap-5">
                            @csrf
                            @method('PUT')
                            <div class="flex gap-x-6">
                                <img src="https://wiratech.co.id/wp-content/uploads/2019/02/bumbu-sate-madura.jpg"
                                    alt="" class="w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-lg mb-4">
                                <div class="text-gray-500 grow">
                                    <p class="text-base md:text-lg lg:text-xl xl:text-2xl font-bold mb-2">
                                        {{ $product->name }}</p>
                                    <p class="mb-2"> <span class="font-bold">Category : </span>
                                        {{ $product->category->name }}</p>
                                    <p class="text-justify"><span class="font-bold">Description :</span>
                                        {{ $product->description }}</p>
                                </div>
                            </div>

                            <div class="flex flex-row items-center justify-between gap-2 px-5">
                                <a href="{{ route('tenant-product-edit', [$tenant->id, $product->id]) }}"
                                    class="w-full justify-center text-warning-500 border border-yellow-500 hover:bg-warning-800 hover:text-white-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                    <svg width="15" height="14" class="sm:mr-3" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5799 0.128141C11.409 -0.0427136 11.132 -0.0427136 10.9612 0.128141L9.52051 1.56879L12.7642 4.81251L14.2049 3.37186C14.3757 3.201 14.3757 2.924 14.2049 2.75314L11.5799 0.128141Z"
                                            fill="#FDC55E" />
                                        <path
                                            d="M12.1455 5.43122L8.9018 2.18751L3.2143 7.875H3.39551C3.63713 7.875 3.83301 8.07088 3.83301 8.3125V8.75H4.27051C4.51213 8.75 4.70801 8.94588 4.70801 9.1875V9.625H5.14551C5.38713 9.625 5.58301 9.82088 5.58301 10.0625V10.5H6.02051C6.26213 10.5 6.45801 10.6959 6.45801 10.9375V11.1187L12.1455 5.43122Z"
                                            fill="#FDC55E" />
                                        <path
                                            d="M5.61071 11.966C5.5928 11.9183 5.58301 11.8665 5.58301 11.8125V11.375H5.14551C4.90388 11.375 4.70801 11.1791 4.70801 10.9375V10.5H4.27051C4.02888 10.5 3.83301 10.3041 3.83301 10.0625V9.625H3.39551C3.15388 9.625 2.95801 9.42912 2.95801 9.1875V8.75H2.52051C2.46649 8.75 2.41476 8.74021 2.36699 8.72231L2.21116 8.87814C2.16927 8.92004 2.13632 8.97001 2.11431 9.02502L0.364312 13.4C0.299314 13.5625 0.337409 13.7481 0.461161 13.8719C0.584914 13.9956 0.770509 14.0337 0.933004 13.9687L5.308 12.2187C5.36302 12.1967 5.41298 12.1638 5.45488 12.1219L5.61071 11.966Z"
                                            fill="#FDC55E" />
                                    </svg>
                                    <p class="hidden sm:block">Edit</p>
                                </a>
                                <div class="h-8 border"></div>

                                <button type="button" onclick="putProductId({{ $product->id }})"
                                    class="w-full justify-center text-danger-500 border border-red-500 hover:bg-danger-800 hover:text-white-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                                    data-modal-target="modal-delete-category" data-modal-toggle="modal-delete-category">
                                    <svg width="15" height="14" class="sm:mr-3" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.79102 1.3125V2.1875H12.8535C13.0951 2.1875 13.291 2.38338 13.291 2.625C13.291 2.86662 13.0951 3.0625 12.8535 3.0625H12.3824L11.6362 12.3896C11.5635 13.299 10.8042 14 9.89182 14H4.44021C3.52783 14 2.76854 13.299 2.69578 12.3896L1.94962 3.0625H1.47852C1.23689 3.0625 1.04102 2.86662 1.04102 2.625C1.04102 2.38338 1.23689 2.1875 1.47852 2.1875H4.54102V1.3125C4.54102 0.587626 5.12864 0 5.85352 0H8.47852C9.20339 0 9.79102 0.587626 9.79102 1.3125ZM5.41602 1.3125V2.1875H8.91602V1.3125C8.91602 1.07088 8.72014 0.875 8.47852 0.875H5.85352C5.61189 0.875 5.41602 1.07088 5.41602 1.3125ZM4.10351 4.39994L4.54101 11.8374C4.55519 12.0786 4.76223 12.2627 5.00344 12.2485C5.24465 12.2343 5.42868 12.0273 5.41449 11.7861L4.97699 4.34856C4.96281 4.10735 4.75577 3.92331 4.51456 3.9375C4.27335 3.95169 4.08932 4.15873 4.10351 4.39994ZM9.81747 3.93825C9.57626 3.92407 9.36922 4.1081 9.35503 4.34931L8.91753 11.7868C8.90334 12.028 9.08738 12.2351 9.32859 12.2492C9.56979 12.2634 9.77683 12.0794 9.79102 11.8382L10.2285 4.40069C10.2427 4.15948 10.0587 3.95244 9.81747 3.93825ZM7.16602 3.9375C6.92439 3.9375 6.72852 4.13338 6.72852 4.375V11.8125C6.72852 12.0541 6.92439 12.25 7.16602 12.25C7.40764 12.25 7.60352 12.0541 7.60352 11.8125V4.375C7.60352 4.13338 7.40764 3.9375 7.16602 3.9375Z"
                                            fill="#F54748" />
                                    </svg>
                                    <p class="hidden sm:block">Delete</p>
                                </button>

                                <div class="h-8 border"></div>

                                @if ($product->status == 'soldout')
                                    <select id="product-status-input" name="status"
                                        onchange="document.getElementById('status-form-{{ $product->id }}').submit()"
                                        product-id="{{ $product->id }}"
                                        class="border bg-red-200 text-red-700 font-bold border-gray-300 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 w-full">
                                    @elseif($product->status == 'in_stock')
                                        <select id="product-status-input" name="status"
                                            onchange="document.getElementById('status-form-{{ $product->id }}').submit()"
                                            product-id="{{ $product->id }}"
                                            class="border bg-green-200 text-green-700 font-bold border-gray-300 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 w-full">
                                        @elseif($product->status == 'disabled')
                                            <select id="product-status-input" name="status"
                                                onchange="document.getElementById('status-form-{{ $product->id }}').submit()"
                                                product-id="{{ $product->id }}"
                                                class="border bg-gray-200 text-gray-700 font-bold border-gray-300 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 w-full">
                                @endif
                                <option @if ($product->status == 'soldout') selected @endif value="soldout"
                                    class="text-black bg-white-50">Sold Out</option>
                                <option @if ($product->status == 'in_stock') selected @endif value="in_stock"
                                    class="text-black bg-white-50">Publish</option>
                                <option @if ($product->status == 'disabled') selected @endif value="disabled"
                                    class="text-black bg-white-50">Unpublish</option>
                                </select>
                            </div>
                        </form>
                    </x-card>
                @endforeach
            </div>
        </div>

        {{-- MODAL DELETE CATEGORY --}}
        <div id="modal-delete-category" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <form action="{{ route('tenant-product-destroy', $tenant) }}" method="POST">
                    @csrf
                    <div class="flex flex-col gap-10 relative bg-white-50 rounded-xl shadow p-10 w-[500px]">
                        <input type="number" class="hidden" id="deleteInputId" name="product_id">
                        <div class="flex items-center justify-between">
                            <div class=""></div>
                            <p class="text-2xl font-bold">Hapus Produk</p>
                            <p class="text-2xl font-bold cursor-pointer" data-modal-target="modal-delete-category"
                                data-modal-toggle="modal-delete-category">X</p>
                        </div>
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="mx-auto">
                            <rect width="100" height="100" rx="50" fill="#FC5F5F" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M47.5 30C47.0358 30.0002 46.5809 30.1297 46.1862 30.3739C45.7914 30.6181 45.4725 30.9673 45.265 31.3825L43.455 35H35C34.337 35 33.7011 35.2634 33.2322 35.7322C32.7634 36.2011 32.5 36.837 32.5 37.5C32.5 38.163 32.7634 38.7989 33.2322 39.2678C33.7011 39.7366 34.337 40 35 40V65C35 66.3261 35.5268 67.5979 36.4645 68.5355C37.4021 69.4732 38.6739 70 40 70H60C61.3261 70 62.5979 69.4732 63.5355 68.5355C64.4732 67.5979 65 66.3261 65 65V40C65.663 40 66.2989 39.7366 66.7678 39.2678C67.2366 38.7989 67.5 38.163 67.5 37.5C67.5 36.837 67.2366 36.2011 66.7678 35.7322C66.2989 35.2634 65.663 35 65 35H56.545L54.735 31.3825C54.5275 30.9673 54.2086 30.6181 53.8138 30.3739C53.4191 30.1297 52.9642 30.0002 52.5 30H47.5ZM42.5 45C42.5 44.337 42.7634 43.7011 43.2322 43.2322C43.7011 42.7634 44.337 42.5 45 42.5C45.663 42.5 46.2989 42.7634 46.7678 43.2322C47.2366 43.7011 47.5 44.337 47.5 45V60C47.5 60.663 47.2366 61.2989 46.7678 61.7678C46.2989 62.2366 45.663 62.5 45 62.5C44.337 62.5 43.7011 62.2366 43.2322 61.7678C42.7634 61.2989 42.5 60.663 42.5 60V45ZM55 42.5C54.337 42.5 53.7011 42.7634 53.2322 43.2322C52.7634 43.7011 52.5 44.337 52.5 45V60C52.5 60.663 52.7634 61.2989 53.2322 61.7678C53.7011 62.2366 54.337 62.5 55 62.5C55.663 62.5 56.2989 62.2366 56.7678 61.7678C57.2366 61.2989 57.5 60.663 57.5 60V45C57.5 44.337 57.2366 43.7011 56.7678 43.2322C56.2989 42.7634 55.663 42.5 55 42.5Z"
                                fill="white" />
                        </svg>
                        <p class="text-center text-gray-500">Apakah Anda yakin ingin menghapus produk ini?</p>
                        <div class="flex grid-cols-2 gap-3">
                            <button
                                class="w-full py-2 font-bold rounded-lg hover:border-2 hover:border-black-400">Batalkan</button>
                            <button class="w-full py-2 font-bold bg-red-500 rounded-lg text-white-50">Hapus</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-card>
    </div>
@endsection
