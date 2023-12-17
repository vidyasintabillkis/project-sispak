<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SolusiModel;
use App\Models\UserModel;

class SolusiController extends BaseController
{
    public $userModel;
    public $solusiModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->solusiModel = new SolusiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Solusi',
            'solusi' => $this->solusiModel->getSolusi(),
        ];

        return view('admin/datasolusi', $data);
    }

    public function tambah(){
        $this->solusiModel = new SolusiModel();
        $solusi = $this->solusiModel->getSolusi();

        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $data = [
            'solusi' => $solusi,
            'validation' => $validation,
            'title' => 'Create Solusi',
        ];

        return view('admin/tambah_solusi', $data);
    }

    public function store(){
        if(!$this->validate([
            'kodeSolusi' => 'required',
            'namaSolusi' => 'required',
        ]

        )){  
            return redirect()->to('/solusi/tambah_solusi')->withInput()->with('validation', $this->validator);
        }

        $this->solusiModel = new SolusiModel();
        $kodeSolusi = $this->request->getPost('kodeSolusi');
        $namaSolusi = $this->request->getPost('namaSolusi');

        $data=[
            'kodeSolusi' => $kodeSolusi,
            'namaSolusi' => $namaSolusi,
        ];
        
        $this->solusiModel = new SolusiModel();
        $this->userModel = new UserModel();


        $this->solusiModel->save($data);
        return redirect()->to('/solusi/datasolusi');
    }

    public function edit($id){
        if(session('validation')!=null){
            $validation = session('validation');
        }
        else{
            $validation = \Config\Services::validation();
        }

        $solusi = $this->solusiModel->getSolusi($id);

        $data = [
            'validation' => $validation,
            'title' => 'Edit Solusi',
            'solusi' => $solusi
        ];

        return view('admin/edit_solusi', $data);
    }

    public function update($id){

        $data = [
            'kodeSolusi' => $this->request->getVar('kodeSolusi'),
            'namaSolusi' => $this->request->getVar('namaSolusi'),
            
        ];

        $result = $this->solusiModel->updateSolusi($data, $id);

        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/solusi/datasolusi'));
    }

    public function destroy($id){
        $result = $this->solusiModel->deleteSolusi($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/solusi/datasolusi'))->with('success', 'Berhasil menghapus data');
    }
}
