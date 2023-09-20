<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('file-header')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body class="bg-white-300" style="height: 1500px">
    <div class="bg-warning-300 h-80 w-full p-8 flex">
        {{-- -------------------------------- side bar start ----------------------------------------------- --}}
        <aside id="separator-sidebar"
            class="fixed top-0 left-0 z-40 w-fit h-screen transition-transform -translate-x-full lg:translate-x-0 m-8"
            aria-label="Sidebar">
            <div class="bg-white-50 rounded-3xl mr-10 h-screen">
                <div class="flex justify-center mb-2 pt-3">
                    <img src="{{ asset('/assets/img/logo.svg') }}" alt="">
                </div>
                <hr>
                <div class="px-4 py-2">
                    <p class="text-gray-400 text-xs font-semibold">PAGES</p>
                </div>
                <div class="flex px-5 py-4 mx-5 bg-yellow-500 rounded-xl align-middle w-64">
                    <div class="my-auto mr-5">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="grid-1x2">
                                <path id="Vector (Stroke)"
                                    d="M6 1H1L1 15H6V1ZM15 1H10V6H15V1ZM15 10V15H10V10H15ZM0 1C0 0.447715 0.447715 0 1 0H6C6.55228 0 7 0.447715 7 1V15C7 15.5523 6.55228 16 6 16H1C0.447715 16 0 15.5523 0 15V1ZM9 1C9 0.447715 9.44772 0 10 0H15C15.5523 0 16 0.447715 16 1V6C16 6.55228 15.5523 7 15 7H10C9.44772 7 9 6.55228 9 6V1ZM10 9C9.44772 9 9 9.44772 9 10V15C9 15.5523 9.44772 16 10 16H15C15.5523 16 16 15.5523 16 15V10C16 9.44772 15.5523 9 15 9H10Z"
                                    fill="#2E2E2E" />
                            </g>
                        </svg>
                    </div>
                    <p class="my-auto text-lg">Dashboard</p>
                </div>
                <div class="flex px-5 py-4 mx-5 rounded-xl align-middle">
                    <div class="my-auto mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                            fill="none">
                            <path
                                d="M3.375 5.06251C3.375 4.75185 3.62684 4.50001 3.9375 4.50001H10.6875C10.9982 4.50001 11.25 4.75185 11.25 5.06251C11.25 5.37317 10.9982 5.62501 10.6875 5.62501H3.9375C3.62684 5.62501 3.375 5.37317 3.375 5.06251Z"
                                fill="#625757" />
                            <path
                                d="M3.375 7.31251C3.375 7.00185 3.62684 6.75001 3.9375 6.75001H10.6875C10.9982 6.75001 11.25 7.00185 11.25 7.31251C11.25 7.62317 10.9982 7.87501 10.6875 7.87501H3.9375C3.62684 7.87501 3.375 7.62317 3.375 7.31251Z"
                                fill="#625757" />
                            <path
                                d="M3.375 9.56251C3.375 9.25185 3.62684 9.00001 3.9375 9.00001H10.6875C10.9982 9.00001 11.25 9.25185 11.25 9.56251C11.25 9.87317 10.9982 10.125 10.6875 10.125H3.9375C3.62684 10.125 3.375 9.87317 3.375 9.56251Z"
                                fill="#625757" />
                            <path
                                d="M3.375 11.8125C3.375 11.5018 3.62684 11.25 3.9375 11.25H10.6875C10.9982 11.25 11.25 11.5018 11.25 11.8125C11.25 12.1232 10.9982 12.375 10.6875 12.375H3.9375C3.62684 12.375 3.375 12.1232 3.375 11.8125Z"
                                fill="#625757" />
                            <path
                                d="M3.375 14.0625C3.375 13.7518 3.62684 13.5 3.9375 13.5H10.6875C10.9982 13.5 11.25 13.7518 11.25 14.0625C11.25 14.3732 10.9982 14.625 10.6875 14.625H3.9375C3.62684 14.625 3.375 14.3732 3.375 14.0625Z"
                                fill="#625757" />
                            <path
                                d="M12.9375 4.50001C12.6268 4.50001 12.375 4.75185 12.375 5.06251C12.375 5.37317 12.6268 5.62501 12.9375 5.62501H14.0625C14.3732 5.62501 14.625 5.37317 14.625 5.06251C14.625 4.75185 14.3732 4.50001 14.0625 4.50001H12.9375Z"
                                fill="#625757" />
                            <path
                                d="M12.9375 6.75001C12.6268 6.75001 12.375 7.00185 12.375 7.31251C12.375 7.62317 12.6268 7.87501 12.9375 7.87501H14.0625C14.3732 7.87501 14.625 7.62317 14.625 7.31251C14.625 7.00185 14.3732 6.75001 14.0625 6.75001H12.9375Z"
                                fill="#625757" />
                            <path
                                d="M12.9375 9.00001C12.6268 9.00001 12.375 9.25185 12.375 9.56251C12.375 9.87317 12.6268 10.125 12.9375 10.125H14.0625C14.3732 10.125 14.625 9.87317 14.625 9.56251C14.625 9.25185 14.3732 9.00001 14.0625 9.00001H12.9375Z"
                                fill="#625757" />
                            <path
                                d="M12.9375 11.25C12.6268 11.25 12.375 11.5018 12.375 11.8125C12.375 12.1232 12.6268 12.375 12.9375 12.375H14.0625C14.3732 12.375 14.625 12.1232 14.625 11.8125C14.625 11.5018 14.3732 11.25 14.0625 11.25H12.9375Z"
                                fill="#625757" />
                            <path
                                d="M12.9375 13.5C12.6268 13.5 12.375 13.7518 12.375 14.0625C12.375 14.3732 12.6268 14.625 12.9375 14.625H14.0625C14.3732 14.625 14.625 14.3732 14.625 14.0625C14.625 13.7518 14.3732 13.5 14.0625 13.5H12.9375Z"
                                fill="#625757" />
                            <path
                                d="M2.64775 0.727259C2.51989 0.599406 2.33837 0.540807 2.1599 0.56977C1.98142 0.598733 1.82775 0.711726 1.74688 0.873449L1.18438 1.99845C1.14533 2.07656 1.125 2.16268 1.125 2.25001V16.875H0.5625C0.25184 16.875 0 17.1268 0 17.4375C0 17.7482 0.25184 18 0.5625 18H17.4375C17.7482 18 18 17.7482 18 17.4375C18 17.1268 17.7482 16.875 17.4375 16.875H16.875V2.25001C16.875 2.16268 16.8547 2.07656 16.8156 1.99845L16.2531 0.873449C16.1723 0.711726 16.0186 0.598733 15.8401 0.56977C15.6616 0.540807 15.4801 0.599406 15.3523 0.727259L14.625 1.45451L13.8977 0.727259C13.6781 0.507589 13.3219 0.507589 13.1023 0.727259L12.375 1.45451L11.6477 0.727259C11.4281 0.507589 11.0719 0.507589 10.8523 0.727259L10.125 1.45451L9.39775 0.727259C9.17808 0.507589 8.82192 0.507589 8.60225 0.727259L7.875 1.45451L7.14775 0.727259C6.92808 0.507589 6.57192 0.507589 6.35225 0.727259L5.625 1.45451L4.89775 0.727259C4.67808 0.507589 4.32192 0.507589 4.10225 0.727259L3.375 1.45451L2.64775 0.727259ZM2.4041 2.0746L2.97725 2.64775C3.19692 2.86742 3.55308 2.86742 3.77275 2.64775L4.5 1.9205L5.22725 2.64775C5.44692 2.86742 5.80308 2.86742 6.02275 2.64775L6.75 1.9205L7.47725 2.64775C7.69692 2.86742 8.05308 2.86742 8.27275 2.64775L9 1.9205L9.72725 2.64775C9.94692 2.86742 10.3031 2.86742 10.5227 2.64775L11.25 1.9205L11.9773 2.64775C12.1969 2.86742 12.5531 2.86742 12.7727 2.64775L13.5 1.9205L14.2273 2.64775C14.4469 2.86742 14.8031 2.86742 15.0227 2.64775L15.5959 2.0746L15.75 2.38279V16.875H2.25V2.3828L2.4041 2.0746Z"
                                fill="#625757" />
                        </svg>
                    </div>
                    <p class="my-auto text-lg">Tenant Management</p>
                </div>
            </div>
        </aside>

        {{-- -------------------------------- side bar end ----------------------------------------------- --}}


        <div class="lg:ml-80  w-full">
            {{-- -------------------------------- nav bar start ----------------------------------------------- --}}
            <nav class="flex justify-between w-full mb-8">
                <div class="flex items-center">
                    <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar"
                        aria-controls="separator-sidebar" type="button"
                        class=" p-2 mt-2 mr-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <div class="sm:block hidden">
                        <p class="text-sm">Pages / Dashboard</p>
                        <p class="text-lg font-semibold">Dashboard</p>
                    </div>
                </div>
                <div class="flex align-middle">
                    <div class="mr-5 w-5 h-5 my-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 21"
                            fill="none">
                            <path
                                d="M11.7558 1.81298C11.2398 0.0623389 8.76017 0.0623395 8.24417 1.81298L8.11904 2.23754C7.78934 3.35613 6.51169 3.88534 5.4876 3.32752L5.09891 3.1158C3.49615 2.24277 1.74277 3.99616 2.6158 5.59891L2.82752 5.9876C3.38534 7.01169 2.85612 8.28934 1.73754 8.61904L1.31298 8.74417C-0.437661 9.26017 -0.437661 11.7398 1.31298 12.2558L1.73754 12.381C2.85613 12.7107 3.38534 13.9883 2.82752 15.0124L2.6158 15.4011C1.74277 17.0038 3.49615 18.7572 5.09891 17.8842L5.4876 17.6725C6.51169 17.1147 7.78934 17.6439 8.11904 18.7625L8.24417 19.187C8.76017 20.9377 11.2398 20.9377 11.7558 19.187L11.881 18.7625C12.2107 17.6439 13.4883 17.1147 14.5124 17.6725L14.9011 17.8842C16.5038 18.7572 18.2572 17.0038 17.3842 15.4011L17.1725 15.0124C16.6147 13.9883 17.1439 12.7107 18.2625 12.381L18.687 12.2558C20.4377 11.7398 20.4377 9.26017 18.687 8.74417L18.2625 8.61904C17.1439 8.28934 16.6147 7.01169 17.1725 5.9876L17.3842 5.59891C18.2572 3.99615 16.5038 2.24277 14.9011 3.1158L14.5124 3.32752C13.4883 3.88534 12.2107 3.35612 11.881 2.23754L11.7558 1.81298ZM10 14.161C7.97808 14.161 6.33898 12.5219 6.33898 10.5C6.33898 8.47808 7.97808 6.83898 10 6.83898C12.0219 6.83898 13.661 8.47808 13.661 10.5C13.661 12.5219 12.0219 14.161 10 14.161Z"
                                fill="#101010" />
                        </svg></div>
                    <div class="mr-5 w-5 h-5 my-auto"><svg xmlns="http://www.w3.org/2000/svg" class="my-auto"
                            width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path d="M10 20.5C11.3807 20.5 12.5 19.3807 12.5 18H7.5C7.5 19.3807 8.61929 20.5 10 20.5Z"
                                fill="#101010" />
                            <path
                                d="M11.2439 1.87379C11.248 1.83307 11.25 1.79177 11.25 1.75C11.25 1.05964 10.6904 0.5 10 0.5C9.30964 0.5 8.75 1.05964 8.75 1.75C8.75 1.79178 8.75205 1.83308 8.75605 1.8738C5.90025 2.45056 3.75003 4.97417 3.75003 8C3.75003 9.37201 3.125 15.5 1.25 16.75H18.75C16.875 15.5 16.25 9.37201 16.25 8C16.25 4.97415 14.0998 2.45053 11.2439 1.87379Z"
                                fill="#101010" />
                        </svg></div>
                    <div class="mr-5 ">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="flex align-middle focus:ring-4 focus:outline-none focus:ring-blue-300 "
                            type="button"><span class="my-auto mr-2 font-medium">Anya
                                Forger</span><img class="rounded-full w-10 h-10"
                                src="{{ asset('assets/img/anya-profile.png') }}" alt=""> <svg
                                class="w-2.5 h-2.5 ml-2.5 my-auto" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white-50 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                        out</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>
            {{-- -------------------------------- nav bar end ----------------------------------------------- --}}

            {{-- -------------------------------- Contentr start ----------------------------------------------- --}}
            @yield('content')
            {{-- -------------------------------- Contentr end ----------------------------------------------- --}}

        </div>

    </div>

    @yield('script')
</body>

</html>
