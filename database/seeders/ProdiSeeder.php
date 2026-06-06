<?php

namespace Database\Seeders;

use App\Models\Fakultas; 
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodi = [
            [
                'nama_prodi' => 'Teknik Informatika',
                'alias_prodi' => 'TI',
                'nama_kaprodi' => 'henry 1',
            ],
            [
                'nama_prodi' => 'Sistem Informasi',
                'alias_prodi' => 'SI',
                'nama_kaprodi' => 'henry 2',
            ],
            [
                'nama_prodi' => 'Manajemen',
                'alias_prodi' => 'MJ',
                'nama_kaprodi' => 'henry 3',
            ],
            [
                'nama_prodi' => 'Akuntansi',
                'alias_prodi' => 'AK',
                'nama_kaprodi' => 'henry 4',
            ],
            [
                'nama_prodi' => 'Ilmu Hukum',
                'alias_prodi' => 'IH',
                'nama_kaprodi' => 'henry 5',
            ],
        ];

        foreach ($prodi as $data) {
            $data['fakultas_id'] = Fakultas::inRandomOrder()->first()->id;
            \App\Models\Prodi::create($data);
        }
    }
}
