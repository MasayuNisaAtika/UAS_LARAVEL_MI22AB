<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('kategori.index');
    }

    public function tambah()
    {
        return view('kategori.tambah');
    }
    
    public function hapus()
    {
        return view('kategori.hapus');
    }
}