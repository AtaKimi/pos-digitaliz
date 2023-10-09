@extends('layouts.admin')

@section('content')
    <div class="pb-5">
        {{-- header --}}
        <div class="rounded-2xl overflow-hidden shadow-lg bg-white-50 mb-5">
            <div class="p-4">
                <div class="flex items-center">
                    <div class="mr-4 bg-yellow-50 rounded-xl p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <path
                                d="M13.625 2.6875H2.6875L2.6875 33.3125H13.625V2.6875ZM33.3125 2.6875H22.375V13.625H33.3125V2.6875ZM33.3125 22.375V33.3125H22.375V22.375H33.3125ZM0.5 2.6875C0.5 1.47938 1.47938 0.5 2.6875 0.5H13.625C14.8331 0.5 15.8125 1.47938 15.8125 2.6875V33.3125C15.8125 34.5206 14.8331 35.5 13.625 35.5H2.6875C1.47938 35.5 0.5 34.5206 0.5 33.3125V2.6875ZM20.1875 2.6875C20.1875 1.47938 21.1669 0.5 22.375 0.5H33.3125C34.5206 0.5 35.5 1.47938 35.5 2.6875V13.625C35.5 14.8331 34.5206 15.8125 33.3125 15.8125H22.375C21.1669 15.8125 20.1875 14.8331 20.1875 13.625V2.6875ZM22.375 20.1875C21.1669 20.1875 20.1875 21.1669 20.1875 22.375V33.3125C20.1875 34.5206 21.1669 35.5 22.375 35.5H33.3125C34.5206 35.5 35.5 34.5206 35.5 33.3125V22.375C35.5 21.1669 34.5206 20.1875 33.3125 20.1875H22.375Z"
                                fill="#FDC55E" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-xl text-gray-900">Dashboard</p>
                        <p class="text-gray-600 hidden md:block">Akses menu dan informasi penting lainnya disini</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- header end --}}

        {{-- cards --}}
        <div class="flex flex-col md:flex-row gap-5 mb-5">
            {{-- card 1 --}}
            <div class="rounded-xl overflow-hidden shadow-lg w-full relative bg-white-50">
                <div class="p-4">
                    <div class="flex gap-2 items-center bg-orange-100  rounded-full p-1 mb-3 w-fit">
                        <span class="bg-yellow-400 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19"
                                fill="none">
                                <path
                                    d="M3.64961 2.32549C3.8574 2.08306 4.16075 1.94354 4.48004 1.94354H13.8207C14.14 1.94354 14.4434 2.08306 14.6512 2.32549L17.5054 5.65544C17.7603 5.95279 17.9004 6.33151 17.9004 6.72315V7.00214C17.9004 8.43678 16.7374 9.59979 15.3027 9.59979C14.4691 9.59979 13.7273 9.20715 13.252 8.59673C12.7766 9.20715 12.0348 9.59979 11.2012 9.59979C10.3676 9.59979 9.62571 9.20715 9.15039 8.59673C8.67507 9.20715 7.93319 9.59979 7.09961 9.59979C6.26602 9.59979 5.52415 9.20715 5.04883 8.59673C4.57351 9.20715 3.83163 9.59979 2.99805 9.59979C1.5634 9.59979 0.400391 8.43678 0.400391 7.00214V6.72315C0.400391 6.33151 0.540487 5.95279 0.79536 5.65544L3.64961 2.32549ZM5.5957 7.00214C5.5957 7.83272 6.26903 8.50604 7.09961 8.50604C7.93019 8.50604 8.60352 7.83272 8.60352 7.00214C8.60352 6.70011 8.84836 6.45526 9.15039 6.45526C9.45242 6.45526 9.69727 6.70011 9.69727 7.00214C9.69727 7.83272 10.3706 8.50604 11.2012 8.50604C12.0318 8.50604 12.7051 7.83272 12.7051 7.00214C12.7051 6.70011 12.9499 6.45526 13.252 6.45526C13.554 6.45526 13.7988 6.70011 13.7988 7.00214C13.7988 7.83272 14.4721 8.50604 15.3027 8.50604C16.1333 8.50604 16.8066 7.83272 16.8066 7.00214V6.72315C16.8066 6.5926 16.7599 6.46636 16.675 6.36725L13.8207 3.03729H4.48004L1.6258 6.36725C1.54084 6.46636 1.49414 6.5926 1.49414 6.72315V7.00214C1.49414 7.83272 2.16746 8.50604 2.99805 8.50604C3.82863 8.50604 4.50195 7.83272 4.50195 7.00214C4.50195 6.70011 4.7468 6.45526 5.04883 6.45526C5.35086 6.45526 5.5957 6.70011 5.5957 7.00214ZM2.04102 10.1467C2.34305 10.1467 2.58789 10.3915 2.58789 10.6935V17.256H3.68164V11.7873C3.68164 11.1832 4.17133 10.6935 4.77539 10.6935H8.05664C8.6607 10.6935 9.15039 11.1832 9.15039 11.7873V17.256H15.7129V10.6935C15.7129 10.3915 15.9577 10.1467 16.2598 10.1467C16.5618 10.1467 16.8066 10.3915 16.8066 10.6935V17.256H17.3535C17.6555 17.256 17.9004 17.5009 17.9004 17.8029C17.9004 18.1049 17.6555 18.3498 17.3535 18.3498H0.947266C0.645235 18.3498 0.400391 18.1049 0.400391 17.8029C0.400391 17.5009 0.645235 17.256 0.947266 17.256H1.49414V10.6935C1.49414 10.3915 1.73898 10.1467 2.04102 10.1467ZM4.77539 17.256H8.05664V11.7873H4.77539V17.256ZM10.2441 11.7873C10.2441 11.1832 10.7338 10.6935 11.3379 10.6935H13.5254C14.1295 10.6935 14.6191 11.1832 14.6191 11.7873V15.0685C14.6191 15.6726 14.1295 16.1623 13.5254 16.1623H11.3379C10.7338 16.1623 10.2441 15.6726 10.2441 15.0685V11.7873ZM13.5254 11.7873H11.3379V15.0685H13.5254V11.7873Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <span class="text-black text-xs font-semibold mr-2">Total Tenant</span>
                    </div>
                    <div>
                        <p class="font-bold text-xl text-gray-900 mb-2">{{ $tenant_counter }}
                        </p>
                        <div class="flex items-center gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 12 11"
                                    fill="none">
                                    <path
                                        d="M4.75905 6.00979C4.15169 6.80391 3.57074 7.56466 2.98922 8.32578C2.49146 8.97567 1.9937 9.62456 1.49593 10.2725C1.33311 10.4835 1.13668 10.5488 0.915275 10.4637C0.693866 10.3786 0.562055 10.1735 0.513236 9.88364C0.46614 9.60169 0.548558 9.37035 0.69961 9.17126C1.38997 8.27041 2.07975 7.36932 2.76896 6.46797C3.27993 5.80108 3.79129 5.13457 4.30303 4.46843C4.58359 4.10474 4.90838 4.10287 5.1878 4.4628C5.57605 4.96272 5.96173 5.46639 6.34481 5.9738C6.38817 6.03079 6.41545 6.1084 6.44618 6.16839L9.67283 1.95185C9.62688 1.9481 9.58266 1.94173 9.53815 1.94135C9.16483 1.94135 8.7915 1.94623 8.41818 1.93835C8.1715 1.93348 7.9857 1.77713 7.88433 1.48431C7.78756 1.2046 7.81972 0.933149 7.97048 0.694689C8.02457 0.606309 8.09347 0.535329 8.17189 0.487224C8.25031 0.439119 8.33615 0.415174 8.42278 0.417236C9.31645 0.414611 10.2124 0.412362 11.1072 0.418361C11.4452 0.42061 11.6954 0.755804 11.6965 1.19635C11.6994 2.35866 11.6994 3.52096 11.6965 4.68327C11.6965 5.12494 11.4315 5.47064 11.1104 5.46689C10.7894 5.46314 10.5418 5.13319 10.5361 4.69039C10.5306 4.21572 10.5346 3.74068 10.5346 3.26563V3.06879L10.4824 3.02455C10.4499 3.09136 10.4136 3.1549 10.3738 3.21464C9.23126 4.70914 8.08784 6.20251 6.94356 7.69476C6.64577 8.08282 6.32385 8.08357 6.0272 7.69814C5.63761 7.19172 5.24868 6.68368 4.86043 6.17402C4.82711 6.13015 4.80041 6.07616 4.75905 6.00979Z"
                                        fill="#04CE00" />
                                </svg>
                            </span>
                            <p class="text-lime-600 text-[10px]">+10</p>
                            <p class="text-[10px]">vs last year</p>

                        </div>

                    </div>
                </div>
            </div>

            {{-- card 2 --}}
            <div class="rounded-xl overflow-hidden shadow-lg w-full bg-white-50">
                <div class="p-4">
                    <div class="flex gap-2 items-center bg-green-100  rounded-full p-1 mb-3 w-fit">
                        <span class="bg-green-400 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 21 22"
                                fill="none">
                                <path
                                    d="M0 7.19385C0 10.2749 2.19651 12.843 5.10905 13.4175C5.19341 12.4873 5.43223 11.6017 5.79965 10.7866C4.68755 10.4119 3.97385 9.55908 3.80493 8.34949H3.17188V7.80855H3.76273V7.25778C3.76273 7.19876 3.76273 7.13975 3.768 7.08566H3.17188V6.54472H3.82076C4.10563 4.96124 5.34537 4.02197 7.20761 4.02197C7.60854 4.02197 7.95672 4.06131 8.24687 4.13016V5.05959C7.96728 4.99075 7.62437 4.95632 7.21288 4.95632C6.047 4.95632 5.26096 5.54644 5.01301 6.54472H7.445V7.08566H4.93388C4.92861 7.14467 4.92861 7.2086 4.92861 7.27253V7.80855H7.445V8.34949H4.98664C5.13631 9.11336 5.58057 9.65705 6.26108 9.90861C7.58313 7.72379 9.89062 6.20192 12.5674 5.95915C11.9929 3.04661 9.42482 0.850098 6.34375 0.850098C2.84019 0.850098 0 3.69029 0 7.19385ZM20.3 14.172C20.3 18.0259 17.1758 21.1501 13.3219 21.1501C9.46796 21.1501 6.34375 18.0259 6.34375 14.172C6.34375 10.3181 9.46796 7.19385 13.3219 7.19385C17.1758 7.19385 20.3 10.3181 20.3 14.172ZM10.4672 15.8494C10.5543 16.908 11.4139 17.7332 12.9589 17.8309V18.6126H13.6442V17.8254C15.2415 17.7169 16.1766 16.8863 16.1766 15.6811C16.1766 14.5845 15.4622 14.02 14.1844 13.7268L13.6442 13.602V11.4739C14.3296 11.5499 14.7652 11.9137 14.8697 12.4185H16.072C15.9849 11.3979 15.0846 10.5999 13.6442 10.5131V9.73135H12.9589V10.5294C11.594 10.6596 10.6647 11.4577 10.6647 12.5868C10.6647 13.5857 11.3558 14.2208 12.5058 14.4814L12.9589 14.59V16.8483C12.2561 16.7451 11.7914 16.3706 11.6869 15.8494H10.4672ZM12.9531 13.4445C12.2793 13.2925 11.9134 12.9831 11.9134 12.5162C11.9134 11.9951 12.3084 11.6042 12.9589 11.4902V13.4445H12.9531ZM13.743 14.7691C14.5619 14.9537 14.9394 15.2523 14.9394 15.7788C14.9394 16.3814 14.469 16.794 13.6442 16.87V14.7474L13.743 14.7691Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <span class="text-black text-xs font-semibold mr-2">Total Pendapatan Service</span>
                    </div>
                    <div>
                        <p class="font-bold text-xl text-gray-900 mb-2">
                            Rp.{{ number_format($total_service_paid_all, 2, ',', '.') }}</p>
                        <div class="flex items-center gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 12 11"
                                    fill="none">
                                    <path
                                        d="M4.75905 6.00979C4.15169 6.80391 3.57074 7.56466 2.98922 8.32578C2.49146 8.97567 1.9937 9.62456 1.49593 10.2725C1.33311 10.4835 1.13668 10.5488 0.915275 10.4637C0.693866 10.3786 0.562055 10.1735 0.513236 9.88364C0.46614 9.60169 0.548558 9.37035 0.69961 9.17126C1.38997 8.27041 2.07975 7.36932 2.76896 6.46797C3.27993 5.80108 3.79129 5.13457 4.30303 4.46843C4.58359 4.10474 4.90838 4.10287 5.1878 4.4628C5.57605 4.96272 5.96173 5.46639 6.34481 5.9738C6.38817 6.03079 6.41545 6.1084 6.44618 6.16839L9.67283 1.95185C9.62688 1.9481 9.58266 1.94173 9.53815 1.94135C9.16483 1.94135 8.7915 1.94623 8.41818 1.93835C8.1715 1.93348 7.9857 1.77713 7.88433 1.48431C7.78756 1.2046 7.81972 0.933149 7.97048 0.694689C8.02457 0.606309 8.09347 0.535329 8.17189 0.487224C8.25031 0.439119 8.33615 0.415174 8.42278 0.417236C9.31645 0.414611 10.2124 0.412362 11.1072 0.418361C11.4452 0.42061 11.6954 0.755804 11.6965 1.19635C11.6994 2.35866 11.6994 3.52096 11.6965 4.68327C11.6965 5.12494 11.4315 5.47064 11.1104 5.46689C10.7894 5.46314 10.5418 5.13319 10.5361 4.69039C10.5306 4.21572 10.5346 3.74068 10.5346 3.26563V3.06879L10.4824 3.02455C10.4499 3.09136 10.4136 3.1549 10.3738 3.21464C9.23126 4.70914 8.08784 6.20251 6.94356 7.69476C6.64577 8.08282 6.32385 8.08357 6.0272 7.69814C5.63761 7.19172 5.24868 6.68368 4.86043 6.17402C4.82711 6.13015 4.80041 6.07616 4.75905 6.00979Z"
                                        fill="#04CE00" />
                                </svg>
                            </span>
                            <p class="text-lime-600 text-[10px]">2,5 %</p>
                            <p class="text-[10px]">vs last year</p>

                        </div>

                    </div>
                </div>
            </div>

            {{-- card 3 --}}
            <div class="rounded-xl overflow-hidden shadow-lg w-full bg-white-50">
                <div class="p-4">
                    <div class="flex gap-2 items-center bg-red-100  rounded-full p-1 mb-3 w-fit">
                        <span class="bg-red-400 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.6949 18.6688C16.3045 18.6688 18.4199 16.5534 18.4199 13.9438C18.4199 11.3343 16.3045 9.21882 13.6949 9.21882C11.0854 9.21882 8.96992 11.3343 8.96992 13.9438C8.96992 16.5534 11.0854 18.6688 13.6949 18.6688ZM19.6012 13.9438C19.6012 17.2058 16.9569 19.8501 13.6949 19.8501C10.433 19.8501 7.78867 17.2058 7.78867 13.9438C7.78867 10.6819 10.433 8.03757 13.6949 8.03757C16.9569 8.03757 19.6012 10.6819 19.6012 13.9438Z"
                                    fill="white" />
                                <path
                                    d="M11.8492 15.0594C11.9055 15.7634 12.4613 16.3121 13.4602 16.3771V16.8969H13.9033V16.3735C14.936 16.3013 15.5406 15.7489 15.5406 14.9475C15.5406 14.2182 15.0787 13.8427 14.2526 13.6478L13.9033 13.5648V12.1496C14.3465 12.2001 14.6281 12.442 14.6957 12.7777H15.473C15.4167 12.099 14.8346 11.5683 13.9033 11.5106V10.9907H13.4602V11.5214C12.5777 11.608 11.9769 12.1387 11.9769 12.8897C11.9769 13.5539 12.4238 13.9763 13.1673 14.1496L13.4602 14.2218V15.7236C13.0058 15.655 12.7054 15.4059 12.6378 15.0594H11.8492ZM13.4565 13.4601C13.0209 13.359 12.7843 13.1532 12.7843 12.8427C12.7843 12.4961 13.0396 12.2362 13.4602 12.1604V13.4601H13.4565ZM13.9672 14.3409C14.4967 14.4637 14.7408 14.6622 14.7408 15.0124C14.7408 15.4132 14.4366 15.6875 13.9033 15.7381V14.3265L13.9672 14.3409Z"
                                    fill="white" />
                                <path
                                    d="M1.88242 0.950073C1.23004 0.950073 0.701172 1.47894 0.701172 2.13132V11.5813C0.701172 12.2337 1.23004 12.7626 1.88242 12.7626H6.70542C6.77362 12.356 6.87643 11.9612 7.01071 11.5813H4.24492C4.24492 10.2766 3.18719 9.21882 1.88242 9.21882V4.49382C3.18719 4.49382 4.24492 3.4361 4.24492 2.13132H16.0574C16.0574 3.4361 17.1151 4.49382 18.4199 4.49382V8.66102C18.8689 9.06289 19.2664 9.52115 19.6012 10.0247V2.13132C19.6012 1.47894 19.0723 0.950073 18.4199 0.950073H1.88242Z"
                                    fill="white" />
                                <path
                                    d="M12.5117 6.95466C12.513 6.92205 12.5137 6.88926 12.5137 6.85632C12.5137 5.55155 11.4559 4.49382 10.1512 4.49382C8.8464 4.49382 7.78867 5.55155 7.78867 6.85632C7.78867 7.66489 8.19487 8.37859 8.81434 8.80449C9.81435 7.85452 11.0913 7.19336 12.5117 6.95466Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <span class="text-black text-xs font-semibold mr-2">Total service belum bayar</span>
                    </div>
                    <div>
                        <p class="font-bold text-xl text-gray-900 mb-2">
                            Rp.{{ number_format($total_service_unpaid_all, 2, ',', '.') }}</p>


                    </div>
                </div>
            </div>
        </div>

        {{-- cards end --}}

        {{-- charts --}}
        <div class="flex flex-col md:flex-row gap-5 mb-5 ">
            {{-- chart 1 --}}
            <div class="bg-white-50 rounded-xl shadow p-4 md:p-6 md:w-1/3 ">
                <div class="flex justify-between mb-5 items-center">
                    <div class="grid gap-4 ">
                        <div>
                            <h5 class="inline-flex items-center text-gray-500 leading-none text-xs font-normal mb-2">
                                Aktifitas
                            </h5>
                            <p class="text-gray-900 leading-none text-xl font-bold">Total Tenant</p>
                        </div>

                    </div>
                    <form action="{{ route('admin-index') }}" method="GET">
                        <div>
                            <button id="dropdownDefaultButton" data-dropdown-toggle="totalTenantFilter"
                                data-dropdown-placement="bottom" type="button"
                                class="px-3 py-2 inline-flex items-center text-xs text-gray-500 focus:outline-none bg-gray-100 rounded-full  hover:bg-gray-200 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-200">
                                {{ $totalTenantFilter }}
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="totalTenantFilter"
                                class="z-10 hidden bg-white-50 divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-xs text-gray-500" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <button type="submit" name="totalTenantFilter" value="Weekly"
                                            class="block px-4 py-2 hover:bg-gray-100 w-full text-start">Weekly</button>
                                    </li>
                                    <li>
                                        <button type="submit" name="totalTenantFilter" value="Monthly"
                                            class="block px-4 py-2 hover:bg-gray-100 w-full text-start">Monthly</button>
                                    </li>
                                    <li>
                                        <button type="submit" name="totalTenantFilter" value="Annually"
                                            class="block px-4 py-2 hover:bg-gray-100 w-full text-start">Annually</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>

                </div>



                <div id="column-chart"></div>

            </div>

            {{-- chart 2 --}}
            <div class="bg-white-50 rounded-xl shadow p-4 md:p-6 md:w-2/3">
                <div class="flex flex-col md:flex-row justify-between gap-7 mb-5 items-center">
                    <div class="flex flex-col md:flex-row gap-7 items-center">
                        <div>
                            <h5 class="inline-flex items-center text-xs text-gray-500 leading-none font-normal mb-2">
                                Total Pendapatan Service
                            </h5>
                            <p class="text-gray-900 text-xl leading-none font-bold">
                                RP.{{ number_format($total_service_paid_all, 0, '', '.') }}</p>
                        </div>
                        <div>
                            <h5 class="inline-flex items-center font-semibold leading-none mb-2">

                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 9"
                                    fill="none">
                                    <circle cx="3.72346" cy="4.63392" r="3.65119" fill="#04CE00" />
                                    <path
                                        d="M4.54271 4.24486L4.44473 4.34283C3.92048 4.86709 3.39617 5.3914 2.87181 5.91575C2.76573 6.02183 2.6404 6.04506 2.51522 5.98713C2.39463 5.93043 2.32845 5.82665 2.34602 5.70116C2.36181 5.6105 2.40459 5.52671 2.46876 5.46074C2.97574 4.94458 3.4893 4.435 4.00087 3.92342L4.09777 3.82652C4.06651 3.82118 4.03498 3.8175 4.00332 3.81552C3.7982 3.8146 3.59293 3.81659 3.38796 3.81399C3.22564 3.81215 3.11361 3.70042 3.11147 3.54513C3.10933 3.37578 3.21097 3.26222 3.38078 3.26115C3.85256 3.25809 4.32409 3.25774 4.79536 3.26008C4.98596 3.26115 5.09325 3.36417 5.09677 3.55262C5.10543 4.02043 5.11057 4.48829 5.1122 4.9562C5.11282 5.12769 5.00124 5.22856 4.83082 5.22719C4.67003 5.22566 4.56426 5.12234 4.55937 4.95574C4.55417 4.75796 4.55371 4.56002 4.55081 4.36209C4.55019 4.33091 4.54622 4.30034 4.54271 4.24486Z"
                                        fill="white" />
                                </svg>

                                <span class=" text-green-600 text-[10px] mr-1">
                                    1.3%
                                </span>
                                <span class="text-[10px] text-gray-500">
                                    VS LAST YEAR
                                </span>



                            </h5>
                        </div>
                    </div>
                    <div class="flex items-center border justify-between rounded-2xl p-1 gap-0 h-15">

                        </button>
                        <button type="button"
                            class="text-gray-900  hover:border-gray-200 bg-white-50 focus:ring-2 focus:outline-none focus:ring-gray-300 rounded-full text-sm font-medium  text-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17"
                                fill="none">
                                <path
                                    d="M6.8914 11.0022C6.8914 10.7141 7.12492 10.4806 7.41298 10.4806H10.5425C10.8305 10.4806 11.0641 10.7141 11.0641 11.0022C11.0641 11.2902 10.8305 11.5238 10.5425 11.5238H7.41298C7.12492 11.5238 6.8914 11.2902 6.8914 11.0022Z"
                                    fill="#2E2E2E" />
                                <path
                                    d="M4.80508 7.87269C4.80508 7.58463 5.0386 7.35111 5.32666 7.35111H12.6288C12.9169 7.35111 13.1504 7.58463 13.1504 7.87269C13.1504 8.16075 12.9169 8.39427 12.6288 8.39427H5.32666C5.0386 8.39427 4.80508 8.16075 4.80508 7.87269Z"
                                    fill="#2E2E2E" />
                                <path
                                    d="M2.71875 4.7432C2.71875 4.45514 2.95227 4.22162 3.24033 4.22162H14.7151C15.0032 4.22162 15.2367 4.45514 15.2367 4.7432C15.2367 5.03126 15.0032 5.26478 14.7151 5.26478H3.24033C2.95227 5.26478 2.71875 5.03126 2.71875 4.7432Z"
                                    fill="#2E2E2E" />
                            </svg>
                        </button>

                        <svg xmlns="http://www.w3.org/2000/svg" width="1" height="23" viewBox="0 0 1 23"
                            fill="none">
                            <path d="M0.336914 22.0762V0.712219" stroke="black" stroke-width="0.667625" />
                        </svg>


                        <button type="button"
                            class="text-gray-900   bg-white-50 hover:bg-gray-900 hover:text-white-50   rounded-xl text-xs font-medium  text-center p-2">Weekly</button>
                        <button type="button"
                            class="text-gray-900   bg-white-50 hover:bg-gray-900 hover:text-white-50   rounded-xl text-xs font-medium  text-center p-2">Monthly</button>
                        <button type="button"
                            class="text-white-50   bg-gray-900 hover:bg-gray-900 hover:text-white-50   rounded-xl text-xs font-medium  text-center p-2">Anually</button>

                    </div>
                </div>
                <div id="area-chart"></div>
            </div>
        </div>
        {{-- charts end --}}

        {{-- table --}}
        <div class="relative overflow-x-auto shadow-md rounded-xl bg-white-50 p-5">
            <div class="flex flex-wrap gap-5 p-5 justify-between">
                <h1 class="text-xl text-gray-900 font-bold">
                    Daftar Tagihan Terbaru
                </h1>
                <div class="pb-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block p-2 pl-10 text-sm text-gray-900 border-none focus:ring-0 rounded-lg w-80 bg-gray-100 placeholder-gray-400 "
                            placeholder="Search">
                    </div>
                </div>
            </div>

            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs border-b text-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tenant
                        </th>
                        <th scope="col" class="px-6 py-3">
                            User
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-between">
                                Jumlah
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-between">
                                Date
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tenant_service_payments as $service)
                        <tr class="bg-white-50 border-b hover:bg-gray-50">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <th scope="row" class="px-6 py-4">
                                <p class="text-xs font-normal">#{{ $service->tenant->code }}</p>
                                <h1 class="font-medium text-gray-900 whitespace-nowrap">
                                    {{ $service->tenant->name }}
                                </h1>
                            </th>
                            <th scope="row" class="px-6 py-4 gap-2 flex items-center">
                                <img class="rounded-full w-10 h-10"
                                    src="{{ $service->user->getFirstMediaUrl('default') }}" alt="">
                                <div>
                                    <h1 class="font-medium text-gray-900 whitespace-nowrap">
                                        {{ $service->user->name }}
                                    </h1>
                                    <p class="text-xs font-normal">{{ $service->user->email }}</p>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                Rp.{{ number_format($service->total, 2, ',', '.') }}
                            </td>
                            <td class="px-6 py-4">

                                <p class="whitespace-nowrap">
                                    {{ \Carbon\Carbon::parse($service->transfer_at)->format('d-m-Y') }}

                                </p>

                            </td>

                            <td class="px-6 py-4">
                                <a type="button" href="{{ route('admin-tenant-show', $service->tenant) }}"
                                    class="p-2 rounded-lg border hover:bg-yellow-50 border-yellow-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 17 17" fill="none">
                                        <path
                                            d="M16.4063 8.8988C16.4063 8.8988 13.4063 3.3988 8.40625 3.3988C3.40625 3.3988 0.40625 8.8988 0.40625 8.8988C0.40625 8.8988 3.40625 14.3988 8.40625 14.3988C13.4063 14.3988 16.4063 8.8988 16.4063 8.8988ZM1.57895 8.8988C1.63588 8.81201 1.70079 8.71558 1.77352 8.61122C2.10841 8.13073 2.60256 7.49171 3.23836 6.85591C4.52728 5.56699 6.28687 4.3988 8.40625 4.3988C10.5256 4.3988 12.2852 5.56699 13.5741 6.85591C14.2099 7.49171 14.7041 8.13073 15.039 8.61122C15.1117 8.71558 15.1766 8.81201 15.2336 8.8988C15.1766 8.98559 15.1117 9.08203 15.039 9.18639C14.7041 9.66687 14.2099 10.3059 13.5741 10.9417C12.2852 12.2306 10.5256 13.3988 8.40625 13.3988C6.28687 13.3988 4.52728 12.2306 3.23836 10.9417C2.60256 10.3059 2.10841 9.66687 1.77352 9.18639C1.70079 9.08203 1.63588 8.98559 1.57895 8.8988Z"
                                            fill="#FDC55E" />
                                        <path
                                            d="M8.40625 6.3988C7.02554 6.3988 5.90625 7.51809 5.90625 8.8988C5.90625 10.2795 7.02554 11.3988 8.40625 11.3988C9.78696 11.3988 10.9063 10.2795 10.9063 8.8988C10.9063 7.51809 9.78696 6.3988 8.40625 6.3988ZM4.90625 8.8988C4.90625 6.96581 6.47325 5.3988 8.40625 5.3988C10.3392 5.3988 11.9063 6.96581 11.9063 8.8988C11.9063 10.8318 10.3392 12.3988 8.40625 12.3988C6.47325 12.3988 4.90625 10.8318 4.90625 8.8988Z"
                                            fill="#FDC55E" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="55" class="text-center py-5">tidak ada data</td>
                        </tr>
                    @endforelse





                </tbody>
            </table>


            {{ $tenant_service_payments->withQueryString()->links()}}



        </div>

        {{-- end table --}}

    </div>


    <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
            const filledData = @json($filledData);
            const chartData = [];

            // Loop through filledData and build chartData array
            filledData.forEach(function(data) {
                chartData.push({
                    x: data.month,
                    y: data.count,
                });
            });

            const options = {
                colors: ["#1A56DB", "#FDBA8C"],
                series: [{
                        name: "Tenant",
                        color: "#1A56DB",
                        data: chartData,
                    },

                ],
                chart: {
                    type: "bar",
                    height: "200px",
                    fontFamily: "Inter, sans-serif",
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "70%",
                        borderRadiusApplication: "end",
                        borderRadius: 4,
                    },
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                    x: {
                        show: false,
                    },
                },
                states: {
                    hover: {
                        filter: {
                            type: "darken",
                            value: 1,
                        },
                    },
                },
                stroke: {
                    show: true,
                    width: 7,
                    colors: ["transparent"],
                },
                grid: {
                    show: true,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -14,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    floating: false,
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500'
                        }
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    show: true,
                },
                fill: {
                    opacity: 1,
                },
            }

            if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("column-chart"), options);
                chart.render();
            }
        });
    </script>

    {{-- <script>
        // Function to update the chart based on the selected filter
        function updateChart(filter) {
            // Fetch data from the server based on the selected filter
            // You can use AJAX or another method to fetch the updated data
            // For simplicity, let's assume you have a function fetchDataFromServer(filter) that returns the updated data
            const filledData = fetchDataFromServer(filter);

            // Build chartData array from the fetched data
            const chartData = filledData.map(function(data) {
                return {
                    x: data.month,
                    y: data.count,
                };
            });

            // Update the chart series data
            const chart = ApexCharts.getChartById('column-chart');
            chart.updateSeries([{
                name: "Tenant",
                color: "#1A56DB",
                data: chartData,
            }]);
        }

        // ApexCharts options and config
        window.addEventListener("load", function() {
            const filledData = @json($filledData);
            const chartData = filledData.map(function(data) {
                return {
                    x: data.month,
                    y: data.count,
                };
            });

            const options = {
                colors: ["#1A56DB", "#FDBA8C"],
                series: [{
                    name: "Tenant",
                    color: "#1A56DB",
                    data: chartData,
                }],
                // ... rest of your options ...
            };

            if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("column-chart"), options);
                chart.render();
            }
        });

        // Event listener for filter selection
        document.querySelectorAll('#lastDaysdropdown button').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                const selectedFilter = element.getAttribute('data-filter');
                updateChart(selectedFilter);
            });
        });
    </script> --}}


    <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
            let options = {
                chart: {
                    height: "70%",
                    type: "area",
                    fontFamily: "Inter, sans-serif",
                    dropShadow: {
                        enabled: false,
                    },
                    toolbar: {
                        show: false,
                    },
                },
                tooltip: {
                    enabled: true,
                    x: {
                        show: false,
                    },
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        opacityFrom: 0.55,
                        opacityTo: 0,
                        shade: "#1C64F2",
                        gradientToColors: ["#1C64F2"],
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: 3,
                },
                grid: {
                    show: true,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: 0
                    },
                },
                series: [{
                    name: "Services",
                    data: [17, 18, 16, 17, 20, 18, 19, 18, 19, 18, 17, 16, 20],
                    color: "#1A56DB",
                }, ],
                xaxis: {
                    categories: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AGU', 'SEP', 'OKT', 'NOV',
                        'DES',
                    ],
                    labels: {
                        show: true,
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    show: true,
                    opposite: true,
                },
            }

            if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("area-chart"), options);
                chart.render();
            }
        });
    </script>
@endsection
