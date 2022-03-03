<?php

namespace App\Tables;

use App\Models\User;
use Okipa\LaravelTable\Abstracts\AbstractTable;
use Okipa\LaravelTable\Table;

class UsersTable extends AbstractTable
{
    protected function table(): Table
    {
        return (new Table())->model(User::class)
            ->routes([
                'index' => ['name' => 'data_user']
            ]);
    }

    protected function columns(Table $tabel_user): void
    {
        $tabel_user->column('name')->sortable()->searchable();
        $tabel_user->column('email')->sortable()->searchable();

        $tabel_user->column()
            ->title(__('Display'))
            ->link(fn(User $user) => route('detail_user', $user->id))
            ->button(['btn', 'btn-sm', 'btn-primary'])
            ->prependHtml('<i class="fas fa-envelope"></i>', true);


    }
}