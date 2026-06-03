<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultas = [
            [
                'nama_fakultas' => 'Fakultas Ilmu Komputer',
                'nama_dekan' => 'henry 1'
            ],
            [
                'nama_fakultas' => 'Fakultas Ekonomi',
                'nama_dekan' => 'henry 2'
            ],
            [
                'nama_fakultas' => 'Fakultas Hukum',
                'nama_dekan' => 'henry 3'
            ],
            [
                'nama_fakultas' => 'Fakultas Teknik',
                'nama_dekan' => 'henry 4'
            ],
            [
                'nama_fakultas' => 'Fakultas Kedokteran',
                'nama_dekan' => 'henry 5'
            ],
        ];

        foreach ($fakultas as $data) {
            \App\Models\Fakultas::create($data);
        }
    }
}
