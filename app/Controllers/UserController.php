<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }
    public function dashboard_user(){
        return view('user/dashboard_user');
    }
    public function konsultasi(){
        return view('user/konsultasi');
    }
    public function riwayathasil(){
        return view('user/riwayathasil');
    }
    public function hasil(){
        return view('user/hasil');
    }
}
