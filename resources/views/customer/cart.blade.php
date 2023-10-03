@extends('layouts.customer')

@section('judul')
    Order Details
@endsection

@section('content')
    <div class="grid grid-rows-4 px-3">
        <div class="row-span-3">
            @for ($i = 0; $i < 5; $i++)
                <div class="flex justify-between gap-1 p-3 border-2 rounded-xl shadow-md mb-3">
                    <img src="https://source.unsplash.com/random" alt="" class="w-[74px] h-[74px] rounded-xl">
                    <div class="">
                        <div class="flex flex-col justify-center">
                            <p class="text-sm font-bold">Ayam Lalapan</p>
                            <p class="text-sm text-gray-600">Nasi, Ayam (dada/paha)</p>
                        </div>
                        <h4 class="text-yellow-500 font-bold">Rp32.500</h4>
                    </div>
                    <div class="flex gap-2 items-center">
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="cursor-pointer">
                            <rect width="20" height="18" rx="6" fill="#FDC55E" />
                            <path d="M7.99797 9.79V8.79H11.998V9.79H7.99797Z" fill="white" />
                        </svg>
                        <p>1</p>
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="cursor-pointer">
                            <rect width="20" height="18" rx="6" fill="#FDC55E" />
                            <path d="M9.51199 12V9.99H7.50199V8.99H9.51199V7H10.512V8.99H12.502V9.99H10.512V12H9.51199Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
            @endfor
        </div>
        <div class="w-full row-span-1 relative h-fit">
            <img src="/assets/img/bg-cart.png" class="absolute top-0 right-0 left-0 -z-0">
            <div style="position: absolute; top: 0; left: 0;"
                class="grid grid-cols-2 justify-between w-full p-5 text-white-50">
                <p class="text-sm">Sub-total</p>
                <p class="text-end text-sm">Rp77.000</p>
                <p class="text-sm">Tax (11%)</p>
                <p class="text-end text-sm">Rp8.470</p>
                <p class="text-sm ">Service Charge</p>
                <p class="text-end text-sm ">Rp200</p>
                <p class="font-bold">Total</p>
                <p class="text-end font-bold">Rp85.670</p>
                <button
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
    </div>
@endsection
