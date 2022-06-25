<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kriteria::create(['nama' => 'Kejujuran']);
        Kriteria::create(['nama' => 'Kuantitas']);
        Kriteria::create(['nama' => 'Ketepatan waktu ']);
        Kriteria::create(['nama' => 'Kepatuhan SOP']);
        Kriteria::create(['nama' => 'Penguasaan konsep dan definisi']);
        Kriteria::create(['nama' => 'Kejujuran']);
        Kriteria::create(['nama' => 'Inisiatif bekerja']);
        Kriteria::create(['nama' => 'Loyalitas']);
        Kriteria::create(['nama' => 'Perilaku']);
        Kriteria::create(['nama' => 'Komunikasi']);
    }
}
