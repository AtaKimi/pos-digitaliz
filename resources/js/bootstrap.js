/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
    wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});

document.addEventListener("DOMContentLoaded", function (event) {
    window.Echo.channel("products").listen("ProductCreated", (e) => {
        console.log("Event from channel: products");
        console.log(e.data);
        
         // Buat elemen HTML untuk produk baru
        var productContainer = document.createElement('div');
        productContainer.className = 'flex grow flex-col bg-white-50 flex-wrap rounded-lg w-[550px] border-2';
        // Tambahkan atribut produk ID ke elemen
        productContainer.setAttribute('product-id', e.data.id);

        var productContent = `
            <div class="flex p-6 gap-x-6">
                <img src="${e.data.image}" alt="" class="w-[130px] h-[130px] rounded-lg">
                <div class="text-gray-500 grow">
                    <div class="flex justify-between mb-2">
                        <p class="text-2xl font-bold text-black">${e.data.name}</p>
                        <select class="border bg-${e.data.status_color} text-${e.data.status_color} font-bold border-gray-300 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5">
                            <option value="soldout" ${e.data.status === 'soldout' ? 'selected' : ''} class="text-black bg-white-50">Sold Out</option>
                            <option value="in_stock" ${e.data.status === 'in_stock' ? 'selected' : ''} class="text-black bg-white-50">Publish</option>
                            <option value="disabled" ${e.data.status === 'disabled' ? 'selected' : ''} class="text-black bg-white-50">Unpublish</option>
                        </select>
                    </div>
                    <p class="mb-2"> <span class="text-base font-bold">Category : </span>${e.data.category}</p>
                    <p class="text-justify"><span class="text-base font-bold">Description :</span>${e.data.description}</p>
                </div>
            </div>
            <div class="flex justify-center mb-2">
                <svg width="445" height="2" viewBox="0 0 445 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1H444" stroke="#F1F1F1" stroke-width="2" stroke-linecap="round" />
                </svg>
            </div>
            <div class="flex flex-row justify-between px-5 pb-5">
                <a href="${e.data.edit_url}" class="w-full justify-center text-warning-500 hover:bg-warning-800 hover:text-white-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2">
                    <svg width="15" height="14" class="me-3" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5799 0.128141C11.409 -0.0427136 11.132 -0.0427136 10.9612 0.128141L9.52051 1.56879L12.7642 4.81251L14.2049 3.37186C14.3757 3.201 14.3757 2.924 14.2049 2.75314L11.5799 0.128141Z" fill="#FDC55E" />
                        <path d="M12.1455 5.43122L8.9018 2.18751L3.2143 7.875H3.39551C3.63713 7.875 3.83301 8.07088 3.83301 8.3125V8.75H4.27051C4.51213 8.75 4.70801 8.94588 4.70801 9.1875V9.625H5.14551C5.38713 9.625 5.58301 9.82088 5.58301 10.0625V10.5H6.02051C6.26213 10.5 6.45801 10.6959 6.45801 10.9375V11.1187L12.1455 5.43122Z" fill="#FDC55E" />
                        <path d="M5.61071 11.966C5.5928 11.9183 5.58301 11.8665 5.58301 11.8125V11.375H5.14551C4.90388 11.375 4.70801 11.1791 4.70801 10.9375V10.5H4.27051C4.02888 10.5 3.83301 10.3041 3.83301 10.0625V9.625H3.39551C3.15388 9.625 2.95801 9.42912 2.95801 9.1875V8.75H2.52051C2.46649 8.75 2.41476 8.74021 2.36699 8.72231L2.21116 8.87814C2.16927 8.92004 2.13632 8.97001 2.11431 9.02502L0.364312 13.4C0.299314 13.5625 0.337409 13.7481 0.461161 13.8719C0.584914 13.9956 0.770509 14.0337 0.933004 13.9687L5.308 12.2187C5.36302 12.1967 5.41298 12.1638 5.45488 12.1219L5.61071 11.966Z" fill="#FDC55E" />
                    </svg>
                    Edit
                </a>
                <svg width="3" height="30" viewBox="0 0 3 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    path d="M1.5 1V29" stroke="#F1F1F1" stroke-width="100" stroke-linecap="round" />
                </svg>
                <button type="button" onclick="putProductId(${e.data.id})"
                    class="w-full justify-center text-danger-500 hover:bg-danger-800 hover:text-white-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                    data-modal-target="modal-delete-category" data-modal-toggle="modal-delete-category">
                    <svg width="15" height="14" class="me-3" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.79102 1.3125V2.1875H12.8535C13.0951 2.1875 13.291 2.38338 13.291 2.625C13.291 2.86662 13.0951 3.0625 12.8535 3.0625H12.3824L11.6362 12.3896C11.5635 13.299 10.8042 14 9.89182 14H4.44021C3.52783 14 2.76854 13.299 2.69578 12.3896L1.94962 3.0625H1.47852C1.23689 3.0625 1.04102 2.86662 1.04102 2.625C1.04102 2.38338 1.23689 2.1875 1.47852 2.1875H4.54102V1.3125C4.54102 0.587626 5.12864 0 5.85352 0H8.47852C9.20339 0 9.79102 0.587626 9.79102 1.3125ZM5.41602 1.3125V2.1875H8.91602V1.3125C8.91602 1.07088 8.72014 0.875 8.47852 0.875H5.85352C5.61189 0.875 5.41602 1.07088 5.41602 1.3125ZM4.10351 4.39994L4.54101 11.8374C4.55519 12.0786 4.76223 12.2627 5.00344 12.2485C5.24465 12.2343 5.42868 12.0273 5.41449 11.7861L4.97699 4.34856C4.96281 4.10735 4.75577 3.92331 4.51456 3.9375C4.27335 3.95169 4.08932 4.15873 4.10351 4.39994ZM9.81747 3.93825C9.57626 3.92407 9.36922 4.1081 9.35503 4.34931L8.91753 11.7868C8.90334 12.028 9.08738 12.2351 9.32859 12.2492C9.56979 12.2634 9.77683 12.0794 9.79102 11.8382L10.2285 4.40069C10.2427 4.15948 10.0587 3.95244 9.81747 3.93825ZM7.16602 3.9375C6.92439 3.9375 6.72852 4.13338 6.72852 4.375V11.8125C6.72852 12.0541 6.92439 12.25 7.16602 12.25C7.40764 12.25 7.60352 12.0541 7.60352 11.8125V4.375C7.60352 4.13338 7.40764 3.9375 7.16602 3.9375Z"
                            fill="#F54748" />
                    </svg>
                    Delete
                </button>
            </div>
        `;
        // Sisipkan produk HTML ke dalam kontainer produk
        productContainer.innerHTML = productContent;

        // Sisipkan elemen produk ke dalam kontainer produk
        document.querySelector('.products-container').appendChild(productContainer);
   
    });
});

