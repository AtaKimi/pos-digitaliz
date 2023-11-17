<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

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



        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
            ]);

            $tenant = Tenant::create([
                'name' => $request->tenant_name,
                'address' => $request->tenant_address,
                'description' => $request->tenant_description,
                'user_id' => $user->id,
            ]);

            $role = $user->assignRole('tenant');

            DB::commit();
            toast('User Created Succesfully', 'success');
            return redirect()->route('login');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('message', 'Failed to create an user');
        }
    }
}
