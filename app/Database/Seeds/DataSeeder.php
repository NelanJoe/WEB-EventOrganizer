<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        $this->call('Users');
        $this->call('Jenis');
        $this->call('KategoriPeserta');
        $this->call('kegiatan');
    }
}
