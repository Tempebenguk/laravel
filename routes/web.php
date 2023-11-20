<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Latihancontroller;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('lat', function () {
    return view('latihanrouting');
});

Route::get('bio', function () {
    return view('bio');
});

Route::get('nama', function () {
    return view('nama', ['name' => 'Errick Septiano Budiansyah']);
});

Route::get('nilai1', function () {
    return view('getnilai1');
});

Route::get('nilai2', function () {
    return view('getnilai2');
});

// Route::get('produk', function () {
//     return view('produk');
// });

// Route::get('home', function () {
//     return view('layouts.home');
// });

// Route::get('transaksi', function () {
//     return view('layouts.transaksi.transaksi');
// });

Route::get('home', [Latihancontroller::class, 'home']);
Route::get('produk', [Latihancontroller::class, 'produk']);
Route::get('transaksi', [Latihancontroller::class, 'transaksi']);

Route::get('/tampil-produk', [ProdukController::class, 'index']);
Route::get('/tambah-produk', [ProdukController::class, 'create'])->name('produk.create');
Route::post('tampil-produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::post('/produk/edit/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::post('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');

//->name merupakan nama alias dari routing controller, hal ini dilakukan apabila url dinilai terlalu panjang atau ada
// url yang memiliki nama sama tapi memiliki method yang berbeda