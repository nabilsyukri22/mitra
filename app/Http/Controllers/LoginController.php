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
            // dd($request->session()->regenerate());
            $request->session()->regenerate();
            // if (auth()->user()->isadmin == true){
            //     return redirect()->route('admin');
            // } else {
            //     return redirect('/dashboard');
            // }
            return redirect('/dashboard');
        }
        return back()->with('loginError', 'Login Gagal');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
