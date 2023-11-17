@props([
    'class' => ''
])

<div {{ $attributes->merge(['class' => 'flex items-center justify-end sm:justify-between mb-5 gap-2 overflow-x-auto '. $class]) }} >
    {{ $slot }}
</div>
