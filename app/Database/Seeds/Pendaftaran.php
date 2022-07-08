<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pendaftaran extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tanggal_daftar'       => "2020-06-25",
                'alasan' => "Senang Mengikuti",
                'users_id' => 1,
                'kegiatan_id'       => 1,
                'kategori_peserta_id'       => 1,
                'nosertifikat'       => 19812639,
                'status'       => "active",
            ],
            [
                'tanggal_daftar'       => "2020-06-25",
                'alasan' => "Senang Mengikuti",
                'users_id' => 2,
                'kegiatan_id'       => 2,
                'kategori_peserta_id'       => 2,
                'nosertifikat'       => 19812639,
                'status'       => "active",
            ],
            [
                'tanggal_daftar'       => "2020-06-25",
                'alasan' => "Senang Mengikuti",
                'users_id' => 3,
                'kegiatan_id'       => 3,
                'kategori_peserta_id'       => 3,
                'nosertifikat'       => 19812639,
                'status'       => "active",
            ],

        ];
        $this->db->table('daftar')->insertBatch($data);
    }
}
