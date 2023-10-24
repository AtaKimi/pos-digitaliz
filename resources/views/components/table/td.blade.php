@props(['class' => '', 'colspan' => ''])


<td {{ $attributes->merge(['class' => 'px-2 py-1 md:px-4 md:py-2 lg:px-6 lg:py-3 ' . $class], ['colspan' => $colspan]) }}>{{ $slot }}</td>
