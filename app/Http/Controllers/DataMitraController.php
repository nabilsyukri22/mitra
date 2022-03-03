<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use \App\Tables\MitrasTable;

class DataMitraController extends Controller
{
    public function index()
    {
        $mitrastable = (new MitrasTable())->setup();

        return view('data_mitra.index', [
            'title' => 'Data Mitra',
            'table' => $mitrastable
        ]);

        // $table = (new UsersTable())->setup();

        // return view('data_mitra.index', [
        //     'title' => 'Data Mitra',
        //     'table' => $table
        // ]);
    }

    public function detail($id)
    {
        // return view('data_mitra.detail');
        $mitra = Mitra::whereId($id)->first();
        dd($mitra);

        $mitra->nama;
    }
}
