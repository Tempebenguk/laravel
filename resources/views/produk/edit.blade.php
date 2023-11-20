@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Form Input Data</h4>
            <br>
            <form action="{{ route('produk.update',$data->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode Produk <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="id" id="id"
                    value = "{{ $data->id }}">
                    
                </div>
                <div class="form-group">
                    <label for="kode">Nama Produk <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_produk" id="nama_produk"
                    value = "{{ $data->nama_produk }}">
                </div>
                <div class="form-group">
                    <label for="kode">Harga <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="harga" id="harga"
                    value = "{{ $data->harga }}">
                </div>
                <div class="form-group">
                    <label for="kode">Stok <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="stock" id="stock"
                    value = "{{ $data->stock }}">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="index" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection