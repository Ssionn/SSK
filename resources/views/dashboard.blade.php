<x-layouts.app page-title="Dashboard">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-polyblue-800 px-8 py-4 rounded-3xl text-white flex flex-col">
            <span class="text-xl font-semibold">Total Users</span>
            <span class="text-5xl font-semibold mt-6">0</span>
        </div>
        <div class="bg-polyblue-700 px-8 py-4 rounded-3xl text-white flex flex-col">
            <span class="text-xl font-semibold">Total Orders</span>
            <span class="text-5xl font-semibold mt-6">0</span>
        </div>
        <div class="bg-polyblue-600 px-8 py-4 rounded-3xl text-white flex flex-col">
            <span class="text-xl font-semibold">Total Revenue</span>
            <span class="text-5xl font-semibold mt-6">0</span>
        </div>

        <div class="col-span-full">
            <x-user-interface.layouts.table.table-outline>
                <x-user-interface.layouts.table.table-head
                    tailwindBackground="bg-polyblue-800 text-white"
                >
                    <th class="text-left p-2 rounded-tl-xl">User</th>
                    <th class="text-left p-2 rounded-none">Order ID</th>
                    <th class="text-left p-2 rounded-none">Total spent</th>
                    <th class="text-left p-2 rounded-tr-xl">Status</th>
                </x-user-interface.layouts.table.table-head>

                <x-user-interface.layouts.table.table-body>
                    <x-user-interface.layouts.table.table-row>
                        <x-user-interface.layouts.table.table-data>
                            SSK User
                        </x-user-interface.layouts.table.table-data>
                        <x-user-interface.layouts.table.table-data>
                            <a href="#" class="underline text-polyblue-600">
                                Order #321322
                            </a>
                        </x-user-interface.layouts.table.table-data>
                        <x-user-interface.layouts.table.table-data>
                            €69.69
                        </x-user-interface.layouts.table.table-data>
                        <x-user-interface.layouts.table.table-data>
                            Processing
                        </x-user-interface.layouts.table.table-data>
                    </x-user-interface.layouts.table.table-row>
                </x-user-interface.layouts.table.table-body>
            </x-user-interface.layouts.table.table-outline>
        </div>
    </div>
</x-layouts.app>
