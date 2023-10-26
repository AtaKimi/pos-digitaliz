<div x-data="{ toggleTambah: true, qty: {{ $qty }} }">
    <div id="buttons" class="relative flex justify-evenly gap-2 text-white-50">
        <button x-show="qty == 0" x-on:click="qty = 1;$wire.createCart(qty)"
            class="z-10 w-fit h-fit bg-yellow-500 rounded px-2 py-1">Tambah</button>
        <button id="plus-btn" x-show="qty > 0" x-on:click="qty = qty + 1; $wire.createCart(qty)"
            class=" flex items-center justify-center bg-yellow-500 rounded text-xl w-6 h-6"><svg
                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="fill-white-50">
                <path
                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
            </svg>
        </button>
        <p x-show="qty > 0" class="text-yellow-500">{{ $qty }}</p>
        <button id="minus-btn" x-show="qty > 0" x-on:click="qty = qty - 1;$wire.createCart(qty)"
            class="bg-yellow-500 flex justify-center items-center rounded text-xl w-6 h-6s"><svg
                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="fill-white-50">
                <path
                    d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
            </svg>
        </button>
    </div>
</div>
