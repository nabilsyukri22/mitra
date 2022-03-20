<?php

namespace App\Http\Livewire;

use App\Models\MitraSurvei;
use Livewire\Component;

class Penilaian extends Component
{
    public $mitra;
    public $survei;
    public $date;

    public $mitrasurvei;

    public $rating;

    protected $rules = [
        'rating' => ['required', 'in:1,2,3,4,5'],
    ];

    public function mount($mitra, $survei)
    {
        $this->date = now();
        $this->mitra = $mitra;
        $this->survei = $survei;

        $this->mitrasurvei = MitraSurvei::where([
            'id_survei' => $survei->id,
            'id_mitra' => $mitra->id,
        ])->first();

        $this->rating = $this->mitrasurvei->rating;
    }

    public function render()
    {
        return view('livewire.rating');
    }

    public function saveRating()
    {
        $this->validate();
        $this->mitrasurvei->rating = $this->rating;
        $this->mitrasurvei->save();
        //save ratingnyo ka db
    }
}
