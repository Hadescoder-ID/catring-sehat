<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblLvl extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'             => [
				'type'                 => 'int',
				'constraint'         => 11,
				'unsigned'           => true,
				'auto_increment'     => true
			],
			'nama'             => [
				'type'                 => 'varchar',
				'constraint'         => 100,
			],
			'created_at'    => [
				'type'                => 'datetime',
			],
			'updated_at'    => [
				'type'                => 'datetime',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tbl_lvl');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_lvl');
	}
}
