<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    

    public $rolesSelected = [];
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        // $roles = Role::orderby('name')->get();
        // return view('auth.register', compact('roles'));
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
            'confirmPassword' => 'required|same:password',
        ], [
            'password.required' => 'Password is required',
            'confirmPassword.required' => 'Confirm password is required',
            'confirmPassword.same' => 'Confirm password and new password must match',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'is_active' => 1,
            'is_office_login_only' => 0,
        ]);

        $user->assignRole('admin');
        // $user->assignRole('mitra');
        // $user->assignRole('pegawai');
        // $user->assignRole('klien');

        // foreach ($this->rolesSelected as $role) {
        //     if ($role == 'mitra' && $role == 'pegawai' && $role == 'klien'){
        //         $user->assignRole($role);
        //     }
        // }

        //generate image
        $name = get_initials($user->name);
        $id = $user->id.'.png';
        $path = 'users/';
        $imagePath = create_avatar($name, $id, $path);

        //save image
        $user->image = $imagePath;
        $user->save();

        add_user_log([
            'title' => 'registered '.$user->name,
            'reference_id' => $user->id,
            'section' => 'Auth',
            'type' => 'Register',
        ]);

        // Comment or Delete or Remove Comment this Code (code in comment) 
        // to remove or active send verification message at register account

        // $user->sendEmailVerificationNotification();
        // flash('Please check your email for a verification link.')->info();

        return redirect()->route('login')->with('status', 'Success Register Your Account');
    }
}
