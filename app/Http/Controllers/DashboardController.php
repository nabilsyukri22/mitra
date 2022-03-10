<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['isLogged'])) {
            return view('dashboard.index', [
                'title' => 'Dasboard',
            ]);
        } else {
            return redirect('/login');
        }
    }
}
