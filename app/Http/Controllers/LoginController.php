<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['isLogged'])) {
            return redirect('/dashboard');
        } else {
            return view('login.index', [
                'title' => 'Login',
            ]);
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // dd($request->session()->regenerate());
            // Session::set('isLogged', true);
            session_start();
            $_SESSION['isLogged'] = true;
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login Gagal');
    }

    public function logout()
    {
        session_start();
        session_destroy();
        return redirect('/login');
    }
}
