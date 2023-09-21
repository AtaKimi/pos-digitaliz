@extends('layouts.tenant')

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
                <h3 class="text-2xl font-bold">Category</h3>
                <p class="text-base">Akses mengedit, menambah atau menghapus kategori resto kamu</p>
            </div>
        </div>

        <div class="bg-white w-full rounded-3xl shadow-md mb-8 bg-white-50">
            <div class="flex items-center justify-between p-8">
                <h4 class="text-lg font-semibold">Category List</h4>
                <div class="flex gap-4">
                    <form>
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3  pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
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
                    <button class="flex items-center p-3 bg-red-500 rounded-lg gap-2" data-modal-target="modal-add-category"
                        data-modal-toggle="modal-add-category">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 4.5V13.5M13.5 9H4.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="text-sm font-semibold text-white-50">Kategpri Baru</p>
                    </button>
                </div>
            </div>

            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                1
                            </th>
                            <td class="px-6 py-4">
                                Nama Kategori 1
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 border-2 border-yellow-500 rounded-lg"
                                        data-modal-target="modal-edit-category" data-modal-toggle="modal-edit-category">
                                        <path
                                            d="M14.1465 2.35104C14.3417 2.15577 14.6583 2.15577 14.8536 2.35104L17.8536 5.35104C18.0488 5.5463 18.0488 5.86288 17.8536 6.05814L7.85357 16.0581C7.80569 16.106 7.74858 16.1437 7.68571 16.1688L2.68571 18.1688C2.5 18.2431 2.28789 18.1996 2.14646 18.0581C2.00503 17.9167 1.96149 17.7046 2.03578 17.5189L4.03578 12.5189C4.06092 12.456 4.09858 12.3989 4.14646 12.351L14.1465 2.35104ZM13.2071 4.70459L15.5 6.99748L16.7929 5.70459L14.5 3.4117L13.2071 4.70459ZM14.7929 7.70459L12.5 5.4117L6.00001 11.9117V12.2046H6.50001C6.77616 12.2046 7.00001 12.4284 7.00001 12.7046V13.2046H7.50001C7.77616 13.2046 8.00001 13.4284 8.00001 13.7046V14.2046H8.29291L14.7929 7.70459ZM5.03167 12.88L4.92614 12.9856L3.39754 16.8071L7.21903 15.2785L7.32456 15.1729C7.13496 15.1019 7.00001 14.919 7.00001 14.7046V14.2046H6.50001C6.22387 14.2046 6.00001 13.9807 6.00001 13.7046V13.2046H5.50001C5.28561 13.2046 5.10272 13.0696 5.03167 12.88Z"
                                            fill="#FDC55E" />
                                    </svg>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 border-2 border-red-500 rounded-lg"
                                        data-modal-target="modal-delete-category" data-modal-toggle="modal-delete-category">
                                        <path
                                            d="M7.44434 1.69971H10.4443C10.7205 1.69971 10.9443 1.92356 10.9443 2.19971V3.19971H6.94434V2.19971C6.94434 1.92356 7.16819 1.69971 7.44434 1.69971ZM11.9443 3.19971V2.19971C11.9443 1.37128 11.2728 0.699707 10.4443 0.699707H7.44434C6.61591 0.699707 5.94434 1.37128 5.94434 2.19971V3.19971H3.44999C3.44659 3.19967 3.44319 3.19967 3.43978 3.19971H2.44434C2.16819 3.19971 1.94434 3.42356 1.94434 3.69971C1.94434 3.97585 2.16819 4.19971 2.44434 4.19971H2.98274L3.8355 14.8592C3.91865 15.8986 4.78641 16.6997 5.82913 16.6997H12.0595C13.1023 16.6997 13.97 15.8986 14.0532 14.8592L14.9059 4.19971H15.4443C15.7205 4.19971 15.9443 3.97585 15.9443 3.69971C15.9443 3.42356 15.7205 3.19971 15.4443 3.19971H14.4489C14.4455 3.19967 14.4421 3.19967 14.4387 3.19971H11.9443ZM13.9027 4.19971L13.0564 14.7795C13.0148 15.2992 12.5809 15.6997 12.0595 15.6997H5.82913C5.30777 15.6997 4.87389 15.2992 4.83231 14.7795L3.98593 4.19971H13.9027ZM6.41498 5.20057C6.69064 5.18435 6.92726 5.39468 6.94347 5.67035L7.44347 14.1703C7.45969 14.446 7.24936 14.6826 6.9737 14.6988C6.69803 14.7151 6.46141 14.5047 6.4452 14.2291L5.9452 5.72907C5.92898 5.4534 6.13931 5.21679 6.41498 5.20057ZM11.4737 5.20057C11.7494 5.21679 11.9597 5.4534 11.9435 5.72907L11.4435 14.2291C11.4273 14.5047 11.1906 14.7151 10.915 14.6988C10.6393 14.6826 10.429 14.446 10.4452 14.1703L10.9452 5.67035C10.9614 5.39468 11.198 5.18435 11.4737 5.20057ZM8.94434 5.19971C9.22048 5.19971 9.44434 5.42356 9.44434 5.69971V14.1997C9.44434 14.4759 9.22048 14.6997 8.94434 14.6997C8.66819 14.6997 8.44434 14.4759 8.44434 14.1997V5.69971C8.44434 5.42356 8.66819 5.19971 8.94434 5.19971Z"
                                            fill="#FF8081" />
                                    </svg>

                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                2
                            </th>
                            <td class="px-6 py-4">
                                Nama Kategori 2
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 border-2 border-yellow-500 rounded-lg">
                                        <path
                                            d="M14.1465 2.35104C14.3417 2.15577 14.6583 2.15577 14.8536 2.35104L17.8536 5.35104C18.0488 5.5463 18.0488 5.86288 17.8536 6.05814L7.85357 16.0581C7.80569 16.106 7.74858 16.1437 7.68571 16.1688L2.68571 18.1688C2.5 18.2431 2.28789 18.1996 2.14646 18.0581C2.00503 17.9167 1.96149 17.7046 2.03578 17.5189L4.03578 12.5189C4.06092 12.456 4.09858 12.3989 4.14646 12.351L14.1465 2.35104ZM13.2071 4.70459L15.5 6.99748L16.7929 5.70459L14.5 3.4117L13.2071 4.70459ZM14.7929 7.70459L12.5 5.4117L6.00001 11.9117V12.2046H6.50001C6.77616 12.2046 7.00001 12.4284 7.00001 12.7046V13.2046H7.50001C7.77616 13.2046 8.00001 13.4284 8.00001 13.7046V14.2046H8.29291L14.7929 7.70459ZM5.03167 12.88L4.92614 12.9856L3.39754 16.8071L7.21903 15.2785L7.32456 15.1729C7.13496 15.1019 7.00001 14.919 7.00001 14.7046V14.2046H6.50001C6.22387 14.2046 6.00001 13.9807 6.00001 13.7046V13.2046H5.50001C5.28561 13.2046 5.10272 13.0696 5.03167 12.88Z"
                                            fill="#FDC55E" />
                                    </svg>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 border-2 border-red-500 rounded-lg">
                                        <path
                                            d="M7.44434 1.69971H10.4443C10.7205 1.69971 10.9443 1.92356 10.9443 2.19971V3.19971H6.94434V2.19971C6.94434 1.92356 7.16819 1.69971 7.44434 1.69971ZM11.9443 3.19971V2.19971C11.9443 1.37128 11.2728 0.699707 10.4443 0.699707H7.44434C6.61591 0.699707 5.94434 1.37128 5.94434 2.19971V3.19971H3.44999C3.44659 3.19967 3.44319 3.19967 3.43978 3.19971H2.44434C2.16819 3.19971 1.94434 3.42356 1.94434 3.69971C1.94434 3.97585 2.16819 4.19971 2.44434 4.19971H2.98274L3.8355 14.8592C3.91865 15.8986 4.78641 16.6997 5.82913 16.6997H12.0595C13.1023 16.6997 13.97 15.8986 14.0532 14.8592L14.9059 4.19971H15.4443C15.7205 4.19971 15.9443 3.97585 15.9443 3.69971C15.9443 3.42356 15.7205 3.19971 15.4443 3.19971H14.4489C14.4455 3.19967 14.4421 3.19967 14.4387 3.19971H11.9443ZM13.9027 4.19971L13.0564 14.7795C13.0148 15.2992 12.5809 15.6997 12.0595 15.6997H5.82913C5.30777 15.6997 4.87389 15.2992 4.83231 14.7795L3.98593 4.19971H13.9027ZM6.41498 5.20057C6.69064 5.18435 6.92726 5.39468 6.94347 5.67035L7.44347 14.1703C7.45969 14.446 7.24936 14.6826 6.9737 14.6988C6.69803 14.7151 6.46141 14.5047 6.4452 14.2291L5.9452 5.72907C5.92898 5.4534 6.13931 5.21679 6.41498 5.20057ZM11.4737 5.20057C11.7494 5.21679 11.9597 5.4534 11.9435 5.72907L11.4435 14.2291C11.4273 14.5047 11.1906 14.7151 10.915 14.6988C10.6393 14.6826 10.429 14.446 10.4452 14.1703L10.9452 5.67035C10.9614 5.39468 11.198 5.18435 11.4737 5.20057ZM8.94434 5.19971C9.22048 5.19971 9.44434 5.42356 9.44434 5.69971V14.1997C9.44434 14.4759 9.22048 14.6997 8.94434 14.6997C8.66819 14.6997 8.44434 14.4759 8.44434 14.1997V5.69971C8.44434 5.42356 8.66819 5.19971 8.94434 5.19971Z"
                                            fill="#FF8081" />
                                    </svg>

                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                2
                            </th>
                            <td class="px-6 py-4">
                                Nama Kategori 2
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 border-2 border-yellow-500 rounded-lg">
                                        <path
                                            d="M14.1465 2.35104C14.3417 2.15577 14.6583 2.15577 14.8536 2.35104L17.8536 5.35104C18.0488 5.5463 18.0488 5.86288 17.8536 6.05814L7.85357 16.0581C7.80569 16.106 7.74858 16.1437 7.68571 16.1688L2.68571 18.1688C2.5 18.2431 2.28789 18.1996 2.14646 18.0581C2.00503 17.9167 1.96149 17.7046 2.03578 17.5189L4.03578 12.5189C4.06092 12.456 4.09858 12.3989 4.14646 12.351L14.1465 2.35104ZM13.2071 4.70459L15.5 6.99748L16.7929 5.70459L14.5 3.4117L13.2071 4.70459ZM14.7929 7.70459L12.5 5.4117L6.00001 11.9117V12.2046H6.50001C6.77616 12.2046 7.00001 12.4284 7.00001 12.7046V13.2046H7.50001C7.77616 13.2046 8.00001 13.4284 8.00001 13.7046V14.2046H8.29291L14.7929 7.70459ZM5.03167 12.88L4.92614 12.9856L3.39754 16.8071L7.21903 15.2785L7.32456 15.1729C7.13496 15.1019 7.00001 14.919 7.00001 14.7046V14.2046H6.50001C6.22387 14.2046 6.00001 13.9807 6.00001 13.7046V13.2046H5.50001C5.28561 13.2046 5.10272 13.0696 5.03167 12.88Z"
                                            fill="#FDC55E" />
                                    </svg>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-10 h-10 p-2 border-2 border-red-500 rounded-lg">
                                        <path
                                            d="M7.44434 1.69971H10.4443C10.7205 1.69971 10.9443 1.92356 10.9443 2.19971V3.19971H6.94434V2.19971C6.94434 1.92356 7.16819 1.69971 7.44434 1.69971ZM11.9443 3.19971V2.19971C11.9443 1.37128 11.2728 0.699707 10.4443 0.699707H7.44434C6.61591 0.699707 5.94434 1.37128 5.94434 2.19971V3.19971H3.44999C3.44659 3.19967 3.44319 3.19967 3.43978 3.19971H2.44434C2.16819 3.19971 1.94434 3.42356 1.94434 3.69971C1.94434 3.97585 2.16819 4.19971 2.44434 4.19971H2.98274L3.8355 14.8592C3.91865 15.8986 4.78641 16.6997 5.82913 16.6997H12.0595C13.1023 16.6997 13.97 15.8986 14.0532 14.8592L14.9059 4.19971H15.4443C15.7205 4.19971 15.9443 3.97585 15.9443 3.69971C15.9443 3.42356 15.7205 3.19971 15.4443 3.19971H14.4489C14.4455 3.19967 14.4421 3.19967 14.4387 3.19971H11.9443ZM13.9027 4.19971L13.0564 14.7795C13.0148 15.2992 12.5809 15.6997 12.0595 15.6997H5.82913C5.30777 15.6997 4.87389 15.2992 4.83231 14.7795L3.98593 4.19971H13.9027ZM6.41498 5.20057C6.69064 5.18435 6.92726 5.39468 6.94347 5.67035L7.44347 14.1703C7.45969 14.446 7.24936 14.6826 6.9737 14.6988C6.69803 14.7151 6.46141 14.5047 6.4452 14.2291L5.9452 5.72907C5.92898 5.4534 6.13931 5.21679 6.41498 5.20057ZM11.4737 5.20057C11.7494 5.21679 11.9597 5.4534 11.9435 5.72907L11.4435 14.2291C11.4273 14.5047 11.1906 14.7151 10.915 14.6988C10.6393 14.6826 10.429 14.446 10.4452 14.1703L10.9452 5.67035C10.9614 5.39468 11.198 5.18435 11.4737 5.20057ZM8.94434 5.19971C9.22048 5.19971 9.44434 5.42356 9.44434 5.69971V14.1997C9.44434 14.4759 9.22048 14.6997 8.94434 14.6997C8.66819 14.6997 8.44434 14.4759 8.44434 14.1997V5.69971C8.44434 5.42356 8.66819 5.19971 8.94434 5.19971Z"
                                            fill="#FF8081" />
                                    </svg>

                                </div>
                            </td>
                        </tr>
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
                                    class="flex items-center justify-center px-4 h-10 leading-tight  bg-red-500 text-white-50 border border-gray-300 rounded-lg ">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight  bg-white border border-gray-300 rounded-lg ">2</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 leading-tight  bg-white border border-gray-300 rounded-lg ">3</a>
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

        {{-- MODAL ADD CATEGORY --}}

        <div id="modal-add-category" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="flex flex-col gap-10 relative bg-white-50 rounded-xl shadow dark:bg-gray-700 p-10 w-[500px]">
                    <div class="flex justify-between items-center">
                        <div class=""></div>
                        <p class="font-bold text-2xl">Tambah Kategori</p>
                        <p class="text-2xl font-bold cursor-pointer" data-modal-target="modal-add-category"
                            data-modal-toggle="modal-add-category">X</p>
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="block mb-2 text-sm font-medium">
                            Nama Kategori</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Nama Kategori" required>
                    </div>
                    <div class="flex grid-cols-2 gap-3">
                        <button
                            class="py-2 w-full rounded-lg font-bold hover:border-2 hover:border-black-400">Batalkan</button>
                        <button class="py-2 w-full bg-red-500 text-white-50 rounded-lg font-bold">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL ADD CATEGORY --}}

        <div id="modal-edit-category" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="flex flex-col gap-10 relative bg-white-50 rounded-xl shadow dark:bg-gray-700 p-10 w-[500px]">
                    <div class="flex justify-between items-center">
                        <div class=""></div>
                        <p class="font-bold text-2xl">Edit Kategori</p>
                        <p class="text-2xl font-bold cursor-pointer" data-modal-target="modal-edit-category"
                            data-modal-toggle="modal-edit-category">X</p>
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="block mb-2 text-sm font-medium">
                            Nama Kategori</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            placeholder="Nama Kategori" required>
                    </div>
                    <div class="flex grid-cols-2 gap-3">
                        <button
                            class="py-2 w-full rounded-lg font-bold hover:border-2 hover:border-black-400">Batalkan</button>
                        <button class="py-2 w-full bg-red-500 text-white-50 rounded-lg font-bold">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- MODAL DELETE CATEGORY --}}

        <div id="modal-delete-category" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="flex flex-col gap-10 relative bg-white-50 rounded-xl shadow dark:bg-gray-700 p-10 w-[500px]">
                    <div class="flex justify-between items-center">
                        <div class=""></div>
                        <p class="font-bold text-2xl">Edit Kategori</p>
                        <p class="text-2xl font-bold cursor-pointer" data-modal-target="modal-delete-category"
                            data-modal-toggle="modal-delete-category">X</p>
                    </div>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="mx-auto">
                        <rect width="100" height="100" rx="50" fill="#FC5F5F" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M47.5 30C47.0358 30.0002 46.5809 30.1297 46.1862 30.3739C45.7914 30.6181 45.4725 30.9673 45.265 31.3825L43.455 35H35C34.337 35 33.7011 35.2634 33.2322 35.7322C32.7634 36.2011 32.5 36.837 32.5 37.5C32.5 38.163 32.7634 38.7989 33.2322 39.2678C33.7011 39.7366 34.337 40 35 40V65C35 66.3261 35.5268 67.5979 36.4645 68.5355C37.4021 69.4732 38.6739 70 40 70H60C61.3261 70 62.5979 69.4732 63.5355 68.5355C64.4732 67.5979 65 66.3261 65 65V40C65.663 40 66.2989 39.7366 66.7678 39.2678C67.2366 38.7989 67.5 38.163 67.5 37.5C67.5 36.837 67.2366 36.2011 66.7678 35.7322C66.2989 35.2634 65.663 35 65 35H56.545L54.735 31.3825C54.5275 30.9673 54.2086 30.6181 53.8138 30.3739C53.4191 30.1297 52.9642 30.0002 52.5 30H47.5ZM42.5 45C42.5 44.337 42.7634 43.7011 43.2322 43.2322C43.7011 42.7634 44.337 42.5 45 42.5C45.663 42.5 46.2989 42.7634 46.7678 43.2322C47.2366 43.7011 47.5 44.337 47.5 45V60C47.5 60.663 47.2366 61.2989 46.7678 61.7678C46.2989 62.2366 45.663 62.5 45 62.5C44.337 62.5 43.7011 62.2366 43.2322 61.7678C42.7634 61.2989 42.5 60.663 42.5 60V45ZM55 42.5C54.337 42.5 53.7011 42.7634 53.2322 43.2322C52.7634 43.7011 52.5 44.337 52.5 45V60C52.5 60.663 52.7634 61.2989 53.2322 61.7678C53.7011 62.2366 54.337 62.5 55 62.5C55.663 62.5 56.2989 62.2366 56.7678 61.7678C57.2366 61.2989 57.5 60.663 57.5 60V45C57.5 44.337 57.2366 43.7011 56.7678 43.2322C56.2989 42.7634 55.663 42.5 55 42.5Z"
                            fill="white" />
                    </svg>
                    <p class="text-gray-500 text-center">Apakah Anda yakin ingin menghapus kategori ini?</p>
                    <div class="flex grid-cols-2 gap-3">
                        <button
                            class="py-2 w-full rounded-lg font-bold hover:border-2 hover:border-black-400">Batalkan</button>
                        <button class="py-2 w-full bg-red-500 text-white-50 rounded-lg font-bold">Hapus</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
