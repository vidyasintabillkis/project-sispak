<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing_page');
    }
    public function login(): string
    {
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function dashboard_admin(){
        return view('admin/dashboard_admin');
    }
    public function akun(){
        return view('admin/akun');
    }
}

