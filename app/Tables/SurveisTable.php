<?php

namespace App\Tables;

use App\Models\Survei;
use Okipa\LaravelTable\Abstracts\AbstractTable;
use Okipa\LaravelTable\Table;

class SurveisTable extends AbstractTable
{
    /**
     * Configure the table itself.
     *
     * @return \Okipa\LaravelTable\Table
     * @throws \ErrorException
     */
    protected function table(): Table
    {
        return (new Table())->model(Survei::class)->routes([
            'index' => ['name' => 'data_survei'],
        ]);
    }

    /**
     * Configure the table columns.
     *
     * @param \Okipa\LaravelTable\Table $table
     *
     * @throws \ErrorException
     */
    protected function columns(Table $surveistable): void
    {
        $surveistable->column('id')->sortable();
        $surveistable->column('nama')->sortable();
        $surveistable->column('kebutuhan')->sortable();

        $surveistable->column('status')->sortable();

        $surveistable
            ->column()
            ->title(__('Display'))
            ->link(fn(Survei $survei) => route('detail_survei', $survei->id))
            ->button(['btn', 'btn-sm', 'btn-primary'])
            ->prependHtml('<i class="fas fa-envelope"></i>', true);
    }

    /**
     * Configure the table result lines.
     *
     * @param \Okipa\LaravelTable\Table $table
     */
    protected function resultLines(Table $table): void
    {
        //
    }
}
