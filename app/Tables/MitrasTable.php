<?php

namespace App\Tables;

use App\Models\Mitra;
use Okipa\LaravelTable\Abstracts\AbstractTable;
use Okipa\LaravelTable\Table;

class MitrasTable extends AbstractTable
{
    protected function table(): Table
    {
        return (new Table())->model(Mitra::class)
            ->routes([
                'index' => ['name' => 'data_mitra']
            ]);
    }

    protected function columns(Table $tabel_mitra): void
    {
        $tabel_mitra->column('nama')->sortable()->searchable();
        $tabel_mitra->column('jk')->sortable();

        $tabel_mitra->column()
            ->title(__('Display'))
            ->link(fn(Mitra $mitra) => route('detail_mitra', $mitra->id))
            ->button(['btn', 'btn-sm', 'btn-primary'])
            ->prependHtml('<i class="fas fa-envelope"></i>', true);


    }
}