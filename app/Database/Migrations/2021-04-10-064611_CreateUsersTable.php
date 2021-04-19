<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'=>[
				'type'=>'INT',
			    'auto_increment' => true,
			],
			'full_name'=>[
				'type'=>'VARCHAR',
				'constraint'=>'255',
			],
			'email_address'=>[
				'type'=>'VARCHAR',
				'constraint'=>'255',
			],
			'password'=>[
				'type'=>'VARCHAR',
				'constraint'=>'255'
			],
			'is_admin'=>[
				'type'=>'INT',
				'constraint'=>'2'
			],

		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		//
	}
}
