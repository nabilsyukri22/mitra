<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataMitraController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all();
        return view('data_mitra.index', [
            'title' => 'Data Mitra',
            'mitra' => $mitra,
        ]);
    }

    public function detail($id)
    {
        $mitra = Mitra::whereId($id)->first();
        $umur = (date('Y') - date('Y',strtotime($mitra->tanggal_lahir)));
        return view('data_mitra.detail', [
            'mitra' => $mitra,
            'umur' => $umur,
        ]);
    }

    public function delete($id)
    {
        DB::table('mitras')
            ->where('id', $id)
            ->delete();
        return redirect()->back();
    }
}
