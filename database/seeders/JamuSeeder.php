<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jamu;

class JamuSeeder extends Seeder
{
    public function run()
    {
        Jamu::create([
            'nama' => 'Jamu Kunyit Asam',
            'bahan' => json_encode(['kunyit', 'asam jawa', 'gula merah']),
            'manfaat' => 'Menyembuhkan masuk angin',
            'harga' => 15.99,
            'gambar' => 'gambar1.jpg',
        ]);
        
        // Membuat entri data kedua
        Jamu::create([
            'nama' => 'Jamu Beras Kencur',
            'bahan' => json_encode(['beras', 'kencur', 'jahe', 'gula merah']),
            'manfaat' => 'Meningkatkan daya tahan tubuh',
            'harga' => 19.99,
            'gambar' => 'gambar2.jpg',
        ]);
        
        // Membuat entri data ketiga
        Jamu::create([
            'nama' => 'Jamu Temulawak',
            'bahan' => json_encode(['temulawak', 'jahe', 'gula merah']),
            'manfaat' => 'Melancarkan pencernaan',
            'harga' => 12.99,
            'gambar' => 'gambar3.jpg',
        ]);
    }
}
