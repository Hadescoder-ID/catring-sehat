<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblDetailMenu extends Migration
{
	public function up()
	{	
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([
            'id'             => [
                'type'               => 'int',
                'constraint'         => 11,
                'unsigned'           => true,
                'auto_increment'     => true
            ],
            'idBahan'            	 => [
                'type'               => 'int',
                'constraint'         => 11,
			],
			'idMenu'        => [
                'type'               => 'int',
                'constraint'         => 11,
			],
			'idKategori'        => [
                'type'               => 'int',
                'constraint'         => 11,
            ],
            'created_at'    => [
                'type'                => 'datetime',
            ],
            'updated_at'    => [
                'type'                => 'datetime',
            ],
        ]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('idBahan','tbl_bahan','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('idMenu','tbl_menu','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('idKategori','tbl_kategori','id','CASCADE','CASCADE');
        $this->forge->createTable('Tbl_detail_menu');
    }

    public function down()
    {
        $this->forge->dropTable('Tbl_detail_menu');
    }
}
