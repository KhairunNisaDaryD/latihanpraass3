<?php
 
namespace App\Database\Seeds;
 
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
 
class PaketSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'tanggal_datang'   => Time::now(),
				'sasaran' 		   =>  'Kiki',
				'penerima'         =>  'Kiko',
				'isi_paket'        =>  'Baju',
				'tanggal_ambil'    => Time::now()
			]
		];
		$this->db->table('Paket')->insertBatch($data);
	}
}