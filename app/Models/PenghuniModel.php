<?php namespace App\Models;
use CodeIgniter\Model;
 
class PenghuniModel extends Model
{
    protected $table = 'penghuni';
     
    public function getPenghuni()
    {
        return $this->findAll();  
    }
    public function SimpanPenghuni($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function PilihPenghuni($id_Penghuni)
    {
         $query = $this->getWhere(['id_penghuni' => $id_penghuni]);
         return $query;
    }
    public function edit_data($id_penghuni,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_penghuni' => $id_penghuni));
        return $query;
    }
    public function HapusBlog($id_penghuni)
    {
        $query = $this->db->table($this->table)->delete(array('id_penghuni' => $id_penghuni));
        return $query;
    }
 }
