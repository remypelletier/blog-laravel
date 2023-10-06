<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class AuthController extends Controller
{

    public function login() {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request) {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'form' => 'Bad credentials'
        ])->onlyInput('form');
    }
    
    public function logout() {
        Auth::logout();
        return redirect()->route('auth.login');
    }

}
