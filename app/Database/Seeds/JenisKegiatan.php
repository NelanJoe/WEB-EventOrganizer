<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisKegiatan extends Seeder
{
    public function run()
    {
        $this->call('Jenis');
    }
}
