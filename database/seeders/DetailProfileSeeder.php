<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Fungsi ini akan di eksekusi dan di insert ke database
        menggunakan salah satu fitur laravel yaitu seeder
        namun ada cara lain yaitu menggunakan Laravel Tinker 
        untuk sekarang sebagai praktik saya menggunakan Seeder*/
        DB::table('detail_profile')->insert([
            'address'=>'Lumajang',
            'nomor_tlp' => '08xxxxxx',
            'ttl'=>'2003-05-29',
            'foto'=>'pic.png'

        ]);
    }
}
