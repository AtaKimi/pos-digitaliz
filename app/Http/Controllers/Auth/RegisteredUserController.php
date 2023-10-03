<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone_number' => ['required', 'numeric', 'min:10'],
            'tenant_name' => ['required', 'string', 'max:255'],
            'tenant_address' => ['required', 'string', 'max:255'],
            'tenant_description' => ['required', 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        $tenant = Tenant::create([
            'code' => Str::random(5) . "TN" . fake()->numerify('-########'),
            'name' => $request->tenant_name,
            'address' => $request->tenant_address,
            'description' => $request->tenant_description,
            'user_id' => $user->id,
        ]);

        $role = $user->assignRole('tenant');
        //left the error alone if it's error on hasPermissionTo() as it's a function that is form spatie laravel permission

        $user->sendEmailVerificationNotification();

        return redirect()->route('login')->with('message', 'Check your email inbox to verify your account first!');
    }
}
