<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'isadmin' => '1'
        ]);
        
        User::create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
            'isadmin' => '0'
        ]);
    }
}
