@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="flex bg-white justify-start items-center w-full rounded-3xl p-5 gap-4 mb-8 bg-white-50">
            <svg viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"
                class="fill-yellow-500 bg-yellow-200 w-20 p-5 rounded-lg ">
                <path
                    d="M7.0625 10.3438C7.0625 9.7397 7.55219 9.25001 8.15625 9.25001H21.2812C21.8853 9.25001 22.375 9.7397 22.375 10.3438C22.375 10.9478 21.8853 11.4375 21.2812 11.4375H8.15625C7.55219 11.4375 7.0625 10.9478 7.0625 10.3438Z" />
                <path
                    d="M7.0625 14.7188C7.0625 14.1147 7.55219 13.625 8.15625 13.625H21.2812C21.8853 13.625 22.375 14.1147 22.375 14.7188C22.375 15.3228 21.8853 15.8125 21.2812 15.8125H8.15625C7.55219 15.8125 7.0625 15.3228 7.0625 14.7188Z" />
                <path
                    d="M7.0625 19.0938C7.0625 18.4897 7.55219 18 8.15625 18H21.2812C21.8853 18 22.375 18.4897 22.375 19.0938C22.375 19.6978 21.8853 20.1875 21.2812 20.1875H8.15625C7.55219 20.1875 7.0625 19.6978 7.0625 19.0938Z" />
                <path
                    d="M7.0625 23.4688C7.0625 22.8647 7.55219 22.375 8.15625 22.375H21.2812C21.8853 22.375 22.375 22.8647 22.375 23.4688C22.375 24.0728 21.8853 24.5625 21.2812 24.5625H8.15625C7.55219 24.5625 7.0625 24.0728 7.0625 23.4688Z" />
                <path
                    d="M7.0625 27.8438C7.0625 27.2397 7.55219 26.75 8.15625 26.75H21.2812C21.8853 26.75 22.375 27.2397 22.375 27.8438C22.375 28.4478 21.8853 28.9375 21.2812 28.9375H8.15625C7.55219 28.9375 7.0625 28.4478 7.0625 27.8438Z" />
                <path
                    d="M25.6562 9.25001C25.0522 9.25001 24.5625 9.7397 24.5625 10.3438C24.5625 10.9478 25.0522 11.4375 25.6562 11.4375H27.8438C28.4478 11.4375 28.9375 10.9478 28.9375 10.3438C28.9375 9.7397 28.4478 9.25001 27.8438 9.25001H25.6562Z" />
                <path
                    d="M25.6562 13.625C25.0522 13.625 24.5625 14.1147 24.5625 14.7188C24.5625 15.3228 25.0522 15.8125 25.6562 15.8125H27.8438C28.4478 15.8125 28.9375 15.3228 28.9375 14.7188C28.9375 14.1147 28.4478 13.625 27.8438 13.625H25.6562Z" />
                <path
                    d="M25.6562 18C25.0522 18 24.5625 18.4897 24.5625 19.0938C24.5625 19.6978 25.0522 20.1875 25.6562 20.1875H27.8438C28.4478 20.1875 28.9375 19.6978 28.9375 19.0938C28.9375 18.4897 28.4478 18 27.8438 18H25.6562Z" />
                <path
                    d="M25.6562 22.375C25.0522 22.375 24.5625 22.8647 24.5625 23.4688C24.5625 24.0728 25.0522 24.5625 25.6562 24.5625H27.8438C28.4478 24.5625 28.9375 24.0728 28.9375 23.4688C28.9375 22.8647 28.4478 22.375 27.8438 22.375H25.6562Z" />
                <path
                    d="M25.6562 26.75C25.0522 26.75 24.5625 27.2397 24.5625 27.8438C24.5625 28.4478 25.0522 28.9375 25.6562 28.9375H27.8438C28.4478 28.9375 28.9375 28.4478 28.9375 27.8438C28.9375 27.2397 28.4478 26.75 27.8438 26.75H25.6562Z" />
                <path
                    d="M5.6484 1.91412C5.39979 1.66551 5.04684 1.55157 4.6998 1.60789C4.35276 1.6642 4.05395 1.88391 3.89672 2.19837L2.80297 4.38587C2.72703 4.53775 2.6875 4.70521 2.6875 4.87501V33.3125H1.59375C0.989689 33.3125 0.5 33.8022 0.5 34.4063C0.5 35.0103 0.989689 35.5 1.59375 35.5H34.4062C35.0103 35.5 35.5 35.0103 35.5 34.4063C35.5 33.8022 35.0103 33.3125 34.4062 33.3125H33.3125V4.87501C33.3125 4.70521 33.273 4.53775 33.197 4.38587L32.1033 2.19837C31.946 1.88391 31.6472 1.6642 31.3002 1.60789C30.9532 1.55157 30.6002 1.66551 30.3516 1.91412L28.9375 3.32822L27.5234 1.91412C27.0963 1.48698 26.4037 1.48698 25.9766 1.91412L24.5625 3.32822L23.1484 1.91412C22.7213 1.48698 22.0287 1.48698 21.6016 1.91412L20.1875 3.32822L18.7734 1.91412C18.3463 1.48698 17.6537 1.48698 17.2266 1.91412L15.8125 3.32822L14.3984 1.91412C13.9713 1.48698 13.2787 1.48698 12.8516 1.91412L11.4375 3.32822L10.0234 1.91412C9.59626 1.48698 8.90374 1.48698 8.4766 1.91412L7.0625 3.32822L5.6484 1.91412ZM5.17463 4.53394L6.2891 5.64841C6.71624 6.07555 7.40876 6.07555 7.8359 5.64841L9.25 4.23431L10.6641 5.64841C11.0912 6.07555 11.7838 6.07555 12.2109 5.64841L13.625 4.23431L15.0391 5.64841C15.4662 6.07555 16.1588 6.07555 16.5859 5.64841L18 4.23431L19.4141 5.64841C19.8412 6.07555 20.5338 6.07555 20.9609 5.64841L22.375 4.23431L23.7891 5.64841C24.2162 6.07555 24.9088 6.07555 25.3359 5.64841L26.75 4.23431L28.1641 5.64841C28.5912 6.07555 29.2838 6.07555 29.7109 5.64841L30.8254 4.53394L31.125 5.13321V33.3125H4.875V5.13321L5.17463 4.53394Z" />
            </svg>

            <div class="flex flex-col gap-1 justify-center">
                <h3 class="text-2xl font-bold">Detail Tenant</h3>
                <p class="text-base">Akses menampilkan detail tenant</p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-9 mb-8">
            <div class="flex flex-col gap-2 bg-white p-5 py-7 px-8 rounded-2xl shadow-md bg-white-50">
                <div class="flex items-center py-2 pl-3 pr-4 w-fit bg-yellow-200 rounded-3xl gap-2">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="35" height="35" rx="17.5" fill="#FDC55E" />
                        <path
                            d="M12.1496 9.32555C12.3574 9.08313 12.6607 8.9436 12.98 8.9436H22.3207C22.64 8.9436 22.9434 9.08312 23.1512 9.32555L26.0054 12.6555C26.2603 12.9529 26.4004 13.3316 26.4004 13.7232V14.0022C26.4004 15.4368 25.2374 16.5999 23.8027 16.5999C22.9691 16.5999 22.2273 16.2072 21.752 15.5968C21.2766 16.2072 20.5348 16.5999 19.7012 16.5999C18.8676 16.5999 18.1257 16.2072 17.6504 15.5968C17.1751 16.2072 16.4332 16.5999 15.5996 16.5999C14.766 16.5999 14.0241 16.2072 13.5488 15.5968C13.0735 16.2072 12.3316 16.5999 11.498 16.5999C10.0634 16.5999 8.90039 15.4368 8.90039 14.0022V13.7232C8.90039 13.3316 9.04049 12.9529 9.29536 12.6555L12.1496 9.32555ZM14.0957 14.0022C14.0957 14.8328 14.769 15.5061 15.5996 15.5061C16.4302 15.5061 17.1035 14.8328 17.1035 14.0022C17.1035 13.7002 17.3484 13.4553 17.6504 13.4553C17.9524 13.4553 18.1973 13.7002 18.1973 14.0022C18.1973 14.8328 18.8706 15.5061 19.7012 15.5061C20.5318 15.5061 21.2051 14.8328 21.2051 14.0022C21.2051 13.7002 21.4499 13.4553 21.752 13.4553C22.054 13.4553 22.2988 13.7002 22.2988 14.0022C22.2988 14.8328 22.9721 15.5061 23.8027 15.5061C24.6333 15.5061 25.3066 14.8328 25.3066 14.0022V13.7232C25.3066 13.5927 25.2599 13.4664 25.175 13.3673L22.3207 10.0374H12.98L10.1258 13.3673C10.0408 13.4664 9.99414 13.5927 9.99414 13.7232V14.0022C9.99414 14.8328 10.6675 15.5061 11.498 15.5061C12.3286 15.5061 13.002 14.8328 13.002 14.0022C13.002 13.7002 13.2468 13.4553 13.5488 13.4553C13.8509 13.4553 14.0957 13.7002 14.0957 14.0022ZM10.541 17.1467C10.843 17.1467 11.0879 17.3916 11.0879 17.6936V24.2561H12.1816V18.7874C12.1816 18.1833 12.6713 17.6936 13.2754 17.6936H16.5566C17.1607 17.6936 17.6504 18.1833 17.6504 18.7874V24.2561H24.2129V17.6936C24.2129 17.3916 24.4577 17.1467 24.7598 17.1467C25.0618 17.1467 25.3066 17.3916 25.3066 17.6936V24.2561H25.8535C26.1555 24.2561 26.4004 24.5009 26.4004 24.803C26.4004 25.105 26.1555 25.3499 25.8535 25.3499H9.44727C9.14523 25.3499 8.90039 25.105 8.90039 24.803C8.90039 24.5009 9.14523 24.2561 9.44727 24.2561H9.99414V17.6936C9.99414 17.3916 10.239 17.1467 10.541 17.1467ZM13.2754 24.2561H16.5566V18.7874H13.2754V24.2561ZM18.7441 18.7874C18.7441 18.1833 19.2338 17.6936 19.8379 17.6936H22.0254C22.6295 17.6936 23.1191 18.1833 23.1191 18.7874V22.0686C23.1191 22.6727 22.6295 23.1624 22.0254 23.1624H19.8379C19.2338 23.1624 18.7441 22.6727 18.7441 22.0686V18.7874ZM22.0254 18.7874H19.8379V22.0686H22.0254V18.7874Z"
                            fill="white" />
                    </svg>
                    <p class="font-semibold">Total Tagihan</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="text-2xl font-semibold">{{ $formatTotalTagihan ? $formatTotalTagihan : 'Rp 0' }}</h4>
                    <div class="flex items-center gap-1">
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.75905 6.00979C4.15169 6.80391 3.57074 7.56466 2.98922 8.32578C2.49146 8.97567 1.9937 9.62456 1.49593 10.2725C1.33311 10.4835 1.13668 10.5488 0.915275 10.4637C0.693866 10.3786 0.562055 10.1735 0.513236 9.88364C0.46614 9.60169 0.548558 9.37035 0.69961 9.17126C1.38997 8.27041 2.07975 7.36932 2.76896 6.46797C3.27993 5.80108 3.79129 5.13457 4.30303 4.46843C4.58359 4.10474 4.90838 4.10287 5.1878 4.4628C5.57605 4.96272 5.96173 5.46639 6.34481 5.9738C6.38817 6.03079 6.41545 6.1084 6.44618 6.16839L9.67283 1.95185C9.62688 1.9481 9.58266 1.94173 9.53815 1.94135C9.16483 1.94135 8.7915 1.94623 8.41818 1.93835C8.1715 1.93348 7.9857 1.77713 7.88433 1.48431C7.78756 1.2046 7.81972 0.933149 7.97048 0.694689C8.02457 0.606309 8.09347 0.535329 8.17189 0.487224C8.25031 0.439119 8.33615 0.415174 8.42278 0.417236C9.31645 0.414611 10.2124 0.412362 11.1072 0.418361C11.4452 0.42061 11.6954 0.755804 11.6965 1.19635C11.6994 2.35866 11.6994 3.52096 11.6965 4.68327C11.6965 5.12494 11.4315 5.47064 11.1104 5.46689C10.7894 5.46314 10.5418 5.13319 10.5361 4.69039C10.5306 4.21572 10.5346 3.74068 10.5346 3.26563V3.06879L10.4824 3.02455C10.4499 3.09136 10.4136 3.1549 10.3738 3.21464C9.23126 4.70914 8.08784 6.20251 6.94356 7.69476C6.64577 8.08282 6.32385 8.08357 6.0272 7.69814C5.63761 7.19172 5.24868 6.68368 4.86043 6.17402C4.82711 6.13015 4.80041 6.07616 4.75905 6.00979Z"
                                fill="#04CE00" />
                        </svg>
                        <p class="text-green-600">10%</p>
                        <p>vs last year</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6 bg-white p-5 py-7 px-8 rounded-2xl shadow-md bg-white-50">
                <div class="flex items-center py-2 pl-3 pr-4 w-fit bg-yellow-200 rounded-3xl gap-2">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="35" height="35" rx="17.5" fill="#29CB6A" />
                        <path
                            d="M7.5 14.1938C7.5 17.2749 9.69651 19.843 12.609 20.4175C12.6934 19.4873 12.9322 18.6017 13.2997 17.7866C12.1876 17.4119 11.4738 16.5591 11.3049 15.3495H10.6719V14.8086H11.2627V14.2578C11.2627 14.1988 11.2627 14.1398 11.268 14.0857H10.6719V13.5447H11.3208C11.6056 11.9612 12.8454 11.022 14.7076 11.022C15.1085 11.022 15.4567 11.0613 15.7469 11.1302V12.0596C15.4673 11.9907 15.1244 11.9563 14.7129 11.9563C13.547 11.9563 12.761 12.5464 12.513 13.5447H14.945V14.0857H12.4339C12.4286 14.1447 12.4286 14.2086 12.4286 14.2725V14.8086H14.945V15.3495H12.4866C12.6363 16.1134 13.0806 16.6571 13.7611 16.9086C15.0831 14.7238 17.3906 13.2019 20.0674 12.9591C19.4929 10.0466 16.9248 7.8501 13.8438 7.8501C10.3402 7.8501 7.5 10.6903 7.5 14.1938ZM27.8 21.172C27.8 25.0259 24.6758 28.1501 20.8219 28.1501C16.968 28.1501 13.8438 25.0259 13.8438 21.172C13.8438 17.3181 16.968 14.1938 20.8219 14.1938C24.6758 14.1938 27.8 17.3181 27.8 21.172ZM17.9672 22.8494C18.0543 23.908 18.9139 24.7332 20.4589 24.8309V25.6126H21.1442V24.8254C22.7415 24.7169 23.6766 23.8863 23.6766 22.6811C23.6766 21.5845 22.9622 21.02 21.6844 20.7268L21.1442 20.602V18.4739C21.8296 18.5499 22.2652 18.9137 22.3697 19.4185H23.572C23.4849 18.3979 22.5846 17.5999 21.1442 17.5131V16.7313H20.4589V17.5294C19.094 17.6596 18.1647 18.4577 18.1647 19.5868C18.1647 20.5857 18.8558 21.2208 20.0058 21.4814L20.4589 21.59V23.8483C19.7561 23.7451 19.2914 23.3706 19.1869 22.8494H17.9672ZM20.4531 20.4445C19.7793 20.2925 19.4134 19.9831 19.4134 19.5162C19.4134 18.9951 19.8084 18.6042 20.4589 18.4902V20.4445H20.4531ZM21.243 21.7691C22.0619 21.9537 22.4394 22.2523 22.4394 22.7788C22.4394 23.3814 21.969 23.794 21.1442 23.87V21.7474L21.243 21.7691Z"
                            fill="white" />
                    </svg>

                    <p class="font-semibold">Tagihan yang Dibayarkan</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="text-2xl font-semibold">{{$tenants->total_payment ? $tenants->total_payment : 'Rp 0'}}</h4>
                </div>
            </div>
            <div class="flex flex-col gap-6 bg-white p-5 py-7 px-8 rounded-2xl shadow-md bg-white-50">
                <div class="flex items-center py-2 pl-3 pr-4 w-fit bg-yellow-200 rounded-3xl gap-2">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="35" height="35" rx="17.5" fill="#EF4444" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.1949 27.6689C23.8045 27.6689 25.9199 25.5535 25.9199 22.9439C25.9199 20.3344 23.8045 18.2189 21.1949 18.2189C18.5854 18.2189 16.4699 20.3344 16.4699 22.9439C16.4699 25.5535 18.5854 27.6689 21.1949 27.6689ZM27.1012 22.9439C27.1012 26.2059 24.4569 28.8502 21.1949 28.8502C17.933 28.8502 15.2887 26.2059 15.2887 22.9439C15.2887 19.682 17.933 17.0377 21.1949 17.0377C24.4569 17.0377 27.1012 19.682 27.1012 22.9439Z"
                            fill="white" />
                        <path
                            d="M19.3492 24.0595C19.4055 24.7635 19.9613 25.3122 20.9602 25.3772V25.8971H21.4033V25.3736C22.436 25.3014 23.0406 24.749 23.0406 23.9476C23.0406 23.2183 22.5787 22.8429 21.7526 22.6479L21.4033 22.5649V21.1497C21.8465 21.2002 22.1281 21.4421 22.1957 21.7779H22.973C22.9167 21.0991 22.3346 20.5684 21.4033 20.5107V19.9908H20.9602V20.5215C20.0777 20.6082 19.4769 21.1389 19.4769 21.8898C19.4769 22.554 19.9238 22.9764 20.6673 23.1497L20.9602 23.2219V24.7238C20.5058 24.6552 20.2054 24.4061 20.1378 24.0595H19.3492ZM20.9565 22.4602C20.5209 22.3591 20.2843 22.1533 20.2843 21.8428C20.2843 21.4963 20.5396 21.2363 20.9602 21.1605V22.4602H20.9565ZM21.4672 23.3411C21.9967 23.4638 22.2408 23.6624 22.2408 24.0126C22.2408 24.4133 21.9366 24.6877 21.4033 24.7382V23.3266L21.4672 23.3411Z"
                            fill="white" />
                        <path
                            d="M9.38242 9.9502C8.73004 9.9502 8.20117 10.4791 8.20117 11.1314V20.5814C8.20117 21.2338 8.73004 21.7627 9.38242 21.7627H14.2054C14.2736 21.3562 14.3764 20.9614 14.5107 20.5814H11.7449C11.7449 19.2767 10.6872 18.2189 9.38242 18.2189V13.4939C10.6872 13.4939 11.7449 12.4362 11.7449 11.1314H23.5574C23.5574 12.4362 24.6151 13.4939 25.9199 13.4939V17.6611C26.3689 18.063 26.7664 18.5213 27.1012 19.0248V11.1314C27.1012 10.4791 26.5723 9.9502 25.9199 9.9502H9.38242Z"
                            fill="white" />
                        <path
                            d="M20.0117 15.9548C20.013 15.9222 20.0137 15.8894 20.0137 15.8564C20.0137 14.5517 18.9559 13.4939 17.6512 13.4939C16.3464 13.4939 15.2887 14.5517 15.2887 15.8564C15.2887 16.665 15.6949 17.3787 16.3143 17.8046C17.3143 16.8546 18.5913 16.1935 20.0117 15.9548Z"
                            fill="white" />
                    </svg>
                    <p class="font-semibold">Tagihan Belum Dibayarkan</p>
                </div>
                <div class="flex flex-col">
                    <h4 class="text-2xl font-semibold">{{ $formatUnpaidPayment ? $formatUnpaidPayment : 'Rp 0' }}</h4>
                </div>
            </div>
        </div>
        <div class="bg-white w-full p-8 rounded-3xl shadow-md mb-8 bg-white-50">
            <div class="flex items-center gap-2 mb-5">
                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.5 18.5C1.5 18.5 0 18.5 0 17C0 15.5 1.5 11 9 11C16.5 11 18 15.5 18 17C18 18.5 16.5 18.5 16.5 18.5H1.5Z"
                        fill="#2E2E2E" />
                    <path
                        d="M9 9.5C11.4853 9.5 13.5 7.48528 13.5 5C13.5 2.51472 11.4853 0.5 9 0.5C6.51472 0.5 4.5 2.51472 4.5 5C4.5 7.48528 6.51472 9.5 9 9.5Z"
                        fill="#2E2E2E" />
                </svg>
                <p class="text-xl font-bold">DETAIL TENANT</p>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-2">
                        <p class="text-sm">Nama Tenant</p>
                        <p class="font-semibold">{{ $tenants->name }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-sm">Status Tenant</p>
                        <p class="font-semibold">{{ $tenants->is_active ? 'AKTIF' : 'BELUM AKTIF' }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-sm">Jumlah Produk</p>
                        <p class="font-semibold">AKTIF</p>
                    </div>
                </div>
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-2">
                        <p class="text-sm">Code Tenant</p>
                        <p class="font-semibold">#{{ $tenants->code }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-sm">Nama User Tenant</p>
                        <p class="font-semibold">{{ $tenants->user->name }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-sm">Jumlah Kategori </p>
                        <p class="font-semibold">{{ $tenants->categories->count() }}</p>
                    </div>
                </div>
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-2">
                        <p class="text-sm">Alamat Tenant</p>
                        <p class="font-semibold">{{ $tenants->address }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-sm">Emai User Tenant</p>
                        <p class="font-semibold">{{ $tenants->user->email }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-sm">Deskripsi</p>
                        <p class="font-semibold">{{ $tenants->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white w-full rounded-3xl shadow-md mb-8 bg-white-50">
            <div class="flex items-center justify-between p-8">
                <h4 class="text-lg font-semibold">Daftar Tagihan</h4>
                <div class="flex gap-4">
                    <form>
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3  pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900  rounded-lg bg-gray-100 border-none py-3"
                                placeholder="Search" required>
                        </div>
                    </form>
                    <button class="flex items-center p-3 bg-yellow-500 rounded-lg gap-2" data-modal-target="modal-bill"
                        data-modal-toggle="modal-bill">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.5V13.5M13.5 9H4.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="text-sm font-semibold text-white-50">Tagihan Baru</p>
                    </button>
                </div>
            </div>

            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Date
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Jumlah
                                    <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bukti Transfer
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($paymentPerMonth as $month)
                            <tr class="bg-white border-b">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $month->transfer_at }}
                                </td>
                                <td class="px-6 py-4">
                                    Rp. {{ number_format($month->total, 2, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="w-11 h-12 bg-yellow-400" data-modal-target="modal-transaction"
                                            data-modal-toggle="modal-transaction">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center font-bold text-lg">
                                    Tidak ada data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="grid grid-cols-3 items-center px-6 py-3">
                    <p>Menampilkan : 1-10 dari 100 hasil</p>
                    <nav aria-label="Page navigation example" class="col-span-2">
                        <ul class="flex gap-3">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border-none rounded-lg ">Prev</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight  bg-yellow-500 text-white border border-gray-300 rounded-lg ">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight  bg-white border border-gray-300 rounded-lg ">2</a>
                            </li>

                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border-none rounded-lg rounded-r-lg ">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="bg-white w-full p-8 rounded-3xl shadow-md mb-8 bg-white-50">
            <div class="flex items-center justify-between">
                <h4 class="text-lg font-semibold">Waiter List</h4>
                <div class="flex gap-4">
                    <form>
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3  pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900  rounded-lg bg-gray-100 border-none py-3"
                                placeholder="Search" required>
                        </div>
                    </form>
                </div>
            </div>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class=" py-3">
                                No
                            </th>
                            <th scope="col" class=" py-3">
                                Nama Waiters
                            </th>
                            <th scope="col" class=" py-3">
                                Phone Number
                            </th>
                            <th scope="col" class=" py-3">
                                Verifed
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($waiters as $item)
                            <tr class="bg-white border-b">
                                <td class=" py-4">
                                    {{ $loop->iteration }}
                                </td>
                                <td scope="row" class=" py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ $item->user->getFirstMediaUrl('default') }}" alt=""
                                            class="w-8 h-8 rounded-full">
                                        <div class="flex flex-col">
                                            <p class="font-semibold">{{ $item->user->name }}</p>
                                            <p class="text-gray-400">{{ $item->user->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class=" py-4">
                                    {{ $item->user->phone_number }}
                                </td>
                                <td class=" py-4">
                                    @if ($item->user->email_verified_at)
                                        <p class="text-center font-semibold bg-green-200 rounded-full py-1 px-10">
                                            Verified
                                        </p>
                                    @else
                                        <p class="text-center text-red-700 font-semibold bg-red-200 rounded-full py-1 px-10">
                                            Not Verified
                                        </p>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center font-bold text-lg">
                                    Tidak ada data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="grid grid-cols-3 items-center px-6 pt-3">
                    <p>Menampilkan : 1-10 dari 100 hasil</p>
                    <nav aria-label="Page navigation example" class="col-span-2">
                        <ul class="flex gap-3">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border-none rounded-lg ">Prev</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight  bg-yellow-500 text-white border border-gray-300 rounded-lg ">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight  bg-white border border-gray-300 rounded-lg ">2</a>
                            </li>

                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border-none rounded-lg rounded-r-lg ">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


        {{-- MODAL TRANSACTION --}}

        <div id="modal-transaction" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div
                    class="flex flex-col relative bg-white-50 rounded-lg shadow p-10 w-[500px] h-[500px]">
                    <div class="flex justify-between mb-8 items-center">
                        <div class=""></div>
                        <p class="font-bold text-2xl">Bukti Transfer</p>
                        <p class="text-2xl font-bold" data-modal-target="modal-transaction"
                            data-modal-toggle="modal-transaction">X</p>
                    </div>
                    <div class="self-cewnter bg-yellow-500 w-full h-full"></div>
                </div>
            </div>
        </div>

        {{-- MODAL TAGIHAN --}}

        <div id="modal-bill" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div
                    class="flex flex-col gap-4 relative bg-white-50 rounded-lg shadow p-10 w-[500px] h-[500px]">
                    <div class="flex justify-between  items-center">
                        <div class=""></div>
                        <p class="font-bold text-2xl">Tangihan</p>
                        <p class="text-2xl font-bold" data-modal-target="modal-bill" data-modal-toggle="modal-bill">X</p>
                    </div>
                    <div class="">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                            Total Transfer</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Rp" required>
                    </div>
                    {{-- <div class="relative">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                            Waktu Transfer</label>
                        <div class="absolute inset-y-2 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                            placeholder="Select date">
                    </div> --}}
                    <div class="relative">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                            Waktu Transfer</label>
                        <div class="absolute inset-y-2 left-0 flex items-center pl-3.5 pointer-events-none">

                        </div>
                        <div class="flex items-center border rounded-lg relative">
                            <svg class="absolute left-2 w-4 h-4 text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                            <input datepicker type="text"
                                class=" text-gray-900 text-sm rounded-lg border-0 block w-full pl-10 p-2.5"
                                placeholder="Select date">
                        </div>
                    </div>
                    <label for="">Bukti Transfer</label>
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>

                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                    <button type="button"
                        class="focus:outline-none text-white-50 font-semibold bg-yellow-500 hover:bg-yellow-600 rounded-lg text-sm py-3 mt-3">Save</button>

                </div>
            </div>
        </div>


    </div>
@endsection
