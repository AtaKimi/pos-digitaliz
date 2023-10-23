@extends('layouts.tenant')

@section('content')
    <div class="pb-10">
        {{-- Header --}}
        <div class="mb-5 overflow-hidden shadow-lg rounded-2xl bg-white-50">
            <div class="p-4">
                <div class="flex items-center">
                    <div class="p-5 mr-4 bg-red-50 rounded-xl">
                        <!-- Icon di sini -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <path
                                d="M13.625 2.6875H2.6875L2.6875 33.3125H13.625V2.6875ZM33.3125 2.6875H22.375V13.625H33.3125V2.6875ZM33.3125 22.375V33.3125H22.375V22.375H33.3125ZM0.5 2.6875C0.5 1.47938 1.47938 0.5 2.6875 0.5H13.625C14.8331 0.5 15.8125 1.47938 15.8125 2.6875V33.3125C15.8125 34.5206 14.8331 35.5 13.625 35.5H2.6875C1.47938 35.5 0.5 34.5206 0.5 33.3125V2.6875ZM20.1875 2.6875C20.1875 1.47938 21.1669 0.5 22.375 0.5H33.3125C34.5206 0.5 35.5 1.47938 35.5 2.6875V13.625C35.5 14.8331 34.5206 15.8125 33.3125 15.8125H22.375C21.1669 15.8125 20.1875 14.8331 20.1875 13.625V2.6875ZM22.375 20.1875C21.1669 20.1875 20.1875 21.1669 20.1875 22.375V33.3125C20.1875 34.5206 21.1669 35.5 22.375 35.5H33.3125C34.5206 35.5 35.5 34.5206 35.5 33.3125V22.375C35.5 21.1669 34.5206 20.1875 33.3125 20.1875H22.375Z"
                                fill="#F54748" />
                        </svg>
                    </div>
                    <div>
                        <!-- Title di sini -->
                        <p class="text-xl font-bold text-gray-900">Dashboard</p>
                        <!-- Subtitle di sini -->
                        <p class="text-gray-600">Akses menu dan informasi penting lainnya disini</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- card --}}
        <div class="flex flex-col gap-10 mb-5 md:flex-row">
            {{-- card 1 --}}
            <div class="relative w-full overflow-hidden shadow-lg rounded-2xl bg-white-50">
                <div class="p-4">
                    <div class="flex items-center gap-2 p-1 mb-3 rounded-full bg-yellow-50 w-fit">
                        <span class="p-1 bg-yellow-400 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19"
                                fill="none">
                                <path
                                    d="M3.64961 2.32549C3.8574 2.08306 4.16075 1.94354 4.48004 1.94354H13.8207C14.14 1.94354 14.4434 2.08306 14.6512 2.32549L17.5054 5.65544C17.7603 5.95279 17.9004 6.33151 17.9004 6.72315V7.00214C17.9004 8.43678 16.7374 9.59979 15.3027 9.59979C14.4691 9.59979 13.7273 9.20715 13.252 8.59673C12.7766 9.20715 12.0348 9.59979 11.2012 9.59979C10.3676 9.59979 9.62571 9.20715 9.15039 8.59673C8.67507 9.20715 7.93319 9.59979 7.09961 9.59979C6.26602 9.59979 5.52415 9.20715 5.04883 8.59673C4.57351 9.20715 3.83163 9.59979 2.99805 9.59979C1.5634 9.59979 0.400391 8.43678 0.400391 7.00214V6.72315C0.400391 6.33151 0.540487 5.95279 0.79536 5.65544L3.64961 2.32549ZM5.5957 7.00214C5.5957 7.83272 6.26903 8.50604 7.09961 8.50604C7.93019 8.50604 8.60352 7.83272 8.60352 7.00214C8.60352 6.70011 8.84836 6.45526 9.15039 6.45526C9.45242 6.45526 9.69727 6.70011 9.69727 7.00214C9.69727 7.83272 10.3706 8.50604 11.2012 8.50604C12.0318 8.50604 12.7051 7.83272 12.7051 7.00214C12.7051 6.70011 12.9499 6.45526 13.252 6.45526C13.554 6.45526 13.7988 6.70011 13.7988 7.00214C13.7988 7.83272 14.4721 8.50604 15.3027 8.50604C16.1333 8.50604 16.8066 7.83272 16.8066 7.00214V6.72315C16.8066 6.5926 16.7599 6.46636 16.675 6.36725L13.8207 3.03729H4.48004L1.6258 6.36725C1.54084 6.46636 1.49414 6.5926 1.49414 6.72315V7.00214C1.49414 7.83272 2.16746 8.50604 2.99805 8.50604C3.82863 8.50604 4.50195 7.83272 4.50195 7.00214C4.50195 6.70011 4.7468 6.45526 5.04883 6.45526C5.35086 6.45526 5.5957 6.70011 5.5957 7.00214ZM2.04102 10.1467C2.34305 10.1467 2.58789 10.3915 2.58789 10.6935V17.256H3.68164V11.7873C3.68164 11.1832 4.17133 10.6935 4.77539 10.6935H8.05664C8.6607 10.6935 9.15039 11.1832 9.15039 11.7873V17.256H15.7129V10.6935C15.7129 10.3915 15.9577 10.1467 16.2598 10.1467C16.5618 10.1467 16.8066 10.3915 16.8066 10.6935V17.256H17.3535C17.6555 17.256 17.9004 17.5009 17.9004 17.8029C17.9004 18.1049 17.6555 18.3498 17.3535 18.3498H0.947266C0.645235 18.3498 0.400391 18.1049 0.400391 17.8029C0.400391 17.5009 0.645235 17.256 0.947266 17.256H1.49414V10.6935C1.49414 10.3915 1.73898 10.1467 2.04102 10.1467ZM4.77539 17.256H8.05664V11.7873H4.77539V17.256ZM10.2441 11.7873C10.2441 11.1832 10.7338 10.6935 11.3379 10.6935H13.5254C14.1295 10.6935 14.6191 11.1832 14.6191 11.7873V15.0685C14.6191 15.6726 14.1295 16.1623 13.5254 16.1623H11.3379C10.7338 16.1623 10.2441 15.6726 10.2441 15.0685V11.7873ZM13.5254 11.7873H11.3379V15.0685H13.5254V11.7873Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <span class="mr-2 text-xs font-semibold text-black">Total Pendapatan Order</span>
                    </div>
                    <div>
