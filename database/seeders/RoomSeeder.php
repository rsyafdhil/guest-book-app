<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'nama' => 'Ruangan A',
                'deskripsi' => '-',
                'kuota' => 3,
                'available_start' => '08:00:00',
                'available_end' => '13:00:00',
            ],
            [
                'nama' => 'Ruangan B',
                'deskripsi' => '-',
                'kuota' => 3,
                'available_start' => '13:00:00',
                'available_end' => '18:00:00',
            ],
            [
                'nama' => 'Ruangan C',
                'deskripsi' => '-',
                'kuota' => 3,
                'available_start' => '18:00:00',
                'available_end' => '23:00:00',
            ]
        ]);
    }
}
