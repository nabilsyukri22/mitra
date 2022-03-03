<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \App\Tables\UsersTable;

class DataUserController extends Controller
{
    public function index()
    {
        $tabel_user = (new UsersTable())->setup();

        return view('data_user.index', [
            'title' => 'Data Mitra',
            'table' => $tabel_user
        ]);
    }

    public function detail($id)
    {
        
        $user = User::whereId($id)->first();
        $tabel_user = (new UsersTable())->setup();
        return view('data_user.detail', [
            'title' => 'Data Mitra',
            'table' => $tabel_user
        ]);
        // dd($user);

        // $user->nama;
    }
}