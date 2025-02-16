<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class KatalogController extends Controller
{
    public function katalog()
    {
        $produk = Produk::all();
        return view('katalog', compact('produk'));
    }

    public function produk()
    {
        return view('produk');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function login()
    {
        return view('login');
    }
}
