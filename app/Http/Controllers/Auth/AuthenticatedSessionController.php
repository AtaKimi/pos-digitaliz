<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $token = request()->user()->createToken('token-name', ['server:update'])->plainTextToken;
        $user = Auth::user();

        session()->put('token', $token);

        if ($user->hasPermissionTo('tenant-access')) {
            return redirect()->route('tenant-index', $user->tenant);
        } else  if ($user->hasPermissionTo('admin-access')) {
            return redirect()->route('admin-index');
        } else if ($user->hasPermissionTo('waiter-access')) {
            return redirect()->route('waiter-index', $user->waiter->tenant);
        }
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
