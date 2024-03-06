<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'Br1',
                'barang_nama' => 'Baju',
                'harga_beli' => '200000',
                'harga_jual' => '250000',
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'Br2',
                'barang_nama' => 'Celana',
                'harga_beli' => '150000',
                'harga_jual' => '200000',
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'Br3',
                'barang_nama' => 'Pashmina',
                'harga_beli' => '50000',
                'harga_jual' => '70000',
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'Br4',
                'barang_nama' => 'Sepatu',
                'harga_beli' => '500000',
                'harga_jual' => '550000',
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'Br5',
                'barang_nama' => 'Kaos Kaki',
                'harga_beli' => '40000',
                'harga_jual' => '50000',
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'Br6',
                'barang_nama' => 'Sandal',
                'harga_beli' => '200000',
                'harga_jual' => '220000',
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'Br7',
                'barang_nama' => 'Raket',
                'harga_beli' => '900000',
                'harga_jual' => '1000000',
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'Br8',
                'barang_nama' => 'HP',
                'harga_beli' => '5000000',
                'harga_jual' => '6000000',
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'Br9',
                'barang_nama' => 'Buku',
                'harga_beli' => '30000',
                'harga_jual' => '40000',
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'Br10',
                'barang_nama' => 'Pensil',
                'harga_beli' => '5000',
                'harga_jual' => '10000',
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}