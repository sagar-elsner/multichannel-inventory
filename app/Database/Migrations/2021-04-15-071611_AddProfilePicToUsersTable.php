<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProfilePicToUsersTable extends Migration
{
	public function up()
	{
		//
		$field=array(
			'profile_pic'=>array(
				'type'=>'VARCHAR',
				'constraint'=>'200'
			)
		);
		$this->forge->addColumn('users',$field);
	}

	public function down()
	{
		//
	}
}
