<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftar extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel daftar
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'tanggal_daftar'       => [
                'type'           => 'DATE'
            ],
            'alasan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '200'
            ],
            'users_id'       => [
                'type'           => 'INT'
            ],
            'kegiatan_id'       => [
                'type'           => 'INT'
            ],
            'kategori_peserta_id'       => [
                'type'           => 'INT'
            ],
            'nosertifikat'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
            'status'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel daftar
        $this->forge->createTable('daftar', TRUE);
    }

    public function down()
    {
        /// menghapus tabel daftar
        $this->forge->dropTable('daftar');
    }
}
