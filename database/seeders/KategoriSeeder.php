<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::insert([
            ['nama_kategori' => 'Novel'],
            ['nama_kategori' => 'Komik'],
            ['nama_kategori' => 'Pendidikan'],
            ['nama_kategori' => 'Teknologi'],
        ]);
    }
}
