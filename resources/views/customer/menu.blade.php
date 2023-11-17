@extends('layouts.customer')

@section('return_link')
    {{ route('customer-index', [$tenant->id, $desk->id]) }}
@endsection

@section('content')
    <div class="bg-white-50 py-2 z-50">
        <div class="overflow-x-auto scroll-none mx-3 mb-1 border-b">
            <div class="flex gap-x-2 py-2">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($categories as $category)
                                <li class="glide__slide">
                                    <a href="#{{ $category->name }}" scroll={false}>
                                        <button
                                            class="h-fit min-w-fit font-bold px-4 py-2 rounded-full border border-grey-300 hover:bg-grey-200
                                               transition-all duration-300 ease-in-out">
                                            {{ $category->name }}
                                        </button>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:menu-list :$categories :$desk :$tenant>
    @endsection

    @section('script')
        <script>
            let categoriesGlider = new Glide('.glide', {
                type: 'carousel',
                perView: {{ $categories->count() <= 3 ? $categories->count() : 3 }},
                gap: 20,
                focusAt: 'center',
            }).mount()
        </script>
    @endsection
