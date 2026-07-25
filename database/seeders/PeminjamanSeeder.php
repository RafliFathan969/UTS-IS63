<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        $laskarPelangi = Buku::where('judul', 'Laskar Pelangi')->first();
        $cleanCode = Buku::where('judul', 'Clean Code')->first();

        Peminjaman::create([
            'buku_id' => $laskarPelangi->id,
            'nama_peminjam' => 'Budi Santoso',
            'jumlah' => 2,
            'tanggal_pinjam' => now()->subDays(5),
            'tanggal_kembali' => now()->addDays(2),
            'status' => 'dipinjam',
        ]);
        $laskarPelangi->decrement('stok', 2);

        Peminjaman::create([
            'buku_id' => $cleanCode->id,
            'nama_peminjam' => 'Siti Rahayu',
            'jumlah' => 1,
            'tanggal_pinjam' => now()->subDays(14),
            'tanggal_kembali' => now()->subDays(7),
            'status' => 'terlambat',
        ]);
        $cleanCode->decrement('stok', 1);
    }
}
