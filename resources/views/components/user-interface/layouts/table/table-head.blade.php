@props([
    'tailwindBackground' => 'bg-polyblue-200'
])

<thead>
    <tr class="p-2 {{ $tailwindBackground }}">
        {{ $slot }}
    </tr>
</thead>
