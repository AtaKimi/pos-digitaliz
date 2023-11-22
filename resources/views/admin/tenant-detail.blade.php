@extends('layouts.admin')

@section('content')
    <div x-data = "{bukti_transfer_img: ''}">
        <x-card class="mb-5">
            <div class="flex justify-start items-center">
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

                <div>
                    <!-- Title di sini -->
                    <p class="text-xl font-bold text-gray-900">Detail Tenant</p>
                    <!-- Subtitle di sini -->
                    <p class="text-gray-600">Akses menampilkan detail tenant</p>
                </div>
            </div>
        </x-card>
        <div class="flex flex-wrap lg:flex-nowrap gap-5 mb-5">
            {{-- card 1 --}}
            <x-card class="w-full flex flex-col gap-5">
                <div class="flex items-center gap-5 p-1 rounded-full bg-yellow-50 w-full">
                    <div class="p-3 bg-yellow-400 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 19"
                            fill="none">
                            <path
                                d="M3.64961 2.32549C3.8574 2.08306 4.16075 1.94354 4.48004 1.94354H13.8207C14.14 1.94354 14.4434 2.08306 14.6512 2.32549L17.5054 5.65544C17.7603 5.95279 17.9004 6.33151 17.9004 6.72315V7.00214C17.9004 8.43678 16.7374 9.59979 15.3027 9.59979C14.4691 9.59979 13.7273 9.20715 13.252 8.59673C12.7766 9.20715 12.0348 9.59979 11.2012 9.59979C10.3676 9.59979 9.62571 9.20715 9.15039 8.59673C8.67507 9.20715 7.93319 9.59979 7.09961 9.59979C6.26602 9.59979 5.52415 9.20715 5.04883 8.59673C4.57351 9.20715 3.83163 9.59979 2.99805 9.59979C1.5634 9.59979 0.400391 8.43678 0.400391 7.00214V6.72315C0.400391 6.33151 0.540487 5.95279 0.79536 5.65544L3.64961 2.32549ZM5.5957 7.00214C5.5957 7.83272 6.26903 8.50604 7.09961 8.50604C7.93019 8.50604 8.60352 7.83272 8.60352 7.00214C8.60352 6.70011 8.84836 6.45526 9.15039 6.45526C9.45242 6.45526 9.69727 6.70011 9.69727 7.00214C9.69727 7.83272 10.3706 8.50604 11.2012 8.50604C12.0318 8.50604 12.7051 7.83272 12.7051 7.00214C12.7051 6.70011 12.9499 6.45526 13.252 6.45526C13.554 6.45526 13.7988 6.70011 13.7988 7.00214C13.7988 7.83272 14.4721 8.50604 15.3027 8.50604C16.1333 8.50604 16.8066 7.83272 16.8066 7.00214V6.72315C16.8066 6.5926 16.7599 6.46636 16.675 6.36725L13.8207 3.03729H4.48004L1.6258 6.36725C1.54084 6.46636 1.49414 6.5926 1.49414 6.72315V7.00214C1.49414 7.83272 2.16746 8.50604 2.99805 8.50604C3.82863 8.50604 4.50195 7.83272 4.50195 7.00214C4.50195 6.70011 4.7468 6.45526 5.04883 6.45526C5.35086 6.45526 5.5957 6.70011 5.5957 7.00214ZM2.04102 10.1467C2.34305 10.1467 2.58789 10.3915 2.58789 10.6935V17.256H3.68164V11.7873C3.68164 11.1832 4.17133 10.6935 4.77539 10.6935H8.05664C8.6607 10.6935 9.15039 11.1832 9.15039 11.7873V17.256H15.7129V10.6935C15.7129 10.3915 15.9577 10.1467 16.2598 10.1467C16.5618 10.1467 16.8066 10.3915 16.8066 10.6935V17.256H17.3535C17.6555 17.256 17.9004 17.5009 17.9004 17.8029C17.9004 18.1049 17.6555 18.3498 17.3535 18.3498H0.947266C0.645235 18.3498 0.400391 18.1049 0.400391 17.8029C0.400391 17.5009 0.645235 17.256 0.947266 17.256H1.49414V10.6935C1.49414 10.3915 1.73898 10.1467 2.04102 10.1467ZM4.77539 17.256H8.05664V11.7873H4.77539V17.256ZM10.2441 11.7873C10.2441 11.1832 10.7338 10.6935 11.3379 10.6935H13.5254C14.1295 10.6935 14.6191 11.1832 14.6191 11.7873V15.0685C14.6191 15.6726 14.1295 16.1623 13.5254 16.1623H11.3379C10.7338 16.1623 10.2441 15.6726 10.2441 15.0685V11.7873ZM13.5254 11.7873H11.3379V15.0685H13.5254V11.7873Z"
                                fill="white" />
                        </svg>
                    </div>
                    <p class="text-md font-medium text-black text-start">Total Tagihan</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-gray-900 pl-3">
                        {{ $formatTotalTagihan ? $formatTotalTagihan : 'Rp 0' }}
                    </p>
                </div>
            </x-card>

            {{-- card 2 --}}
            <x-card class="w-full flex flex-col gap-5">
                <div class="flex items-center gap-5 p-1 rounded-full bg-green-200 w-full">
                    <span class="p-3 bg-green-400 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 22"
                            fill="none">
                            <path
                                d="M0 7.19385C0 10.2749 2.19651 12.843 5.10905 13.4175C5.19341 12.4873 5.43223 11.6017 5.79965 10.7866C4.68755 10.4119 3.97385 9.55908 3.80493 8.34949H3.17188V7.80855H3.76273V7.25778C3.76273 7.19876 3.76273 7.13975 3.768 7.08566H3.17188V6.54472H3.82076C4.10563 4.96124 5.34537 4.02197 7.20761 4.02197C7.60854 4.02197 7.95672 4.06131 8.24687 4.13016V5.05959C7.96728 4.99075 7.62437 4.95632 7.21288 4.95632C6.047 4.95632 5.26096 5.54644 5.01301 6.54472H7.445V7.08566H4.93388C4.92861 7.14467 4.92861 7.2086 4.92861 7.27253V7.80855H7.445V8.34949H4.98664C5.13631 9.11336 5.58057 9.65705 6.26108 9.90861C7.58313 7.72379 9.89062 6.20192 12.5674 5.95915C11.9929 3.04661 9.42482 0.850098 6.34375 0.850098C2.84019 0.850098 0 3.69029 0 7.19385ZM20.3 14.172C20.3 18.0259 17.1758 21.1501 13.3219 21.1501C9.46796 21.1501 6.34375 18.0259 6.34375 14.172C6.34375 10.3181 9.46796 7.19385 13.3219 7.19385C17.1758 7.19385 20.3 10.3181 20.3 14.172ZM10.4672 15.8494C10.5543 16.908 11.4139 17.7332 12.9589 17.8309V18.6126H13.6442V17.8254C15.2415 17.7169 16.1766 16.8863 16.1766 15.6811C16.1766 14.5845 15.4622 14.02 14.1844 13.7268L13.6442 13.602V11.4739C14.3296 11.5499 14.7652 11.9137 14.8697 12.4185H16.072C15.9849 11.3979 15.0846 10.5999 13.6442 10.5131V9.73135H12.9589V10.5294C11.594 10.6596 10.6647 11.4577 10.6647 12.5868C10.6647 13.5857 11.3558 14.2208 12.5058 14.4814L12.9589 14.59V16.8483C12.2561 16.7451 11.7914 16.3706 11.6869 15.8494H10.4672ZM12.9531 13.4445C12.2793 13.2925 11.9134 12.9831 11.9134 12.5162C11.9134 11.9951 12.3084 11.6042 12.9589 11.4902V13.4445H12.9531ZM13.743 14.7691C14.5619 14.9537 14.9394 15.2523 14.9394 15.7788C14.9394 16.3814 14.469 16.794 13.6442 16.87V14.7474L13.743 14.7691Z"
                                fill="white" />
                        </svg>
                    </span>
                    <span class="font-medium text-md text-black">Total Pendapatan Order</span>
                </div>
                <div>
                    <p class="text-2xl font-bold text-gray-900 pl-3">
                        {{ $tenants->total_payment ? $tenants->total_payment : 'Rp 0' }}</p>
                </div>
            </x-card>

            {{-- card 3 --}}
            <x-card class="w-full flex flex-col gap-5">
                <div class="flex items-center gap-5 p-1 rounded-full bg-red-50 w-full">
                    <span class="p-3 bg-red-400 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20"
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
                    <span class= "font-medium text-black">Total Belum Dibayar</span>
                </div>
                <div>
                    <p class="text-xl font-bold text-gray-900 pl-3">
                        {{ $formatUnpaidPayment ? $formatUnpaidPayment : 'Rp 0' }}</p>
                </div>
            </x-card>
        </div>
        <x-card class="mb-5">
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
                        <p>Nama Tenant</p>
                        <p class="font-semibold">{{ $tenants->name }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p>Status Tenant</p>
                        <p class="font-semibold">{{ $tenants->is_active ? 'AKTIF' : 'BELUM AKTIF' }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p>Jumlah Produk</p>
                        <p class="font-semibold">{{ $product }}</p>
                    </div>
                    <div class="flex gap-5 items-center">
                        <div>
                            <p>Harga Service</p>
                            <p class="font-semibold"> Rp. {{ number_format($service->price, 2, ',', '.') }}</p>
                        </div>
                        <div>
                            <button data-modal-target="modal-update-service" data-modal-toggle="modal-update-service"
                                class="bg-yellow-500 rounded-lg border text-white-50 font-bold tracking-wide text-center py-2 px-4">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-2">
                        <p>Code Tenant</p>
                        <p class="font-semibold">#{{ $tenants->code }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p>Nama User Tenant</p>
                        <p class="font-semibold">{{ $tenants->user->name }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p>Jumlah Kategori </p>
                        <p class="font-semibold">{{ $tenants->categories->count() }}</p>
                    </div>
                </div>
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-2">
                        <p>Alamat Tenant</p>
                        <p class="font-semibold">{{ $tenants->address }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p>Emai User Tenant</p>
                        <p class="font-semibold">{{ $tenants->user->email }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p>Deskripsi</p>
                        <p class="font-semibold">{{ $tenants->description }}</p>
                    </div>
                </div>
            </div>
        </x-card>

        <x-card class="mb-5">
            <x-card.header class="flex items-center justify-end sm:justify-between mb-5">
                <x-table.table-title>
                    <x-slot:sub_title> Show the tenant service records </x-slot:sub_title>
                    <x-slot:title> Tenant's Service Payment Records </x-slot:title>
                </x-table.table-title>
                <div class="flex gap-2">
                    <button type="button"
                        class="flex items-center gap-1 h-9 md:h-10 lg:h-12 px-1.5 md:px-2 lg:px-3 bg-yellow-500 rounded-lg"
                        data-modal-target="modal-bill" data-modal-toggle="modal-bill">
                        <svg width="24" height="24" viewBox="0 0 18 18" fill="none" class="lg:hidden"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.5V13.5M13.5 9H4.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="font-bold text-white-50 hidden lg:block">Tagihan Baru</p>
                    </button>
                </div>
            </x-card.header>

            <x-table>
                <x-slot:header>
                    <x-table.th>
                        No
                    </x-table.th>
                    <x-table.th>
                        <p class="flex justify-center items-center">
                            Date
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </p>
                    </x-table.th>
                    <x-table.th>
                        <div class="flex justify-center items-center">
                            Jumlah
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </x-table.th>
                    <x-table.th>
                        Bukti Transfer
                    </x-table.th>
                </x-slot:header>
                @forelse ($paymentPerMonth as $month)
                    <tr class="bg-white border-b">
                        <x-table.th>
                            {{ ($paymentPerMonth->currentPage() - 1) * $paymentPerMonth->perPage() + $loop->index + 1 }}
                        </x-table.th>
                        <x-table.td>
                            {{ $month->transfer_at }}
                        </x-table.td>
                        <x-table.td>
                            Rp. {{ number_format($month->total, 2, ',', '.') }}
                        </x-table.td>
                        <x-table.td>
                            <div class="flex items-center justify-center">
                                <div class="w-12 h-12 border border-yellow-500 rounded-lg p-0.5"
                                    data-modal-target="modal-transaction" data-modal-toggle="modal-transaction">
                                    <img src="{{ $month->getFirstMediaUrl('default') }}" alt=""
                                        x-on:click="bukti_transfer_img = '{{ $month->getFirstMediaUrl('default') }}'">
                                </div>
                            </div>
                        </x-table.td>
                    </tr>
                @empty
                    <tr>
                        <x-table.td>
                            Tidak ada data
                        </x-table.td>
                    </tr>
                @endforelse
                </tbody>
            </x-table>
            {{ $paymentPerMonth->links('pagination.admin') }}
        </x-card>

        <x-card>
            <x-card.header class="flex items-center justify-end sm:justify-between mb-5">
                <x-table.table-title>
                    <x-slot:sub_title> Show the tenant waiter list </x-slot:sub_title>
                    <x-slot:title> Tenant's Waiters </x-slot:title>
                </x-table.table-title>
                <x-filter bg="bg-yellow-500" />
            </x-card.header>

            <x-table>
                <x-slot:header>
                    <x-table.th>
                        No
                    </x-table.th>
                    <x-table.th>
                        Nama Waiters
                    </x-table.th>
                    <x-table.th>
                        Phone Number
                    </x-table.th>
                    <x-table.th>
                        Verifed
                    </x-table.th>
                </x-slot:header>
                @forelse ($waiters as $item)
                    <tr class="bg-white border-b">
                        <x-table.td>
                            {{ ($waiters->currentPage() - 1) * $waiters->perPage() + $loop->index + 1 }}
                        </x-table.td>
                        <x-table.td class="font-medium whitespace-nowrap">
                            <div class="flex items-center gap-2 text-start">
                                <img src="{{ $item->user->getFirstMediaUrl('default') }}" alt=""
                                    class="w-8 h-8 rounded-full">
                                <div class="flex flex-col">
                                    <p class="font-semibold">{{ $item->user->name }}</p>
                                    <p class="text-gray-400">{{ $item->user->email }}</p>
                                </div>
                            </div>
                        </x-table.td>
                        <x-table.td>
                            {{ $item->user->phone_number }}
                        </x-table.td>
                        <x-table.td>
                            @if ($item->user->email_verified_at)
                                <p class="text-center font-semibold bg-green-200 rounded-full py-1 px-10">
                                    Verified
                                </p>
                            @else
                                <p class="text-center text-red-700 font-semibold bg-red-200 rounded-full py-1 px-10">
                                    Not Verified
                                </p>
                            @endif
                        </x-table.td>
                    </tr>
                @empty
                    <tr>
                        <x-table.td colspan="4" class="text-center font-bold text-lg">
                            Tidak ada data
                        </x-table.td>
                    </tr>
                @endforelse
            </x-table>
            {{ $waiters->links('pagination.admin') }}
        </x-card>

        {{-- MODAL TAGIHAN --}}


        <form action="{{ route('admin-tenant-service-store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-modal id="modal-bill" :with_button="true">
                <x-slot:title>
                    <p class="font-bold text-2xl mb-4">Buat Tagihan Baru</p>
                </x-slot:title>
                <div class="mb-3">
                    <label for="total" class="block mb-2 font-medium text-gray-900">
                        Total Transfer</label>
                    <input type="number" id="add" name="total"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                        placeholder="Rp" required>
                    @error('total')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3">
                    <label for="email" class="block mb-2 font-medium text-gray-900">
                        Waktu Transfer</label>
                    <div class="absolute inset-y-2 left-0 flex items-center pl-3.5 pointer-events-none">

                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker type="text" name="transfer_at"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-3"
                            placeholder="Select date">
                        @error('transfer_at')
                            <p>{{ $messege }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="dropzone-file" class="mb-3">Bukti Transfer</label>
                    <div class="flex items-center justify-center w-full" x-data="{ file_name: '' }">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p x-text="file_name">file.png</p>
                            </div>
                            <input id="dropzone-file" type="file" name="image" class="hidden" required
                                x-on:change="file_name = $el.files[0].name" />
                            @error('image')
                                <p>{{ $messege }}</p>
                            @enderror
                        </label>
                    </div>
                </div>
                <input type="hidden" id="tenant_id" name="tenant_id" value="{{ $tenants->id }}" required>
                <input type="hidden" id="tenant_id" name="user_id" value="{{ $tenants->user_id }}" required>
            </x-modal>
        </form>

        <x-modal id="modal-transaction" :with_button="false">
            <x-slot:title>
                <p class="font-bold text-2xl mb-4">Bukti Transfer</p>
            </x-slot:title>
            <div class="flex justify-center">
                <img class="border rounded-xl aspect-square w-[350px]" x-bind:src="bukti_transfer_img" alt="">
            </div>
        </x-modal>

        <form action="{{ route('admin-tenant-update-service', $tenants->id) }}" method="POST">
            @csrf
            <x-modal id="modal-update-service">
                <x-slot:title>
                    <p class="font-bold text-2xl mb-4">Edit Service</p>
                </x-slot:title>
                <div class="flex flex-col">
                    <label for="price" class="block mb-2 font-medium">
                        Service price</label>
                    <input type="number" id="number" name="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                        placeholder="Price" required>
                    @error('price')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            </x-modal>
        </form>
    </div>
@endsection
