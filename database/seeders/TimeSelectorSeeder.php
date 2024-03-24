<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSelectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('time_selectors')->insert([
            [
                'room_id' => 1,
                'waktu_tersedia' => '08.00 - 09.00 WIB',
            ],
            [
                'room_id' => 1,
                'waktu_tersedia' => '10.00 - 11.00 WIB',
            ],
            [
                'room_id' => 1,
                'waktu_tersedia' => '12.00 - 13.00 WIB',
            ],
            [
                'room_id' => 2,
                'waktu_tersedia' => '13.00 - 15.00 WIB',
            ],
            [
                'room_id' => 2,
                'waktu_tersedia' => '16.00 - 18.00 WIB',
            ],
            [
                'room_id' => 3,
                'waktu_tersedia' => '18.00 - 20.00 WIB',
            ],
            [
                'room_id' => 3,
                'waktu_tersedia' => '21.00 - 23.00 WIB',
            ]
        ]);
    }
}
