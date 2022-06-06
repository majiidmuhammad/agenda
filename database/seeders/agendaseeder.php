<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class agendaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            'namaguru' => 'Agus Diana',
            'matapelajaran' => 'Progdas',
            'materipelajaran' => 'HTML',
            'mulai' => '07.00',
            'selesai' => '09.00',
            'ketsiswa' => '10',
            'kelas' => 'XI RPL 2',
            'jenispembelajaran' => 'PTM',
            'linkpembelajaran' => '',
            'dokumentasi' => '',
            'keterangan' => '',
        ]);
    }
}
