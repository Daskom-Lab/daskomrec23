<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AssistantContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assistantcontacts')->insert([
          'photo' => Str::random(15),
          'ascod' => 'AWP',
          'name' => 'Adam Wisnu Pradana',
          'nohp' => '081332938169',
          'line' => 'adamwisnup',
          'instagram' => 'adam_wisnup',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
          'photo' => Str::random(15),
          'ascod' => 'CEN',
          'name' => 'Vincentius Antu',
          'nohp' => '081332938169',
          'line' => 'adamwisnup',
          'instagram' => 'adam_wisnup',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
          'photo' => Str::random(15),
          'ascod' => 'MAI',
          'name' => 'Muhamad Al Fitra Zulfikhar Akbar',
          'nohp' => '085155439747',
          'line' => 'zulakbar1412',
          'instagram' => 'zulfikhar1412',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ABD',
            'name' => 'Abdillah Nur Isnaini',
            'nohp' => '-',
            'line' => 'abdillah729',
            'instagram' => 'abdillah729',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'AKM',
            'name' => 'Muhammad Akmal Falih Rizqullah',
            'nohp' => '-',
            'line' => 'akmalfalih_1952',
            'instagram' => 'akmal_falih',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ALF',
            'name' => 'Muhammad Aushaf Al Farras',
            'nohp' => '-',
            'line' => 'alfalpha_',
            'instagram' => 'alfarras_934',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ALV',
            'name' => 'Alvaro Ahmad Firdaus',
            'nohp' => '-',
            'line' => 'alvaroahmadf2148',
            'instagram' => 'alvaroahmadf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ARF',
            'name' => 'Arsyad Faturrahman',
            'nohp' => '-',
            'line' => 'arsyadftr',
            'instagram' => 'arsyadftr',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ARK',
            'name' => 'Annastya Azhar Arkaan',
            'nohp' => '-',
            'line' => 'annastyaazhar',
            'instagram' => 'annstyzhr',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'AWR',
            'name' => 'Andini Windy Rande',
            'nohp' => '-',
            'line' => 'andini.wrande',
            'instagram' => 'andiniwindyrande',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'AZA',
            'name' => 'Amiruddin Zakaria Al-Hanif',
            'nohp' => '-',
            'line' => 'amiruddin.za',
            'instagram' => 'amiruddin.za',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


    }
}
