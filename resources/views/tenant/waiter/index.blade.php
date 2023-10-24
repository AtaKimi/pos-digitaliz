@extends('layouts.tenant')

@section('content')
    <x-card class="mb-5">
        <div class="flex items-center">
            <div class="p-5 mr-4 bg-red-50 rounded-xl">
                <!-- Icon di sini -->
                <svg width="36" height="28" viewBox="0 0 36 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.4375 14C13.8537 14 15.8125 12.0412 15.8125 9.625C15.8125 7.20875 13.8537 5.25 11.4375 5.25C9.02125 5.25 7.0625 7.20875 7.0625 9.625C7.0625 12.0412 9.02125 14 11.4375 14Z"
                        fill="#F54748" />
                    <path
                        d="M20.1875 8.53125C20.1875 7.92719 20.6772 7.4375 21.2812 7.4375H30.0312C30.6353 7.4375 31.125 7.92719 31.125 8.53125C31.125 9.13531 30.6353 9.625 30.0312 9.625H21.2812C20.6772 9.625 20.1875 9.13531 20.1875 8.53125Z"
                        fill="#F54748" />
                    <path
                        d="M20.1875 14C20.1875 13.3959 20.6772 12.9062 21.2812 12.9062H30.0312C30.6353 12.9062 31.125 13.3959 31.125 14C31.125 14.6041 30.6353 15.0938 30.0312 15.0938H21.2812C20.6772 15.0938 20.1875 14.6041 20.1875 14Z"
                        fill="#F54748" />
                    <path
                        d="M22.375 19.4688C22.375 18.8647 22.8647 18.375 23.4688 18.375H30.0312C30.6353 18.375 31.125 18.8647 31.125 19.4688C31.125 20.0728 30.6353 20.5625 30.0312 20.5625H23.4688C22.8647 20.5625 22.375 20.0728 22.375 19.4688Z"
                        fill="#F54748" />
                    <path
                        d="M4.875 0.875C2.45875 0.875 0.5 2.83375 0.5 5.25V22.75C0.5 25.1662 2.45876 27.125 4.875 27.125H31.125C33.5412 27.125 35.5 25.1662 35.5 22.75V5.25C35.5 2.83375 33.5412 0.875 31.125 0.875H4.875ZM2.6875 5.25C2.6875 4.04188 3.66688 3.0625 4.875 3.0625H31.125C32.3331 3.0625 33.3125 4.04188 33.3125 5.25V22.75C33.3125 23.9581 32.3331 24.9375 31.125 24.9375H20.0989C20.1573 24.5803 20.1875 24.2151 20.1875 23.8438C20.1875 19.6153 16.27 16.1875 11.4375 16.1875C6.87369 16.1875 3.12595 19.2447 2.72331 23.1463C2.69979 23.0178 2.6875 22.8853 2.6875 22.75V5.25Z"
                        fill="#F54748" />
                </svg>
            </div>
            <div>
                <!-- Title di sini -->
                <p class="text-xl font-bold text-gray-900">Waiters </p>
                <!-- Subtitle di sini -->
                <p class="text-gray-600">Akses mengedit, menambah atau menghapus karyawan resto kamu</p>
            </div>
        </div>
    </x-card>

    <x-card>
        <x-card.header>
            <x-table.table-title>
                <x-slot:sub_title> Show the waiters of the shop </x-slot:sub_title>
                <x-slot:title> Affliated Waiters </x-slot:title>
            </x-table.table-title>
            <label for="table-search" class="sr-only">Search</label>
            <div class="flex gap-2 items-center">
                <x-filter />
                <x-tenant.button.create modal_id="authentication-modal"> Add waiters </x-tenant.button.create>
            </div>
        </x-card.header>
        <x-table>
            <x-slot:header>
                <x-table.th>
                    No
                </x-table.th>
                <x-table.th>
                    Username
                </x-table.th>
                <x-table.th>
                    Email
                </x-table.th>
                <x-table.th>
                    Phone Number
                </x-table.th>
                <x-table.th>
                    Verified
                </x-table.th>
                <x-table.th>
                    Status Aktif
                </x-table.th>
            </x-slot:header>

            @forelse ($users as $user)
                <x-table.tr>
                    <x-table.th>
                        <p>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->index + 1 }}</p>
                    </x-table.th>
                    <x-table.td>
                        <p>{{ $user->name }}</p>
                    </x-table.td>
                    <x-table.td>
                        <p>{{ $user->email }}</p>
                    </x-table.td>
                    <x-table.td>
                        <p>{{ $user->phone_number }}</p>
                    </x-table.td>
                    <x-table.td>
                        <p
                            class="font-bold tracking-wide {{ $user->email_verified_at ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}  rounded-full py-1.5 px-4">
                            {{ $user->email_verified_at ? 'Verified' : 'Not Verified' }}
                        </p>
                    </x-table.td>
                    <x-table.td>
                        <livewire:tenant.waiter-status :waiter="$user->waiter" />
                    </x-table.td>
                </x-table.tr>
            @empty
                <x-table.tr>
                    <x-table.td colspan="6">tidak ada data</x-table.td>
                </x-table.tr>
            @endforelse
        </x-table>

        {{ $users->links('pagination.tenant') }}

        <!-- POPUP HAPUS -->
        <div id="popup-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative max-w-md max-h-full w-50 bg-white-50 rounded-xl">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                    <div class="p-6 text-center">
                        <svg width="60" height="60" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 text-gray-400 w-15 h-15">
                            <rect width="100" height="100" rx="50" fill="#FC5F5F" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M47.5 30C47.0358 30.0002 46.5809 30.1297 46.1862 30.3739C45.7914 30.6181 45.4725 30.9673 45.265 31.3825L43.455 35H35C34.337 35 33.7011 35.2634 33.2322 35.7322C32.7634 36.2011 32.5 36.837 32.5 37.5C32.5 38.163 32.7634 38.7989 33.2322 39.2678C33.7011 39.7366 34.337 40 35 40V65C35 66.3261 35.5268 67.5979 36.4645 68.5355C37.4021 69.4732 38.6739 70 40 70H60C61.3261 70 62.5979 69.4732 63.5355 68.5355C64.4732 67.5979 65 66.3261 65 65V40C65.663 40 66.2989 39.7366 66.7678 39.2678C67.2366 38.7989 67.5 38.163 67.5 37.5C67.5 36.837 67.2366 36.2011 66.7678 35.7322C66.2989 35.2634 65.663 35 65 35H56.545L54.735 31.3825C54.5275 30.9673 54.2086 30.6181 53.8138 30.3739C53.4191 30.1297 52.9642 30.0002 52.5 30H47.5ZM42.5 45C42.5 44.337 42.7634 43.7011 43.2322 43.2322C43.7011 42.7634 44.337 42.5 45 42.5C45.663 42.5 46.2989 42.7634 46.7678 43.2322C47.2366 43.7011 47.5 44.337 47.5 45V60C47.5 60.663 47.2366 61.2989 46.7678 61.7678C46.2989 62.2366 45.663 62.5 45 62.5C44.337 62.5 43.7011 62.2366 43.2322 61.7678C42.7634 61.2989 42.5 60.663 42.5 60V45ZM55 42.5C54.337 42.5 53.7011 42.7634 53.2322 43.2322C52.7634 43.7011 52.5 44.337 52.5 45V60C52.5 60.663 52.7634 61.2989 53.2322 61.7678C53.7011 62.2366 54.337 62.5 55 62.5C55.663 62.5 56.2989 62.2366 56.7678 61.7678C57.2366 61.2989 57.5 60.663 57.5 60V45C57.5 44.337 57.2366 43.7011 56.7678 43.2322C56.2989 42.7634 55.663 42.5 55 42.5Z"
                                fill="white" />
                        </svg>
                        <h3 class="mb-5 text-sm font-normal text-gray-500">Apakah Anda yakin ingin menghapus tenant
                            ini?
                        </h3>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batalkan</button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-white-50 bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-card>


    <!-- Tambah Waiters -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-white-50">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                    data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-semibold text-center">Tambah Waiters</h3>
                    <label class="block mb-2 text-base uppercase font-">Data Waiters</label>
                    <form class="space-y-6" action="{{ route('tenant-waiter-store', $tenant) }}" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="name" id="name"
                                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Name" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email"
                                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="name@gmail.com" required>
                        </div>
                        <div>
                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                Number</label>
                            <input type="number" name="phone_number" id="number"
                                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Phone number" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>
                        </div>
                        <div>
                            <label for="confirm" class="block mb-2 text-sm font-medium text-gray-900">Confirm
                                Password</label>
                            <input type="password" name="password_confirmation" id="confirm"
                                placeholder="Confirm Password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>
                        </div>
                        <div class="flex justify-between">
                            <button data-modal-hide="popup-modal" type="button"
                                class="bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm font-semibold px-5 py-2.5 hover:text-gray-900 focus:z-10 w-full">Batal</button>
                            <button data-modal-hide="popup-modal" type="submit"
                                class="text-white-50 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-200 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 hover:text-white-100 focus:z-10 w-full">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @if (session('success'))
                <div id="alert-border-3"
                    class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ml-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-3" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif --}}

@section('script')
    {{-- <script defer>
        const waiterId = document.getElementById('waiter-id');
        const token = '{{ session('token') }}'
        const productStatusInputs = document.querySelectorAll('#product-status-input')

        function putProductId(id) {
            waiterId.setAttribute('value', id)
        }

        async function updateStatusProduct(status, product_id, bearerToken) {
            const response = await fetch(`http://localhost:8000/api/waiter/${waiter_id}`, {
                method: 'PUT',
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
                    alert('failed');
                }
            });
        });
    </script> --}}

    {{-- <!-- JavaScript code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.toggle-checkbox').change(function() {
                const waiterId = $(this).data('waiter-id');
                const isActive = $(this).is(':checked');

                // Send an AJAX request to update the is_active attribute
                $.ajax({
                    type: 'PUT',
                    url: `waiter/${waiterId}`, // Replace with your route
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: waiterId,
                        is_active: isActive ? 0 : 1,
                    },
                    success: function(response) {
                        if (response.success) {
                            console.log("Sukses");
                        } else {
                            console.log("Gagal");
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX error
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    }
                });
            });
        });
    </script> --}}
@endsection
