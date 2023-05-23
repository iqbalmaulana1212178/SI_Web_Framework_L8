<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '08xxxxxxxxx',
            'ttl' => '2008-12-26',
            'foto' => 'picture.png'
        ]);
    }
}
