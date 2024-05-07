<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'name' => 'STANDAR',
            'description' => 'Cocok untuk pelaku usaha yang baru menjalankan bisnis skala UMKM.',
            'price' => 350,
            'image' => 'img/package/network.png',
            'profit_id' => 1
        ]);
        Package::create([
            'name' => 'BISNIS',
            'description' => 'Cocok untuk company profile bangun brand awareness.',
            'price' => 980,
            'image' => 'img/package/gol.png',
            'profit_id' => 2
        ]);
        Package::create([
            'name' => 'BRANDING',
            'description' => 'Layanan lengkap dari website, hingga materi promosi.',
            'price' => 1650,
            'image' => 'img/package/thing.png',
            'profit_id' => 3
        ]);
    }
}
