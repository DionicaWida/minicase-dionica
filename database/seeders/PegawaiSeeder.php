<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            'id_pegawai' => '1',
            'Nama' => 'Ciko',
            'Jenis_Kelamin' => 'Laki Laki',
            'Umur' => '20',
            'No_Telp'=> '081330881419',
            'Alamat'=> 'Ngawi',
            'Jabatan'=> 'OB',
        ]);
    }
}
