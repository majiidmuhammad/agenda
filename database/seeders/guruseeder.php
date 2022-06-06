<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class guruseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('gurus')->insert([
            'username' => $faker->name,
            'password' => '1234567',
            'namaguru' => $faker->name,
            'nik' => '123456',
            'matapelajaran' => 'progdas'
        ]);
    }
}
