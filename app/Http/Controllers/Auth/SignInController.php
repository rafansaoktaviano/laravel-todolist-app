<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;



class SignInController extends Controller
{
    public function index()
    {
        return view("auth.signin");
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $attempt = Auth::attempt($attributes);  // return boolean 

        if (!$attempt) {
            return throw ValidationException::withMessages([
                'email' => 'Sorry, Those do not match on our system'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');
    }
}
