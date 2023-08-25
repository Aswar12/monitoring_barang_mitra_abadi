@props(['active'])

@php
$classes = ($active ?? false)
? 'bg-gradient-to-tl from-purple-700 to-pink-500 transition duration-150 ease-in-out'
: 'bg-gradient-to-tl from-purple-700 to-pink-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>