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
          'nohp' => '082311457280',
          'line' => 'chotix96',
          'instagram' => 'vincentiusantu',
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
            'nohp' => '085254648494',
            'line' => 'abdillah729',
            'instagram' => 'abdillah729',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'AKM',
            'name' => 'Muhammad Akmal Falih Rizqullah',
            'nohp' => '085254648494',
            'line' => 'akmalfalih_1952',
            'instagram' => 'akmal_falih',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ALF',
            'name' => 'Muhammad Aushaf Al Farras',
            'nohp' => '081347589812',
            'line' => 'alfalpha_',
            'instagram' => 'alfarras_934',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ALV',
            'name' => 'Alvaro Ahmad Firdaus',
            'nohp' => '081249495558',
            'line' => 'alvaroahmadf2148',
            'instagram' => 'alvaroahmadf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ARF',
            'name' => 'Arsyad Faturrahman',
            'nohp' => '081222672084',
            'line' => 'arsyadftr',
            'instagram' => 'arsyadftr',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ARK',
            'name' => 'Annastya Azhar Arkaan',
            'nohp' => '081318383960',
            'line' => 'annastyaazhar',
            'instagram' => 'annstyzhr',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'AWR',
            'name' => 'Andini Windy Rande',
            'nohp' => '081347540190',
            'line' => 'andini.wrande',
            'instagram' => 'andiniwindyrande',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'AZA',
            'name' => 'Amiruddin Zakaria Al-Hanif',
            'nohp' => '08996370998',
            'line' => 'amiruddin.za',
            'instagram' => 'amiruddin.za',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'AZY',
            'name' => 'Alfia Zahra Yannisa',
            'nohp' => '081316560172',
            'line' => 'alfiazhray',
            'instagram' => 'alfiazhraaa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'BDP',
            'name' => 'Bayu Dwi Pangestu',
            'nohp' => '085155477011',
            'line' => 'bayudpn',
            'instagram' => 'b.dpn23',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'BEY',
            'name' => 'Fabiano Abbey Karo Sekali',
            'nohp' => '087835424241',
            'line' => 'indoalvez',
            'instagram' => 'fabianoabbey',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'BHL',
            'name' => 'Muhamad Bahrul Muflih Nurhabib',
            'nohp' => '089604162335',
            'line' => 'littleshitt',
            'instagram' => 'bahrulmuflih_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'BIB',
            'name' => 'Ikhsan Habib',
            'nohp' => '082288130403',
            'line' => 'habibikhsan',
            'instagram' => 'isanbib',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'DIN',
            'name' => 'Dini Rizqi Amalia',
            'nohp' => '085347963939',
            'line' => 'dinudinni',
            'instagram' => 'dinudinni',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'DIP',
            'name' => 'Soediponegoro',
            'nohp' => '085723868797',
            'line' => 'soedipol',
            'instagram' => 'soedipo_l',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'EKS',
            'name' => 'Eka Sugiarto',
            'nohp' => '0895347425432',
            'line' => 'ekasugiarto87',
            'instagram' => 'terseloeboeng',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ELA',
            'name' => 'Angela Stera Mentari',
            'nohp' => '082293978159',
            'line' => 'elastera11',
            'instagram' => 'angelaasm_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'EON',
            'name' => 'Michael Oktavian',
            'nohp' => '085947340132',
            'line' => 'mr.ekel',
            'instagram' => 'ekeloct_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'EZA',
            'name' => 'Muhammad Reza Manazil Al Qomar',
            'nohp' => '081220300089',
            'line' => 'manazil000',
            'instagram' => 'rezamanazil02',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'EZI',
            'name' => 'Alfarelzi',
            'nohp' => '085155288185',
            'line' => 'farel_zi31',
            'instagram' => 'alfa_relzi',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'FAP',
            'name' => 'Fajar Adhitia Pratama',
            'nohp' => '082293268251',
            'line' => 'fajaradhitia20',
            'instagram' => 'fadhitiapratama_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'FAQ',
            'name' => 'Fahira Qaulifa',
            'nohp' => '081283748664',
            'line' => 'fahirafaizin',
            'instagram' => 'fahira_qaulifa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'FEY',
            'name' => 'Ferry Chandra',
            'nohp' => '089636703133',
            'line' => 'ferry5245',
            'instagram' => 'basiliusferry',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'FLL',
            'name' => 'Fallerina Ribka Angela',
            'nohp' => '082138161039',
            'line' => 'ribtams29',
            'instagram' => 'fallee31',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'FRA',
            'name' => 'Fransiskus Abel Pramuadi Putra',
            'nohp' => '085951392983',
            'line' => 'fransiskusabelpp',
            'instagram' => 'fransiskusabel',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'GAA',
            'name' => 'Ghufron Andriansyah',
            'nohp' => '081231717659',
            'line' => 'andriansyahh_29',
            'instagram' => 'ndriu._',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'IKI',
            'name' => 'Rifky Agung Febrian',
            'nohp' => '081214718236',
            'line' => 'rifky.5159',
            'instagram' => 'rif_agung',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'IQB',
            'name' => 'Iqbal Nur Akbar',
            'nohp' => '081222189058',
            'line' => 'junnnn__',
            'instagram' => 'iqbal_akbar25',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'JAY',
            'name' => 'Ilhaam Zaidaan Taufiqullah',
            'nohp' => '081318392846',
            'line' => ' add by number',
            'instagram' => 'ilhmzai',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'JHS',
            'name' => 'Zahira Aulia Husniah',
            'nohp' => '081289312727',
            'line' => 'gajahkuning',
            'instagram' => 'aihira_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'LAZ',
            'name' => 'Aldira Fadillah Lazuardi',
            'nohp' => '087760576697',
            'line' => 'aldirafl',
            'instagram' => 'aldira_jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'LIM',
            'name' => 'Salim Ammar Rasyid',
            'nohp' => '085802657969',
            'line' => 'ammar21juni2002',
            'instagram' => 'salim.ammarr',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'LIP',
            'name' => 'Alif Rizky Dimandani',
            'nohp' => '085791356223',
            'line' => 'alifrizky100203',
            'instagram' => 'alifrizkyd',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'LUT',
            'name' => 'Lutfi Bramantio Subagyo',
            'nohp' => '081218949334',
            'line' => '301102lbs',
            'instagram' => 'l_bramantio',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'MIQ',
            'name' => 'Muhammad Iqbal',
            'nohp' => '089654904115',
            'line' => '10000ball',
            'instagram' => 'm.iqbal122',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'MNS',
            'name' => 'Marshaniswah Syamsul',
            'nohp' => '088258098757',
            'line' => 'chaca_niswa',
            'instagram' => 'chacaniswah',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'MYC',
            'name' => 'Mayco Ikhsan Hanafi',
            'nohp' => '08985478186',
            'line' => 'aselemeleketebuterer',
            'instagram' => 'maycoaja',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'MZY',
            'name' => 'Mazaya',
            'nohp' => '082298311361',
            'line' => 'mazaya2004',
            'instagram' => 'mzy.a',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'NAB',
            'name' => 'Nyimas Anggun Barokatillah',
            'nohp' => '085157718335',
            'line' => 'anggun1524',
            'instagram' => 'anggunbrktllh',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'NAY',
            'name' => 'Nadya Angelina Adrian',
            'nohp' => '081365040209',
            'line' => 'nayaal',
            'instagram' => 'nayangeladr_x',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'NIH',
            'name' => 'Muhammad Naufal Ihsanul Hakim',
            'nohp' => '08111348173',
            'line' => 'ihsanul_6',
            'instagram' => 'naufal_ihsanul',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'NNY',
            'name' => "Henny Mar'atus Sholihah",
            'nohp' => '082111204181',
            'line' => 'hennymaratus03',
            'instagram' => 'henny_maratus163',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'OTU',
            'name' => 'Ni Luh Putu Sri Diantari',
            'nohp' => '081999857285',
            'line' => 'putuluhtudiantari',
            'instagram' => 'otuu.dntrr_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'PAL',
            'name' => 'Naufal Widad Sundawa',
            'nohp' => '081213667778',
            'line' => 'naufalwidada',
            'instagram' => 'naufal.sundawa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'PNG',
            'name' => 'Priyagung Yudho Aufar Rizky',
            'nohp' => '087880727225',
            'line' => 'priyagung_yudho',
            'instagram' => 'priyagung_yudho',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'QIA',
            'name' => 'Sazqia Aulia Palad',
            'nohp' => '085280555073',
            'line' => 'Sazqiaa_aulia',
            'instagram' => 'auliaasaz_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'RAM',
            'name' => 'Muhammad Zidane Naufal Ramadhan',
            'nohp' => '085155086785',
            'line' => 'zidane17naufal',
            'instagram' => 'zidane.e_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'RAR',
            'name' => 'Naufal Rayhan Ali Rahman',
            'nohp' => '081229280741',
            'line' => 'naufalrayhan5703',
            'instagram' => 'ryyhnnnnn',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'RCL',
            'name' => 'Muhammad Ramadani Cikalananda',
            'nohp' => '085956296515',
            'line' => 'mr.cikal',
            'instagram' => 'cukil_ananda',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'REN',
            'name' => 'Muhammad Rafi Ediananta',
            'nohp' => '08114444020',
            'line' => 'mrafi.ediananta',
            'instagram' => 'mrafi.ed',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'REY',
            'name' => 'Reynaldhi Tryana Graha',
            'nohp' => '085156964564',
            'line' => 'reynaldhi21',
            'instagram' => 'reynaldhi.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'REZ',
            'name' => 'Muhammad Reza Aditria',
            'nohp' => '081394589119',
            'line' => 'rezaaditria',
            'instagram' => 'rezaaditriaa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'RHN',
            'name' => 'Raihan Radhitya Setiawan',
            'nohp' => '082127667491',
            'line' => 'raihanradhitya',
            'instagram' => 'raihan_radhitya',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'RIL',
            'name' => 'Mohamad Yusril',
            'nohp' => '085900450610',
            'line' => 'Yusrilmohamad',
            'instagram' => 'yusrilmohamad',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'RIS',
            'name' => 'Riska Nuraina Zalsabila',
            'nohp' => '085171161325',
            'line' => 'riskanurainaz',
            'instagram' => 'riskanurainaa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'RKH',
            'name' => 'Rahma Khairany',
            'nohp' => '081977722676',
            'line' => 'rahmakhairanyy',
            'instagram' => 'rahmakkhiunn',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'RUS',
            'name' => 'I Putu Gede Rusma Wirawan',
            'nohp' => '087831251565',
            'line' => 'rusmawirawan10',
            'instagram' => 'rusma.wirawan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'SAJ',
            'name' => 'Sabila Hayyinun Jannah',
            'nohp' => '085212249091',
            'line' => 'sabilahj27',
            'instagram' => 'sabila_hayyinun',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'SAT',
            'name' => 'Satria Winekas Herlambang',
            'nohp' => '081394492276',
            'line' => 'satria_w_h',
            'instagram' => 'satriawh_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'SKR',
            'name' => 'Sekar Sukma Nur Faridah',
            'nohp' => '081388831908',
            'line' => 'skrsukma',
            'instagram' => 'skrsukma',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'SYA',
            'name' => 'Muhammad Rizqi Syah Ramadhan',
            'nohp' => '081316336682',
            'line' => 'rizqisyah_',
            'instagram' => 'rizqisyh',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'TAL',
            'name' => 'Talita Sri Indrayuni',
            'nohp' => '085851219727',
            'line' => 'talitasindr',
            'instagram' => 'talitasindr',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'VAN',
            'name' => 'Evander Ricardo Manuel',
            'nohp' => '08112260388',
            'line' => 'evanderrichard',
            'instagram' => 'ricardoevander',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'VIN',
            'name' => 'Vincentius Jason Samhadi',
            'nohp' => '089654830223',
            'line' => 'vincjason',
            'instagram' => 'vinjason07',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'WAM',
            'name' => 'Muhammad Dawwam',
            'nohp' => '081211695199',
            'line' => 'wam3611',
            'instagram' => 'dawwamm_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'WIZ',
            'name' => 'Wizman Rofiansyah',
            'nohp' => '085892941420',
            'line' => 'rofiansyah15023',
            'instagram' => 'wizmanrofiansyah',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'WNA',
            'name' => 'Wina Nur Annisa',
            'nohp' => '085842186620',
            'line' => 'winanurannisa',
            'instagram' => 'winana23',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'WWW',
            'name' => 'William Wafi Wisnutama',
            'nohp' => '081802222747',
            'line' => 'williamwafi',
            'instagram' => 'wafiwisnutama',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'XCX',
            'name' => 'Muhammad Rafi Mahfuz Setyagraha',
            'nohp' => '087725006286',
            'line' => 'm.ra.m.s',
            'instagram' => 'rafimhafuz',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ZAQ',
            'name' => 'Zaidan Fitra Baihaqi',
            'nohp' => '081280041558',
            'line' => 'zaidanfit26',
            'instagram' => 'zaidanfitra26',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
            'photo' => Str::random(15),
            'ascod' => 'ZAR',
            'name' => 'Ilham Akbar Nursalam',
            'nohp' => '089669392211',
            'line' => 'leonarizard',
            'instagram' => 'ilhamakbrn_',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
