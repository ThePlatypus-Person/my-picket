@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-inter text-black duration-200 hover:text-gray-800 font-medium'
            : 'font-inter text-gray-400 duration-200 hover:text-gray-800 font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
