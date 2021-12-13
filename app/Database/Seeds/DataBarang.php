<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataBarang extends Seeder
{
    public function run()
    {
        $data = [
            'barang_title'          => 'Kahf Skin Energizing and Brightening Face Wash 100 ml',
            'barang_description'    => 'Sabun pembersih wajah dengan kombinasi HydroBalanceTM dan Pure Cleanse yang dapat menjadikan kulit wajah bersih dan lembap secara menyeluruh hingga ke pori-pori.',
            'barang_harga'          => '36900',
            'barang_stok'           => '58',
            'barang_img'            => 'produk1.png'
        ];

        $data = [
            'barang_title'          => 'Kahf Oil & Acne Care Face Wash 100 ml',
            'barang_description'    => 'Kahf Oil and Acne Care Face Wash merupakan sabun pembersih wajah dengan kandungan HydroBalance dan Pure Cleanse menjadikan wajah bersih dan lembap secara menyeluruh',
            'barang_harga'          => '36900',
            'barang_stok'           => '79',
            'barang_img'            => 'produk2.png'
        ];

        $data = [
            'barang_title'          => 'Kahf Gentle Exfoliating Face Scrub 100 ml',
            'barang_description'    => 'Kahf Gentle Exfoliating Face Scrub dengan buliran scrub HydraSilica yang halus mampu mengangkat sel kulit mati tanpa membuat kulit kehilangan kelembapan alaminya serta aman untuk digunakan setiap hari.',
            'barang_harga'          => '36900',
            'barang_stok'           => '98',
            'barang_img'            => 'produk3.png'
        ];

        $data = [
            'barang_title'          => 'Kahf Energizing Hair and Body Wash 200 ml',
            'barang_description'    => 'Kahf Energizing Hair and Body Wash merupakan 2 in 1 sabun & shampoo yang mengandung HydroBalance dan Pure Cleanse sehingga dapat membersihkan kulit dan rambut secara menyeluruh hingga ke pori-pori tanpa membuatnya terasa kering.',
            'barang_harga'          => '36900',
            'barang_stok'           => '105',
            'barang_img'            => 'produk4.png'
        ];

        // Simple Queries
    //     $this->db->query("INSERT INTO barang (barang_title, barang_description, barang_harga, barang_stok, barang_img) 
    //     VALUES(:barang_title:, :barang_description:, :barang_harga:, :barang_stok: ,:barang_img:)", $data);

        // Using Query Builder
        $this->db->table('barang')->insert($data);
    
    }
}
