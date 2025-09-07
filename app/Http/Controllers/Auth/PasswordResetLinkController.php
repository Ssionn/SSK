<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $passwordStatus = Password::sendResetLink(
            $request->user()->email,
            fn ($user, $token) => $user->sendPasswordResetNotification($token)
        );

        return $passwordStatus == Password::RESET_LINK_SENT
            ? back()->with('status', __($passwordStatus))
            : back()->withErrors(['email' => __($passwordStatus)]);
    }
}
