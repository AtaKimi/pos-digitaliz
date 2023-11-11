@props([
    'class' => ''
])

<div {{ $attributes->merge(['class' => 'rounded-2xl bg-white-100 p-5 shadow-md '. $class]) }} >
    {{ $slot }}
</div>
