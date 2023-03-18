<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plots')->insert([
            'isPlotActive' => 1,
            'datacaas_id' =>1,
            'shifts_id' =>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('plots')->insert([
            'isPlotActive' => 1,
            'datacaas_id' =>2,
            'shifts_id' =>2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('plots')->insert([
            'isPlotActive' => 1,
            'datacaas_id' =>3,
            'shifts_id' =>3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('plots')->insert([
            'isPlotActive' => 1,
            'datacaas_id' =>4,
            'shifts_id' =>4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('plots')->insert([
            'isPlotActive' => 1,
            'datacaas_id' =>5,
            'shifts_id' =>5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('plots')->insert([
            'isPlotActive' => 1,
            'datacaas_id' =>6,
            'shifts_id' =>6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('plots')->insert([
            'isPlotActive' => 1,
            'datacaas_id' =>8,
            'shifts_id' =>6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
