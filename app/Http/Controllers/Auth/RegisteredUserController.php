<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Models\Landlord;
use App\Models\Guest;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required','string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(value: $request->password),
            'role' => $request->role,
        ]);

        if ($user->role == 'landlord') {
            $landlord = new Landlord();
            // $landlord->landlord_id = $user->id;
            $landlord->id = $user->id; 
            $landlord->first_name= $user->name;
            $landlord->last_name= $user->name;
            $landlord->save();            
        }else if($user ->role=='guest') {
            $guest = new Guest();
            // $landlord->landlord_id = $user->id;
            $guest->id = $user->id; 
            $guest->first_name= $user->name;
            $guest->last_name= $user->name;
            $guest->save(); 
        }else {
            $admin = new Admin();
            // $admin->admin_id = $user->id;
            $admin->id = $user->id; 
            $admin->name= $user->name;
            $admin->save(); 
        }

        

        event(new Registered($user));

        // Auth::login($user);
        // if($request ->user()->role === 'admin'){
        //     return redirect('admin/dashboard');
        // }else if ($request ->user()-> role === 'landlord') {
        //     return redirect('landlord/dashboard');
        // }else if ($request ->user()-> role === 'guest'){
        //     return redirect('guest/dashboard');            
        // }

        return redirect('admin/dashboard');
    }
}
