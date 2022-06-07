<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use AzisHapidin\IndoRegion\IndoRegion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index()
    {
        // $table = (new UsersTable())->setup();
        $provinces = Province::all();

        return view('mitra.index', compact('provinces'), [
            'title' => 'Mitra',
        ]);
    }

    //---------------------

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

    //--------------------------------------

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            // $request->validate([
            'nama' => 'required|max:255',
            'jk' => 'required|max:255',
            'nik' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'perkawinan' => 'required|max:255',
            'domisili' => 'required|max:255',
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
            'pasfoto' => 'required|image|file|max:2048',
            'ktp' => 'required|image|file|max:2048',
            'ijazah' => 'required|image|file|max:2048',
            'village_id' => 'required',
            'district_id' => 'required',
            'regency_id' => 'required',
            'province_id' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);
        // dd($request);

        // $request['pasfoto']->file('pasfoto')->store('pasfoto');
        // $request['ktp']->file('ktp')->store('ktp');
        // $request['ijazah']->file('ijazah')->store('ijazah');
        $validatedData['pasfoto'] = $request->file('pasfoto')->store('pasfoto');
        $validatedData['ktp'] = $request->file('ktp')->store('ktp');
        $validatedData['ijazah'] = $request->file('ijazah')->store('ijazah');
        // Mitra::create($validatedData);
        Mitra::create($validatedData);
        // $request->session()->flash('success', 'Registrasi Berhasil');

        return redirect('/pendaftaran')->with(
            'success',
            'Pendaftaran Berhasil'
        );
    }
}
