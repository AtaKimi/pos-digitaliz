<aside id="separator-sidebar"
            class="fixed top-0 left-0 z-40 h-screen p-8 w-fit transition-transform -translate-x-full lg:translate-x-0"
            aria-label="Sidebar">
            <div class="bg-white-50 rounded-3xl mr-10 h-full">
                <div class="flex justify-center mb-2 pt-3">
                    <img src="{{ asset('/assets/img/logo.svg') }}" alt="">
                </div>
                <hr>
                <div class="px-4 py-2">
                    <p class="text-gray-400 text-xs font-semibold">PAGES</p>
                </div>
                <a href="{{ route('admin-index') }}">
                    <div
                        class="flex px-5 py-4 mx-5 @if (request()->route()->named('admin-index')) bg-yellow-500 @endif rounded-xl align-middle w-64">
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
                </a>
                <a href="{{ route('admin-tenant-management') }}">
                    <div
                        class="flex px-5 py-4 mx-5 @if (request()->route()->named('admin-tenant-management')) bg-yellow-500 @endif rounded-xl align-middle">
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
                </a>
            </div>
        </aside>