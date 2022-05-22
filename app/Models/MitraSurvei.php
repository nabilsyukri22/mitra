<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraSurvei extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra');
    }

    public function survei()
    {
        return $this->belongsTo(Survei::class, 'id_survei');
    }

    public function penilaians()
    {
        return $this->hasMany(Penilaian::class, 'id_mitra_surveis');
    }
}
