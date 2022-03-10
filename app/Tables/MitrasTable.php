<?php

namespace App\Tables;

use App\Models\Mitra;
use Okipa\LaravelTable\Abstracts\AbstractTable;
use Okipa\LaravelTable\Table;

class MitrasTable extends AbstractTable
{
    protected function table(): Table
    {
        return (new Table())
            ->model(Mitra::class)
            ->routes([
                'index' => ['name' => 'data_mitra'],
                'edit' => ['name' => 'data_mitra'],
                'destroy' => ['name' => 'data_mitra'],
            ])
            ->destroyConfirmationHtmlAttributes(
                fn(Mitra $mitra) => [
                    'data-confirm' => __(
                        'Are you sure you want to delete the user :name ?',
                        [
                            'name' => $mitra->nama,
                        ]
                    ),
                ]
            );
    }

    protected function columns(Table $tabel_mitra): void
    {
        $tabel_mitra
            ->column('nama')
            ->title(__('Nama'))
            ->sortable()
            ->searchable();

        $tabel_mitra
            ->column()
            ->title(__('Display'))
            ->link(fn(Mitra $mitra) => route('detail_mitra', $mitra->id))
            ->button(['btn', 'btn-sm', 'btn-primary'])
            ->prependHtml('<i class="fas fa-envelope"></i>', true);
    }
}
