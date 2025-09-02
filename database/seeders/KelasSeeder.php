<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Walas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $map = [
            'jojo@example.com' => 'XII RPL 1',
            'kila@example.com' => 'XII DKV 4',
            'satrio@example.com' => 'XII RPL 2',
        ];

        foreach ($map as $email => $namaKelas) {
            $walas = Walas::where('email', $email)->first();

            if ($walas) {
                Kelas::create([
                    'nama_kelas' => $namaKelas,
                    'walas_id' => $walas->id,
                ]);
            }
        }
    }
}
