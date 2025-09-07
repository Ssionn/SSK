<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUserFormRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function index(): View
    {
        return view('auth.register');
    }

    public function registerUser(RegisterUserFormRequest $request): RedirectResponse
    {
        $user = User::query()->create($request->validated());

        auth()->login($user);

        return to_route('dashboard');
    }
}
