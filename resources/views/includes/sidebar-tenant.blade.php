<aside id="separator-sidebar"
    class="fixed top-0 left-0 z-40 w-fit p-8 h-screen transition-transform -translate-x-full lg:translate-x-0"
    aria-label="Sidebar">
    <div class="bg-white-50 rounded-3xl h-full mr-10">
        <div class="flex justify-center mb-2 pt-3">
            <img src="{{ asset('/assets/img/logo.svg') }}" alt="">
        </div>
        <hr>
        <div class="px-4 py-2">
            <p class="text-gray-400 text-xs font-semibold">PAGES</p>
        </div>
        <a href="{{ route('tenant-index', Auth::user()->tenant->id) }}">
            <div
                class="flex px-5 py-4 mx-5  @if (request()->route()->named('tenant-index')) bg-red-500 text-white-50 @endif rounded-xl align-middle w-64">
                <div class="my-auto mr-5">
                    <svg width="16" height="16" viewBox="0 0 16 16"
                        class="@if (request()->route()->named('tenant-index')) fill-white-50 @endif"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="grid-1x2">
                            <path id="Vector (Stroke)"
                                d="M6 1H1L1 15H6V1ZM15 1H10V6H15V1ZM15 10V15H10V10H15ZM0 1C0 0.447715 0.447715 0 1 0H6C6.55228 0 7 0.447715 7 1V15C7 15.5523 6.55228 16 6 16H1C0.447715 16 0 15.5523 0 15V1ZM9 1C9 0.447715 9.44772 0 10 0H15C15.5523 0 16 0.447715 16 1V6C16 6.55228 15.5523 7 15 7H10C9.44772 7 9 6.55228 9 6V1ZM10 9C9.44772 9 9 9.44772 9 10V15C9 15.5523 9.44772 16 10 16H15C15.5523 16 16 15.5523 16 15V10C16 9.44772 15.5523 9 15 9H10Z" />
                        </g>
                    </svg>
                </div>
                <p class="my-auto text-lg text-white">Dashboard</p>
            </div>
        </a>
        <a href="{{ route('tenant-order-index', Auth::user()->tenant->id) }}">
            <div
                class="flex px-5 py-4 mx-5 rounded-xl align-middle @if (request()->routeIs('tenant-order-*')) bg-red-500 text-white-50 @endif">
                <div class="my-auto mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                        class="@if (request()->routeIs('tenant-order-*')) fill-white-50 @endif">
                        <path
                            d="M0 0.6875C0 0.37684 0.25184 0.125 0.5625 0.125H2.25C2.50811 0.125 2.7331 0.300667 2.79571 0.551074L3.25169 2.375H16.3125C16.4798 2.375 16.6385 2.4495 16.7453 2.57827C16.8522 2.70703 16.8962 2.87669 16.8654 3.04116L15.1779 12.0412C15.128 12.3072 14.8957 12.5 14.625 12.5H13.5H5.625H4.5C4.22932 12.5 3.99702 12.3072 3.94713 12.0412L2.26273 3.05765L1.81081 1.25H0.5625C0.25184 1.25 0 0.99816 0 0.6875ZM3.49027 3.5L4.96683 11.375H14.1582L15.6347 3.5H3.49027ZM5.625 12.5C4.38236 12.5 3.375 13.5074 3.375 14.75C3.375 15.9926 4.38236 17 5.625 17C6.86764 17 7.875 15.9926 7.875 14.75C7.875 13.5074 6.86764 12.5 5.625 12.5ZM13.5 12.5C12.2574 12.5 11.25 13.5074 11.25 14.75C11.25 15.9926 12.2574 17 13.5 17C14.7426 17 15.75 15.9926 15.75 14.75C15.75 13.5074 14.7426 12.5 13.5 12.5ZM5.625 13.625C6.24632 13.625 6.75 14.1287 6.75 14.75C6.75 15.3713 6.24632 15.875 5.625 15.875C5.00368 15.875 4.5 15.3713 4.5 14.75C4.5 14.1287 5.00368 13.625 5.625 13.625ZM13.5 13.625C14.1213 13.625 14.625 14.1287 14.625 14.75C14.625 15.3713 14.1213 15.875 13.5 15.875C12.8787 15.875 12.375 15.3713 12.375 14.75C12.375 14.1287 12.8787 13.625 13.5 13.625Z" />
                    </svg>
                </div>
                <p class="my-auto text-lg">Order</p>
            </div>
        </a>
        <a href="{{ route('tenant-product-index', Auth::user()->tenant->id) }}">
            <div
                class="flex px-5 py-4 mx-5 rounded-xl align-middle @if (request()->routeIs('tenant-product-*')) bg-red-500 text-white-50 @endif">
                <div class="my-auto mr-5">
                    <svg width="16" height="16" viewBox="0 0 16 16"
                        class="@if (request()->routeIs('tenant-product-*')) fill-white-50 @endif"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.1857 1.11279C8.06649 1.06511 7.93351 1.06511 7.8143 1.11279L1.84629 3.49999L4.25 4.46148L10.4037 1.99999L8.1857 1.11279ZM11.75 2.53851L5.59629 4.99999L8 5.96148L14.1537 3.49999L11.75 2.53851ZM15 4.23851L8.5 6.83851V14.7615L15 12.1615V4.23851ZM7.5 14.7615V6.83851L1 4.23851V12.1615L7.5 14.7615ZM7.44291 0.184311C7.80053 0.0412648 8.19947 0.0412647 8.55709 0.184311L15.6857 3.03575C15.8755 3.11169 16 3.29554 16 3.49999V12.1615C16 12.5704 15.751 12.9381 15.3714 13.09L8.1857 15.9642C8.06649 16.0119 7.93351 16.0119 7.8143 15.9642L0.628609 13.09C0.248951 12.9381 0 12.5704 0 12.1615V3.49999C0 3.29554 0.124475 3.11169 0.314305 3.03575L7.44291 0.184311Z" />
                    </svg>
                </div>
                <p class="my-auto text-lg">Product</p>
            </div>
        </a>
        <a href="{{ route('tenant-category-index', Auth::user()->tenant->id) }}">
            <div
                class="flex px-5 py-4 mx-5 rounded-xl align-middle @if (request()->routeIs('tenant-category-*')) bg-red-500 text-white-50 @endif">
                <div class="my-auto mr-5">
                    <svg width="20" height="20" viewBox="0 0 20 20"
                        class="@if (request()->routeIs('tenant-category-*')) fill-white-50 @endif"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.5 5.625C7.5 6.66053 6.66053 7.5 5.625 7.5C4.58947 7.5 3.75 6.66053 3.75 5.625C3.75 4.58947 4.58947 3.75 5.625 3.75C6.66053 3.75 7.5 4.58947 7.5 5.625ZM6.25 5.625C6.25 5.27982 5.97018 5 5.625 5C5.27982 5 5 5.27982 5 5.625C5 5.97018 5.27982 6.25 5.625 6.25C5.97018 6.25 6.25 5.97018 6.25 5.625Z" />
                        <path
                            d="M2.5 1.25H8.23223C8.56375 1.25 8.8817 1.3817 9.11612 1.61612L17.8661 10.3661C18.3543 10.8543 18.3543 11.6457 17.8661 12.1339L12.1339 17.8661C11.6457 18.3543 10.8543 18.3543 10.3661 17.8661L1.61612 9.11612C1.3817 8.8817 1.25 8.56375 1.25 8.23223V2.5C1.25 1.80964 1.80964 1.25 2.5 1.25ZM2.5 8.23223L11.25 16.9822L16.9822 11.25L8.23223 2.5L2.5 2.5L2.5 8.23223Z" />
                    </svg>
                </div>
                <p class="my-auto text-lg">Category</p>
            </div>
        </a>
        <a href="{{ route('tenant-desk-index', Auth::user()->tenant->id) }}">
            <div
                class="flex px-5 py-4 mx-5 rounded-xl align-middle @if (request()->routeIs('tenant-desk-*')) bg-red-500 text-white-50 @endif">
                <div class="my-auto mr-5">
                    <svg width="16" height="15" viewBox="0 0 16 15"
                        class="@if (request()->routeIs('tenant-desk-*')) fill-white-50 @endif"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 1.5C0 0.671573 0.671573 0 1.5 0H14.5C15.3284 0 16 0.671573 16 1.5V3.5C16 4.32843 15.3284 5 14.5 5H1.5C0.671573 5 0 4.32843 0 3.5V1.5ZM1.5 1C1.22386 1 1 1.22386 1 1.5V3.5C1 3.77614 1.22386 4 1.5 4H14.5C14.7761 4 15 3.77614 15 3.5V1.5C15 1.22386 14.7761 1 14.5 1H1.5Z" />
                        <path
                            d="M2 2.5C2 2.22386 2.22386 2 2.5 2H5.5C5.77614 2 6 2.22386 6 2.5C6 2.77614 5.77614 3 5.5 3H2.5C2.22386 3 2 2.77614 2 2.5Z" />
                        <path
                            d="M12.8232 2.82322L12.4268 2.42678C12.2693 2.26929 12.3808 2 12.6036 2H13.3964C13.6192 2 13.7307 2.26929 13.5732 2.42678L13.1768 2.82322C13.0791 2.92085 12.9209 2.92085 12.8232 2.82322Z" />
                        <path
                            d="M0 8C0 6.89543 0.895431 6 2 6H14C15.1046 6 16 6.89543 16 8V13C16 14.1046 15.1046 15 14 15H2C0.895431 15 0 14.1046 0 13V8ZM1 11V13C1 13.5523 1.44772 14 2 14H14C14.5523 14 15 13.5523 15 13V11H1ZM15 10V8C15 7.44772 14.5523 7 14 7H2C1.44772 7 1 7.44772 1 8V10H15ZM2 8.5C2 8.22386 2.22386 8 2.5 8H11.5C11.7761 8 12 8.22386 12 8.5C12 8.77614 11.7761 9 11.5 9H2.5C2.22386 9 2 8.77614 2 8.5ZM2 12.5C2 12.2239 2.22386 12 2.5 12H8.5C8.77614 12 9 12.2239 9 12.5C9 12.7761 8.77614 13 8.5 13H2.5C2.22386 13 2 12.7761 2 12.5Z" />
                    </svg>
                </div>
                <p class="my-auto text-lg">Desk</p>
            </div>
        </a>
        <a href="{{ route('tenant-service-payment-index', Auth::user()->tenant->id) }}">
            <div
                class="flex px-5 py-4 mx-5 rounded-xl align-middle @if (request()->routeIs('tenant-service-payment-*')) bg-red-500 text-white-50 @endif">
                <div class="my-auto mr-5">
                    <svg width="18" height="18" viewBox="0 0 18 18"
                        class="@if (request()->routeIs('tenant-service-payment-*')) fill-white-50 @endif"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.75 3.375C16.3713 3.375 16.875 3.87868 16.875 4.5V13.5C16.875 14.1213 16.3713 14.625 15.75 14.625H2.25C1.62868 14.625 1.125 14.1213 1.125 13.5V4.5C1.125 3.87868 1.62868 3.375 2.25 3.375H15.75ZM2.25 2.25C1.00736 2.25 0 3.25736 0 4.5V13.5C0 14.7426 1.00736 15.75 2.25 15.75H15.75C16.9926 15.75 18 14.7426 18 13.5V4.5C18 3.25736 16.9926 2.25 15.75 2.25H2.25Z" />
                        <path
                            d="M2.25 6.1875C2.25 5.87684 2.50184 5.625 2.8125 5.625H5.0625C5.37316 5.625 5.625 5.87684 5.625 6.1875V7.3125C5.625 7.62316 5.37316 7.875 5.0625 7.875H2.8125C2.50184 7.875 2.25 7.62316 2.25 7.3125V6.1875Z" />
                        <path
                            d="M2.25 9.5625C2.25 9.25184 2.50184 9 2.8125 9H8.4375C8.74816 9 9 9.25184 9 9.5625C9 9.87316 8.74816 10.125 8.4375 10.125H2.8125C2.50184 10.125 2.25 9.87316 2.25 9.5625ZM2.25 11.8125C2.25 11.5018 2.50184 11.25 2.8125 11.25H3.9375C4.24816 11.25 4.5 11.5018 4.5 11.8125C4.5 12.1232 4.24816 12.375 3.9375 12.375H2.8125C2.50184 12.375 2.25 12.1232 2.25 11.8125ZM5.625 11.8125C5.625 11.5018 5.87684 11.25 6.1875 11.25H7.3125C7.62316 11.25 7.875 11.5018 7.875 11.8125C7.875 12.1232 7.62316 12.375 7.3125 12.375H6.1875C5.87684 12.375 5.625 12.1232 5.625 11.8125ZM9 11.8125C9 11.5018 9.25184 11.25 9.5625 11.25H10.6875C10.9982 11.25 11.25 11.5018 11.25 11.8125C11.25 12.1232 10.9982 12.375 10.6875 12.375H9.5625C9.25184 12.375 9 12.1232 9 11.8125ZM12.375 11.8125C12.375 11.5018 12.6268 11.25 12.9375 11.25H14.0625C14.3732 11.25 14.625 11.5018 14.625 11.8125C14.625 12.1232 14.3732 12.375 14.0625 12.375H12.9375C12.6268 12.375 12.375 12.1232 12.375 11.8125Z" />
                    </svg>

                </div>
                <p class="my-auto text-lg">Service Payment</p>
            </div>
        </a>
        <a href="{{ route('tenant-waiter-index', Auth::user()->tenant->id) }}">
            <div
                class="flex px-5 py-4 mx-5 rounded-xl align-middle @if (request()->routeIs('tenant-waiter-*')) bg-red-500 text-white-50 @endif">
                <div class="my-auto mr-5">
                    <svg width="18" height="16" viewBox="0 0 18 16"
                        class="@if (request()->routeIs('tenant-waiter-*')) fill-white-50 @endif"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.625 8.75C6.86764 8.75 7.875 7.74264 7.875 6.5C7.875 5.25736 6.86764 4.25 5.625 4.25C4.38236 4.25 3.375 5.25736 3.375 6.5C3.375 7.74264 4.38236 8.75 5.625 8.75Z" />
                        <path
                            d="M10.125 5.9375C10.125 5.62684 10.3768 5.375 10.6875 5.375H15.1875C15.4982 5.375 15.75 5.62684 15.75 5.9375C15.75 6.24816 15.4982 6.5 15.1875 6.5H10.6875C10.3768 6.5 10.125 6.24816 10.125 5.9375Z" />
                        <path
                            d="M10.125 8.75C10.125 8.43934 10.3768 8.1875 10.6875 8.1875H15.1875C15.4982 8.1875 15.75 8.43934 15.75 8.75C15.75 9.06066 15.4982 9.3125 15.1875 9.3125H10.6875C10.3768 9.3125 10.125 9.06066 10.125 8.75Z" />
                        <path
                            d="M11.25 11.5625C11.25 11.2518 11.5018 11 11.8125 11H15.1875C15.4982 11 15.75 11.2518 15.75 11.5625C15.75 11.8732 15.4982 12.125 15.1875 12.125H11.8125C11.5018 12.125 11.25 11.8732 11.25 11.5625Z" />
                        <path
                            d="M2.25 2C1.00736 2 0 3.00736 0 4.25V13.25C0 14.4926 1.00736 15.5 2.25 15.5H15.75C16.9926 15.5 18 14.4926 18 13.25V4.25C18 3.00736 16.9926 2 15.75 2H2.25ZM1.125 4.25C1.125 3.62868 1.62868 3.125 2.25 3.125H15.75C16.3713 3.125 16.875 3.62868 16.875 4.25V13.25C16.875 13.8713 16.3713 14.375 15.75 14.375H10.0794C10.1095 14.1913 10.125 14.0035 10.125 13.8125C10.125 11.6379 8.11028 9.875 5.625 9.875C3.2779 9.875 1.35049 11.4473 1.14342 13.4538C1.13132 13.3877 1.125 13.3196 1.125 13.25V4.25Z" />
                    </svg>
                </div>
                <p class="my-auto text-lg">Waiter</p>
            </div>
        </a>
        <a href="{{ route('tenant-setting', Auth::user()->tenant->id) }}">
            <div
                class="flex px-5 py-4 mx-5 rounded-xl align-middle @if (request()->routeIs('tenant-setting')) bg-red-500 text-white-50 @endif">
                <div class="my-auto mr-5">
                    <svg width="18" height="18" viewBox="0 0 18 18"
                        class="@if (request()->routeIs('tenant-setting')) fill-white-50 @endif"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.00004 5.34849C6.98338 5.34849 5.34856 6.98331 5.34856 8.99997C5.34856 11.0166 6.98338 12.6515 9.00004 12.6515C11.0167 12.6515 12.6515 11.0166 12.6515 8.99997C12.6515 6.98331 11.0167 5.34849 9.00004 5.34849ZM6.47356 8.99997C6.47356 7.60463 7.6047 6.47349 9.00004 6.47349C10.3954 6.47349 11.5265 7.60463 11.5265 8.99997C11.5265 10.3953 10.3954 11.5265 9.00004 11.5265C7.6047 11.5265 6.47356 10.3953 6.47356 8.99997Z" />
                        <path
                            d="M11.021 1.5113C10.4271 -0.503767 7.57291 -0.503765 6.97897 1.5113L6.87339 1.86952C6.69652 2.46959 6.01111 2.75349 5.46173 2.45424L5.13377 2.27561C3.28893 1.27072 1.27072 3.28894 2.27561 5.13378L2.45424 5.46173C2.75349 6.01111 2.46959 6.69652 1.86952 6.87339L1.5113 6.97897C-0.503767 7.57291 -0.503765 10.4271 1.5113 11.021L1.86952 11.1266C2.46959 11.3035 2.75349 11.9889 2.45424 12.5383L2.27561 12.8662C1.27072 14.7111 3.28893 16.7293 5.13377 15.7244L5.46173 15.5458C6.01111 15.2465 6.69652 15.5304 6.87339 16.1305L6.97897 16.4887C7.57291 18.5038 10.4271 18.5038 11.021 16.4887L11.1266 16.1305C11.3035 15.5304 11.9889 15.2465 12.5383 15.5458L12.8662 15.7244C14.7111 16.7293 16.7293 14.7111 15.7244 12.8662L15.5458 12.5383C15.2465 11.9889 15.5304 11.3035 16.1305 11.1266L16.4887 11.021C18.5038 10.4271 18.5038 7.57291 16.4887 6.97897L16.1305 6.87339C15.5304 6.69652 15.2465 6.01111 15.5458 5.46173L15.7244 5.13377C16.7293 3.28893 14.7111 1.27072 12.8662 2.27561L12.5383 2.45424C11.9889 2.75349 11.3035 2.46959 11.1266 1.86952L11.021 1.5113ZM8.05807 1.82936C8.33488 0.890213 9.66512 0.890213 9.94193 1.82936L10.0475 2.18758C10.427 3.47512 11.8976 4.08427 13.0764 3.44219L13.4044 3.26355C14.2642 2.79521 15.2048 3.73583 14.7364 4.59564L14.5578 4.92359C13.9157 6.10237 14.5249 7.57299 15.8124 7.95249L16.1706 8.05807C17.1098 8.33488 17.1098 9.66512 16.1706 9.94193L15.8124 10.0475C14.5249 10.427 13.9157 11.8976 14.5578 13.0764L14.7364 13.4044C15.2048 14.2642 14.2642 15.2048 13.4044 14.7365L13.0764 14.5578C11.8976 13.9157 10.427 14.5249 10.0475 15.8124L9.94193 16.1706C9.66512 17.1098 8.33488 17.1098 8.05807 16.1706L7.95249 15.8124C7.57299 14.5249 6.10237 13.9157 4.92359 14.5578L4.59564 14.7365C3.73583 15.2048 2.79521 14.2642 3.26355 13.4044L3.44219 13.0764C4.08427 11.8976 3.47512 10.427 2.18758 10.0475L1.82936 9.94193C0.890213 9.66512 0.890213 8.33488 1.82936 8.05807L2.18758 7.95249C3.47512 7.57299 4.08427 6.10237 3.44219 4.92359L3.26355 4.59564C2.79521 3.73583 3.73583 2.79521 4.59564 3.26355L4.92359 3.44219C6.10237 4.08427 7.57299 3.47512 7.95249 2.18758L8.05807 1.82936Z" />
                    </svg>

                </div>
                <p class="my-auto text-lg">Setting</p>
            </div>
        </a>
    </div>
</aside>
