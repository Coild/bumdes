<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

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
Route::get('/pengelola', [pageController::class, 'pengelola']);
Route::post('/pengelola', [pageController::class, 'pengelola']);
Route::get('/akun', [pageController::class, 'akun']);
Route::get('/datausaha', [pageController::class, 'datausaha']);
Route::get('/pemasok', [pageController::class, 'pemasok']);
Route::get('/detilpemasok', [pageController::class, 'detilpemasok']);
Route::get('/pelanggan', [pageController::class, 'pelanggan']);
Route::get('/detilpelanggan', [pageController::class, 'detilpelanggan']);
Route::get('/pendapatan', [pageController::class, 'pendapatan']);
Route::post('/tambahpendapatan', [pageController::class, 'tambahpendapatan']);
Route::get('/notapendapatan', [pageController::class, 'notapendapatan']);
Route::post('/notapendapatan', [pageController::class, 'notapendapatan']);

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

    return view('print.buku');
});
