<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) return redirect('/dashboard');
        return view('login.index', ['title' => 'Login']);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect('/dashboard');
        }
        return redirect('/login')->with('flash_message_error', 'Login Gagal');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
