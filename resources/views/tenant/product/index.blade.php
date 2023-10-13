@extends('layouts.tenant')

@section('content')
    {{-- Header --}}
    <div class="pb-4">
        <div class="mb-5 overflow-hidden shadow-lg rounded-2xl bg-white-50">
            <div class="p-4">
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
            </div>
        </div>

        <div class="pt-3 pb-4 bg-white-50 rounded-2xl ms-3">
            <div class="flex items-center justify-between p-8">
                <h4 class="text-lg font-semibold">Product List</h4>
                <div class="flex gap-4">
                    <form>
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-2 py-3 pl-10 text-sm text-gray-900 bg-gray-100 border-none rounded-lg"
                                placeholder="Search" required>
                        </div>
                    </form>
                    <button class="flex items-center gap-2 p-3 border-2 rounded-lg" data-modal-target="modal-add-category"
                        data-modal-toggle="modal-add-category">
                        <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.375 16.9062C9.375 16.4748 9.72478 16.125 10.1562 16.125H14.8438C15.2752 16.125 15.625 16.4748 15.625 16.9062C15.625 17.3377 15.2752 17.6875 14.8438 17.6875H10.1562C9.72478 17.6875 9.375 17.3377 9.375 16.9062Z"
                                fill="#2E2E2E" />
                            <path
                                d="M6.25 12.2188C6.25 11.7873 6.59978 11.4375 7.03125 11.4375H17.9688C18.4002 11.4375 18.75 11.7873 18.75 12.2188C18.75 12.6502 18.4002 13 17.9688 13H7.03125C6.59978 13 6.25 12.6502 6.25 12.2188Z"
                                fill="#2E2E2E" />
                            <path
                                d="M3.125 7.53125C3.125 7.09978 3.47478 6.75 3.90625 6.75H21.0938C21.5252 6.75 21.875 7.09978 21.875 7.53125C21.875 7.96272 21.5252 8.3125 21.0938 8.3125H3.90625C3.47478 8.3125 3.125 7.96272 3.125 7.53125Z"
                                fill="#2E2E2E" />
                        </svg>
                        <p class="text-sm font-semibold">All (4)</p>
                    </button>
                    <a href="{{ route('tenant-product-create', $tenant) }}"
                        class="flex items-center gap-2 p-3 bg-red-500 rounded-lg" data-modal-target="modal-add-category"
                        data-modal-toggle="modal-add-category">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.5V13.5M13.5 9H4.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="text-sm font-semibold text-white-50">Add Product</p>
                    </a>
                </div>
            </div>

            {{-- card 1 --}}
            <div class="flex-wrap gap-3 px-4 sm:flex">
                @foreach ($products as $product)
                    <div class="flex grow flex-col bg-white-50 flex-wrap rounded-lg w-[550px] border-2">
                        <div class="flex p-6 gap-x-6 ">
                            <img src="https://wiratech.co.id/wp-content/uploads/2019/02/bumbu-sate-madura.jpg"
                                alt="" class="w-[130px] h-[130px] rounded-lg">
                            <div class="text-gray-500 grow">
                                <div class="flex justify-between mb-2">
                                    <p class="text-2xl font-bold text-black">{{ $product->name }}</p>
                                    @if ($product->status == 'soldout')
                                        <select id="product-status-input" name="product_status"
                                            product-id="{{ $product->id }}"
                                            class="border bg-green-200 text-green-700 font-bold border-gray-300 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5">
                                        @elseif($product->status == 'in_stock')
                                            <select id="product-status-input" name="product_status"
                                                product-id="{{ $product->id }}"
                                                class="border bg-green-200 text-green-700 font-bold border-gray-300 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5">
                                            @else
                                                <select id="product-status-input" name="product_status"
                                                    product-id="{{ $product->id }}"
                                                    class="border bg-gray-200 text-gray-700 font-bold border-gray-300 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5">
                                    @endif
                                    <option @if ($product->status == 'soldout') selected @endif value="soldout"
                                        class="text-black bg-white-50">Sold Out</option>
                                    <option @if ($product->status == 'in_stock') selected @endif value="in_stock"
                                        class="text-black bg-white-50">Publish</option>
                                    <option @if ($product->status == 'disabled') selected @endif value="disabled"
                                        class="text-black bg-white-50">Unpublish</option>
                                    </select>
                                </div>
                                <p class="mb-2"> <span class="text-base font-bold">Category : </span>
                                    {{ $product->category->name }}</p>
                                <p class="text-justify"><span class="text-base font-bold">Description :</span>
                                    {{ $product->description }}</p>
                            </div>
                        </div>
                        <div class="flex justify-center mb-2">
                            <svg width="445" height="2" viewBox="0 0 445 2" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H444" stroke="#F1F1F1" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>

                        <div class="flex flex-row justify-between px-5 pb-5">
                            <a href="{{ route('tenant-product-edit', [$tenant->id, $product->id]) }}"
                                class="w-full justify-center text-warning-500 hover:bg-warning-800 hover:text-white-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2">
                                <svg width="15" height="14" class="me-3" viewBox="0 0 15 14" fill="none"
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
                                Edit
                            </a>
                            <svg width="3" height="30" viewBox="0 0 3 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 1V29" stroke="#F1F1F1" stroke-width="100" stroke-linecap="round" />
                            </svg>
                            <button type="button" onclick="putProductId({{ $product->id }})"
                                class="w-full justify-center text-danger-500 hover:bg-danger-800 hover:text-white-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                                data-modal-target="modal-delete-category" data-modal-toggle="modal-delete-category">
                                <svg width="15" height="14" class="me-3" viewBox="0 0 15 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.79102 1.3125V2.1875H12.8535C13.0951 2.1875 13.291 2.38338 13.291 2.625C13.291 2.86662 13.0951 3.0625 12.8535 3.0625H12.3824L11.6362 12.3896C11.5635 13.299 10.8042 14 9.89182 14H4.44021C3.52783 14 2.76854 13.299 2.69578 12.3896L1.94962 3.0625H1.47852C1.23689 3.0625 1.04102 2.86662 1.04102 2.625C1.04102 2.38338 1.23689 2.1875 1.47852 2.1875H4.54102V1.3125C4.54102 0.587626 5.12864 0 5.85352 0H8.47852C9.20339 0 9.79102 0.587626 9.79102 1.3125ZM5.41602 1.3125V2.1875H8.91602V1.3125C8.91602 1.07088 8.72014 0.875 8.47852 0.875H5.85352C5.61189 0.875 5.41602 1.07088 5.41602 1.3125ZM4.10351 4.39994L4.54101 11.8374C4.55519 12.0786 4.76223 12.2627 5.00344 12.2485C5.24465 12.2343 5.42868 12.0273 5.41449 11.7861L4.97699 4.34856C4.96281 4.10735 4.75577 3.92331 4.51456 3.9375C4.27335 3.95169 4.08932 4.15873 4.10351 4.39994ZM9.81747 3.93825C9.57626 3.92407 9.36922 4.1081 9.35503 4.34931L8.91753 11.7868C8.90334 12.028 9.08738 12.2351 9.32859 12.2492C9.56979 12.2634 9.77683 12.0794 9.79102 11.8382L10.2285 4.40069C10.2427 4.15948 10.0587 3.95244 9.81747 3.93825ZM7.16602 3.9375C6.92439 3.9375 6.72852 4.13338 6.72852 4.375V11.8125C6.72852 12.0541 6.92439 12.25 7.16602 12.25C7.40764 12.25 7.60352 12.0541 7.60352 11.8125V4.375C7.60352 4.13338 7.40764 3.9375 7.16602 3.9375Z"
                                        fill="#F54748" />
                                </svg>
                                Delete
                            </button>
                        </div>
                    </div>
                @endforeach
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
        </div>
    </div>
@endsection

@section('script')
    <script defer>
        const productIdInput = document.getElementById('deleteInputId');
        const token = '{{ session('token') }}'
        const productStatusInputs = document.querySelectorAll('#product-status-input')

        function putProductId(id) {
            productIdInput.setAttribute('value', id)
        }

        async function updateStatusProduct(status, product_id, bearerToken) {
            const response = await fetch(`http://127.0.0.1:8000/api/product/${product_id}/status`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${bearerToken}`,
                },
                body: JSON.stringify({
                    status,
                }),
            });

            if (response.status === 200) {
                return true
            } else {
                return false
            }
        }

        productStatusInputs.forEach(productStatusInput => {
            productStatusInput.addEventListener('change', async function() {
                if (updateStatusProduct(productStatusInput.value, productStatusInput.getAttribute(
                        'product-id'), token)) {
                    console.log('success');
                    alert('success');
                } else {
                    console.log('failed');
                }
            });
        });
    </script>
@endsection
