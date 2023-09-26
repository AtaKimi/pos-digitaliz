@extends('layouts.tenant')

@section('content')
    <div class="rounded-2xl overflow-hidden shadow-lg bg-white-50 mb-5">
        <div class="p-4">
            <div class="flex items-center">
                <div class="mr-4 bg-red-100 rounded-xl p-5">
                    <!-- Icon di sini -->
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.4062 2.8502C18.1454 2.7459 17.8546 2.7459 17.5938 2.8502L4.53876 8.07221L9.79688 10.1755L23.2581 4.79096L18.4062 2.8502ZM26.2031 5.96897L12.7419 11.3535L18 13.4567L31.4612 8.07221L26.2031 5.96897ZM33.3125 9.68772L19.0938 15.3752V32.7067L33.3125 27.0192V9.68772ZM16.9062 32.7067V15.3752L2.6875 9.68772V27.0192L16.9062 32.7067ZM16.7814 0.819159C17.5637 0.506244 18.4363 0.506244 19.2186 0.819158L34.8125 7.05669C35.2277 7.22279 35.5 7.62497 35.5 8.07221V27.0192C35.5 27.9137 34.9554 28.7181 34.1249 29.0503L18.4062 35.3377C18.1454 35.442 17.8546 35.442 17.5938 35.3377L1.87508 29.0503C1.04458 28.7181 0.5 27.9137 0.5 27.0192V8.07221C0.5 7.62497 0.77229 7.22279 1.18754 7.05669L16.7814 0.819159Z"
                            fill="#F54748" />
                    </svg>
                </div>
                <div>
                    <!-- Title di sini -->
                    <p class="font-bold text-xl text-gray-900">Add Product</p>
                    <!-- Subtitle di sini -->
                    <p class="text-gray-600">Akses menambah resto kamu</p>
                </div>
            </div>
        </div>
    </div>

    <div class="p-2 bg-white-50 border border-gray-200 rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between py-5 px-3">
            <div>
                <p class="text-lg font-semibold text-gray-700">Add Product</p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row mx-5 my-2 h-full">
            <div class="w-full border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-4 px-5 mr-5">
                <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 dark:text-white pt-4">Add Images</label>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-60 border-2 border-blue-400 border-dashed rounded-lg cursor-pointer bg-gray-100 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.00585938 12.125C0.00585938 7.84479 3.47565 4.375 7.75586 4.375H54.2559C58.5361 4.375 62.0059 7.84479 62.0059 12.125V50.875C62.0059 55.1552 58.5361 58.625 54.2559 58.625H7.75586C3.47565 58.625 0.00585938 55.1552 0.00585938 50.875V12.125ZM3.88086 47V50.875C3.88086 53.0151 5.61576 54.75 7.75586 54.75H54.2559C56.396 54.75 58.1309 53.0151 58.1309 50.875V37.3125L43.4973 29.767C42.7514 29.3941 41.8505 29.5403 41.2608 30.13L26.884 44.5068L16.5806 37.6379C15.8121 37.1256 14.7889 37.2269 14.1358 37.88L3.88086 47ZM23.2559 21.8125C23.2559 18.6023 20.6535 16 17.4434 16C14.2332 16 11.6309 18.6023 11.6309 21.8125C11.6309 25.0227 14.2332 27.625 17.4434 27.625C20.6535 27.625 23.2559 25.0227 23.2559 21.8125Z" fill="#B4ABAB"/>
                            </svg>
                                                            
                            <span class="text-xs text-gray-500 dark:text-gray-400">
                                Drop your files here. <span class="text-xs text-blue-500">Browse</span></span>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div> 
                <div class="border border-gray-200 rounded-lg px-2 py-2 my-4">
                    <div class="flex items-center justify-between mx-1">
                        <div class="flex items-center">
                            <img class="w-8 h-8 rounded-md mr-1" src="{{url('assets/img/anya-profile.png')}}" alt="Rounded avatar">
                            <div>
                                <!-- Title di sini -->
                                <p class="text-left">sotoanya.jpeg</p>
                                <!-- Subtitle di sini -->
                                <p class="text-gray-500 text-xs">500 KB</p>
                            </div>
                        </div>
                        <button type="button" class="hover:font-bold focus:ring-2 focus:outline-none focus:ring-red-300 rounded-lg text-sm p-2.5 text-center inline-flex items-center hover:bg-red-200">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1.5V2.5H13.5C13.7761 2.5 14 2.72386 14 3C14 3.27614 13.7761 3.5 13.5 3.5H12.9616L12.1088 14.1595C12.0257 15.1989 11.1579 16 10.1152 16H3.88479C2.84207 16 1.97431 15.1989 1.89116 14.1595L1.0384 3.5H0.5C0.223858 3.5 0 3.27614 0 3C0 2.72386 0.223858 2.5 0.5 2.5H4V1.5C4 0.671573 4.67157 0 5.5 0H8.5C9.32843 0 10 0.671573 10 1.5ZM5 1.5V2.5H9V1.5C9 1.22386 8.77614 1 8.5 1H5.5C5.22386 1 5 1.22386 5 1.5ZM3.49999 5.0285L3.99999 13.5285C4.0162 13.8042 4.25282 14.0145 4.52849 13.9983C4.80415 13.9821 5.01448 13.7454 4.99826 13.4698L4.49826 4.96978C4.48205 4.69411 4.24543 4.48379 3.96976 4.5C3.6941 4.51622 3.48377 4.75283 3.49999 5.0285ZM10.0302 4.50086C9.75457 4.48465 9.51795 4.69497 9.50173 4.97064L9.00173 13.4706C8.98552 13.7463 9.19584 13.9829 9.47151 13.9991C9.74717 14.0154 9.98379 13.805 10 13.5294L10.5 5.02936C10.5162 4.75369 10.3059 4.51708 10.0302 4.50086ZM7 4.5C6.72386 4.5 6.5 4.72386 6.5 5V13.5C6.5 13.7761 6.72386 14 7 14C7.27615 14 7.5 13.7761 7.5 13.5V5C7.5 4.72386 7.27615 4.5 7 4.5Z" fill="#F54748"/>
                            </svg>
                            <span class="sr-only">Icon description</span>
                        </button>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg px-2 py-2 my-4">
                    <div class="flex items-center justify-between mx-1">
                        <div class="flex items-center">
                            <img class="w-8 h-8 rounded-md mr-1" src="{{url('https://th.bing.com/th/id/OIP.EjVB6gfszgfGNYwn7IyFEgHaHa?pid=ImgDet&rs=1')}}" alt="Rounded avatar">
                            <div>
                                <!-- Title di sini -->
                                <p class="text-left">sotobanjar.png</p>
                                <!-- Subtitle di sini -->
                                <p class="text-gray-500 text-xs">500 KB</p>
                            </div>
                        </div>
                        <button type="button" class="hover:font-bold focus:ring-2 focus:outline-none focus:ring-red-300 rounded-lg text-sm p-2.5 text-center inline-flex items-center hover:bg-red-200">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1.5V2.5H13.5C13.7761 2.5 14 2.72386 14 3C14 3.27614 13.7761 3.5 13.5 3.5H12.9616L12.1088 14.1595C12.0257 15.1989 11.1579 16 10.1152 16H3.88479C2.84207 16 1.97431 15.1989 1.89116 14.1595L1.0384 3.5H0.5C0.223858 3.5 0 3.27614 0 3C0 2.72386 0.223858 2.5 0.5 2.5H4V1.5C4 0.671573 4.67157 0 5.5 0H8.5C9.32843 0 10 0.671573 10 1.5ZM5 1.5V2.5H9V1.5C9 1.22386 8.77614 1 8.5 1H5.5C5.22386 1 5 1.22386 5 1.5ZM3.49999 5.0285L3.99999 13.5285C4.0162 13.8042 4.25282 14.0145 4.52849 13.9983C4.80415 13.9821 5.01448 13.7454 4.99826 13.4698L4.49826 4.96978C4.48205 4.69411 4.24543 4.48379 3.96976 4.5C3.6941 4.51622 3.48377 4.75283 3.49999 5.0285ZM10.0302 4.50086C9.75457 4.48465 9.51795 4.69497 9.50173 4.97064L9.00173 13.4706C8.98552 13.7463 9.19584 13.9829 9.47151 13.9991C9.74717 14.0154 9.98379 13.805 10 13.5294L10.5 5.02936C10.5162 4.75369 10.3059 4.51708 10.0302 4.50086ZM7 4.5C6.72386 4.5 6.5 4.72386 6.5 5V13.5C6.5 13.7761 6.72386 14 7 14C7.27615 14 7.5 13.7761 7.5 13.5V5C7.5 4.72386 7.27615 4.5 7 4.5Z" fill="#F54748"/>
                            </svg>
                            <span class="sr-only">Icon description</span>
                        </button>                     
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="text-red-500 font-medium rounded-lg text-md px-2 py-2.5 text-center mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Cancel</button>
                </div>
                
            </div>

            <div class="w-full border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                <div>
                    <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 dark:text-white pt-3">Product Name</label>
                    <input type="text" id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Input name" required>
                </div>
                <div>
                    <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 dark:text-white pt-2">Choose Category</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select a category</option>
                        <option value="satu">Category 1</option>
                        <option value="dua">Category 2</option>
                        <option value="tiga">Category 3</option>
                        <option value="empat">Category 4</option>
                    </select>
                </div>
                <div>
                    <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 dark:text-white pt-2">Price</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-white-50 border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600 rounded-l-lg">
                            Rp
                        </span>
                        <input type="text" id="website-admin"
                            class="rounded-none bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 rounded-r-lg">
                    </div>
                </div>
                <div>
                    <label for="first_name" class="block mb-2 text-md font-semibold text-gray-900 dark:text-white pt-2">Description</label>
                    <textarea id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Input Description"></textarea>
                </div>
            </div>
        </div>
        <div class="flex justify-end mx-2 my-5">
            <button type="button"
                class="text-red-500 bg-white border border-red-400 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Back</button>
            <button type="button"
                class="focus:outline-none text-white-50 bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Publish
                Product</button>
        </div>
    </div>
    

        

@endsection
