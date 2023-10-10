@extends('layouts.tenant')

@section('content')
    <div class="mb-5 overflow-hidden shadow-lg rounded-2xl bg-white-50">
        <div class="p-4">
            <div class="flex items-center">
                <div class="p-4 mr-4 bg-red-100 rounded-xl">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="#F54748" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.5 1.66667C0.5 1.02233 1.02233 0.5 1.66667 0.5H5.16667C5.70201 0.5 6.16866 0.864347 6.2985 1.38371L7.24424 5.16667H34.3333C34.6804 5.16667 35.0094 5.32119 35.2311 5.58826C35.4527 5.85533 35.544 6.20722 35.48 6.54834L31.98 25.215C31.8766 25.7668 31.3947 26.1667 30.8333 26.1667H28.5H12.1667H9.83333C9.27192 26.1667 8.79011 25.7668 8.68665 25.215L5.19306 6.58254L4.25576 2.83333H1.66667C1.02233 2.83333 0.5 2.311 0.5 1.66667ZM7.73908 7.5L10.8016 23.8333H29.8651L32.9276 7.5H7.73908ZM12.1667 26.1667C9.58934 26.1667 7.5 28.256 7.5 30.8333C7.5 33.4107 9.58934 35.5 12.1667 35.5C14.744 35.5 16.8333 33.4107 16.8333 30.8333C16.8333 28.256 14.744 26.1667 12.1667 26.1667ZM28.5 26.1667C25.9227 26.1667 23.8333 28.256 23.8333 30.8333C23.8333 33.4107 25.9227 35.5 28.5 35.5C31.0773 35.5 33.1667 33.4107 33.1667 30.8333C33.1667 28.256 31.0773 26.1667 28.5 26.1667ZM12.1667 28.5C13.4553 28.5 14.5 29.5447 14.5 30.8333C14.5 32.122 13.4553 33.1667 12.1667 33.1667C10.878 33.1667 9.83333 32.122 9.83333 30.8333C9.83333 29.5447 10.878 28.5 12.1667 28.5ZM28.5 28.5C29.7887 28.5 30.8333 29.5447 30.8333 30.8333C30.8333 32.122 29.7887 33.1667 28.5 33.1667C27.2113 33.1667 26.1667 32.122 26.1667 30.8333C26.1667 29.5447 27.2113 28.5 28.5 28.5Z" />
                    </svg>
                </div>
                <div>
                    <p class="text-xl font-bold text-gray-900">Order</p>
                    <p class="hidden text-xs text-gray-600 md:block">Akses melihat pesanan pelanggan sesuai nomor meja</p>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('tenant-product-update', [$tenant, $product], ) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="w-full p-8 mb-8 bg-white-200 rounded-xl">
            <p class="mb-5 font-semibold text-gray-900">Add Product</p>
            <div class="flex flex-col justify-between gap-6 mb-6 md:flex-row">
                <div class="flex flex-col w-full gap-4 p-8 border border-gray-400 bg-white-50 rounded-xl">
                    <p class="font-semibold text-gray-600">Add Images</p>
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 bg-gray-100 border-2 border-blue-500 border-dashed cursor-pointer rounded-xl ">
                            <div class="flex flex-col items-center justify-center gap-4 pt-5 pb-6">
                                <svg width="63" height="55" viewBox="0 0 63 55" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.00585938 8.125C0.00585938 3.84479 3.47565 0.375 7.75586 0.375H54.2559C58.5361 0.375 62.0059 3.84479 62.0059 8.125V46.875C62.0059 51.1552 58.5361 54.625 54.2559 54.625H7.75586C3.47565 54.625 0.00585938 51.1552 0.00585938 46.875V8.125ZM3.88086 43V46.875C3.88086 49.0151 5.61576 50.75 7.75586 50.75H54.2559C56.396 50.75 58.1309 49.0151 58.1309 46.875V33.3125L43.4973 25.767C42.7514 25.3941 41.8505 25.5403 41.2608 26.13L26.884 40.5068L16.5806 33.6379C15.8121 33.1256 14.7889 33.2269 14.1358 33.88L3.88086 43ZM23.2559 17.8125C23.2559 14.6023 20.6535 12 17.4434 12C14.2332 12 11.6309 14.6023 11.6309 17.8125C11.6309 21.0227 14.2332 23.625 17.4434 23.625C20.6535 23.625 23.2559 21.0227 23.2559 17.8125Z"
                                        fill="#B4ABAB" />
                                </svg>

                                <div class="flex items-center gap-2">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.0625 5.25C2.82088 5.25 2.625 5.44588 2.625 5.6875V12.6875C2.625 12.9291 2.82088 13.125 3.0625 13.125H10.9375C11.1791 13.125 11.375 12.9291 11.375 12.6875V5.6875C11.375 5.44588 11.1791 5.25 10.9375 5.25H9.1875C8.94588 5.25 8.75 5.05412 8.75 4.8125C8.75 4.57088 8.94588 4.375 9.1875 4.375H10.9375C11.6624 4.375 12.25 4.96263 12.25 5.6875V12.6875C12.25 13.4124 11.6624 14 10.9375 14H3.0625C2.33763 14 1.75 13.4124 1.75 12.6875V5.6875C1.75 4.96263 2.33763 4.375 3.0625 4.375H4.8125C5.05412 4.375 5.25 4.57088 5.25 4.8125C5.25 5.05412 5.05412 5.25 4.8125 5.25H3.0625Z"
                                            fill="#2869D4" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6.69064 0.128141C6.8615 -0.0427136 7.1385 -0.0427136 7.30936 0.128141L9.93436 2.75314C10.1052 2.924 10.1052 3.201 9.93436 3.37186C9.7635 3.54271 9.4865 3.54271 9.31564 3.37186L7.4375 1.49372V9.1875C7.4375 9.42912 7.24162 9.625 7 9.625C6.75838 9.625 6.5625 9.42912 6.5625 9.1875V1.49372L4.68436 3.37186C4.5135 3.54271 4.2365 3.54271 4.06564 3.37186C3.89479 3.201 3.89479 2.924 4.06564 2.75314L6.69064 0.128141Z"
                                            fill="#2869D4" />
                                    </svg>
                                    <p class="text-sm">
                                        Drop your files here. Or <span class="font-bold text-blue-500">Click to
                                            Browse</span>
                                    </p>
                                </div>
                            </div>
                            <input id="dropzone-file" type="file" oninput="testing1()" multiple
                                name="images[]" />
                        </label>
                        @error('images')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-4" id="uploaded-items">
                        @foreach ($product->getMedia('default') as $media)
                            <div class="flex items-center justify-between p-3 border border-gray-300 bg-white-50 rounded-xl"
                                id="media-{{$media->id}}">
                                <input type="number" class="hidden" name="product_media[]" value="{{$media->id}}">
                                <div class="flex items-center gap-4">
                                    <img src="{{ $media->getUrl() }}" alt="" class="w-10 h-10 rounded-lg">
                                    <div>
                                        <p class="text-sm font-bold">
                                            {{ $media->file_name }}
                                        </p>
                                        <p class="text-sm text-gray-500">
                                            {{ round($media->size / 1024, 3) }} KB
                                        </p>
                                    </div>
                                </div>
                                <div class="mr-5">
                                    <button type='button' class="p-4 border rounded-lg bg-white-200" onclick="removeElement('media-{{$media->id}}')"> 
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 1.5V2.5H13.5C13.7761 2.5 14 2.72386 14 3C14 3.27614 13.7761 3.5 13.5 3.5H12.9616L12.1088 14.1595C12.0257 15.1989 11.1579 16 10.1152 16H3.88479C2.84207 16 1.97431 15.1989 1.89116 14.1595L1.0384 3.5H0.5C0.223858 3.5 0 3.27614 0 3C0 2.72386 0.223858 2.5 0.5 2.5H4V1.5C4 0.671573 4.67157 0 5.5 0H8.5C9.32843 0 10 0.671573 10 1.5ZM5 1.5V2.5H9V1.5C9 1.22386 8.77614 1 8.5 1H5.5C5.22386 1 5 1.22386 5 1.5ZM3.49999 5.0285L3.99999 13.5285C4.0162 13.8042 4.25282 14.0145 4.52849 13.9983C4.80415 13.9821 5.01448 13.7454 4.99826 13.4698L4.49826 4.96978C4.48205 4.69411 4.24543 4.48379 3.96976 4.5C3.6941 4.51622 3.48377 4.75283 3.49999 5.0285ZM10.0302 4.50086C9.75457 4.48465 9.51795 4.69497 9.50173 4.97064L9.00173 13.4706C8.98552 13.7463 9.19584 13.9829 9.47151 13.9991C9.74717 14.0154 9.98379 13.805 10 13.5294L10.5 5.02936C10.5162 4.75369 10.3059 4.51708 10.0302 4.50086ZM7 4.5C6.72386 4.5 6.5 4.72386 6.5 5V13.5C6.5 13.7761 6.72386 14 7 14C7.27615 14 7.5 13.7761 7.5 13.5V5C7.5 4.72386 7.27615 4.5 7 4.5Z"
                                                fill="#F54748" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex flex-col gap-4" id="upload-items">
                       
                    </div>
                </div>
                <div class="w-full p-8 border border-gray-400 bg-white-50 rounded-xl">
                    <div class="mb-2">
                        <label for="product_name" class="block mb-2 font-bold text-gray-900 ">
                            Product Name</label>
                        <input type="text" id="product_name" name="name"
                            class="block w-full px-5 py-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Input name">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="category_id" class="block mb-2 font-bold text-gray-900 ">Choose category</label>
                        <select id="categories" name="category_id"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="email-address-icon" class="block mb-2 font-bold text-gray-900 ">Price</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <svg width="28" height="21" viewBox="0 0 28 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.232 15V4.57H3.816C4.49733 4.57 5.09467 4.70533 5.608 4.976C6.12133 5.23733 6.518 5.61067 6.798 6.096C7.08733 6.572 7.232 7.12733 7.232 7.762C7.232 8.49933 7.036 9.12933 6.644 9.652C6.26133 10.1747 5.73867 10.5433 5.076 10.758L7.512 15H6.196L3.648 10.506L4.404 10.94H1.352V15H0.232ZM1.352 9.89H3.872C4.32 9.89 4.712 9.806 5.048 9.638C5.384 9.46067 5.64533 9.21333 5.832 8.896C6.01867 8.56933 6.112 8.18667 6.112 7.748C6.112 7.30933 6.01867 6.93133 5.832 6.614C5.64533 6.29667 5.384 6.054 5.048 5.886C4.712 5.70867 4.32 5.62 3.872 5.62H1.352V9.89ZM9.04675 17.8V7.496H10.0968V9.176L9.92875 8.882C10.2274 8.406 10.6241 8.028 11.1188 7.748C11.6228 7.468 12.1968 7.328 12.8408 7.328C13.5501 7.328 14.1801 7.50067 14.7308 7.846C15.2908 8.182 15.7294 8.644 16.0468 9.232C16.3734 9.82 16.5368 10.492 16.5368 11.248C16.5368 11.9947 16.3734 12.6667 16.0468 13.264C15.7294 13.852 15.2908 14.3187 14.7308 14.664C14.1801 15 13.5501 15.168 12.8408 15.168C12.1968 15.168 11.6134 15.0233 11.0908 14.734C10.5774 14.4353 10.1901 14.0153 9.92875 13.474L10.0968 13.32V17.8H9.04675ZM12.7848 14.118C13.2888 14.118 13.7368 13.992 14.1288 13.74C14.5301 13.488 14.8428 13.1473 15.0668 12.718C15.3001 12.2793 15.4168 11.7893 15.4168 11.248C15.4168 10.6973 15.3001 10.2073 15.0668 9.778C14.8428 9.34867 14.5301 9.008 14.1288 8.756C13.7368 8.504 13.2888 8.378 12.7848 8.378C12.2808 8.378 11.8234 8.504 11.4128 8.756C11.0114 9.008 10.6894 9.35333 10.4468 9.792C10.2134 10.2213 10.0968 10.7067 10.0968 11.248C10.0968 11.7893 10.2134 12.2793 10.4468 12.718C10.6894 13.1473 11.0114 13.488 11.4128 13.74C11.8234 13.992 12.2808 14.118 12.7848 14.118Z"
                                        fill="#9F9595" />
                                    <line x1="27.75" y1="21" x2="27.75" stroke="#C8C2C2"
                                        stroke-width="0.5" />
                                </svg>
                            </div>
                            <input type="number" name="price"
                                class="block w-full p-4 pl-12 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="2000">
                            @error('price')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="message" class="block mb-2 font-bold text-gray-900 ">
                            Description
                        </label>
                        <textarea id="description" rows="6" name="description"
                            class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Input description..."></textarea>
                        @error('description')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex justify-end gap-4">
                <div>
                    <button
                        class="w-48 text-sm font-semibold tracking-widest text-red-500 border-2 border-red-500 h-14 bg-white-50 rounded-xl">Back</button>
                </div>
                <div>
                    <button
                        class="w-48 text-sm font-semibold tracking-widest bg-red-500 border h-14 rounded-xl text-white-50">
                        Publish Product</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script defer>
        const fileCollection = document.getElementById('dropzone-file');
        const previewContainer = document.getElementById('upload-items');
        fileCollection.addEventListener('change', getFileName);

        function getFileName(event) {
            previewContainer.innerHTML = ''
            const files = event.target.files;
            getFiles = Array.from(files)
            // Create an image element for each file
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const imgSrc = URL.createObjectURL(file);
                const fileSize = Math.round(file['size'] / 1024)
                // Set the image's src attribute to the file's content
                const htmlContent =
                    `
                    <div class="flex items-center justify-between p-3 border border-gray-300 bg-white-50 rounded-xl" id="` +
                    file['name'] +
                    `">
                        <div class="flex items-center gap-4">
                            <img src="` +
                    imgSrc +
                    `" alt=""
                                class="w-10 h-10 rounded-lg">
                            <div>
                                <p class="text-sm font-bold">
                                    ` +
                    file['name'] +
                    `</p>
                                <p class="text-sm text-gray-500">
                                    ` +
                    fileSize +
                    ` KB</p>
                            </div>
                        </div>
                        <div class="mr-5">
                            <button type='button' class="p-4 border rounded-lg bg-white-200" onclick="removeElement('` +
                    file['name'] +
                    `')">
                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 1.5V2.5H13.5C13.7761 2.5 14 2.72386 14 3C14 3.27614 13.7761 3.5 13.5 3.5H12.9616L12.1088 14.1595C12.0257 15.1989 11.1579 16 10.1152 16H3.88479C2.84207 16 1.97431 15.1989 1.89116 14.1595L1.0384 3.5H0.5C0.223858 3.5 0 3.27614 0 3C0 2.72386 0.223858 2.5 0.5 2.5H4V1.5C4 0.671573 4.67157 0 5.5 0H8.5C9.32843 0 10 0.671573 10 1.5ZM5 1.5V2.5H9V1.5C9 1.22386 8.77614 1 8.5 1H5.5C5.22386 1 5 1.22386 5 1.5ZM3.49999 5.0285L3.99999 13.5285C4.0162 13.8042 4.25282 14.0145 4.52849 13.9983C4.80415 13.9821 5.01448 13.7454 4.99826 13.4698L4.49826 4.96978C4.48205 4.69411 4.24543 4.48379 3.96976 4.5C3.6941 4.51622 3.48377 4.75283 3.49999 5.0285ZM10.0302 4.50086C9.75457 4.48465 9.51795 4.69497 9.50173 4.97064L9.00173 13.4706C8.98552 13.7463 9.19584 13.9829 9.47151 13.9991C9.74717 14.0154 9.98379 13.805 10 13.5294L10.5 5.02936C10.5162 4.75369 10.3059 4.51708 10.0302 4.50086ZM7 4.5C6.72386 4.5 6.5 4.72386 6.5 5V13.5C6.5 13.7761 6.72386 14 7 14C7.27615 14 7.5 13.7761 7.5 13.5V5C7.5 4.72386 7.27615 4.5 7 4.5Z"
                                        fill="#F54748" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    ` // Add the image to the preview container
                previewContainer.innerHTML += htmlContent;
            }
        }

        function removeElement(id) {
            const element = document.getElementById(id)
            if (element) {
                element.remove()
            }
            const dt = new DataTransfer()
            const input = document.getElementById('dropzone-file')
            const {
                files
            } = input
            for (let i = 0; i < files.length; i++) {
                const file = files[i]
                if (id !== file['name'])
                    dt.items.add(file) // here you exclude the file. thus removing it.
            }
            input.files = dt.files // Assign the updates list
        }
    </script>
@endsection
