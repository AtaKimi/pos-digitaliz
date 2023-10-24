@props(['id' => '', 'back_id' => '', 'title' => '', 'with_button' => true])

<div {{ $attributes->merge(['id' => $id]) }} tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <x-card class="relative w-full max-w-md max-h-full bg-white-50">
        <p class="text-2xl font-bold text-red-500 mb-4">{{ $title }}</p>
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
