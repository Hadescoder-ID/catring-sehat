<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblDetailMenu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bahan'                 => [
                'type'               => 'int',
                'constraint'         => 11,
                'unsigned'           => TRUE
            ],
            'id_menu'        => [
                'type'               => 'int',
                'constraint'         => 11,
                'unsigned'           => TRUE
            ],
            'id_kategori'        => [
                'type'               => 'int',
                'constraint'         => 11,
                'unsigned'           => TRUE
            ],
            'created_at'    => [
                'type'                => 'datetime',
            ],
            'updated_at'    => [
                'type'                => 'datetime',
            ],
            'deleted_at' => [
                'type' => 'datetime',
            ]
        ]);
        $this->forge->addForeignKey('id_bahan', 'tbl_bahan', 'id');
        $this->forge->addForeignKey('id_menu', 'tbl_menu', 'id');
        $this->forge->addForeignKey('id_kategori', 'tbl_kategori', 'id');
        $this->forge->createTable('tbl_detail_menu');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_detail_menu');
    }
}
