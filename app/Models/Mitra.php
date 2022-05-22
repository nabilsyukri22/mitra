<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penilaians()
    {
        return $this->hasManyThrough(Penilaian::class, MitraSurvei::class, 'id_mitra', 'id_mitra_surveis');
    }

    public function surveis(){
        return $this->belongsToMany(Survei::class, 'mitra_surveis', 'id_mitra', 'id_survei'); 
    }

    public function mitra_survei(){
        return $this->hasMany(MitraSurvei::class, 'id_mitra'); 
    }

    // $mitra = Mitra::find(1)
    // $penilaian = $mitra->penilaians
    // foreach($penilaian as $p) echo $p->nilai
}
