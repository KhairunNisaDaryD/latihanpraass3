<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class PaketModel extends Model
{
    protected $table = "paket";
    protected $primaryKey = "id_paket";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_paket', 'tanggal_datang', 'sasaran', 'penerima', 'isi_paket', 'tanggal_ambil'];
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}