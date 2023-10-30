@extends('layouts.customer')

@section('return_link')
    {{route('customer-menu', [$tenant->id, $desk->id])}}
@endsection

@section('content')
    <div class="flex flex-col justify-between p-3 overflow-y-scroll h-full">
        <div>
            @foreach ($carts as $cart)
                <div class="flex items-center gap-3 p-3 border-2 rounded-xl shadow-md mb-3">
                    <img src="{{$cart->product->getFirstMediaUrl('default')}}" alt="" class="w-16 h-16 rounded-xl">
                    <div class="grow">
                        <p class="font-bold">{{ $cart->product->name }}</p>
                        <livewire:cart-price :$cart/>
                    </div>
                    <livewire:tambah-button :product="$cart->product" :desk="$cart->desk" />
                </div>
            @endforeach
        </div>
        <livewire:cart-total :$carts :$tenant :$desk/>
    </div>
@endsection
