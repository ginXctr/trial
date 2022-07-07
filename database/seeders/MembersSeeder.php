<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Membersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'code' => '9999',
            'nama' => 'ginanjar',
            'phone' => '0813319128776',
            'alamat' => 'wonokromo pleret bantul yogyakarta',
            'team' => 'Gen-Xctr',
            'jersey' => 'XL',
            'kategori' => 'Regular',
            'paket' => '9',
            'status' => 'belum registrasi'
        ]);
    }
}
