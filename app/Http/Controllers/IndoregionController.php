<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use AzisHapidin\IndoRegion\IndoRegion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndoregionController extends Controller
{
    public function indoregion()
    {
        $provinces = Province::all();

        return view('indoregion', compact('provinces'));
    }

    public function getkabupaten(request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = '<option> Pilih Kabupaten / Kota... </option>';

        foreach ($kabupatens as $kabupaten) {
            $option .= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }

        echo $option;
    }

    public function getkecamatan(request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option = '<option> Pilih Kecamatan... </option>';

        foreach ($kecamatans as $kecamatan) {
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }

        echo $option;
    }

    public function getdesa(request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        $option = '<option> Pilih Desa... </option>';

        foreach ($desas as $desa) {
            $option .= "<option value='$desa->id'>$desa->name</option>";
        }

        echo $option;
    }

    public function store(request $request)
    {
        $validatedData = $request->validate([
            'provinsi' => 'required|max:255',
            'kabupaten' => 'required|max:255',
            'desa' => 'required|max:255',
        ]);
        IndoRegion::create($validatedData);
        return redirect('/pendaftaran')->with(
            'success',
            'Pendaftaran Berhasil'
        );
    }
}
