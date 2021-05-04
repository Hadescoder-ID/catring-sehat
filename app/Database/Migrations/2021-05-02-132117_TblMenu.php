<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblMenu extends Migration
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
            'nama_menu'            	 => [
                'type'               => 'varchar',
                'constraint'         => 100,
			],
			'harga'            		=> [
                'type'             	=> 'int',
                'constraint'        => 11,
            ],
            'created_at'    => [
                'type'                => 'datetime',
            ],
            'updated_at'    => [
                'type'                => 'datetime',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_menu');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_menu');
    }
}
