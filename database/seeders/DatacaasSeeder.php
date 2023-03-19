<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class DatacaasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // Mendapatkan path dari foto
        // $path = storage_path('app/public/mai.png');

        // // Membaca foto sebagai string biner
        // $blob = file_get_contents($path);
        DB::table('datacaas')->insert([
            'name' => 'Adam Wisnu Pradana',
            'email' => Str::random(10) . '@gmail.com',
            'nim' => '1101213133',
            'major' => 'Teknik Telekomunikasi',
            'class' => 'TT-46-09',
            'photo' =>  Str::random(15),
            'password' => Hash::make('123456789'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('datacaas')->insert([
            'name' => 'Rifky Agung',
            'email' => Str::random(10) . '@gmail.com',
            'nim' => '1101218090',
            'major' => 'Teknik Telekomunikasi',
            'class' => 'TT-46-10',
            'photo' =>  Str::random(15),
            'password' => Hash::make('123456789'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('datacaas')->insert([
            'name' => 'Niluh Putu',
            'email' => Str::random(10) . '@gmail.com',
            'nim' => '1104216788',
            'major' => 'Teknik Biomedis',
            'class' => 'TB-46-02',
            'photo' =>  Str::random(15),
            'password' => Hash::make('123456789'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('datacaas')->insert([
            'name' => 'Andini Windy',
            'email' => Str::random(10) . '@gmail.com',
            'nim' => '1103218378',
            'major' => 'Teknik Biomedis',
            'class' => 'TB-46-01',
            'photo' =>  Str::random(15),
            'password' => Hash::make('123456789'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('datacaas')->insert([
            'name' => 'Nyimas Anggun',
            'email' => Str::random(10) . '@gmail.com',
            'nim' => '1102210978',
            'major' => 'Teknik Fisika',
            'class' => 'TF-46-02',
            'photo' =>  Str::random(15),
            'password' => Hash::make('123456789'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('datacaas')->insert([
            'name' => 'Zahira',
            'email' => Str::random(10) . '@gmail.com',
            'nim' => '1104217634',
            'major' => 'Teknik Fisika',
            'class' => 'TF-46-04',
            'photo' =>  Str::random(15),
            'password' => Hash::make('123456789'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
