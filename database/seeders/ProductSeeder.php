<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            ['nama' => 'Monitor LED 24', 'spesifikasi' => 'Resolusi Full HD 1920x1080', 'jumlah' => 30],
            ['nama' => 'Keyboard USB', 'spesifikasi' => 'Keyboard Standar Hitam', 'jumlah' => 35],
            ['nama' => 'Mouse Optik', 'spesifikasi' => 'Mouse USB 3 Tombol', 'jumlah' => 35],
            ['nama' => 'Router Wifi', 'spesifikasi' => 'Dual Band 2.4/5 GHz', 'jumlah' => 2],
            ['nama' => 'Kabel LAN UTP', 'spesifikasi' => 'Panjang 3 meter Cat6', 'jumlah' => 50]
        ];
    }
}
