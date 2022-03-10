<?php

namespace App\Tables;

use App\Models\MitraSurvei;
use Okipa\LaravelTable\Abstracts\AbstractTable;
use Okipa\LaravelTable\Table;

class MitraSurveisTable extends AbstractTable
{
    /**
     * Configure the table itself.
     *
     * @return \Okipa\LaravelTable\Table
     * @throws \ErrorException
     */
    protected function table(): Table
    {
        return (new Table())->model(MitraSurvei::class)
            ->routes([
                'index'   => ['name' => 'mitraSurveis.index'],
                'create'  => ['name' => 'mitraSurvei.create'],
                'edit'    => ['name' => 'mitraSurvei.edit'],
                'destroy' => ['name' => 'mitraSurvei.destroy'],
            ])
            ->destroyConfirmationHtmlAttributes(fn(MitraSurvei $mitraSurvei) => [
                'data-confirm' => __('Are you sure you want to delete the entry :entry?', [
                    'entry' => $mitraSurvei->database_attribute,
                ]),
            ]);
    }

    /**
     * Configure the table columns.
     *
     * @param \Okipa\LaravelTable\Table $table
     *
     * @throws \ErrorException
     */
    protected function columns(Table $table): void
    {
        $table->column('id')->sortable();
        $table->column('created_at')->dateTimeFormat('d/m/Y H:i')->sortable();
        $table->column('updated_at')->dateTimeFormat('d/m/Y H:i')->sortable(true, 'desc');
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
