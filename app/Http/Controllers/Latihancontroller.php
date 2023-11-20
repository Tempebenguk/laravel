<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Latihancontroller extends Controller
{
    public function home(){
        return view('layouts.home');
    }

    public function produk(){
        return view('produk');
    }

    public function transaksi(){
        return view('layouts.transaksi.transaksi');
    }
}
