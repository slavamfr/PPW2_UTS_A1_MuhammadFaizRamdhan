<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Pemain::create([
                'nama_pemain' => fake()->name(3),
                'no_punggung' => fake()->numberBetween(1,99),
                'posisi' => fake()->sentence(1),
            ]);
        }
    }
}
