@props([
    'href' => '#',
    'active' => false,
])

@php
    $classes = $active
        ? 'block px-4 py-2 rounded bg-polyblue-800 text-white'
        : 'block px-4 py-2 rounded hover:bg-polyblue-800 hover:text-white';
@endphp


<li>
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        <span class="text-sm font-medium">
            {{ $slot }}
        </span>
    </a>
</li>
