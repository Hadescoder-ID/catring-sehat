<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblUser extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' 				=> 'int',
				'constraint' 		=> 11,
				'unsigned'       	=> true,
				'auto_increment' 	=> true
			],
			'nama_lengkap' => [
				'type' 				=> 'varchar',
				'constraint' 		=> 150
			],
			'email' 		=> [
				'type' 				=> 'varchar',
				'constraint' 		=> 100
			],
			'password' 		=> [
				'type' 				=> 'varchar',
				'constraint' 		=> 150,
			],
			'alamat' 		=> [
				'type' 				=> 'text',
				'null' 				=> true,
			],
			'nomor_telephone' => [
				'type' 				=> 'varchar',
				'constraint' 		=> 25,
			],
			'created_at'	=> [
				'type'				=> 'datetime',
			],
			'updated_at'	=> [
				'type'				=> 'datetime',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tbl_user');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_user');
	}
}
