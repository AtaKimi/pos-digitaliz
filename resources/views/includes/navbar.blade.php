<nav class="flex justify-between w-full mb-8">
    <div class="flex items-center">
        <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar"
            aria-controls="separator-sidebar" type="button"
            class=" p-2 mt-2 mr-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>
        <div class="sm:block hidden @if (request()->routeIs('tenant-*')) text-white-50 @endif">
            <p class="text-sm">Pages / Dashboard</p>
            <p class="text-lg font-semibold">Dashboard</p>
        </div>
    </div>
    <div class="flex align-middle">
        <div class="mr-5 w-5 h-5 my-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 21"
                class="@if (request()->routeIs('tenant-*')) fill-white-50 @endif">
                <path
                    d="M11.7558 1.81298C11.2398 0.0623389 8.76017 0.0623395 8.24417 1.81298L8.11904 2.23754C7.78934 3.35613 6.51169 3.88534 5.4876 3.32752L5.09891 3.1158C3.49615 2.24277 1.74277 3.99616 2.6158 5.59891L2.82752 5.9876C3.38534 7.01169 2.85612 8.28934 1.73754 8.61904L1.31298 8.74417C-0.437661 9.26017 -0.437661 11.7398 1.31298 12.2558L1.73754 12.381C2.85613 12.7107 3.38534 13.9883 2.82752 15.0124L2.6158 15.4011C1.74277 17.0038 3.49615 18.7572 5.09891 17.8842L5.4876 17.6725C6.51169 17.1147 7.78934 17.6439 8.11904 18.7625L8.24417 19.187C8.76017 20.9377 11.2398 20.9377 11.7558 19.187L11.881 18.7625C12.2107 17.6439 13.4883 17.1147 14.5124 17.6725L14.9011 17.8842C16.5038 18.7572 18.2572 17.0038 17.3842 15.4011L17.1725 15.0124C16.6147 13.9883 17.1439 12.7107 18.2625 12.381L18.687 12.2558C20.4377 11.7398 20.4377 9.26017 18.687 8.74417L18.2625 8.61904C17.1439 8.28934 16.6147 7.01169 17.1725 5.9876L17.3842 5.59891C18.2572 3.99615 16.5038 2.24277 14.9011 3.1158L14.5124 3.32752C13.4883 3.88534 12.2107 3.35612 11.881 2.23754L11.7558 1.81298ZM10 14.161C7.97808 14.161 6.33898 12.5219 6.33898 10.5C6.33898 8.47808 7.97808 6.83898 10 6.83898C12.0219 6.83898 13.661 8.47808 13.661 10.5C13.661 12.5219 12.0219 14.161 10 14.161Z" />
            </svg></div>
        <div class="mr-5 w-5 h-5 my-auto"><svg xmlns="http://www.w3.org/2000/svg"
                class="my-auto @if (request()->routeIs('tenant-*')) fill-white-50 @endif" width="20" height="21"
                viewBox="0 0 20 21">
                <path d="M10 20.5C11.3807 20.5 12.5 19.3807 12.5 18H7.5C7.5 19.3807 8.61929 20.5 10 20.5Z" />
                <path
                    d="M11.2439 1.87379C11.248 1.83307 11.25 1.79177 11.25 1.75C11.25 1.05964 10.6904 0.5 10 0.5C9.30964 0.5 8.75 1.05964 8.75 1.75C8.75 1.79178 8.75205 1.83308 8.75605 1.8738C5.90025 2.45056 3.75003 4.97417 3.75003 8C3.75003 9.37201 3.125 15.5 1.25 16.75H18.75C16.875 15.5 16.25 9.37201 16.25 8C16.25 4.97415 14.0998 2.45053 11.2439 1.87379Z" />
            </svg></div>
        <div class="mr-5 ">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="flex align-middle items-center gap-2 focus:ring-4 focus:outline-none focus:ring-blue-300 "
                type="button">
                <span class="my-auto mr-2 font-medium @if (request()->routeIs('tenant-*')) text-white-50 @endif">
                    {{Auth::user()->name}}
                </span>
                <img class="rounded-full w-10 h-10" src="{{Auth()->user()->getFirstMediaUrl()}}" alt="">
                <svg width="15" height="15" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="@if (request()->routeIs('tenant-*')) fill-white-50 @else fill-black-400 @endif">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M1.02903 2.90403C1.15107 2.78199 1.34893 2.78199 1.47097 2.90403L5 6.43306L8.52903 2.90403C8.65107 2.78199 8.84893 2.78199 8.97097 2.90403C9.09301 3.02607 9.09301 3.22393 8.97097 3.34597L5.22097 7.09597C5.09893 7.21801 4.90107 7.21801 4.77903 7.09597L1.02903 3.34597C0.90699 3.22393 0.90699 3.02607 1.02903 2.90403Z" />
                </svg>

            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white-50 divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="block px-4 py-2 hover:bg-gray-100">
                            @csrf
                            <button type="submit">Sign
                                out</button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>
