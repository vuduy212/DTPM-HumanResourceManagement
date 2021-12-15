<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuanHeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quan_hes')->insert(
            ['ma_ns1' => '1'],
            ['ma_ns2' => '2'],
            ['kieu_quan_he' => 'Anh'],
            ['mo_ta' => '']
        );

        DB::table('quan_hes')->insert(
            ['ma_ns1' => '1'],
            ['ma_ns2' => '3'],
            ['kieu_quan_he' => 'Chi'],
            ['mo_ta' => '']
        );

        DB::table('quan_hes')->insert(
            ['ma_ns1' => '1'],
            ['ma_ns2' => '4'],
            ['kieu_quan_he' => 'Em'],
            ['mo_ta' => '']
        );

        DB::table('quan_hes')->insert(
            ['ma_ns1' => '1'],
            ['ma_ns2' => '5'],
            ['kieu_quan_he' => 'Anh'],
            ['mo_ta' => '']
        );

        DB::table('quan_hes')->insert(
            ['ma_ns1' => '2'],
            ['ma_ns2' => '3'],
            ['kieu_quan_he' => 'Anh'],
            ['mo_ta' => '']
        );

        DB::table('quan_hes')->insert(
            ['ma_ns1' => '2'],
            ['ma_ns2' => '4'],
            ['kieu_quan_he' => 'Chi'],
            ['mo_ta' => '']
        );

        DB::table('quan_hes')->insert(
            ['ma_ns1' => '2'],
            ['ma_ns2' => '5'],
            ['kieu_quan_he' => 'Em'],
            ['mo_ta' => '']
        );

        DB::table('quan_hes')->insert(
            ['ma_ns1' => '3'],
            ['ma_ns2' => '4'],
            ['kieu_quan_he' => 'Anh'],
            ['mo_ta' => '']
        );

        DB::table('quan_hes')->insert(
            ['ma_ns1' => '3'],
            ['ma_ns2' => '5'],
            ['kieu_quan_he' => 'Chi'],
            ['mo_ta' => '']
        );

        DB::table('quan_hes')->insert(
            ['ma_ns1' => '4'],
            ['ma_ns2' => '5'],
            ['kieu_quan_he' => 'Em'],
            ['mo_ta' => '']
        );
    }
}
