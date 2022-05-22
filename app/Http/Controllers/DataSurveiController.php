<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Survei;
use App\Models\Kriteria;
use App\Models\MitraSurvei;
use App\Models\Penilaian;
use App\Models\StatusSurvei;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;

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
        $survei = Survei::with(['mitras'])->find($id);
        return view('data_survei.detail', [
            'survei' => $survei,
            'jumlahmitra' => count($survei->mitras),
            'mitra' => $survei->mitras,
            'status_survei' => StatusSurvei::all(),
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

    public function penilaian($id)
    {
        $kriteria = Kriteria::all();

        return view('data_survei.penilaian', [
            'title' => 'Penilaian',
            'kriteria' => $kriteria,
            'id_mitra_surveis' => $id,
        ]);
    }

    public function simpan(Request $request)
    {
        $kriteria = Kriteria::all();
        $rules = [];

        foreach ($kriteria as $k) {
            $rules["kriteria_{$k->id}"] = 'required|numeric';
        }

        $request->validate($rules);
        foreach ($kriteria as $k) {
            $nilai = $request->{"kriteria_{$k->id}"};
            Penilaian::updateOrInsert(
                [
                    'id_mitra_surveis' => $request->id_mitra_surveis,
                    'id_kriteria' => $k->id,
                ],
                ['nilai' => $nilai]
            );
        }
        return redirect('/data_survei');
    }

    public function twilio()
    {
        $sid = 'AC9e392a7b4a308ada52e7c81861c35c15';
        $token = '8e1d81e5e76e558f0f5bf87e75f1f9bb';
        $twilio = new Client($sid, $token);

        $message = $twilio->messages->create(
            'whatsapp:+6281266075794', // to
            [
                'from' => 'whatsapp:+14155238886',
                'body' => 'bisa ndak yo',
            ]
            // 'whatsapp:+6282391777500',
            // [
            //     'from' => 'whatsapp:+14155238886',
            //     'body' => 'mada dikecekan urangg',
            // ]
        );
        $message = $twilio->messages->create('whatsapp:+6285156817298', [
            'from' => 'whatsapp:+14155238886',
            'body' => 'haloo',
        ]);

        print $message->sid;
    }
}
