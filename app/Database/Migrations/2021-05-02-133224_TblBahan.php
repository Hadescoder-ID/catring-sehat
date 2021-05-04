<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblBahan extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'             => [
                'type'               => 'int',
                'constraint'         => 11,
                'unsigned'           => true,
                'auto_increment'     => true
            ],
            'nama_bahan'            	 => [
                'type'               => 'varchar',
                'constraint'         => 100,
			],
			'desc_kandungan'        => [
                'type'             	=> 'text',
            ],
            'created_at'    => [
                'type'                => 'datetime',
            ],
            'updated_at'    => [
                'type'                => 'datetime',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_bahan');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_bahan');
    }
}
