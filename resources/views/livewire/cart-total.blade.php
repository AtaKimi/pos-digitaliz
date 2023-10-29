<div class="w-full row-span-1">
    {{-- <img src="/assets/img/bg-cart.png"> --}}
    <div class="grid grid-cols-2 rounded-t-lg justify-between w-full p-5 text-white-50"
        style="background-image: url('/assets/img/bg-cart.png')">
        <p class="text-sm">Sub-total</p>
        <p class="text-end text-sm">Rp {{ number_format($sub_total, 0, ',', '.') }}</p>
        <p class="text-sm">Tax ({{ $tax->percentage }}%)</p>
        <p class="text-end text-sm">Rp {{ number_format($tax_total, 0, ',', '.') }}</p>
        <p class="text-sm ">Service Charge</p>
        <p class="text-end text-sm ">Rp {{ number_format($service_total, 0, ',', '.') }}</p>
        <p class="font-bold">Total</p>
        <p class="text-end font-bold">Rp {{ number_format($total, 0, ',', '.') }}</p>
        <button wire:click='createOrder'
            class=" flex  items-center justify-center w-full gap-3 col-span-2 bg-white-50 text-red-500 font-bold py-3 rounded-lg mt-2">
            <p>Checkout</p> <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.5 0C16.0228 0 20.5 4.47715 20.5 10C20.5 15.5228 16.0228 20 10.5 20C4.97715 20 0.5 15.5228 0.5 10C0.5 4.47715 4.97715 0 10.5 0ZM6.125 9.375C5.77982 9.375 5.5 9.65482 5.5 10C5.5 10.3452 5.77982 10.625 6.125 10.625H13.3661L10.6831 13.3081C10.439 13.5521 10.439 13.9479 10.6831 14.1919C10.9271 14.436 11.3229 14.436 11.5669 14.1919L15.3169 10.4419C15.561 10.1979 15.561 9.80214 15.3169 9.55806L11.5669 5.80806C11.3229 5.56398 10.9271 5.56398 10.6831 5.80806C10.439 6.05214 10.439 6.44786 10.6831 6.69194L13.3661 9.375H6.125Z"
                    fill="#F54748" />
            </svg>
        </button>
    </div>
</div>
