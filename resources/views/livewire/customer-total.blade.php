<div x-show="!toggle" id="order-summary" style="background-image: url('{{ asset('assets/img/order-detail.png') }}');"
    class="fixed flex transform transition mx-1 duration-500 justify-between items-center bottom-4 z-40 w-[345px] px-8 py-2 rounded-full place-self-center text-white-50 bg-red-500">
    <div>
        <p class="inline text-[14px] m-0" id="total-items">{{$items_total}}</p>
        <p class="inline text-[14px] m-0">Items</p>
        <p class="text-[18px] font-[700] -mt-1">Total</p>
    </div>
    <div class="flex gap-x-2 text-xl font-[700]">
        <p id="total-price">Rp.{{$total_price}}</p>
        <img src={{ URL('assets/img/solar_bag-2-bold.png') }}>
    </div>
</div>
