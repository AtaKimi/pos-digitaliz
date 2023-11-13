@extends('layouts.tenant')

@section('content')
    {{-- Header --}}
    <x-card class="mb-5">
        <div class="flex items-center">
            <div class="p-5 mr-4 bg-red-50 rounded-xl">
                <!-- Icon di sini -->
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="12" viewBox="0 0 36 12" fill="none">
                    <path
                        d="M0.5 3.78125C0.5 1.96907 1.96907 0.5 3.78125 0.5H32.2188C34.0309 0.5 35.5 1.96907 35.5 3.78125V8.15625C35.5 9.96843 34.0309 11.4375 32.2188 11.4375H3.78125C1.96907 11.4375 0.5 9.96843 0.5 8.15625V3.78125ZM3.78125 2.6875C3.17719 2.6875 2.6875 3.17719 2.6875 3.78125V8.15625C2.6875 8.76031 3.17719 9.25 3.78125 9.25H32.2188C32.8228 9.25 33.3125 8.76031 33.3125 8.15625V3.78125C33.3125 3.17719 32.8228 2.6875 32.2188 2.6875H3.78125Z"
                        fill="#F54748" />
                    <path
                        d="M4.875 5.96875C4.875 5.36469 5.36469 4.875 5.96875 4.875H12.5312C13.1353 4.875 13.625 5.36469 13.625 5.96875C13.625 6.57281 13.1353 7.0625 12.5312 7.0625H5.96875C5.36469 7.0625 4.875 6.57281 4.875 5.96875Z"
                        fill="#F54748" />
                    <path
                        d="M28.5508 6.6758L27.6836 5.80857C27.3391 5.46406 27.5831 4.875 28.0703 4.875H29.8047C30.2919 4.875 30.5359 5.46406 30.1914 5.80857L29.3242 6.6758C29.1106 6.88937 28.7644 6.88937 28.5508 6.6758Z"
                        fill="#F54748" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="21" viewBox="0 0 36 21" fill="none">
                    <path
                        d="M0.5 5C0.5 2.58375 2.45875 0.625 4.875 0.625H31.125C33.5412 0.625 35.5 2.58375 35.5 5V15.9375C35.5 18.3537 33.5412 20.3125 31.125 20.3125H4.875C2.45876 20.3125 0.5 18.3537 0.5 15.9375V5ZM2.6875 11.5625V15.9375C2.6875 17.1456 3.66688 18.125 4.875 18.125H31.125C32.3331 18.125 33.3125 17.1456 33.3125 15.9375V11.5625H2.6875ZM33.3125 9.375V5C33.3125 3.79188 32.3331 2.8125 31.125 2.8125H4.875C3.66688 2.8125 2.6875 3.79188 2.6875 5V9.375H33.3125ZM4.875 6.09375C4.875 5.48969 5.36469 5 5.96875 5H25.6562C26.2603 5 26.75 5.48969 26.75 6.09375C26.75 6.69781 26.2603 7.1875 25.6562 7.1875H5.96875C5.36469 7.1875 4.875 6.69781 4.875 6.09375ZM4.875 14.8438C4.875 14.2397 5.36469 13.75 5.96875 13.75H19.0938C19.6978 13.75 20.1875 14.2397 20.1875 14.8438C20.1875 15.4478 19.6978 15.9375 19.0938 15.9375H5.96875C5.36469 15.9375 4.875 15.4478 4.875 14.8438Z"
                        fill="#F54748" />
                </svg>
            </div>
            <div>
                <!-- Title di sini -->
                <p class="text-xl font-bold text-gray-900">Desk</p>
                <!-- Subtitle di sini -->
                <p class="text-gray-600">Akses mengedit, menambah atau menghapus nomor meja resto kamu</p>
            </div>
        </div>
    </x-card>

    <div x-data="{ desk_id: '', desk_name: '' }">
        <x-card>
            <x-card.header>
                <x-table.table-title>
                    <x-slot:sub_title> Show yours desks </x-slot:sub_title>
                    <x-slot:title> Desks Items </x-slot:title>
                </x-table.table-title>
                <div class="flex gap-2 items-center">
                    <x-filter />
                    <x-tenant.button.create modal_id="modal-create-desk">Add desk</x-tenant.button.create>
                </div>
            </x-card.header>

            <x-table>
                <x-slot:header>
                    <x-table.th>
                        No
                    </x-table.th>
                    <x-table.th>
                        Nama Meja
                    </x-table.th>
                    <x-table.th>
                        Qr Code Link
                    </x-table.th>
                    <x-table.th>
                        Action
                    </x-table.th>
                </x-slot:header>

                @forelse ($desk as $item)
                    <tr class="bg-white border-b">
                        <x-table.th>
                            {{ ($desk->currentPage() - 1) * $desk->perPage() + $loop->index + 1 }}
                        </x-table.th>
                        <x-table.td class="text-start">
                            {{ $item->name }}
                        </x-table.td>
                        <x-table.td class="text-start">
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(256)->generate($item->url)) !!} ">
                        </x-table.td>
                        <x-table.td>
                            <div class="flex items-center gap-2">
                                <button data-modal-target="modal-edit-desk" data-modal-toggle="modal-edit-desk"
                                    @click="desk_id = {{ $item->id }}; desk_name = '{{ $item->name }}'">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 border-2 border-yellow-500 rounded-lg">
                                        <path
                                            d="M14.1465 2.35104C14.3417 2.15577 14.6583 2.15577 14.8536 2.35104L17.8536 5.35104C18.0488 5.5463 18.0488 5.86288 17.8536 6.05814L7.85357 16.0581C7.80569 16.106 7.74858 16.1437 7.68571 16.1688L2.68571 18.1688C2.5 18.2431 2.28789 18.1996 2.14646 18.0581C2.00503 17.9167 1.96149 17.7046 2.03578 17.5189L4.03578 12.5189C4.06092 12.456 4.09858 12.3989 4.14646 12.351L14.1465 2.35104ZM13.2071 4.70459L15.5 6.99748L16.7929 5.70459L14.5 3.4117L13.2071 4.70459ZM14.7929 7.70459L12.5 5.4117L6.00001 11.9117V12.2046H6.50001C6.77616 12.2046 7.00001 12.4284 7.00001 12.7046V13.2046H7.50001C7.77616 13.2046 8.00001 13.4284 8.00001 13.7046V14.2046H8.29291L14.7929 7.70459ZM5.03167 12.88L4.92614 12.9856L3.39754 16.8071L7.21903 15.2785L7.32456 15.1729C7.13496 15.1019 7.00001 14.919 7.00001 14.7046V14.2046H6.50001C6.22387 14.2046 6.00001 13.9807 6.00001 13.7046V13.2046H5.50001C5.28561 13.2046 5.10272 13.0696 5.03167 12.88Z"
                                            fill="#FDC55E" />
                                    </svg>
                                </button>
                                <button data-modal-target="modal-delete-desk" data-modal-toggle="modal-delete-desk"
                                    @click="desk_id = {{ $item->id }}">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 border-2 border-red-500 rounded-lg">
                                        <path
                                            d="M7.44434 1.69971H10.4443C10.7205 1.69971 10.9443 1.92356 10.9443 2.19971V3.19971H6.94434V2.19971C6.94434 1.92356 7.16819 1.69971 7.44434 1.69971ZM11.9443 3.19971V2.19971C11.9443 1.37128 11.2728 0.699707 10.4443 0.699707H7.44434C6.61591 0.699707 5.94434 1.37128 5.94434 2.19971V3.19971H3.44999C3.44659 3.19967 3.44319 3.19967 3.43978 3.19971H2.44434C2.16819 3.19971 1.94434 3.42356 1.94434 3.69971C1.94434 3.97585 2.16819 4.19971 2.44434 4.19971H2.98274L3.8355 14.8592C3.91865 15.8986 4.78641 16.6997 5.82913 16.6997H12.0595C13.1023 16.6997 13.97 15.8986 14.0532 14.8592L14.9059 4.19971H15.4443C15.7205 4.19971 15.9443 3.97585 15.9443 3.69971C15.9443 3.42356 15.7205 3.19971 15.4443 3.19971H14.4489C14.4455 3.19967 14.4421 3.19967 14.4387 3.19971H11.9443ZM13.9027 4.19971L13.0564 14.7795C13.0148 15.2992 12.5809 15.6997 12.0595 15.6997H5.82913C5.30777 15.6997 4.87389 15.2992 4.83231 14.7795L3.98593 4.19971H13.9027ZM6.41498 5.20057C6.69064 5.18435 6.92726 5.39468 6.94347 5.67035L7.44347 14.1703C7.45969 14.446 7.24936 14.6826 6.9737 14.6988C6.69803 14.7151 6.46141 14.5047 6.4452 14.2291L5.9452 5.72907C5.92898 5.4534 6.13931 5.21679 6.41498 5.20057ZM11.4737 5.20057C11.7494 5.21679 11.9597 5.4534 11.9435 5.72907L11.4435 14.2291C11.4273 14.5047 11.1906 14.7151 10.915 14.6988C10.6393 14.6826 10.429 14.446 10.4452 14.1703L10.9452 5.67035C10.9614 5.39468 11.198 5.18435 11.4737 5.20057ZM8.94434 5.19971C9.22048 5.19971 9.44434 5.42356 9.44434 5.69971V14.1997C9.44434 14.4759 9.22048 14.6997 8.94434 14.6997C8.66819 14.6997 8.44434 14.4759 8.44434 14.1997V5.69971C8.44434 5.42356 8.66819 5.19971 8.94434 5.19971Z"
                                            fill="#FF8081" />
                                    </svg>
                                </button>
                            </div>
                        </x-table.td>
                    </tr>
                @empty
                    <tr>
                        <p>Tidak Ada Tabel</p>
                    </tr>
                @endforelse
            </x-table>
            <p x-text="desk_name"></p>
            {{ $desk->onEachSide(1)->links('pagination.tenant') }}
        </x-card>

        <form method="POST" action="{{ route('tenant-desk-update', [$tenant->id]) }}" class="flex flex-col gap-4">
            <x-modal id="modal-edit-desk">
                <x-slot:title>Edit Meja</x-slot:title>
                @csrf
                @method('PUT')
                <input type="number" class="hidden" name="id" x-bind:value="desk_id">
                <div class="flex flex-col">
                    <label for="text" class="block mb-2 text-sm font-medium">
                        Nama Meja</label>
                    <input type="text" id="text" name="name" x-bind:value="desk_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                        placeholder="Nama Meja" required>
                </div>
            </x-modal>
        </form>

        <form method="POST" action="{{ route('tenant-desk-store', $tenant) }}">
            <x-modal id="modal-create-desk">
                <x-slot:title>Tambah Meja</x-slot:title>
                @csrf
                <div class="flex flex-col">
                    <label for="text" class="block mb-2 text-sm font-medium">
                        Nama Meja</label>
                    <input type="text" id="text" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                        placeholder="Nama Meja" required>
                </div>
            </x-modal>
        </form>

        <form action="{{ route('tenant-desk-destroy', [$tenant->id]) }}" method="POST" class="flex flex-col gap-4">
            <x-modal id="modal-delete-desk">
                <x-slot:title>Hapus Meja</x-slot:title>
                @csrf
                @method('DELETE')
                <input type="number" class="hidden" x-bind:value="desk_id" name="id">
                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto">
                    <rect width="100" height="100" rx="50" fill="#FC5F5F" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M47.5 30C47.0358 30.0002 46.5809 30.1297 46.1862 30.3739C45.7914 30.6181 45.4725 30.9673 45.265 31.3825L43.455 35H35C34.337 35 33.7011 35.2634 33.2322 35.7322C32.7634 36.2011 32.5 36.837 32.5 37.5C32.5 38.163 32.7634 38.7989 33.2322 39.2678C33.7011 39.7366 34.337 40 35 40V65C35 66.3261 35.5268 67.5979 36.4645 68.5355C37.4021 69.4732 38.6739 70 40 70H60C61.3261 70 62.5979 69.4732 63.5355 68.5355C64.4732 67.5979 65 66.3261 65 65V40C65.663 40 66.2989 39.7366 66.7678 39.2678C67.2366 38.7989 67.5 38.163 67.5 37.5C67.5 36.837 67.2366 36.2011 66.7678 35.7322C66.2989 35.2634 65.663 35 65 35H56.545L54.735 31.3825C54.5275 30.9673 54.2086 30.6181 53.8138 30.3739C53.4191 30.1297 52.9642 30.0002 52.5 30H47.5ZM42.5 45C42.5 44.337 42.7634 43.7011 43.2322 43.2322C43.7011 42.7634 44.337 42.5 45 42.5C45.663 42.5 46.2989 42.7634 46.7678 43.2322C47.2366 43.7011 47.5 44.337 47.5 45V60C47.5 60.663 47.2366 61.2989 46.7678 61.7678C46.2989 62.2366 45.663 62.5 45 62.5C44.337 62.5 43.7011 62.2366 43.2322 61.7678C42.7634 61.2989 42.5 60.663 42.5 60V45ZM55 42.5C54.337 42.5 53.7011 42.7634 53.2322 43.2322C52.7634 43.7011 52.5 44.337 52.5 45V60C52.5 60.663 52.7634 61.2989 53.2322 61.7678C53.7011 62.2366 54.337 62.5 55 62.5C55.663 62.5 56.2989 62.2366 56.7678 61.7678C57.2366 61.2989 57.5 60.663 57.5 60V45C57.5 44.337 57.2366 43.7011 56.7678 43.2322C56.2989 42.7634 55.663 42.5 55 42.5Z"
                        fill="white" />
                </svg>
                <p class="text-center text-gray-500">Apakah Anda yakin ingin menghapus meja ini?</p>
            </x-modal>
        </form>
    </div>
@endsection
