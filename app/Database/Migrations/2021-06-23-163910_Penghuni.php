<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penghuni extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_penghuni'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'unit'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'no_ktp' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'f0to' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			]
		]);
		$this->forge->addPrimaryKey('id_penghuni');
		$this->forge->createTable('penghuni');
	}

	public function down()
	{
		$this->forge->dropTable('penghuni');
	}
}
