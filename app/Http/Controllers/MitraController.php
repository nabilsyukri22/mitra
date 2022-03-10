<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index()
    {
        // $table = (new UsersTable())->setup();
        return view('mitra.index', [
            'title' => 'Mitra'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'jk' => 'required|max:255',
            'nik' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'umur' => 'required|max:255',
            'perkawinan' => 'required|max:255',
            'domisili' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'pendidikan' => 'required|max:255',
            'nowa' => 'required|max:255',
            'email' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'pengalaman' => 'required|max:255',
            'motor' => 'required|max:255',
            'hp' => 'required|max:255',
            'ram' => 'required|max:255',
            'android' => 'required|max:255',
            'zoom' => 'required|max:255',
            'pasfoto' => 'image|file|max:2048',
            'ktp' => 'image|file|max:2048',
            'ijazah' => 'image|file|max:2048',
        ]);

        $validatedData['pasfoto'] = $request->file('pasfoto')->store('pasfoto');
        $validatedData['ktp'] = $request->file('ktp')->store('ktp');
        $validatedData['ijazah'] = $request->file('ijazah')->store('ijazah');
        Mitra::create($validatedData);
        // $request->session()->flash('success', 'Registrasi Berhasil');
        return redirect('/blank')->with('success', 'Pendaftaran Berhasil');
    }
}
