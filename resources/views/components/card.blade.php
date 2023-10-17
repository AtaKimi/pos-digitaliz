@props([
    'class' => ''
])

<div {{ $attributes->merge(['class' => 'mb-5 shadow-lg rounded-2xl bg-white-50 p-7 '. $class]) }} >
    {{ $slot }}
</div>