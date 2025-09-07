@props([
    'name' => '',
    'email' => '',
])

<div class="sm:ml-1 md:ml-2 flex-1">
    <h4 class="text-polyblue-800 text-sm">{{ $name }}</h4>
    <p class="text-polyblue-200 italic text-xs">{{ $email }}</p>
</div>
