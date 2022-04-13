<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatatanPerjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_catatan')->insert([
            'users_id' => 1,
            'body_temperature' => 35.5,
            'location' => 'Indonesia',
            'tanggal'  => '01/07/2004',
            'jam'      => '01:00'
        ]);
    }
}
