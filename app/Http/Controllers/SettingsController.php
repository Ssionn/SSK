<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function edit(Request $request): View
    {
        $user = $request->user();

        return view('settings.edit', ['user' => $user]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $user = $request->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,',
        ]);

        $user->update($validated);

        // TODO: Add translation
        return to_route('settings.edit')->with('status', 'settings-updated');
    }

    public function destroy(Request $request, $id): RedirectResponse
    {
        $user = $request->user();

        $request->validate([
            'password' => 'required|string',
        ]);

        // TODO: Add translation
        if (!\Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'The provided password does not match our records.']);
        }

        auth()->logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // TODO: Add translation
        return to_route('login')->with('status', 'Account has been deleted.');
    }
}
