<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mitras(){
        return $this->belongsToMany(Mitra::class, 'mitra_surveis', 'id_survei', 'id_mitra'); 
    }

    public function user(){
        return $this->hasOne(User::class, 'id_user');
    }
}
