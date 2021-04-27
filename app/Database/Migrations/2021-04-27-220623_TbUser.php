<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbUser extends Migration
{
	public function up()
	        {
	                $this->forge->addField([
	                        'id'          => [
	                                'type'           => 'INT',
	                                'constraint'     => 11,
	                                'unsigned'       => true,
	                                'auto_increment' => true,
	                        ],
	                        'nama_lengkap'       => [
	                                'type'       => 'VARCHAR',
	                                'constraint' => '100',
	                        ],
													'email'       => [
	                                'type'       => 'VARCHAR',
	                                'constraint' => '100',
	                        ],
													'username'       => [
	                                'type'       => 'VARCHAR',
	                                'constraint' => '100',
	                        ],
													'password'       => [
	                                'type'       => 'VARCHAR',
	                                'constraint' => '100',
	                        ],
	                        'alamat' => [
	                                'type' => 'TEXT',
	                                'null' => true,
	                        ],
													'nomor_telfon' => [
	                                'type' => 'VARCHAR',
	                                'constraint' => '100',
	                        ],
													'created_at'	=> [
														'type'				=>'DATETIME',
														'null'				=> TRUE,
													],
													'updated_at'	=> [
														'type'				=>'DATETIME',
														'null'				=> TRUE,
													],


	                ]);
	                $this->forge->addKey('id', true);
	                $this->forge->createTable('tbUser');
	        }

	        public function down()
	        {
	                $this->forge->dropTable('tbUser');
	        }
}
