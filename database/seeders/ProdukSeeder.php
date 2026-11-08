<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $produks = [
            [
                'nama_produk' => 'Kopi Arabika Gayo 250gr',
                'kategori' => 'Makanan & Minuman',
                'harga' => 85000,
                'stok' => 50,
                'deskripsi' => 'Biji kopi arabika pilihan dari dataran tinggi Gayo, Aceh. Roasting medium, aroma khas.',
            ],
            [
                'nama_produk' => 'Madu Hutan Asli 500ml',
                'kategori' => 'Kesehatan',
                'harga' => 120000,
                'stok' => 30,
                'deskripsi' => 'Madu hutan murni tanpa campuran, dipanen langsung dari lebah liar.',
            ],
            [
                'nama_produk' => 'Teh Hijau Celup isi 25',
                'kategori' => 'Makanan & Minuman',
                'harga' => 32000,
                'stok' => 100,
                'deskripsi' => 'Teh hijau celup premium, kaya antioksidan, tanpa pengawet.',
            ],
            [
                'nama_produk' => 'Minyak Zaitun Extra Virgin 250ml',
                'kategori' => 'Kesehatan',
                'harga' => 95000,
                'stok' => 18,
                'deskripsi' => 'Extra virgin olive oil cold pressed, cocok untuk masakan dan perawatan kulit.',
            ],
            [
                'nama_produk' => 'Gula Aren Bubuk 200gr',
                'kategori' => 'Makanan & Minuman',
                'harga' => 28000,
                'stok' => 0,
                'deskripsi' => 'Gula aren bubuk asli untuk campuran kopi, teh, dan kue tradisional.',
            ],
        ];

        foreach ($produks as $produk) {
            Produk::create($produk);
        }
    }
}
