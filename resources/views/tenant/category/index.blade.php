@extends('layouts.tenant')

@section('content')
    {{-- Header --}}
    <x-card class="mb-5">
        <div class="flex items-center">
            <div class="p-5 mr-4 bg-red-50 rounded-xl">
                <!-- Icon di sini -->
                <svg width="36" height="36" viewBox="0 0 36 36" class="fill-red-500" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.3811 9.51678C13.3811 11.651 11.651 13.3811 9.51678 13.3811C7.38256 13.3811 5.65244 11.651 5.65244 9.51678C5.65244 7.38256 7.38256 5.65244 9.51678 5.65244C11.651 5.65244 13.3811 7.38256 13.3811 9.51678ZM10.8049 9.51678C10.8049 8.80537 10.2282 8.22867 9.51678 8.22867C8.80537 8.22867 8.22867 8.80537 8.22867 9.51678C8.22867 10.2282 8.80537 10.8049 9.51678 10.8049C10.2282 10.8049 10.8049 10.2282 10.8049 9.51678Z" />
                    <path
                        d="M3.07622 0.5H14.8902C15.5735 0.5 16.2288 0.771423 16.7119 1.25456L34.7454 19.2881C35.7515 20.2942 35.7515 21.9254 34.7454 22.9314L22.9314 34.7454C21.9254 35.7515 20.2942 35.7515 19.2881 34.7454L1.25456 16.7119C0.771421 16.2288 0.5 15.5735 0.5 14.8902V3.07622C0.5 1.65341 1.65341 0.5 3.07622 0.5ZM3.07622 14.8902L21.1098 32.9238L32.9238 21.1098L14.8902 3.07622L3.07622 3.07622L3.07622 14.8902Z" />
                </svg>

            </div>
            <div>
                <!-- Title di sini -->
                <p class="text-xl font-bold text-gray-900">Category</p>
                <!-- Subtitle di sini -->
                <p class="text-gray-600">Akses mengedit, menambah atau menghapus kategori resto kamu</p>
            </div>
        </div>
    </x-card>

    <x-card class="mb-5">
        <div class="flex items-center justify-between">
            <x-table.table-title>
                <x-slot:sub_title> Show yours categories </x-slot:sub_title>
                <x-slot:title> Categories Items </x-slot:title>
            </x-table.table-title>
            <div class="flex gap-4">
                <x-filter />
                <button class="flex items-center gap-2 p-3 bg-red-500 rounded-lg" data-modal-target="modal-add-category"
                    data-modal-toggle="modal-add-category">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 4.5V13.5M13.5 9H4.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="text-sm font-semibold text-white-50">Kategori Baru</p>
                </button>
            </div>
        </div>

        <x-table>
            <x-slot:header>
                <th scope="col" class="px-6 py-3 text-start">
                    No
                </th>
                <th scope="col" class="px-6 py-3 text-start">
                    Nama Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </x-slot:header>

            @foreach ($categories as $category)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 text-start">
                        {{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->index + 1 }}
                    </th>
                    <td class="px-6 py-4 text-start">
                        {{ $category->name }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center gap-2">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-10 h-10 p-2 border-2 border-yellow-500 rounded-lg"
                                data-modal-target="modal-edit-category-{{ $category->id }}"
                                data-modal-toggle="modal-edit-category-{{ $category->id }}">
                                <path
                                    d="M14.1465 2.35104C14.3417 2.15577 14.6583 2.15577 14.8536 2.35104L17.8536 5.35104C18.0488 5.5463 18.0488 5.86288 17.8536 6.05814L7.85357 16.0581C7.80569 16.106 7.74858 16.1437 7.68571 16.1688L2.68571 18.1688C2.5 18.2431 2.28789 18.1996 2.14646 18.0581C2.00503 17.9167 1.96149 17.7046 2.03578 17.5189L4.03578 12.5189C4.06092 12.456 4.09858 12.3989 4.14646 12.351L14.1465 2.35104ZM13.2071 4.70459L15.5 6.99748L16.7929 5.70459L14.5 3.4117L13.2071 4.70459ZM14.7929 7.70459L12.5 5.4117L6.00001 11.9117V12.2046H6.50001C6.77616 12.2046 7.00001 12.4284 7.00001 12.7046V13.2046H7.50001C7.77616 13.2046 8.00001 13.4284 8.00001 13.7046V14.2046H8.29291L14.7929 7.70459ZM5.03167 12.88L4.92614 12.9856L3.39754 16.8071L7.21903 15.2785L7.32456 15.1729C7.13496 15.1019 7.00001 14.919 7.00001 14.7046V14.2046H6.50001C6.22387 14.2046 6.00001 13.9807 6.00001 13.7046V13.2046H5.50001C5.28561 13.2046 5.10272 13.0696 5.03167 12.88Z"
                                    fill="#FDC55E" />
                            </svg>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 p-2 border-2 border-red-500 rounded-lg"
                                data-modal-target="modal-delete-category-{{ $category->id }}"
                                data-modal-toggle="modal-delete-category-{{ $category->id }}">
                                <path
                                    d="M7.44434 1.69971H10.4443C10.7205 1.69971 10.9443 1.92356 10.9443 2.19971V3.19971H6.94434V2.19971C6.94434 1.92356 7.16819 1.69971 7.44434 1.69971ZM11.9443 3.19971V2.19971C11.9443 1.37128 11.2728 0.699707 10.4443 0.699707H7.44434C6.61591 0.699707 5.94434 1.37128 5.94434 2.19971V3.19971H3.44999C3.44659 3.19967 3.44319 3.19967 3.43978 3.19971H2.44434C2.16819 3.19971 1.94434 3.42356 1.94434 3.69971C1.94434 3.97585 2.16819 4.19971 2.44434 4.19971H2.98274L3.8355 14.8592C3.91865 15.8986 4.78641 16.6997 5.82913 16.6997H12.0595C13.1023 16.6997 13.97 15.8986 14.0532 14.8592L14.9059 4.19971H15.4443C15.7205 4.19971 15.9443 3.97585 15.9443 3.69971C15.9443 3.42356 15.7205 3.19971 15.4443 3.19971H14.4489C14.4455 3.19967 14.4421 3.19967 14.4387 3.19971H11.9443ZM13.9027 4.19971L13.0564 14.7795C13.0148 15.2992 12.5809 15.6997 12.0595 15.6997H5.82913C5.30777 15.6997 4.87389 15.2992 4.83231 14.7795L3.98593 4.19971H13.9027ZM6.41498 5.20057C6.69064 5.18435 6.92726 5.39468 6.94347 5.67035L7.44347 14.1703C7.45969 14.446 7.24936 14.6826 6.9737 14.6988C6.69803 14.7151 6.46141 14.5047 6.4452 14.2291L5.9452 5.72907C5.92898 5.4534 6.13931 5.21679 6.41498 5.20057ZM11.4737 5.20057C11.7494 5.21679 11.9597 5.4534 11.9435 5.72907L11.4435 14.2291C11.4273 14.5047 11.1906 14.7151 10.915 14.6988C10.6393 14.6826 10.429 14.446 10.4452 14.1703L10.9452 5.67035C10.9614 5.39468 11.198 5.18435 11.4737 5.20057ZM8.94434 5.19971C9.22048 5.19971 9.44434 5.42356 9.44434 5.69971V14.1997C9.44434 14.4759 9.22048 14.6997 8.94434 14.6997C8.66819 14.6997 8.44434 14.4759 8.44434 14.1997V5.69971C8.44434 5.42356 8.66819 5.19971 8.94434 5.19971Z"
                                    fill="#FF8081" />
                            </svg>
                        </div>
                    </td>
                </tr>

                {{-- MODAL EDIT CATEGORY --}}

                <div id="modal-edit-category-{{ $category->id }}" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="flex flex-col gap-10 relative bg-white-50 rounded-xl shadow p-10 w-[500px]">
                            <div class="flex items-center justify-between">
                                <div class=""></div>
                                <p class="text-2xl font-bold">Edit Kategori</p>
                                <p class="text-2xl font-bold cursor-pointer"
                                    data-modal-hide="modal-edit-category-{{ $category->id }}">X</p>
                            </div>
                            <form action="{{ route('tenant-category-edit', [$tenant->id, $category->id]) }}" method="POST">
                                @csrf
                                <div class="flex flex-col">
                                    <label for="text" class="block mb-2 text-sm font-medium">
                                        Nama Kategori</label>
                                    <input type="text" id="text" name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                        placeholder="Nama Kategori" required value="{{ $category->name }}">
                                </div>
                                <div class="flex grid-cols-2 gap-3">
                                    <button class="w-full py-2 font-bold rounded-lg hover:border-2 hover:border-black-400"
                                        type="button"
                                        data-modal-hide="modal-edit-category-{{ $category->id }}">Batalkan</button>
                                    <button class="w-full py-2 font-bold bg-red-600 rounded-lg text-white-50"
                                        type="submit">Konfirmasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- MODAL DELETE CATEGORY --}}

                <div id="modal-delete-category-{{ $category->id }}" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <form action="{{ route('tenant-category-destroy', [$tenant->id, $category->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <div class="flex flex-col gap-10 relative bg-white-50 rounded-xl shadow p-10 w-[500px]">
                                <div class="flex items-center justify-between">
                                    <p class="text-2xl font-bold">Hapus Kategori</p>
                                    <p class="text-2xl font-bold cursor-pointer"
                                        data-modal-hide="modal-delete-category-{{ $category->id }}">X</p>
                                </div>
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="mx-auto">
                                    <rect width="100" height="100" rx="50" fill="#FC5F5F" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M47.5 30C47.0358 30.0002 46.5809 30.1297 46.1862 30.3739C45.7914 30.6181 45.4725 30.9673 45.265 31.3825L43.455 35H35C34.337 35 33.7011 35.2634 33.2322 35.7322C32.7634 36.2011 32.5 36.837 32.5 37.5C32.5 38.163 32.7634 38.7989 33.2322 39.2678C33.7011 39.7366 34.337 40 35 40V65C35 66.3261 35.5268 67.5979 36.4645 68.5355C37.4021 69.4732 38.6739 70 40 70H60C61.3261 70 62.5979 69.4732 63.5355 68.5355C64.4732 67.5979 65 66.3261 65 65V40C65.663 40 66.2989 39.7366 66.7678 39.2678C67.2366 38.7989 67.5 38.163 67.5 37.5C67.5 36.837 67.2366 36.2011 66.7678 35.7322C66.2989 35.2634 65.663 35 65 35H56.545L54.735 31.3825C54.5275 30.9673 54.2086 30.6181 53.8138 30.3739C53.4191 30.1297 52.9642 30.0002 52.5 30H47.5ZM42.5 45C42.5 44.337 42.7634 43.7011 43.2322 43.2322C43.7011 42.7634 44.337 42.5 45 42.5C45.663 42.5 46.2989 42.7634 46.7678 43.2322C47.2366 43.7011 47.5 44.337 47.5 45V60C47.5 60.663 47.2366 61.2989 46.7678 61.7678C46.2989 62.2366 45.663 62.5 45 62.5C44.337 62.5 43.7011 62.2366 43.2322 61.7678C42.7634 61.2989 42.5 60.663 42.5 60V45ZM55 42.5C54.337 42.5 53.7011 42.7634 53.2322 43.2322C52.7634 43.7011 52.5 44.337 52.5 45V60C52.5 60.663 52.7634 61.2989 53.2322 61.7678C53.7011 62.2366 54.337 62.5 55 62.5C55.663 62.5 56.2989 62.2366 56.7678 61.7678C57.2366 61.2989 57.5 60.663 57.5 60V45C57.5 44.337 57.2366 43.7011 56.7678 43.2322C56.2989 42.7634 55.663 42.5 55 42.5Z"
                                        fill="white" />
                                </svg>
                                <p class="text-center text-gray-500">Apakah Anda yakin ingin menghapus kategori
                                    ini?</p>
                                <div class="flex grid-cols-2 gap-3">
                                    <button class="w-full py-2 font-bold rounded-lg hover:border-2 hover:border-black-400"
                                        data-modal-hide="modal-delete-category-{{ $category->id }}">Batalkan</button>
                                    <button class="w-full py-2 font-bold bg-red-500 rounded-lg text-white-50"
                                        type="submit">Hapus</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </x-table>

        {{ $categories->links('vendor.pagination.tenant') }}
    </x-card>

    {{-- MODAL ADD CATEGORY --}}

    <div id="modal-add-category" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="flex flex-col gap-10 relative bg-white-50 rounded-xl shadow p-10 w-[500px]">
                <div class="flex items-center justify-between">

                    <p class="text-2xl font-bold">Tambah Kategori</p>
                    <p class="text-2xl font-bold cursor-pointer" data-modal-target="modal-add-category"
                        data-modal-hide="modal-add-category">X</p>
                </div>
                <form action="{{ route('tenant-category-store', $tenant) }}" method="POST">
                    @csrf
                    <div class="flex flex-col pb-4">
                        <label for="text" class="block mb-2 text-sm font-medium">
                            Nama Kategori</label>
                        <input type="text" id="text" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Nama Kategori" required>
                    </div>

                    <div class="flex grid-cols-2 gap-3">
                        <button type="reset"
                            class="w-full py-2 font-bold rounded-lg hover:border-2 hover:border-black-400"
                            data-modal-target="modal-add-category" data-modal-hide="modal-add-category">Batalkan</button>
                        <button type="submit"
                            class="w-full py-2 font-bold bg-red-500 rounded-lg text-white-50">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
