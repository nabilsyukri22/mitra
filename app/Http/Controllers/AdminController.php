<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.dashboard',[
            'title' => 'Data User',
            'user' => $user
        ]);
    }
}
