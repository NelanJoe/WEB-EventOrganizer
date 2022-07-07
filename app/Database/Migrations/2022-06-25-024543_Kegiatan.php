<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kegiatan extends Migration
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
            'judul'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '200'
            ],
            'tanggal_mulai'       => [
                'type'           => 'DATE',
                'null'           => true
            ],
            'waktu_mulai' => [
                'type'           => 'TIME',
                'null'           => true
            ],
            'waktu_selesai' => [
                'type'           => 'TIME',
                'null'           => true
            ],
            'kapasitas'       => [
                'type'           => 'INT',
            ],
            'harga_tiket'       => [
                'type'           => 'DOUBLE',
            ],
            'naramsumber'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '200'
            ],
            'tempat'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'pic'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '45'
            ],
            'foto_flyer'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '30'
            ],
            'jenis_id'       => [
                'type'           => 'INT',
                'constraint'     => ''
            ],

            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel daftar
        $this->forge->createTable('kegiatan', TRUE);
    }

    public function down()
    {
        /// menghapus tabel daftar
        $this->forge->dropTable('kegiatan');
    }
}
