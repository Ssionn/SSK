@props([
    'id' => null,
    'activateDropdown' => false,
    'dropdownData' => 'default-dropdown',
])

<div class="flex flex-row items-center rounded-xl border border-gray-200 p-4 cursor-pointer"
    @if ($id) id="{{ $id }}" @endif
    @if ($activateDropdown) data-dropdown-toggle="{{ $dropdownData }}" @endif
>
    {{ $slot }}
</div>
