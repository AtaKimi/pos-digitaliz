@extends('layouts.tenant')

@section('content')

    {{-- Header --}}
    <div class="pb-4">
        <div class="rounded-2xl overflow-hidden shadow-lg bg-white-50 mb-5">
            <div class="p-4">
                <div class="flex items-center">
                <div class="mr-4 bg-red-50 rounded-xl p-5">
                    <!-- Icon di sini -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                    <path d="M13.625 2.6875H2.6875L2.6875 33.3125H13.625V2.6875ZM33.3125 2.6875H22.375V13.625H33.3125V2.6875ZM33.3125 22.375V33.3125H22.375V22.375H33.3125ZM0.5 2.6875C0.5 1.47938 1.47938 0.5 2.6875 0.5H13.625C14.8331 0.5 15.8125 1.47938 15.8125 2.6875V33.3125C15.8125 34.5206 14.8331 35.5 13.625 35.5H2.6875C1.47938 35.5 0.5 34.5206 0.5 33.3125V2.6875ZM20.1875 2.6875C20.1875 1.47938 21.1669 0.5 22.375 0.5H33.3125C34.5206 0.5 35.5 1.47938 35.5 2.6875V13.625C35.5 14.8331 34.5206 15.8125 33.3125 15.8125H22.375C21.1669 15.8125 20.1875 14.8331 20.1875 13.625V2.6875ZM22.375 20.1875C21.1669 20.1875 20.1875 21.1669 20.1875 22.375V33.3125C20.1875 34.5206 21.1669 35.5 22.375 35.5H33.3125C34.5206 35.5 35.5 34.5206 35.5 33.3125V22.375C35.5 21.1669 34.5206 20.1875 33.3125 20.1875H22.375Z" fill="#F54748"/>
                    </svg>
                </div>
                <div>
                    <!-- Title di sini -->
                    <p class="font-bold text-xl text-gray-900">Product</p>
                    <!-- Subtitle di sini -->
                    <p class="text-gray-600">Akses mengedit, menambah atau menghapus menu resto kamu</p>
                </div>
                </div>
            </div>
            </div>
            {{-- card 1 --}}
            <div class="sm:flex flex-wrap gap-3">
                <div class="flex flex-col bg-white-50 flex-wrap rounded-lg w-[550px]">
                    <div class="flex gap-x-6 p-6 ">
                     <img src="https://wiratech.co.id/wp-content/uploads/2019/02/bumbu-sate-madura.jpg" alt="" class="w-[130px] h-[130px] rounded-lg">
                     <div class="text-gray-500">
                         <div class="flex justify-between">
                             <p class="text-2xl font-bold text-black mb-2">Sate Padang</p>
                             <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                             </svg></button>
                             <!-- Dropdown menu -->
                             <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                 <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Dashboard</a>
                                 </li>
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Settings</a>
                                 </li>
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Earnings</a>
                                 </li>
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Sign out</a>
                                 </li>
                                 </ul>
                             </div>
     
                         </div>
                         <p> <span class="text-base font-bold">Category : </span> Daging</p>
                         <p class="text-justify"><span class="text-base font-bold">Description :</span> Sate Padang, Hidangan Sumatra Barat, daging tusuk dengan kuah gulai, lontong, telur, emping, terkenal di Indonesia.</p>
                     </div>
                    </div>
                    <div class="flex-row flex justify-between pb-5 px-5">
                     <button type="button" class="w-full justify-center text-white-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                           <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         Buy now
                       </button>
                     <button type="button" class="w-full justify-center text-white-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                           <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         Buy now
                       </button>
                    </div>
                 </div>
                 
                 <div class="flex flex-col bg-white-50 flex-wrap rounded-lg  w-[550px]">
                    <div class="flex gap-x-6 p-6 ">
                     <img src="https://wiratech.co.id/wp-content/uploads/2019/02/bumbu-sate-madura.jpg" alt="" class="w-[130px] h-[130px] rounded-lg">
                     <div class="text-gray-500">
                         <div class="flex justify-between">
                             <p class="text-2xl font-bold text-black mb-2">Sate Padang</p>
                             <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                             </svg></button>
                             <!-- Dropdown menu -->
                             <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                 <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Dashboard</a>
                                 </li>
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Settings</a>
                                 </li>
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Earnings</a>
                                 </li>
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Sign out</a>
                                 </li>
                                 </ul>
                             </div>
     
                         </div>
                         <p> <span class="text-base font-bold">Category : </span> Daging</p>
                         <p class="text-justify"><span class="text-base font-bold">Description :</span> Sate Padang, Hidangan Sumatra Barat, daging tusuk dengan kuah gulai, lontong, telur, emping, terkenal di Indonesia.</p>
                     </div>
                    </div>
                    <div class="flex-row flex justify-between pb-5 px-5">
                     <button type="button" class="w-full justify-center text-white-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                           <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         Buy now
                       </button>
                     <button type="button" class="w-full justify-center text-white-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                           <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         Buy now
                       </button>
                    </div>
                 </div>
                 <div class="flex flex-col bg-white-50 flex-wrap rounded-lg  w-[550px]">
                    <div class="flex gap-x-6 p-6 ">
                     <img src="https://wiratech.co.id/wp-content/uploads/2019/02/bumbu-sate-madura.jpg" alt="" class="w-[130px] h-[130px] rounded-lg">
                     <div class="text-gray-500">
                         <div class="flex justify-between">
                             <p class="text-2xl font-bold text-black mb-2">Sate Padang</p>
                             <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                             </svg></button>
                             <!-- Dropdown menu -->
                             <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                 <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Dashboard</a>
                                 </li>
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Settings</a>
                                 </li>
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Earnings</a>
                                 </li>
                                 <li>
                                     <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white-50">Sign out</a>
                                 </li>
                                 </ul>
                             </div>
     
                         </div>
                         <p> <span class="text-base font-bold">Category : </span> Daging</p>
                         <p class="text-justify"><span class="text-base font-bold">Description :</span> Sate Padang, Hidangan Sumatra Barat, daging tusuk dengan kuah gulai, lontong, telur, emping, terkenal di Indonesia.</p>
                     </div>
                    </div>
                    <div class="flex-row flex justify-between pb-5 px-5">
                     <button type="button" class="w-full justify-center text-white-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                           <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         Buy now
                       </button>
                     <button type="button" class="w-full justify-center text-white-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                           <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         Buy now
                       </button>
                    </div>
                 </div>
            </div>

        </div>
    </div>
@endsection
