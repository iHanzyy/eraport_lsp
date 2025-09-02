<?php

namespace Database\Seeders;

use App\Models\Walas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Mas Jojo', 'email' => 'jojo@example.com', 'password' => 'password123'],
            ['nama' => 'Ka Kila', 'email' => 'kila@example.com', 'password' => 'password123'],
            ['nama' => 'Bang Satrio', 'email' => 'satrio@example.com', 'password' => 'password123'],
        ];

        foreach ($data as $item) {
            Walas::create($item);
        }
    }
}
