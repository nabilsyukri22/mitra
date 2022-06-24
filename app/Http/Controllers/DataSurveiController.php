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
            'status'    => 'required',
        ]);

        Survei::create($validatedData);

        return redirect('/data_survei')->with(
            'success',
            'Membuat Survei Berhasil'
        );
    }

    public function tambah_mitra(Request $request)
    {
        // $mitra = Mitra::all();
        // $request = $mitra->id;
        $survei = Survei::find($request->survei_id);

        $insertData = collect($request->tambah_mitra)->map(fn ($item) => [
            "id_survei" => $request->survei_id,
            "id_mitra" => $item
        ])->take($survei->kebutuhan);

        MitraSurvei::upsert($insertData->all(), ['id_survei', 'id_mitra']);
        return redirect()->back();
    }

    public function detail($id)
    {
        $survei = Survei::with(['mitras'])->find($id);
        $mitraa = Mitra::all();
        $date = date('Y-m-d');
        return view('data_survei.detail', [
            'survei' => $survei,
            'jumlahmitra' => count($survei->mitras),
            'mitra' => $survei->mitras,
            'mitraa' => $mitraa,
            'status_survei' => StatusSurvei::all(),
            'date' => $date
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
        return redirect()->route('detail_survei', MitraSurvei::find($request->id_mitra_surveis)->id_survei);
    }

    public function twilio(Request $request)
    {
        $validatedData = $request->validate([
            'surveiId' => 'required',
            'msg' => 'required|string',
        ]);

        $survei = Survei::with(['mitras'])->find($validatedData['surveiId']);

        $sid = 'AC9e392a7b4a308ada52e7c81861c35c15';
        $token = '8e1d81e5e76e558f0f5bf87e75f1f9bb';
        $twilio = new Client($sid, $token);

        $message = null;
        foreach ($survei->mitras as $mitra) {
            $message = $twilio->messages->create(
                'whatsapp:' . $mitra->nowa,
                [
                    'from' => 'whatsapp:+14155238886',
                    'body' => $validatedData['msg'],
                ]
            );
        }

        var_dump($message);
    }
    public function hapus(Request $request, $id)
    {
        $mitraSurvey =  MitraSurvei::find($id);
        $mitraSurvey->delete();

        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $survei =  Survei::find($id);
        $survei->delete();

        return redirect()->back();
    }
}
