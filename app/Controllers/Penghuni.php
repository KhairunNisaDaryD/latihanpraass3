<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PenghuniModel;
 
class Penghuni extends BaseController
{
    public function index()
    {
        $penghuni = new PenghuniModel();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['penghuni'] = $penghuni->getPenghuni();
            return view('penghuni/penghuni',$data);
        }
    }

    public function form(){
        helper('form');
        return view('penguni/penghuni');
    }

    public function view($id_penghuni){
        $penghuni = new PenghuniModel();
        $data['penghuni'] = $penghuni->PilihPenghuni($id_penghuni)->getRow();
        return view('penghuni/penghuni',$data);
    }

    public function simpan(){
        $penghuni= new PenghuniModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('blog');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'unit' => $this->request->getPost('unit'),
			'no_ktp' => $this->request->getPost('no_ktp')
        );
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/images/');
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'unit' => $this->request->getPost('unit'),
			'no_ktp' => $this->request->getPost('no_ktp'),
            'foto' => $upload->getName()
        );
        }
        $model->SimpanBlog($data);
        return redirect()->to('./penghuni')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function form_edit($id_penghuni){
        $penghuni = new PenghuniModel();
        helper('form');
        $data['penghuni'] = $penghuni->PilihBlog($id_penghuni)->getRow();
        return view('/penghuni/form_edit',$data);
    }

    public function edit(){
        $penghuni= new PenghuniModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('blog');
        }
        $id_penghuni = $this->request->getPost('id_penghuni');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'unit' => $this->request->getPost('unit'),
			'no_ktp' => $this->request->getPost('no_ktp')
        );
        } else {
        $dt = $penghuni->PilihPenghuni($id_penghuni)->getRow();
        $foto = $dt->foto;
        $path = '../public/assets/images/';
        @unlink($path.$foto);
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/images/');
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'unit' => $this->request->getPost('unit'),
			'no_ktp' => $this->request->getPost('no_ktp'),
            'foto' => $upload->getName()
        );
        }
        $model->edit_data($id_penghuni,$data);
        return redirect()->to('./penghuni')->with('berhasil', 'Data Berhasil di Ubah');
        
    }

    public function hapus($id_penghuni){
        $penghuni = new PenghuniModel();
        $dt = $penghuni->PilihPenghuni($id_penghuni)->getRow();
        $penghuni->HapusPenghuni($id_penghuni);
        $foto = $dt->foto;
        $path = '../public/assets/images/';
        @unlink($path.$gambar);
        return redirect()->to('./penghuni')->with('berhasil', 'Data Berhasil di Hapus');
    }

}