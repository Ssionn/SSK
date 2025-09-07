@props([
    'href' => '#',
    'active' => false,
    'logout' => false,
])

@php
    $classes = $active
        ? 'block px-4 py-2 rounded bg-polyblue-800 text-white'
        : 'block px-4 py-2 rounded hover:bg-polyblue-800 hover:text-white';
@endphp


@if ($logout)
    <li>
        <form action="{{ $href }}" method="POST">
            @csrf
            <button type="submit" class="block px-4 py-2 rounded hover:bg-red-800 hover:text-white w-full text-left cursor-pointer">
                <span class="text-sm font-medium">
                    {{ $slot }}
                </span>
            </button>
        </form>
    </li>
@else
    <li>
        <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        <span class="text-sm font-medium">
            {{ $slot }}
        </span>
        </a>
    </li>
@endif
