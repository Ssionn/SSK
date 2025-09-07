@props([
    'tableType' => 'fixed',
])

<table class="table-{{ $tableType }} w-full">
    {{ $slot }}
</table>
