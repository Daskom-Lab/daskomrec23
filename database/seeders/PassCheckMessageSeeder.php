<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassCheckMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passcheckmessages')->insert([
            'pass' => 'Selamat kamu lolos tahap selanjutnya!',
            'failed' => 'Tetap semangat yaa, kamu belum lolos:(',
            'link' => 'https://daskomlab.com/'
        ]);
    }
}
