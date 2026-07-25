<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $bukus = [
            ['kategori' => 'Fiksi', 'judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'stok' => 10],
            ['kategori' => 'Fiksi', 'judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'penerbit' => 'Hasta Mitra', 'stok' => 5],
            ['kategori' => 'Teknologi', 'judul' => 'Clean Code', 'penulis' => 'Robert C. Martin', 'penerbit' => 'Prentice Hall', 'stok' => 8],
            ['kategori' => 'Teknologi', 'judul' => 'The Pragmatic Programmer', 'penulis' => 'David Thomas', 'penerbit' => 'Addison-Wesley', 'stok' => 6],
            ['kategori' => 'Pendidikan', 'judul' => 'Matematika Dasar', 'penulis' => 'Tim Penulis', 'penerbit' => 'Erlangga', 'stok' => 15],
            ['kategori' => 'Sejarah', 'judul' => 'Sejarah Indonesia Modern', 'penulis' => 'M.C. Ricklefs', 'penerbit' => 'Gadjah Mada Press', 'stok' => 4],
            ['kategori' => 'Non-Fiksi', 'judul' => 'Atomic Habits', 'penulis' => 'James Clear', 'penerbit' => 'Avery', 'stok' => 12],
        ];

        foreach ($bukus as $data) {
            Buku::create([
                'kategori_id' => Kategori::where('nama_kategori', $data['kategori'])->first()->id,
                'judul' => $data['judul'],
                'penulis' => $data['penulis'],
                'penerbit' => $data['penerbit'],
                'stok' => $data['stok'],
            ]);
        }
    }
}
