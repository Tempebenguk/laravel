<?php

namespace App\Http\Controllers;
use App\Models\produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $data = produk::all();
            return view('produk.index', ['dataProduk' => $data]);
    }

    public function create(){
        return view('produk.create');
    }

    public function store(Request $request){
        $message= [
            'required' => ':attributre tidak boleh kosong',
            'unique' => ':attribute sudah digunakan',
            'numeric' => ':attribute  harus berupa angka',
        ];

        $this->validate($request, [
            'id' => 'required|numeric|unique:produk',
            'nama_produk' => 'required|unique:produk',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric'
        ], $message);

        $data = new produk();
        $data->id = $request->id;
        $data->nama_produk = $request->nama_produk;
        $data->harga = $request->harga;
        $data->stock = $request->stock;
        $data->save();
        return redirect('/tampil-produk')->with('success','Data berhasil disimpan');
    }

    public function edit($id){
        $data = produk::find($id);
        return view('produk.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $data = produk::find($id);
        $data->nama_produk = $request->nama_produk;
        $data->harga = $request->harga;
        $data->stock = $request->stock;
        $data->update();
        return redirect('/tampil-produk')->with('success','Data berhasil diubah');
    }

    public function destroy($id){
        $data = produk::find($id);
        $data->delete();
        return redirect('/tampil-produk')->with('success','Data berhasil dihapus');
    }
}