<<<<<<< HEAD
                        <p class="mb-2 text-xl font-bold text-gray-900"> Rp.{{ number_format($orders_pending->sum('total'), 2, ',', '.') }}
=======
                        <p class="mb-2 text-xl font-bold text-gray-900"> Rp.{{ number_format($order_done, 2, ',', '.') }}
>>>>>>> 2ab510146be36642935f25fc8cb963326d53e31f


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
                            <p class="text-lime-600 text-[10px]">+21.01%</p>
                            <p class="text-[10px]">vs last month</p>

                        </div>

                    </div>
                </div>
            </div>

            {{-- card 2 --}}
            <div class="w-full overflow-hidden shadow-lg rounded-2xl bg-white-50">
                <div class="p-4">
                    <div class="flex items-center gap-2 p-1 mb-3 rounded-full bg-green-50 w-fit">
                        <span class="p-1 bg-green-400 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 21 22"
                                fill="none">
                                <path
                                    d="M0 7.19385C0 10.2749 2.19651 12.843 5.10905 13.4175C5.19341 12.4873 5.43223 11.6017 5.79965 10.7866C4.68755 10.4119 3.97385 9.55908 3.80493 8.34949H3.17188V7.80855H3.76273V7.25778C3.76273 7.19876 3.76273 7.13975 3.768 7.08566H3.17188V6.54472H3.82076C4.10563 4.96124 5.34537 4.02197 7.20761 4.02197C7.60854 4.02197 7.95672 4.06131 8.24687 4.13016V5.05959C7.96728 4.99075 7.62437 4.95632 7.21288 4.95632C6.047 4.95632 5.26096 5.54644 5.01301 6.54472H7.445V7.08566H4.93388C4.92861 7.14467 4.92861 7.2086 4.92861 7.27253V7.80855H7.445V8.34949H4.98664C5.13631 9.11336 5.58057 9.65705 6.26108 9.90861C7.58313 7.72379 9.89062 6.20192 12.5674 5.95915C11.9929 3.04661 9.42482 0.850098 6.34375 0.850098C2.84019 0.850098 0 3.69029 0 7.19385ZM20.3 14.172C20.3 18.0259 17.1758 21.1501 13.3219 21.1501C9.46796 21.1501 6.34375 18.0259 6.34375 14.172C6.34375 10.3181 9.46796 7.19385 13.3219 7.19385C17.1758 7.19385 20.3 10.3181 20.3 14.172ZM10.4672 15.8494C10.5543 16.908 11.4139 17.7332 12.9589 17.8309V18.6126H13.6442V17.8254C15.2415 17.7169 16.1766 16.8863 16.1766 15.6811C16.1766 14.5845 15.4622 14.02 14.1844 13.7268L13.6442 13.602V11.4739C14.3296 11.5499 14.7652 11.9137 14.8697 12.4185H16.072C15.9849 11.3979 15.0846 10.5999 13.6442 10.5131V9.73135H12.9589V10.5294C11.594 10.6596 10.6647 11.4577 10.6647 12.5868C10.6647 13.5857 11.3558 14.2208 12.5058 14.4814L12.9589 14.59V16.8483C12.2561 16.7451 11.7914 16.3706 11.6869 15.8494H10.4672ZM12.9531 13.4445C12.2793 13.2925 11.9134 12.9831 11.9134 12.5162C11.9134 11.9951 12.3084 11.6042 12.9589 11.4902V13.4445H12.9531ZM13.743 14.7691C14.5619 14.9537 14.9394 15.2523 14.9394 15.7788C14.9394 16.3814 14.469 16.794 13.6442 16.87V14.7474L13.743 14.7691Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <span class="mr-2 text-xs font-semibold text-black">Total Product</span>
                    </div>
                    <div>
                        <p class="mb-2 text-xl font-bold text-gray-900">{{ $totalProduct }}</p>
                        <div class="flex items-center gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 12 11"
                                    fill="none">
                                    <path
                                        d="M4.75905 6.00979C4.15169 6.80391 3.57074 7.56466 2.98922 8.32578C2.49146 8.97567 1.9937 9.62456 1.49593 10.2725C1.33311 10.4835 1.13668 10.5488 0.915275 10.4637C0.693866 10.3786 0.562055 10.1735 0.513236 9.88364C0.46614 9.60169 0.548558 9.37035 0.69961 9.17126C1.38997 8.27041 2.07975 7.36932 2.76896 6.46797C3.27993 5.80108 3.79129 5.13457 4.30303 4.46843C4.58359 4.10474 4.90838 4.10287 5.1878 4.4628C5.57605 4.96272 5.96173 5.46639 6.34481 5.9738C6.38817 6.03079 6.41545 6.1084 6.44618 6.16839L9.67283 1.95185C9.62688 1.9481 9.58266 1.94173 9.53815 1.94135C9.16483 1.94135 8.7915 1.94623 8.41818 1.93835C8.1715 1.93348 7.9857 1.77713 7.88433 1.48431C7.78756 1.2046 7.81972 0.933149 7.97048 0.694689C8.02457 0.606309 8.09347 0.535329 8.17189 0.487224C8.25031 0.439119 8.33615 0.415174 8.42278 0.417236C9.31645 0.414611 10.2124 0.412362 11.1072 0.418361C11.4452 0.42061 11.6954 0.755804 11.6965 1.19635C11.6994 2.35866 11.6994 3.52096 11.6965 4.68327C11.6965 5.12494 11.4315 5.47064 11.1104 5.46689C10.7894 5.46314 10.5418 5.13319 10.5361 4.69039C10.5306 4.21572 10.5346 3.74068 10.5346 3.26563V3.06879L10.4824 3.02455C10.4499 3.09136 10.4136 3.1549 10.3738 3.21464C9.23126 4.70914 8.08784 6.20251 6.94356 7.69476C6.64577 8.08282 6.32385 8.08357 6.0272 7.69814C5.63761 7.19172 5.24868 6.68368 4.86043 6.17402C4.82711 6.13015 4.80041 6.07616 4.75905 6.00979Z"
                                        fill="#04CE00" />
                                </svg>
                            </span>
                            <p class="text-lime-600 text-[10px]">5%</p>
                            <p class="text-[10px]">vs last month</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- card 3 --}}
            <div class="w-full overflow-hidden shadow-lg rounded-2xl bg-white-50">
                <div class="p-4">
                    <div class="flex items-center gap-2 p-1 mb-3 rounded-full bg-red-50 w-fit">
                        <span class="p-1 bg-red-400 rounded-full">
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
                        <span class="mr-2 text-xs font-semibold text-black">All Category</span>
                    </div>
                    <div>
                        <p class="mb-2 text-xl font-bold text-gray-900">{{ $totalCategory }}</p>


                    </div>
                </div>
            </div>
        </div>


        {{-- Chart Start --}}
        <div class="flex flex-wrap gap-10 mt-10 lg:flex-nowrap">
            <div class="w-full rounded-lg shadow bg-white-50">
                <div class="flex items-center justify-between p-4 pb-0 md:p-6 md:pb-0">
                    <dl>
                        <dt class="pb-1 text-sm font-normal text-gray-500">Statistik</dt>
                        <dd class="text-xl font-bold leading-none text-gray-900">Total Pendapatan Order</dd>
                    </dl>
                    <div>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="totalTenantFilter"
                            data-dropdown-placement="bottom" type="button"
                            class="inline-flex items-center px-3 py-2 text-xs text-gray-500 bg-gray-100 rounded-full focus:outline-none hover:bg-gray-200 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-200">
                            Weekly
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="totalTenantFilter"
                            class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow bg-white-50 w-44">
                            <ul class="py-2 text-xs text-gray-500" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <button type="submit" name="totalTenantFilter" value="Weekly"
                                        class="block w-full px-4 py-2 hover:bg-gray-100 text-start">Weekly</button>
                                </li>
                                <li>
                                    <button type="submit" name="totalTenantFilter" value="Monthly"
                                        class="block w-full px-4 py-2 hover:bg-gray-100 text-start">Monthly</button>
                                </li>
                                <li>
                                    <button type="submit" name="totalTenantFilter" value="Annually"
                                        class="block w-full px-4 py-2 hover:bg-gray-100 text-start">Annually</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="labels-chart" class="px-2.5"></div>
                <div
                    class="grid items-center justify-between grid-cols-1 p-4 pt-0 mt-5 border-t border-gray-200 md:p-6 md:pt-0">
                </div>
            </div>

            <div class="w-full p-4 rounded-lg shadow bg-white-50 md:p-6">
                <div class="flex items-center justify-between pb-3 border-b border-gray-200">
                    <dl>
                        <dt class="pb-1 text-sm font-normal text-gray-500">Statistik</dt>
                        <dd class="text-xl font-bold leading-none text-gray-900">Total Product by Category</dd>
                    </dl>
                    <div>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="totalTenantFilter"
                            data-dropdown-placement="bottom" type="button"
                            class="inline-flex items-center px-3 py-2 text-xs text-gray-500 bg-gray-100 rounded-full focus:outline-none hover:bg-gray-200 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-gray-200">
                            Weekly
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="totalTenantFilter"
                            class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow bg-white-50 w-44">
                            <ul class="py-2 text-xs text-gray-500" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <button type="submit" name="totalTenantFilter" value="Weekly"
                                        class="block w-full px-4 py-2 hover:bg-gray-100 text-start">Weekly</button>
                                </li>
                                <li>
                                    <button type="submit" name="totalTenantFilter" value="Monthly"
                                        class="block w-full px-4 py-2 hover:bg-gray-100 text-start">Monthly</button>
                                </li>
                                <li>
                                    <button type="submit" name="totalTenantFilter" value="Annually"
                                        class="block w-full px-4 py-2 hover:bg-gray-100 text-start">Annually</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="bar-chart"></div>
                <div class="grid items-center justify-between grid-cols-1 border-t border-gray-200">
                </div>
            </div>
        </div>
        {{-- Chart End --}}

        {{-- Table Order Start --}}
        <div class="relative mt-10 overflow-x-auto shadow-md sm:rounded-lg bg-white-50">
            <div class="flex flex-wrap items-center justify-between gap-5 p-5">
                <h1 class="text-xl font-bold text-gray-900">
                    Order List
                </h1>
                <div class="pb-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="table-search"
                            class="block p-2 pl-10 text-sm text-gray-900 placeholder-gray-400 bg-gray-100 border-none rounded-lg focus:ring-0 w-80 "
                            placeholder="Search">
                    </div>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
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
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders_pending as $order)
                        <tr class="border-b bg-white-50 hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $order->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $order->desk->name }}
                            </td>
                            <td class="px-6 py-4">
                                Rp.{{ number_format($order->total, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="block w-fit focus:outline-none text-white bord border border-yellow-400 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.8037 8.49976C16.8037 8.49976 13.8037 2.99976 8.80371 2.99976C3.80371 2.99976 0.803711 8.49976 0.803711 8.49976C0.803711 8.49976 3.80371 13.9998 8.80371 13.9998C13.8037 13.9998 16.8037 8.49976 16.8037 8.49976ZM1.97641 8.49976C2.03334 8.41297 2.09825 8.31653 2.17098 8.21217C2.50587 7.73169 3.00002 7.09266 3.63582 6.45686C4.92474 5.16794 6.68433 3.99976 8.80371 3.99976C10.9231 3.99976 12.6827 5.16794 13.9716 6.45686C14.6074 7.09266 15.1016 7.73169 15.4364 8.21217C15.5092 8.31653 15.5741 8.41297 15.631 8.49976C15.5741 8.58654 15.5092 8.68298 15.4364 8.78734C15.1016 9.26783 14.6074 9.90685 13.9716 10.5427C12.6827 11.8316 10.9231 12.9998 8.80371 12.9998C6.68433 12.9998 4.92474 11.8316 3.63582 10.5427C3.00002 9.90685 2.50587 9.26783 2.17098 8.78734C2.09825 8.68298 2.03334 8.58654 1.97641 8.49976Z"
                                            fill="#FDC55E" />
                                        <path
                                            d="M8.80371 5.99976C7.423 5.99976 6.30371 7.11904 6.30371 8.49976C6.30371 9.88047 7.423 10.9998 8.80371 10.9998C10.1844 10.9998 11.3037 9.88047 11.3037 8.49976C11.3037 7.11904 10.1844 5.99976 8.80371 5.99976ZM5.30371 8.49976C5.30371 6.56676 6.87072 4.99976 8.80371 4.99976C10.7367 4.99976 12.3037 6.56676 12.3037 8.49976C12.3037 10.4328 10.7367 11.9998 8.80371 11.9998C6.87072 11.9998 5.30371 10.4328 5.30371 8.49976Z"
                                            fill="#FDC55E" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="55" class="py-5 text-center">tidak ada data</td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
            {{ $orders_pending->links('vendor.pagination.tenant')}}
        </div>
        {{-- Table Order End --}}
    </div>

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
@endsection
