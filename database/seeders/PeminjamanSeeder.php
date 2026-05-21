<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('peminjamans')->insert([
            ['buku_id' => 1, 'nama_peminjam' => 'Budi Santoso', 'tanggal_pinjam' => '2026-05-01', 'tanggal_kembali' => '2026-05-15', 'created_at' => now(), 'updated_at' => now()],
            ['buku_id' => 2, 'nama_peminjam' => 'Siti Rahayu', 'tanggal_pinjam' => '2026-05-03', 'tanggal_kembali' => '2026-05-17', 'created_at' => now(), 'updated_at' => now()],
            ['buku_id' => 3, 'nama_peminjam' => 'Andi Wijaya', 'tanggal_pinjam' => '2026-05-05', 'tanggal_kembali' => '2026-05-19', 'created_at' => now(), 'updated_at' => now()],
            ['buku_id' => 5, 'nama_peminjam' => 'Dewi Lestari', 'tanggal_pinjam' => '2026-05-07', 'tanggal_kembali' => '2026-05-21', 'created_at' => now(), 'updated_at' => now()],
            ['buku_id' => 7, 'nama_peminjam' => 'Rafi Fathan', 'tanggal_pinjam' => '2026-05-10', 'tanggal_kembali' => '2026-05-24', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
