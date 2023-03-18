<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->insert([
            'id' => 1,
            'stagesname' => 'Administrasi',
            'statusActive' => 1,
        ]);
        DB::table('stages')->insert([
            'id' => 2,
            'stagesname' => 'Tes Tulis & Coding',
            'statusActive' => 0,
        ]);
        DB::table('stages')->insert([
            'id' => 3,
            'stagesname' => 'Wawanacara',
            'statusActive' => 0,
        ]);
        DB::table('stages')->insert([
            'id' => 4,
            'stagesname' => 'Wawanacara',
            'statusActive' => 0,
        ]);
        DB::table('stages')->insert([
            'id' => 5,
            'stagesname' => 'Tugas Kecil',
            'statusActive' => 0,
        ]);
        DB::table('stages')->insert([
            'id' => 6,
            'stagesname' => 'Teaching',
            'statusActive' => 0,
        ]);
        DB::table('stages')->insert([
            'id' => 7,
            'stagesname' => 'Upgrading',
            'statusActive' => 0,
        ]);
    }
}
