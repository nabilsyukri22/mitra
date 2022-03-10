<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataMitraController extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['isLogged'])) {
            $mitra = Mitra::all();
            return view('data_mitra.index', [
                'title' => 'Data Mitra',
                'mitra' => $mitra,
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function detail($id)
    {
        $mitra = Mitra::whereId($id)->first();
        return view('data_mitra.detail', [
            'mitra' => $mitra,
        ]);
    }

    public function edit()
    {
        return 'halo';
    }

    public function delete($id)
    {
        DB::table('mitras')
            ->where('id', $id)
            ->delete();
        return redirect('/dashboard');
    }
}
