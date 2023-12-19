<?php

namespace App\Controllers;
use App\Models\ArtikelModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public $artikelModel;
    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
    }

    public function index()
    {
        return view('landing_page');
    }
    
    public function dashboard_user()
    {
        $data = [
            'title' => 'List Solusi',
            'artikel' => $this->artikelModel->getArtikel(),
        ];

        return view('user/dashboard_user', $data);
    }
    public function konsultasi()
    {
        return view('user/konsultasi');
    }
    public function riwayathasil()
    {
        return view('user/riwayathasil');
    }
    public function hasil()
    {
        return view('user/hasil');
    }
}
