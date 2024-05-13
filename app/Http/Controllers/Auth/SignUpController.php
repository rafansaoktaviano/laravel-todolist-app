<?php

namespace App\Http\Controllers\Auth;





use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;



class SignUpController extends Controller
{
    public function index()
    {
        return view("auth.signup");
    }
    public function create()
    {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['email', 'required', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed', Password::min(6)],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/');
    }


    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }

}