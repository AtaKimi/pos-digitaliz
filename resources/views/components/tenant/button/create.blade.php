@props(['route' => '#', 'modal_id' => ''])

<a href="{{ $route }}" type="button" class="flex items-center gap-1 h-9 md:h-10 lg:h-12 px-1.5 md:px-2 lg:px-3 bg-red-500 rounded-lg"
    data-modal-target="{{ $modal_id }}" data-modal-toggle="{{ $modal_id }}">
    <svg width="24" height="24" viewBox="0 0 18 18" fill="none" class="lg:hidden"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M9 4.5V13.5M13.5 9H4.5" stroke="white" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
    </svg>
    <p class="font-bold text-white-50 hidden lg:block">{{ $slot }}</p>
</a>
