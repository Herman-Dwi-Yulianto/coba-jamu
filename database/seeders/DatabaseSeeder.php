<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jamu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Mengisi tabel jamu
$jamus = [
    ['nama' => 'Jamu Kunyit Asam', 'bahan' => ['kunyit', 'asam jawa', 'gula merah'], 'manfaat' => 'Menyembuhkan masuk angin'],
    ['nama' => 'Jamu Beras Kencur', 'bahan' => ['beras', 'kencur', 'jahe', 'gula merah'], 'manfaat' => 'Meningkatkan daya tahan tubuh'],
    ['nama' => 'Jamu Temulawak', 'bahan' => ['temulawak', 'jahe', 'gula merah'], 'manfaat' => 'Melancarkan pencernaan'],
];

// Menyimpan data jamu ke database
foreach ($jamus as $jamu) {
    Jamu::create([
        'nama' => $jamu['nama'],
        'bahan' => $jamu['bahan'],
        'manfaat' => $jamu['manfaat'],
    ]);
}
    }
}