<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriPeserta extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'  => 'Peserta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama'  => 'Pelajar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama'  => 'Karyawan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('kategori_peserta')->insertBatch($data);
    }
}
