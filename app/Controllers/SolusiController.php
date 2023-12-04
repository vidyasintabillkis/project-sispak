<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SolusiController extends BaseController
{
    public function index()
    {
        //
    }

    public function admin_datasolusi(){
        return view('admin/datasolusi');
    }

    public function tambah(){
        return view('admin/tambah_solusi');
    }

    public function edit(){
        return view('admin/edit_solusi');
    }
}
