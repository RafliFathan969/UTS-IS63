<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kategori;

class BukuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kategori_id' => Kategori::inRandomOrder()->first()->id ?? 1,
            'judul' => $this->faker->sentence(3),
            'penulis' => $this->faker->name(),
            'stok' => $this->faker->numberBetween(1, 20),
        ];
    }
}
