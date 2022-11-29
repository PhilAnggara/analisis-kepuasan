<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.beranda');
    }
    
    public function kusioner()
    {
        return view('pages.kusioner');
    }
    
    public function admin()
    {
        return view('pages.admin.beranda');
    }
    public function adminKusioner()
    {
        return view('pages.admin.kusioner');
    }
    public function analisis()
    {
        return view('pages.admin.analisis');
    }
}