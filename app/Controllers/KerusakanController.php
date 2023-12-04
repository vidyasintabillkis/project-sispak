<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KerusakanController extends BaseController
{
    public function index()
    {
        //
    }

    public function admin_datakerusakan(){
        return view('admin/datakerusakan');
    }

    public function tambah(){
        return view('admin/tambah_kerusakan');
    }

    public function edit(){
        return view('admin/edit_kerusakan');
    }
}
