@props(['class' => '', 'scope' => ''])

<th scope="col" {{ $attributes->merge(['class' => 'px-6 py-3'. $class]) }}>
    {{ $slot }}
</th>
