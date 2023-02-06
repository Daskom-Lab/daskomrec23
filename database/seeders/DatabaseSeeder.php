<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passcheck')->insert([
            'id' => 1,
            'isActiveCheck' => 0,
            'isPlotRun' => 0,
        ]);

        DB::table('statusstages')->insert([
            'id' => 1,
            'current_stage' => 1,
        ]);

        DB::table('passcheckmessages')->insert([
            'pass' => 'Selamat kamu lolos tahap selanjutnya!',
            'failed' => 'Tetap semangat yaa, kamu belum lolos:(',
            'link' => 'https://daskomlab.com/'
        ]);
    }
}
