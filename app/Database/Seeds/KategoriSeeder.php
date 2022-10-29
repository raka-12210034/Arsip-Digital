<?php

namespace App\Database\Seeds;

use App\Models\KategoriModel;
use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        (new KategoriModel())->insertBatch([
            ['kategori'=>'surat Masuk'],
            ['kategori'=>'surat Keluar'],
            ['kategori'=>'Dokumen Rahasia'],

        ]);
    }
}
