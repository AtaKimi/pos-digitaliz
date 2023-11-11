@props(['value'])

<label {{ $attributes->merge(['class' => 'block mb-2 font-semibold']) }}>
    {{ $value ?? $slot }}
</label>
