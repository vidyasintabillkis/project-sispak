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
    public function admin_datagejala(){
        return view('admin/datagejala');
    }
    public function admin_datakerusakan(){
        return view('admin/datakerusakan');
    }
    public function admin_datasolusi(){
        return view('admin/datasolusi');
    }
}

