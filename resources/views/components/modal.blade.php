@props(['id' => '', 'title' => '', 'with_button' => true ])

<div {{ $attributes->merge(['id' => $id]) }} tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <x-card class="relative w-full max-w-md max-h-full bg-white-50">
        <div class="relative">
            <p class="text-2xl font-bold text-red-500 mb-4">{{ $title }}</p>
            <button data-modal-hide="{{$id}}" class="absolute right-0 top-0 border border-black-900 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
            </button>
        </div>
        {{ $slot }}

        @if ($with_button)
            <div class="flex grid-cols-2 gap-3 mt-5">
                <button
                    class="w-full py-2 font-bold rounded-lg border border-black-400 hover:bg-black-400 hover:text-white-50"
                    data-modal-target="{{ $id }}" data-modal-hide="{{ $id }}">Batalkan</button>
                <button
                    class="w-full py-2 font-bold rounded-lg hover:text-white-50 border border-red-500 text-red-500 hover:bg-red-500"
                    type="submit">Konfirmasi</button>
            </div>
        @endif
    </x-card>
</div>
