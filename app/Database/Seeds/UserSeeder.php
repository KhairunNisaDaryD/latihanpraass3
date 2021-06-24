<?php
 
namespace App\Database\Seeds;
 
use CodeIgniter\Database\Seeder;
 
class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'username' 		   =>  'admin',
				'password'         =>  '12345',
			]
		];
		$this->db->table('User')->insertBatch($data);
	}
}