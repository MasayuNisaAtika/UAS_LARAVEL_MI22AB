<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk.index');
    }

    public function tambah()
    {
        return view('produk.tambah');
    }
    
    public function edit()
    {
        return view('produk.edit');
    }

    public function hapus()
    {
        return view('produk.hapus');
    }
}