<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\users;
use Illuminate\Validation\Rules\RequiredIf;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
            $username = $request->username;
            $password = $request->password;

            $credentials = [
                'username' => $username,
                'password' => $password,
            ];

        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        } else {
            return redirect('/login')->with('error', 'Username / password salah!');
        }
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        users::create([ // Tetap pakai `users::create`
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}

