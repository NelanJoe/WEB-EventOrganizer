<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisKegiatan extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel jenis kegiatan
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel daftar
        $this->forge->createTable('jenis_kegiatan', TRUE);
    }

    public function down()
    {
        /// menghapus tabel jenis kegiatan
        $this->forge->dropTable('jenis_kegiatan');
    }
}
