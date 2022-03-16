<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Survei;
use App\Models\MitraSurvei;
use Illuminate\Http\Request;
use App\Models\StatusSurvei;
use Illuminate\Support\Facades\Hash;

class DataSurveiController extends Controller
{
    public function index()
    {
        $survei = Survei::all();
        return view('data_survei.index', [
            'title' => 'Survei',
            'survei' => $survei,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kebutuhan' => 'required|max:255',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
        ]);

        Survei::create($validatedData);

        return redirect('/data_survei')->with(
            'success',
            'Membuat Survei Berhasil'
        );
    }

    public function tambah_mitra(Request $request)
    {
    }

    public function tambah()
    {
        $mitra = Mitra::all();
        return view('data_survei.tambah_mitra', [
            'title' => 'Tambah Mitra',
            'mitra' => $mitra,
        ]);
    }

    public function detail($id)
    {
        $jumlahmitra = MitraSurvei::select(
            MitraSurvei::raw('count(*) as jumlah')
        )
            ->where('id_survei', $id)
            ->first();

        $mitra = MitraSurvei::join(
            'mitras',
            'mitras.id',
            '=',
            'mitra_surveis.id_mitra'
        )
            ->where('mitra_surveis.id_survei', $id)
            ->get();

        $status_survei = StatusSurvei::all();
        $survei = Survei::whereId($id)->first();
        return view('data_survei.detail', [
            'survei' => $survei,
            'jumlahmitra' => $jumlahmitra,
            'mitra' => $mitra,
            'status_survei' => $status_survei,
        ]);
    }

    // public function create(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nama' => 'required|max:255',
    //         'kebutuhan' => 'required',
    //     ]);

    //     Survei::create($validatedData);
    //     // $request->session()->flash('success', 'Registrasi Berhasil');
    //     dd($validatedData);
    //     // return redirect('/blank')->with('success', 'Pendaftaran Berhasil');
    // }

    public function survei()
    {
        return view('data_survei.survei', [
            'title' => 'Survei',
        ]);
    }
}
