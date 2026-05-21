<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Buku;

class PeminjamanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'buku_id' => Buku::inRandomOrder()->first()->id ?? 1,
            'nama_peminjam' => $this->faker->name(),
            'tanggal_pinjam' => now(),
            'tanggal_kembali' => now()->addDays(7),
        ];
    }
}
