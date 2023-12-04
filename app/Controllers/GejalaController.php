<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GejalaController extends BaseController
{
    public function index()
    {
        //
    }

    public function admin_datagejala(){
        return view('admin/datagejala');
    }

    public function tambah(){
        return view('admin/tambah_gejala');
    }

    public function edit(){
        return view('admin/edit_gejala');
    }
}
