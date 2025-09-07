<aside
    class="row-span-2 overflow-y-auto transform transition-transform duration-300 ease-in-out -translate-x-full md:translate-x-0 fixed inset-y-0 left-0 w-64 sm:relative sm:w-auto flex flex-col z-50">
    <div class="p-4">
        <a href="{{ route('dashboard') }}">
            <x-layouts.assets.application-logo/>
        </a>
    </div>

    <div class="p-4">
        <x-user-interface.layouts.sidebar.sidebar-list>
            <x-user-interface.layouts.sidebar.sidebar-list-item
                href="{{ route('dashboard') }}"
                active="{{ request()->routeIs('dashboard') }}"
            >
                Dashboard
            </x-user-interface.layouts.sidebar.sidebar-list-item>
        </x-user-interface.layouts.sidebar.sidebar-list>
    </div>

    <div id="user-profile-card" class="z-60 hidden bg-white border border-gray-200 rounded w-11/12 p-1">
        <x-user-interface.layouts.sidebar.sidebar-list>
            <x-user-interface.layouts.sidebar.sidebar-list-item
                href="#"
                active="{{ request()->routeIs('profile.show') }}"
            >
                Settings
            </x-user-interface.layouts.sidebar.sidebar-list-item>
        </x-user-interface.layouts.sidebar.sidebar-list>
    </div>
    <div class="p-4 mt-auto">
        <x-user-interface.layouts.sidebar.user-profile.user-card
            id="user-profile-card-button"
            activateDropdown
            dropdownData="user-profile-card"
        >
            <x-user-interface.layouts.sidebar.user-profile.user-image
                imageUrl="{{ auth()->user()->profile_photo_url ?? null }}"
                shape="rounded-xl"
            />

            <x-user-interface.layouts.sidebar.user-profile.user-info
                name="{{ auth()->user()->name ?? 'John Doe' }}"
                email="{{ auth()->user()->email ?? 'johndoe@example.com' }}"
            />

            <x-user-interface.layouts.sidebar.user-profile.user-icon
                icon="zondicon-arrow-up"
            />
        </x-user-interface.layouts.sidebar.user-profile.user-card>
    </div>
</aside>
