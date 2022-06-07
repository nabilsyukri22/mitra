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

    public function desa(){
        return $this->hasOne(Village::class, 'village_id');
    }

    public function kecamatan(){
        return $this->hasOne(District::class, 'district_id');
    }

    public function kabupaten(){
        return $this->hasOne(Regency::class, 'regency_id');
    }

    public function provinsi(){
        return $this->hasOne(Province::class, 'province_id');
    }

    // $mitra = Mitra::find(1)
    // $penilaian = $mitra->provinsi
    // foreach($penilaian as $p) echo $p->nilai
}
