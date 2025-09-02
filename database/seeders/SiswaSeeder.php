<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $xii_rpl_1 = optional(Kelas::where('nama_kelas', 'XII RPL 1')->first())->id;
        $xii_dkv_4 = optional(Kelas::where('nama_kelas', 'XII DKV 4')->first())->id;
        $xii_rpl_2 = optional(Kelas::where('nama_kelas', 'XII RPL 2')->first())->id;

        $data = [
            [
                'nama' => 'Eduardo',
                'nisn' => '0073002101',
                'email' => 'eduardo@example.com',
                'password' => 'siswa123',
                'kelas_id' => $xii_rpl_1,
            ],
            [
                'nama' => 'Keya Wirane',
                'nisn' => '0073002102',
                'email' => 'keya@example.com',
                'password' => 'siswa123',
                'kelas_id' => $xii_dkv_4,
            ],
            [
                'nama' => 'Reihan Assalam',
                'nisn' => '0073002103',
                'email' => 'reihan@example.com',
                'password' => 'siswa123',
                'kelas_id' => $xii_rpl_2,
            ],
        ];

        $data = array_filter($data, fn($s) => !is_null($s['kelas_id']));
        foreach ($data as $item) {
            Siswa::create($item);
        }
    }
}
