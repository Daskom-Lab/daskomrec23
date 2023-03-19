<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shifts')->insert([
            'shiftname' => 'Shift 1',
            'day' => date('Y-m-d H:i:s'),
            'time_start' => '07:00:00',
            'time_end' => '09:00:00',
            'quota' => 10
        ]);
        DB::table('shifts')->insert([
            'shiftname' => 'Shift 2',
            'day' => date('Y-m-d H:i:s'),
            'time_start' => '09:00:00',
            'time_end' => '11:00:00',
            'quota' => 10
        ]);
        DB::table('shifts')->insert([
            'shiftname' => 'Shift 3',
            'day' => date('Y-m-d H:i:s'),
            'time_start' => '11:00:00',
            'time_end' => '13:00:00',
            'quota' => 10
        ]);
        DB::table('shifts')->insert([
            'shiftname' => 'Shift 4',
            'day' => date('Y-m-d H:i:s'),
            'time_start' => '13:00:00',
            'time_end' => '15:00:00',
            'quota' => 10
        ]);
        DB::table('shifts')->insert([
            'shiftname' => 'Shift 5',
            'day' => date('Y-m-d H:i:s'),
            'time_start' => '15:00:00',
            'time_end' => '17:00:00',
            'quota' => 10
        ]);
    }
}
