<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ahmad Imam',
            'email' => 'ahmadimam@gmail.com',
            'password' => Hash::make('12345'),
            'level' => 'Admin',
        ], [
            'name' => 'Dinul Fikri',
            'email' => 'dinulfikri@gmail.com',
            'password' => Hash::make('12345'),
            'level' => 'Operator',
        ]);
    }
}
