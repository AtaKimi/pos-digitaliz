@props(['disabled' => false, 'value'])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5', 'rows' => '5']) !!}>{{ $value ?? $slot}}</textarea>
