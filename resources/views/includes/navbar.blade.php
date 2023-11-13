<nav class="flex justify-between w-full mb-8 items-center">
    <div class="flex items-center">
        <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar"
            aria-controls="separator-sidebar" type="button"
            class=" p-2 mt-2 mr-2 text-sm text-gray-500  rounded-lg xl:hidden hover:bg-white fill-white hover:fill-red-500 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
    </div>
    <div class="sm:block hidden @if (request()->routeIs('tenant-*')) text-white-50 @endif">
        <p class="text-lg font-semibold">Dashboard</p>
    </div>
    <div class="flex align-middle">

        <div class="mr-5 ">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="flex align-middle items-center gap-2 focus:ring-4 focus:outline-none focus:ring-blue-300 "
                type="button">
                <span class="my-auto mr-2 font-medium @if (request()->routeIs('tenant-*')) text-white-50 @endif">
                    {{ Auth::user()->name }}
                </span>
                <img class="rounded-full w-10 h-10" src="{{ Auth()->user()->getFirstMediaUrl() }}" alt="">
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
