<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KerusakanModel;
use App\Models\UserModel;

class KerusakanController extends BaseController
{
    public $userModel;
    public $kerusakanModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kerusakanModel = new KerusakanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Kerusakan',
            'kerusakan' => $this->kerusakanModel->getKerusakan(),
        ];

        return view('admin/datakerusakan', $data);
    }

    public function tambah(){
        $this->kerusakanModel = new KerusakanModel();
        $kerusakan = $this->kerusakanModel->getKerusakan();

        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $data = [
            'kerusakan' => $kerusakan,
            'validation' => $validation,
            'title' => 'Create Kerusakan',
        ];

        return view('admin/tambah_kerusakan', $data);
    }

    public function store(){
        if(!$this->validate([
            'kodeKerusakan' => 'required',
            'namaKerusakan' => 'required',
        ]

        )){  
            return redirect()->to('/kerusakan/tambah_kerusakan')->withInput()->with('validation', $this->validator);
        }

        $this->kerusakanModel = new KerusakanModel();
        $kodeKerusakan = $this->request->getPost('kodeKerusakan');
        $namaKerusakan = $this->request->getPost('namaKerusakan');

        $data=[
            'kodeKerusakan' => $kodeKerusakan,
            'namaKerusakan' => $namaKerusakan,
        ];
        
        $this->kerusakanModel = new KerusakanModel();
        $this->userModel = new UserModel();


        $this->kerusakanModel->save($data);
        return redirect()->to('/kerusakan/datakerusakan');
    }

    public function edit($id){
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $kerusakan = $this->kerusakanModel->getKerusakan($id);

        $data = [
            'validation' => $validation,
            'title' => 'Edit Kerusakan',
            'kerusakan' => $kerusakan
        ];

        return view('admin/edit_kerusakan', $data);
    }

    public function update($id){

        $data = [
            'kodeKerusakan' => $this->request->getVar('kodeKerusakan'),
            'namaKerusakan' => $this->request->getVar('namaKerusakan'),
            
        ];

        $result = $this->kerusakanModel->updateKerusakan($data, $id);

        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/kerusakan/datakerusakan'));
    }

    public function destroy($id){
        $result = $this->kerusakanModel->deleteKerusakan($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/kerusakan/datakerusakan'))->with('success', 'Berhasil menghapus data');
    }
}
