@props([
    'icon' => 'heroicon-o-chevron-up',
    'alt' => 'User Icon',
])

<x-dynamic-component :component="$icon" class="h-4 w-4 text-polyblue-800" alt="{{ $alt }}" />
