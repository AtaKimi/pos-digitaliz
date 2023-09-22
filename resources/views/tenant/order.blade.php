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
<path d="M0.5 1.66667C0.5 1.02233 1.02233 0.5 1.66667 0.5H5.16667C5.70201 0.5 6.16866 0.864347 6.2985 1.38371L7.24424 5.16667H34.3333C34.6804 5.16667 35.0094 5.32119 35.2311 5.58826C35.4527 5.85533 35.544 6.20722 35.48 6.54834L31.98 25.215C31.8766 25.7668 31.3947 26.1667 30.8333 26.1667H28.5H12.1667H9.83333C9.27192 26.1667 8.79011 25.7668 8.68665 25.215L5.19306 6.58254L4.25576 2.83333H1.66667C1.02233 2.83333 0.5 2.311 0.5 1.66667ZM7.73908 7.5L10.8016 23.8333H29.8651L32.9276 7.5H7.73908ZM12.1667 26.1667C9.58934 26.1667 7.5 28.256 7.5 30.8333C7.5 33.4107 9.58934 35.5 12.1667 35.5C14.744 35.5 16.8333 33.4107 16.8333 30.8333C16.8333 28.256 14.744 26.1667 12.1667 26.1667ZM28.5 26.1667C25.9227 26.1667 23.8333 28.256 23.8333 30.8333C23.8333 33.4107 25.9227 35.5 28.5 35.5C31.0773 35.5 33.1667 33.4107 33.1667 30.8333C33.1667 28.256 31.0773 26.1667 28.5 26.1667ZM12.1667 28.5C13.4553 28.5 14.5 29.5447 14.5 30.8333C14.5 32.122 13.4553 33.1667 12.1667 33.1667C10.878 33.1667 9.83333 32.122 9.83333 30.8333C9.83333 29.5447 10.878 28.5 12.1667 28.5ZM28.5 28.5C29.7887 28.5 30.8333 29.5447 30.8333 30.8333C30.8333 32.122 29.7887 33.1667 28.5 33.1667C27.2113 33.1667 26.1667 32.122 26.1667 30.8333C26.1667 29.5447 27.2113 28.5 28.5 28.5Z" fill="#F54748"/>
</svg>
              </div>
              <div>
                <!-- Title di sini -->
                <p class="font-bold text-xl text-gray-900">Order</p>
                <!-- Subtitle di sini -->
                <p class="text-gray-600">Akses melihat pesanan pelanggan sesuai nomor meja</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Table Order Start --}}
        <div class="relative mt-10 overflow-x-auto shadow-md sm:rounded-lg bg-white-50">
          <div class="grid grid-cols-2 justify-between">
            <h3 class="p-6 font-bold">Order list</h3>
            <div class="relative right-4 top-4 w-full">
                <div class="absolute flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 my-2.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            </div>
            </div>
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr class="">
                      <th scope="col" class="px-6 py-3">
                          UID
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Nama Meja
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Total Tagihan Meja
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Status Order
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $row = 0;
                while ($row < 8) {
                        echo "<tr class=\"bg-white-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600\">" ; 
                        echo "<th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\"> AF-001 </th>";
                        echo  "<td class=\"px-6 py-4\">Meja 1</td>";
                        echo  "<td class=\"px-6 py-4\">Rp 5.000.000</td>";
                        echo  "<td class=\"px-6 py-4\">";
                        echo  "<button disabled class=\"flex justify-center align-middle bg-[#FFE8BF] w-full py-1 rounded-full\">Pending</button>";
                        echo  "</td>";
                        echo  "<td class=\"px-6 py-4 flex justify-center\">";
                        echo  "<a href=\"#\" class=\"block w-fit focus:outline-none text-white bord border border-yellow-400 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900\">";
                        echo  "<svg width=\"17\" height=\"17\" viewBox=\"0 0 17 17\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">";
                        echo  "<path d=\"M16.8037 8.49976C16.8037 8.49976 13.8037 2.99976 8.80371 2.99976C3.80371 2.99976 0.803711 8.49976 0.803711 8.49976C0.803711 8.49976 3.80371 13.9998 8.80371 13.9998C13.8037 13.9998 16.8037 8.49976 16.8037 8.49976ZM1.97641 8.49976C2.03334 8.41297 2.09825 8.31653 2.17098 8.21217C2.50587 7.73169 3.00002 7.09266 3.63582 6.45686C4.92474 5.16794 6.68433 3.99976 8.80371 3.99976C10.9231 3.99976 12.6827 5.16794 13.9716 6.45686C14.6074 7.09266 15.1016 7.73169 15.4364 8.21217C15.5092 8.31653 15.5741 8.41297 15.631 8.49976C15.5741 8.58654 15.5092 8.68298 15.4364 8.78734C15.1016 9.26783 14.6074 9.90685 13.9716 10.5427C12.6827 11.8316 10.9231 12.9998 8.80371 12.9998C6.68433 12.9998 4.92474 11.8316 3.63582 10.5427C3.00002 9.90685 2.50587 9.26783 2.17098 8.78734C2.09825 8.68298 2.03334 8.58654 1.97641 8.49976Z\" fill=\"#FDC55E\"/>";
                        echo  "<path d=\"M8.80371 5.99976C7.423 5.99976 6.30371 7.11904 6.30371 8.49976C6.30371 9.88047 7.423 10.9998 8.80371 10.9998C10.1844 10.9998 11.3037 9.88047 11.3037 8.49976C11.3037 7.11904 10.1844 5.99976 8.80371 5.99976ZM5.30371 8.49976C5.30371 6.56676 6.87072 4.99976 8.80371 4.99976C10.7367 4.99976 12.3037 6.56676 12.3037 8.49976C12.3037 10.4328 10.7367 11.9998 8.80371 11.9998C6.87072 11.9998 5.30371 10.4328 5.30371 8.49976Z\" fill=\"#FDC55E\"/>";
                        echo  "</svg>";
                        echo  "</a>";
                        echo  "</td>";
                        echo  "</tr>";
                    $row+=1;
                    }
                ?>
              </tbody>
          </table>
        </div>  
        {{-- Table Order End --}}
      </div>
    </div>
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
@endsection