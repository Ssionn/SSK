@props([
    'imageUrl' => null,
    'alt' => 'User Image',
    'shape' => 'rounded-full',
])

<div class="w-12 h-12 {{ $shape }} overflow-hidden">
    @if ($imageUrl)
        <img src="{{ $imageUrl }}" alt="{{ $alt }}" class="w-full h-full object-cover">
    @else
        <div class="w-full h-full bg-polyblue-300 flex items-center justify-center text-polyblue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </div>
    @endif
</div>
