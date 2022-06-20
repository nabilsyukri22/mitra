<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function index()
    {
        $user = User::where('isadmin', false)->get();
        // $user = User::withTrashed()->get();
        return view('data_user.index', [
            'title' => 'User',
            'user' => $user,
        ]);
    }

    public function tambah()
    {
        return view('data_user.tambah', [
            'title' => 'Tambah'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registrasi Berhasil');

        return redirect('/login')->with('success', 'Registrasi Berhasil');
        // dd('berhasil');
    }


    public function hapus(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

    // public function detail($id)
    // {
    //     $user = User::whereId($id)->first();

    //     return view('data_user.detail', [
    //         'user' => $user,
    //     ]);
    // }
}
