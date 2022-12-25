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

Route::get('/datausaha', [pageController::class, 'datausaha']);
Route::post('/datausaha', [pageController::class, 'datausaha']);

Route::post('/jenisdatausaha', [pageController::class, 'jenisdatausaha']);

Route::get('/pengelola', [pageController::class, 'pengelola']);
Route::post('/pengelola', [pageController::class, 'pengelola']);

Route::get('/akun', [pageController::class, 'akun']);

Route::get('/pemasok', [pageController::class, 'pemasok']);
Route::post('/pemasok', [pageController::class, 'pemasok']);
Route::get('/detilpemasok', [pageController::class, 'detilpemasok']);
Route::post('/detilpemasok', [pageController::class, 'detilpemasok']);

Route::get('/pelanggan', [pageController::class, 'pelanggan']);
Route::post('/pelanggan', [pageController::class, 'pelanggan']);
Route::get('/detilpelanggan', [pageController::class, 'detilpelanggan']);
Route::post('/detilpelanggan', [pageController::class, 'detilpelanggan']);

Route::get('/pendapatan', [pageController::class, 'pendapatan']);
Route::post('/pendapatan', [pageController::class, 'pendapatan']);
Route::get('/notapendapatan', [pageController::class, 'notapendapatan']);
Route::post('/notapendapatan', [pageController::class, 'notapendapatan']);

Route::get('/penjualan', [pageController::class, 'penjualan']);
Route::post('/penjualan', [pageController::class, 'penjualan']);
Route::get('/notapenjualan', [pageController::class, 'notapenjualan']);
Route::post('/notapenjualan', [pageController::class, 'notapenjualan']);

Route::get('/pembelian', [pageController::class, 'pembelian']);
Route::post('/pembelian', [pageController::class, 'pembelian']);
Route::get('/notapembelian', [pageController::class, 'notapembelian']);
Route::post('/notapembelian', [pageController::class, 'notapembelian']);

Route::get('/bebanjasa', [pageController::class, 'bebanjasa']);
Route::post('/bebanjasa', [pageController::class, 'bebanjasa']);
Route::get('/notabebanjasa', [pageController::class, 'notabebanjasa']);
Route::post('/notabebanjasa', [pageController::class, 'notabebanjasa']);

Route::get('/bebandagang', [pageController::class, 'bebandagang']);
Route::post('/bebandagang', [pageController::class, 'bebandagang']);
Route::get('/notabebandagang', [pageController::class, 'notabebandagang']);
Route::post('/notabebandagang', [pageController::class, 'notabebandagang']);


Route::get('/stok', [pageController::class, 'stok']);

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
