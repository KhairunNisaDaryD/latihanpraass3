<?php namespace App\Controllers;

use App\Models\PaketModel;

class Paket extends BaseController
{

   public function index(){
      $paket = new PaketModel();

      $data['paket'] = $paket->findAll();
      return view('paket/paket',$data);
   }

   public function create(){
      return view('paket/create');
   }

   public function store(){
      $request = service('request');
      $postData = $request->getPost();

      if(isset($postData['simpan'])){

         $input = $this->validate([
            'tanggal_datang' => 'required',
            'sasaran' => 'required',
            'penerima' => 'required',
            'isi_paket' => 'required',
            'tanggal_ambil' => 'required'
         ]);

         if (!$input) {
            return redirect()->route('paket/create')->withInput()->with('validation',$this->validator); 
         } else {

            $paket = new PaketModel();

            $data = [
               'tanggal_datang' => $postData['tanggal_datang'],
               'sasaran' => $postData['sasaran'],
               'penerima' => $postData['penerima'],
               'isi_paket' => $postData['isi_paket'],
               'tanggal_ambil' => $postData['tanggal_ambil']
            ];

            if($paket->insert($data)){
               session()->setFlashdata('message', 'Added Successfully!');
               session()->setFlashdata('alert-class', 'alert-success');

               return redirect()->route('paket/create'); 
            }else{
               session()->setFlashdata('message', 'Data not saved!');
               session()->setFlashdata('alert-class', 'alert-danger');

               return redirect()->route('paket/create')->withInput(); 
            }

         }
      }

   }

   public function edit($id_paket = 0){

      $paket = new PaketModel();
      $paket = $paket->find($id_paket);

      $data['paket'] = $paket;
      return view('paket/edit',$data);

   }

   public function update($id_paket = 0){
      $request = service('request');
      $postData = $request->getPost();

      if(isset($postData['simpan'])){

        $input = $this->validate([
            'tanggal_datang' => 'required',
            'sasaran' => 'required',
            'penerima' => 'required',
            'isi_paket' => 'required',
            'tanggal_ambil' => 'required'
        ]);

        if (!$input) {
           return redirect()->route('paket/edit/'.$id_paket)->withInput()->with('validation',$this->validator); 
        } else {

           $paket = new PaketModel();

           $data = [
            'tanggal_datang' => $postData['tanggal_datang'],
            'sasaran' => $postData['sasaran'],
            'penerima' => $postData['penerima'],
            'isi_paket' => $postData['isi_paket'],
            'tanggal_ambil' => $postData['tanggal_ambil']
           ];

           if($paket->update($id_paket,$data)){
              session()->setFlashdata('message', 'Updated Successfully!');
              session()->setFlashdata('alert-class', 'alert-success');

              return redirect()->route('paket/paket'); 
           }else{
              session()->setFlashdata('message', 'Data not saved!');
              session()->setFlashdata('alert-class', 'alert-danger');

              return redirect()->route('paket/edit/'.$id_paket)->withInput(); 
           }

        }
      }

   }

   public function delete($id=0){

      $paket = new PaketModel();

      if($paket->find($id)){

         $paket->delete($id);

         session()->setFlashdata('message', 'Deleted Successfully!');
         session()->setFlashdata('alert-class', 'alert-success');
      }else{
         session()->setFlashdata('message', 'Record not found!');
         session()->setFlashdata('alert-class', 'alert-danger');
      }

      return redirect()->route('paket/paket');

   }
}