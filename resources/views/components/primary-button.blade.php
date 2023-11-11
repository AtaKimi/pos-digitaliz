<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white-50 bg-red-500 font-medium rounded-lg text-sm px-12 py-2.5' ]) }}>
    {{ $slot }}
</button>
