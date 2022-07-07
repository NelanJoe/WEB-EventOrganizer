<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kegiatan extends Seeder
{
    public function run()
    {

        $data = [
            [
                'judul'       => "Kegiatan 1",
                'kapasitas'       => "100",
                'harga_tiket'       => "100000",
                'tanggal_mulai'       => "2020-06-25",
                'waktu_mulai' => "18:00",
                'waktu_selesai' => "19:00",
                'naramsumber'       => "Naramsumber 1",
                'tempat'       => "Tempat 1",
                'pic'       => "Pic 1",
                'foto_flyer'       => "Foto flyer 1",
                'jenis_id'       => 1,

            ],
            [
                'judul'       => "Kegiatan 2",
                'kapasitas'       => "100",
                'harga_tiket'       => "100000",
                'tanggal_mulai'       => "2020-06-25",
                'waktu_mulai' => "18:00",
                'waktu_selesai' => "19:00",
                'naramsumber'       => "Naramsumber 2",
                'tempat'       => "Tempat 2",
                'pic'       => "Pic 2",
                'foto_flyer'       => "Foto flyer 2",
                'jenis_id'       => 2,
            ],
            [
                'judul'       => "Kegiatan 3",
                'kapasitas'       => "100",
                'harga_tiket'       => "100000",
                'tanggal_mulai'       => "2020-06-25",
                'waktu_mulai' => "18:00",
                'waktu_selesai' => "19:00",
                'naramsumber'       => "Naramsumber 3",
                'tempat'       => "Tempat 3",
                'pic'       => "Pic 3",
                'foto_flyer'       => "Foto flyer 3",
                'jenis_id'       => 3,
            ],
            [
                'judul'       => "Kegiatan 4",
                'kapasitas'       => "100",
                'harga_tiket'       => "100000",
                'tanggal_mulai'       => "2020-06-25",
                'waktu_mulai' => "18:00",
                'waktu_selesai' => "19:00",
                'naramsumber'       => "Naramsumber 4",
                'tempat'       => "Tempat 4",
                'pic'       => "Pic 4",
                'foto_flyer'       => "Foto flyer 4",
                'jenis_id'       => 4,
            ]
        ];
        $this->db->table('kegiatan')->insertBatch($data);
    }
}
