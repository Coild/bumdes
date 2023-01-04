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



Route::get('/', [pageController::class, 'login'])->name('get.login');
Route::post('/', [pageController::class, 'login'])->name('post.login');

Route::get('dashboard', [pageController::class, 'dashboard'])->name('get.dashboard');
Route::post('dashboard', [pageController::class, 'dashboard'])->name('post.dashboard');

Route::get('/datausaha', [pageController::class, 'datausaha']);
Route::post('/datausaha', [pageController::class, 'datausaha']);

Route::get('/jenisdatausaha', [pageController::class, 'jenisdatausaha']);
Route::post('/jenisdatausaha', [pageController::class, 'jenisdatausaha']);

Route::get('pengelola', [pageController::class, 'pengelola'])->name('get.pengelola');
Route::post('pengelola', [pageController::class, 'pengelola'])->name('post.pengelola');
Route::get('editpengelola', [pageController::class, 'pengelola'])->name('get.editpengelola');
Route::post('editpengelola', [pageController::class, 'editpengelola'])->name('post.editpengelola');

Route::get('/akun', [pageController::class, 'akun']);

Route::get('pemasok', [pageController::class, 'pemasok'])->name('get.pemasok');
Route::post('pemasok', [pageController::class, 'pemasok'])->name('post.pemasok');
Route::get('detilpemasok', [pageController::class, 'detilpemasok'])->name('get.detilpemasok');
Route::post('detilpemasok', [pageController::class, 'detilpemasok'])->name('post.detilpemasok');

Route::get('pelanggan', [pageController::class, 'pelanggan'])->name('get.pelanggan');
Route::post('pelanggan', [pageController::class, 'pelanggan'])->name('post.pelanggan');
Route::get('detilpelanggan', [pageController::class, 'detilpelanggan'])->name('get.detilpelanggan');
Route::post('detilpelanggan', [pageController::class, 'detilpelanggan'])->name('post.detilpelanggan');

Route::get('pendapatan', [pageController::class, 'pendapatan'])->name('get.pendapatan');
Route::post('pendapatan', [pageController::class, 'pendapatan'])->name('post.pendapatan');
Route::get('notapendapatan', [pageController::class, 'notapendapatan'])->name('get.notapendapatan');
Route::post('notapendapatan', [pageController::class, 'notapendapatan'])->name('post.notapendapatan');

Route::get('penjualan', [pageController::class, 'penjualan'])->name('get.penjualan');
Route::post('penjualan', [pageController::class, 'penjualan'])->name('post.penjualan');
Route::get('notapenjualan', [pageController::class, 'notapenjualan'])->name('get.notapenjualan');
Route::post('notapenjualan', [pageController::class, 'notapenjualan'])->name('post.notapenjualan');

Route::get('pembelian', [pageController::class, 'pembelian'])->name('get.pembelian');
Route::post('pembelian', [pageController::class, 'pembelian'])->name('post.pembelian');
Route::get('notapembelian', [pageController::class, 'notapembelian'])->name('get.notapembelian');
Route::post('notapembelian', [pageController::class, 'notapembelian'])->name('post.notapembelian');

Route::get('bebanjasa', [pageController::class, 'bebanjasa'])->name('get.bebanjasa');
Route::post('bebanjasa', [pageController::class, 'bebanjasa'])->name('post.bebanjasa');
Route::get('notabebanjasa', [pageController::class, 'notabebanjasa'])->name('get.notabebanjasa');
Route::post('notabebanjasa', [pageController::class, 'notabebanjasa'])->name('post.notabebanjasa');

Route::get('bebandagang', [pageController::class, 'bebandagang'])->name('get.bebandagang');
Route::post('bebandagang', [pageController::class, 'bebandagang'])->name('post.bebandagang');
Route::get('notabebandagang', [pageController::class, 'notabebandagang'])->name('get.notabebandagang');
Route::post('notabebandagang', [pageController::class, 'notabebandagang'])->name('post.notabebandagang');

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


// Route::get('', [pageController::class, 'dashboard'])->name('dashboard');

// Route::get('datausaha', [pageController::class, 'datausaha'])->name('get.datausaha');
// Route::post('datausaha', [pageController::class, 'datausaha'])->name('post.datausaha');

// Route::post('jenisdatausaha', [pageController::class, 'jenisdatausaha'])->name('post.jenisdatausaha');

// Route::get('akunku', [pageController::class, 'akun'])->name('get.akun');

// Route::get('stok', [pageController::class, 'stok'])->name('get.stok');
// Route::post('stok', [pageController::class, 'stok'])->name('post.stok');

// Route::get('laporan', [pageController::class, 'laporan'])->name('get.laporan');

