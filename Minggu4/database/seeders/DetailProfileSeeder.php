<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_hp' => '08321132145',
            'ttl' => '2000-11-02',
            'foto' => 'picture.png'
        ]);
    }
}
