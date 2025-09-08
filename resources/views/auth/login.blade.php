<x-layouts.guest>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <span class="text-3xl text-polyblue-800 font-semibold">{{ __('app.application.logo') }}</span>

        <div class="border-2 shadow-2xl rounded-xl border-polyblue-50 p-4 w-1/3 mt-4">
            <form action="{{ route('login.authenticate') }}" method="POST" class="space-y-2">
                @csrf

                <div class="flex flex-col">
                    <label for="email" class="text-polyblue-800 font-bold">Email</label>
                    <input type="email" name="email" id="email" class="border border-polyblue-800 rounded-md p-2">
                </div>

                <div class="flex flex-col">
                    <label for="password" class="text-polyblue-800 font-bold">Password</label>
                    <input type="password" name="password" id="password" class="border border-polyblue-800 rounded-md p-2">
                </div>

                <button type="submit" class="w-full bg-polyblue-800 text-white font-bold py-2 px-4 rounded-md hover:bg-polyblue-600 transition duration-300 mt-4">Sign in</button>
            </form>
        </div>
    </div>
</x-layouts.guest>
