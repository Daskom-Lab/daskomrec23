<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DataCaas;
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
        $this->call([
            PassCheckMessageSeeder::class,
            PassCheckSeeder::class,
            AdminSeeder::class,
            StagesSeeder::class,
            DatacaasSeeder::class,
            AssistantContactSeeder::class,
        ]);
    }
}
