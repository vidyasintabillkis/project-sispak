<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GejalaModel;
use App\Models\UserModel;

class GejalaController extends BaseController
{
    public $userModel;
    public $gejalaModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->gejalaModel = new GejalaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Gejala',
            'gejala' => $this->gejalaModel->getGejala(),
        ];

        return view('admin/datagejala', $data);
    }

    public function tambah(){
        $this->gejalaModel = new GejalaModel();
        $gejala = $this->gejalaModel->getGejala();

        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $data = [
            'gejala' => $gejala,
            'validation' => $validation,
            'title' => 'Create Gejala',
        ];

        return view('admin/tambah_gejala', $data);
    }

    public function store(){
        if(!$this->validate([
            'kodeGejala' => 'required',
            'namaGejala' => 'required',
        ]

        )){  
            return redirect()->to('/gejala/tambah_gejala')->withInput()->with('validation', $this->validator);
        }

        $this->gejalaModel = new GejalaModel();
        $kodeGejala = $this->request->getPost('kodeGejala');
        $namaGejala = $this->request->getPost('namaGejala');

        $data=[
            'kodeGejala' => $kodeGejala,
            'namaGejala' => $namaGejala,
        ];
        
        $this->gejalaModel = new GejalaModel();
        $this->userModel = new UserModel();


        $this->gejalaModel->save($data);
        return redirect()->to('/gejala/datagejala');
    }

    public function edit($id){
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $gejala = $this->gejalaModel->getGejala($id);

        $data = [
            'validation' => $validation,
            'title' => 'Edit Gejala',
            'gejala' => $gejala
        ];

        return view('admin/edit_gejala', $data);
    }

    public function update($id){

        $data = [
            'kodeGejala' => $this->request->getVar('kodeGejala'),
            'namaGejala' => $this->request->getVar('namaGejala'),
            
        ];

        $result = $this->gejalaModel->updateGejala($data, $id);

        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/gejala/datagejala'));
    }

    public function destroy($id){
        $result = $this->gejalaModel->deleteGejala($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/gejala/datagejala'))->with('success', 'Berhasil menghapus data');
    }
}
