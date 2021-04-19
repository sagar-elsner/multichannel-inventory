<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasswordsResetTable extends Migration
{
	public function up()
	{
		////
		$this->forge->addField([
			'id'=>[
					'type'=>'INT',
					
			],
			'email_address'=>[
				'type'=>'VARCHAR',
				'constraint'=>'255',
			],
			'token'=>[
				'type'=>'VARCHAR',
				'constraint'=>'255',
			],
			'created_at'=>[
				'type'=>'DATETIME'
			],
		]);
		$this->forge->createTable('password_reset');
	}

	public function down()
	{
		//
	}
}
