<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jenis extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Seminar',
            ],
            [
                'nama' => 'Workshop',
            ],
            [
                'nama' => 'Event Olahraga',
            ],
            [
                'nama' => 'Bazaar',
            ],
            [
                'nama' => 'Pelatihan',
            ],
        ];
        $this->db->table('jenis_kegiatan')->insertBatch($data);
    }
}
