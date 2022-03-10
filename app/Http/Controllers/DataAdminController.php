<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \App\Tables\UsersTable;

class DataAdminController extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['isLogged'])) {
            $table = (new UsersTable())->setup();
            return view('data_mitra.index', [
                'title' => 'Data Mitra',
                'table' => $table
             ]);
        } else {
            return redirect('/login');
        }
        
    }

    public function detail($id)
    {
        // return view('data_mitra.detail');
        $user = User::whereId($id)->first();
        dd($user);

        $user->nama;
    }
}
