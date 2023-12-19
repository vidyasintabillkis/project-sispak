<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\GejalaModel;
use App\Models\KerusakanModel;
use App\Models\SolusiModel;
use App\Models\UserModel;

class AkunController extends BaseController
{
    public $userModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->userModel = new UserModel();
    }

    public function akun()
    {
        $this->builder->select('id, username, email, jenis_kelamin');
        $query = $this->builder->get();
        
        $data = [
            'title' => 'Akun Pengguna',
            'akun'   => $query->getResult(),
        ];

        return view('admin/akun', $data);
    }

    public function dashboard_admin(){
        $solusiModel = new SolusiModel(); 
        $gejalaModel = new GejalaModel(); 
        $kerusakanModel = new KerusakanModel(); 
        $artikelModel = new ArtikelModel(); 

        $solusi = $solusiModel
        ->select('solusi.*')
        ->findAll();
        $gejala = $gejalaModel
        ->select('gejala.*')
        ->findAll();
        $kerusakan = $kerusakanModel
        ->select('kerusakan.*')
        ->findAll();
        $artikel = $artikelModel
        ->select('artikel.judul')
        ->findAll();

        return view('admin/dashboard_admin',["data"=>$artikel, "solusi"=>count($solusi),"gejala"=>count($gejala), "kerusakan"=>count($kerusakan)]);
    }
}
