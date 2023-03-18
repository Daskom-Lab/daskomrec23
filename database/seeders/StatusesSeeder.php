<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'isPass' => 1,
            'datacaas_id' =>1,
            'stages_id' =>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('statuses')->insert([
            'isPass' => 1,
            'datacaas_id' =>2,
            'stages_id' =>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('statuses')->insert([
            'isPass' => 1,
            'datacaas_id' =>3,
            'stages_id' =>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('statuses')->insert([
            'isPass' => 1,
            'datacaas_id' =>4,
            'stages_id' =>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('statuses')->insert([
            'isPass' => 1,
            'datacaas_id' =>5,
            'stages_id' =>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('statuses')->insert([
            'isPass' => 1,
            'datacaas_id' =>6,
            'stages_id' =>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('statuses')->insert([
            'isPass' => 1,
            'datacaas_id' =>8,
            'stages_id' =>1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
