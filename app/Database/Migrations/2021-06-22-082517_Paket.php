<?php
 
namespace App\Database\Migrations;
 
use CodeIgniter\Database\Migration;
 
class Paket extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_paket'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'tanggal_datang' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'sasaran' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'penerima' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'isi_paket' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'tanggal_ambil' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_paket');
		$this->forge->createTable('Paket');
	}
 
	//--------------------------------------------------------------------
 
	public function down()
	{
		$this->forge->dropTable('Paket');
	}
}