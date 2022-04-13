<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'nik' => 3273120107040001,
            'name' => 'Rafi Khoirulloh',
            'email' => 'khoirulloh.rafi2@gmail.com',
        ]);
    }
}
