<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['isLogged'])) {
            $user = User::all();
            return view('data_user.index', [
                'title' => 'User',
                'user' => $user,
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function detail($id)
    {
        $user = User::whereId($id)->first();

        return view('data_user.detail', [
            'user' => $user,
        ]);
    }
}
