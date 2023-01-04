<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [pageController::class, 'dashboard']);
Route::post('/', [pageController::class, 'dashboard']);

Route::get('/datausaha', [pageController::class, 'datausaha']);
Route::post('/datausaha', [pageController::class, 'datausaha']);

Route::get('/jenisdatausaha', [pageController::class, 'jenisdatausaha']);
Route::post('/jenisdatausaha', [pageController::class, 'jenisdatausaha']);

Route::get('/pengelola', [pageController::class, 'pengelola']);
Route::post('/pengelola', [pageController::class, 'pengelola']);
Route::post('/editpengelola', [pageController::class, 'editpengelola']);
Route::get('/editpengelola', [pageController::class, 'pengelola']);

Route::get('/akun', [pageController::class, 'akun']);

Route::get('public/pemasok', [pageController::class, 'pemasok'])->name('get.pemasok');
Route::post('public/pemasok', [pageController::class, 'pemasok'])->name('post.pemasok');
Route::get('public/detilpemasok', [pageController::class, 'detilpemasok'])->name('get.detilpemasok');
Route::post('public/detilpemasok', [pageController::class, 'detilpemasok'])->name('post.detilpemasok');

Route::get('public/pelanggan', [pageController::class, 'pelanggan'])->name('get.pelanggan');
Route::post('public/pelanggan', [pageController::class, 'pelanggan'])->name('post.pelanggan');
Route::get('public/detilpelanggan', [pageController::class, 'detilpelanggan'])->name('get.detilpelanggan');
Route::post('public/detilpelanggan', [pageController::class, 'detilpelanggan'])->name('post.detilpelanggan');

Route::get('public/pendapatan', [pageController::class, 'pendapatan'])->name('get.pendapatan');
Route::post('public/pendapatan', [pageController::class, 'pendapatan'])->name('post.pendapatan');
Route::get('public/notapendapatan', [pageController::class, 'notapendapatan'])->name('get.notapendapatan');
Route::post('public/notapendapatan', [pageController::class, 'notapendapatan'])->name('post.notapendapatan');

Route::get('public/penjualan', [pageController::class, 'penjualan'])->name('get.penjualan');
Route::post('public/penjualan', [pageController::class, 'penjualan'])->name('post.penjualan');
Route::get('public/notapenjualan', [pageController::class, 'notapenjualan'])->name('get.notapenjualan');
Route::post('public/notapenjualan', [pageController::class, 'notapenjualan'])->name('post.notapenjualan');

Route::get('public/pembelian', [pageController::class, 'pembelian'])->name('get.pembelian');
Route::post('public/pembelian', [pageController::class, 'pembelian'])->name('post.pembelian');
Route::get('public/notapembelian', [pageController::class, 'notapembelian'])->name('get.notapembelian');
Route::post('public/notapembelian', [pageController::class, 'notapembelian'])->name('post.notapembelian');

Route::get('public/bebanjasa', [pageController::class, 'bebanjasa'])->name('get.bebanjasa');
Route::post('public/bebanjasa', [pageController::class, 'bebanjasa'])->name('post.bebanjasa');
Route::get('public/notabebanjasa', [pageController::class, 'notabebanjasa'])->name('get.notabebanjasa');
Route::post('public/notabebanjasa', [pageController::class, 'notabebanjasa'])->name('post.notabebanjasa');

Route::get('public/bebandagang', [pageController::class, 'bebandagang'])->name('get.bebandagang');
Route::post('public/bebandagang', [pageController::class, 'bebandagang'])->name('post.bebandagang');
Route::get('public/notabebandagang', [pageController::class, 'notabebandagang'])->name('get.notabebandagang');
Route::post('public/notabebandagang', [pageController::class, 'notabebandagang'])->name('post.notabebandagang');

Route::get('/stok', [pageController::class, 'stok']);
Route::post('/stok', [pageController::class, 'stok']);

Route::get('/laporan', [pageController::class, 'laporan']);

Route::get('dummy' , function()
{
    // $arr = [
    //     ['toko' => 'serba ada', 'barang' => ['gas', 'batu']],
    //     ['toko' => 'serba bisa', 'barang' => ['paku', 'palu']]
    // ];
    // foreach ($arr as $item) {
    //     echo '***'.$item['toko'].'****';
    //     foreach($item['barang'] as $barang) {
    //         echo '   -'.$barang;
    //     }
    // }
            
    $data = [
        'file' => 'aku',
        'tanggal' => 'dia',
        'usaha' => 'merala',
        'catatan' => 'ksosng',
        'pelanggan' => 'laper'
    ];
    
    // dd ($data); 
    $data['harga'] = 1000;
    dd ($data);

    // return view('print.buku');
});

Route::get('cek', [pageController::class, 'dummy']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('public/', [pageController::class, 'dashboard'])->name('dashboard');

// Route::get('public/datausaha', [pageController::class, 'datausaha'])->name('get.datausaha');
// Route::post('public/datausaha', [pageController::class, 'datausaha'])->name('post.datausaha');

// Route::post('public/jenisdatausaha', [pageController::class, 'jenisdatausaha'])->name('post.jenisdatausaha');

// Route::get('public/pengelola', [pageController::class, 'pengelola'])->name('get.pengelola');
// Route::post('public/pengelola', [pageController::class, 'pengelola'])->name('post.pengelola');

// Route::get('public/akunku', [pageController::class, 'akun'])->name('get.akun');

// Route::get('public/stok', [pageController::class, 'stok'])->name('get.stok');
// Route::post('public/stok', [pageController::class, 'stok'])->name('post.stok');

// Route::get('public/laporan', [pageController::class, 'laporan'])->name('get.laporan');

