<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bukus')->insert([
            // Novel (kategori_id: 1)
            ['kategori_id' => 1, 'judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 1, 'judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'stok' => 3, 'created_at' => now(), 'updated_at' => now()],
            // Komik (kategori_id: 2)
            ['kategori_id' => 2, 'judul' => 'Doraemon Vol.1', 'penulis' => 'Fujiko F. Fujio', 'penerbit' => 'Elex Media', 'stok' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 2, 'judul' => 'One Piece Vol.1', 'penulis' => 'Eiichiro Oda', 'penerbit' => 'Elex Media', 'stok' => 4, 'created_at' => now(), 'updated_at' => now()],
            // Pendidikan (kategori_id: 3)
            ['kategori_id' => 3, 'judul' => 'Matematika Dasar', 'penulis' => 'Soedjadi', 'penerbit' => 'Erlangga', 'stok' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 3, 'judul' => 'Fisika Terapan', 'penulis' => 'Marthen Kanginan', 'penerbit' => 'Erlangga', 'stok' => 6, 'created_at' => now(), 'updated_at' => now()],
            // Teknologi (kategori_id: 4)
            ['kategori_id' => 4, 'judul' => 'Belajar Laravel', 'penulis' => 'Andi Sulistyo', 'penerbit' => 'Informatika', 'stok' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['kategori_id' => 4, 'judul' => 'Python untuk Pemula', 'penulis' => 'Ridwan Sanjaya', 'penerbit' => 'Elex Media', 'stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
