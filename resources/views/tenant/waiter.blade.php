@extends('layouts.tenant')

@section('content')
    <div class="rounded-2xl overflow-hidden shadow-lg bg-white-50 mb-5">
        <div class="p-4">
            <div class="flex items-center">
                <div class="mr-4 bg-red-100 rounded-xl p-5">
                    <!-- Icon di sini -->
                    <svg width="36" height="28" viewBox="0 0 36 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.4375 14C13.8537 14 15.8125 12.0412 15.8125 9.625C15.8125 7.20875 13.8537 5.25 11.4375 5.25C9.02125 5.25 7.0625 7.20875 7.0625 9.625C7.0625 12.0412 9.02125 14 11.4375 14Z" fill="#F54748"/>
                        <path d="M20.1875 8.53125C20.1875 7.92719 20.6772 7.4375 21.2812 7.4375H30.0312C30.6353 7.4375 31.125 7.92719 31.125 8.53125C31.125 9.13531 30.6353 9.625 30.0312 9.625H21.2812C20.6772 9.625 20.1875 9.13531 20.1875 8.53125Z" fill="#F54748"/>
                        <path d="M20.1875 14C20.1875 13.3959 20.6772 12.9062 21.2812 12.9062H30.0312C30.6353 12.9062 31.125 13.3959 31.125 14C31.125 14.6041 30.6353 15.0938 30.0312 15.0938H21.2812C20.6772 15.0938 20.1875 14.6041 20.1875 14Z" fill="#F54748"/>
                        <path d="M22.375 19.4688C22.375 18.8647 22.8647 18.375 23.4688 18.375H30.0312C30.6353 18.375 31.125 18.8647 31.125 19.4688C31.125 20.0728 30.6353 20.5625 30.0312 20.5625H23.4688C22.8647 20.5625 22.375 20.0728 22.375 19.4688Z" fill="#F54748"/>
                        <path d="M4.875 0.875C2.45875 0.875 0.5 2.83375 0.5 5.25V22.75C0.5 25.1662 2.45876 27.125 4.875 27.125H31.125C33.5412 27.125 35.5 25.1662 35.5 22.75V5.25C35.5 2.83375 33.5412 0.875 31.125 0.875H4.875ZM2.6875 5.25C2.6875 4.04188 3.66688 3.0625 4.875 3.0625H31.125C32.3331 3.0625 33.3125 4.04188 33.3125 5.25V22.75C33.3125 23.9581 32.3331 24.9375 31.125 24.9375H20.0989C20.1573 24.5803 20.1875 24.2151 20.1875 23.8438C20.1875 19.6153 16.27 16.1875 11.4375 16.1875C6.87369 16.1875 3.12595 19.2447 2.72331 23.1463C2.69979 23.0178 2.6875 22.8853 2.6875 22.75V5.25Z" fill="#F54748"/>
                    </svg>                        
                </div>
                <div>
                    <!-- Title di sini -->
                    <p class="font-bold text-xl text-gray-900">Waiters </p>
                    <!-- Subtitle di sini -->
                    <p class="text-gray-600">Akses mengedit, menambah atau menghapus karyawan resto kamu</p>
                </div>
            </div>
        </div>
    </div>

    <div class="p-2 bg-white-50 border border-gray-200 rounded-3xl shadow">
        <div class="flex items-center justify-between py-5 px-2">
            <div>
                <p class="text-lg font-semibold text-gray-700">Waiters List</p>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative flex flex-row">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search">
                <div class="flex items-center px-3 text-white-50">
                    <button type="button" class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-white bg-red-500 rounded-lg hover:bg-red-600 focus:ring-2 focus:outline-none focus:ring-red-300" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                        <svg width="18" height="18" viewBox="3 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.5V13.5M13.5 9H4.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>   
                        Tambah Waiters
                    </button>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-2xl">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 bg-gray-50">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                No
                            </div>
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Verified
                        </th>
                        <th scope="col" class="px-4 py-3 text-center">
                            Status Aktif
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white-50 border-b hover:bg-gray-50">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                1
                            </div>
                        </td>
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                                <p class="">Waiters name 1</p>
                            </div>
                        </th>
                        <td class="px-4 py-4">
                            <div class="flex items-center">
                                <p class="text-gray-900">olivia@untitledui.com</p>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center">
                                <p class="text-gray-900 text-xs">+623523952030953235</p>
                            </div>
                        </td>
                        <td class="px-8 py-4">
                            <p class="w-full bg-green-100 text-green-800 text-xs font-semibold mr-2 py-0.5 rounded-full text-center">Verified</p>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <label class="relative inline-flex cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                    <div class="w-14 h-6 bg-green-600 rounded-full peer peer-checked:after:translate-x-8 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[3px] after:bg-white-50 after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-500"></div>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white-50 border-b hover:bg-gray-50">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                2
                            </div>
                        </td>
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <div class="flex items-center">
                                <p class="">Waiters name 2</p>
                            </div>
                        </th>
                        <td class="px-4 py-4">
                            <div class="flex items-center">
                                <p class="text-gray-900">olivia@untitledui.com</p>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center">
                                <p class="text-gray-900 text-xs">+623523952030953235</p>
                            </div>
                        </td>
                        <td class="px-8 py-4">
                            <p class="w-full bg-red-200 text-red-800 text-xs font-semibold mr-2 py-0.5 rounded-full text-center">Unverified</p>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <label class="relative inline-flex cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                    <div class="w-14 h-6 bg-green-600 rounded-full peer peer-checked:after:translate-x-8 peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[3px] after:bg-white-50 after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-500"></div>
                                </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav class="flex items-center pt-4 py-2 px-2" aria-label="Table navigation">
                <p class="text-xs text-gray-700 mr-20">
                    Menampilkan: <span class="font-semibold text-gray-900">1</span> - <span class="font-semibold text-gray-900">10</span> dari <span class="font-semibold text-gray-900">100</span> Hasil
                </p>
                <!-- Buttons -->
                <div class="flex ml-10">
                    <!-- Previous Button -->
                    <a href="#" class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-500 hover:text-gray-800">
                      Prev
                    </a>
                    <ul class="inline-flex -space-x-px text-xs">
                        <li>
                          <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-white-50 bg-red-500 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 rounded-xl">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 rounded-xl">2</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 rounded-xl">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 hover:bg-gray-100 hover:text-grey-700 rounded-xl">...</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 mr-1 h-8 text-grey-600 bg-white-50 border border-grey-200 hover:bg-gray-100 hover:text-grey-700 rounded-xl">10</a>
                        </li>
                      </ul>
                    <!-- Next Button -->
                    <a href="#" class="flex items-center justify-center px-3 h-8 text-xs font-medium text-gray-500 hover:text-gray-800">
                      Next
                    </a>
                  </div>
            </nav>
        </div>

    <!-- POPUP HAPUS -->
    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-50 max-w-md max-h-full bg-white-50 rounded-xl">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
                <div class="p-6 text-center">
                  <svg width="60" height="60" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 text-gray-400 w-15 h-15">
                      <rect width="100" height="100" rx="50" fill="#FC5F5F"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M47.5 30C47.0358 30.0002 46.5809 30.1297 46.1862 30.3739C45.7914 30.6181 45.4725 30.9673 45.265 31.3825L43.455 35H35C34.337 35 33.7011 35.2634 33.2322 35.7322C32.7634 36.2011 32.5 36.837 32.5 37.5C32.5 38.163 32.7634 38.7989 33.2322 39.2678C33.7011 39.7366 34.337 40 35 40V65C35 66.3261 35.5268 67.5979 36.4645 68.5355C37.4021 69.4732 38.6739 70 40 70H60C61.3261 70 62.5979 69.4732 63.5355 68.5355C64.4732 67.5979 65 66.3261 65 65V40C65.663 40 66.2989 39.7366 66.7678 39.2678C67.2366 38.7989 67.5 38.163 67.5 37.5C67.5 36.837 67.2366 36.2011 66.7678 35.7322C66.2989 35.2634 65.663 35 65 35H56.545L54.735 31.3825C54.5275 30.9673 54.2086 30.6181 53.8138 30.3739C53.4191 30.1297 52.9642 30.0002 52.5 30H47.5ZM42.5 45C42.5 44.337 42.7634 43.7011 43.2322 43.2322C43.7011 42.7634 44.337 42.5 45 42.5C45.663 42.5 46.2989 42.7634 46.7678 43.2322C47.2366 43.7011 47.5 44.337 47.5 45V60C47.5 60.663 47.2366 61.2989 46.7678 61.7678C46.2989 62.2366 45.663 62.5 45 62.5C44.337 62.5 43.7011 62.2366 43.2322 61.7678C42.7634 61.2989 42.5 60.663 42.5 60V45ZM55 42.5C54.337 42.5 53.7011 42.7634 53.2322 43.2322C52.7634 43.7011 52.5 44.337 52.5 45V60C52.5 60.663 52.7634 61.2989 53.2322 61.7678C53.7011 62.2366 54.337 62.5 55 62.5C55.663 62.5 56.2989 62.2366 56.7678 61.7678C57.2366 61.2989 57.5 60.663 57.5 60V45C57.5 44.337 57.2366 43.7011 56.7678 43.2322C56.2989 42.7634 55.663 42.5 55 42.5Z" fill="white"/>
                  </svg>                        
                    <h3 class="mb-5 text-sm font-normal text-gray-500">Apakah Anda yakin ingin menghapus tenant ini?</h3>
                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batalkan</button>
                    <button data-modal-hide="popup-modal" type="button" class="text-white-50 bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                      Hapus
                  </button>
                </div>
            </div>
        </div>
    </div>
</div>


  <!-- Tambah Waiters -->
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white-50 rounded-lg shadow">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="px-6 py-6 lg:px-8">
                  <h3 class="mb-4 text-xl font-semibold text-center">Tambah Waiters</h3>
                  <label class="block mb-2 text-base font- uppercase">Data Waiters</label>
                  <form class="space-y-6" action="#">
                      <div>
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                          <input type="" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" placeholder="Name" required>
                      </div>
                      <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" placeholder="name@gmail.com" required>
                      </div>
                      <div>
                        <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                        <input type="" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" placeholder="Phone number" required>
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                          <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                      </div>
                      <div>
                        <label for="confirm" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                        <input type="password" name="confirm" id="confirm" placeholder="Confirm Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                      </div>
                      <div class="flex justify-between">
                            <button data-modal-hide="popup-modal" type="button"
                                class="bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm font-semibold px-5 py-2.5 hover:text-gray-900 focus:z-10 w-full">Batal</button>
                                <button data-modal-hide="popup-modal" type="button"
                                class="text-white-50 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-200 rounded-lg border border-red-200 text-sm font-medium px-5 py-2.5 hover:text-white-100 focus:z-10 w-full">Tambahkan</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div> 
  
@endsection
