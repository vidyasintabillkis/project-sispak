<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ArtikelController extends BaseController
{
    public function index()
    {
        //
    }

    public function artikel(){
        return view('admin/artikel');
    }
}
