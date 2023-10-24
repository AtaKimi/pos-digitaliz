@props([
    'class' => ''
])

<div {{ $attributes->merge(['class' => 'rounded-2xl bg-white-50 p-5 '. $class]) }} >
    {{ $slot }}
</div>