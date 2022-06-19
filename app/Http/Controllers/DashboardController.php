<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Survei;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $nama = User::get('name');
        $user = User::count();
        $survei = Survei::count();
        $mitra = Mitra::count();
        return view('dashboard.index', [
            'title' => 'Dasboard',
            'user' => $user,
            'survei' => $survei,
            'mitra' => $mitra,
            'nama' => $nama,
        ]);
    }
}
