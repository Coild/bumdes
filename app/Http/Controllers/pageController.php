<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function pengelola(Request $req) {
        $data = $req->all(); 
        $data == null ? [] : $data;  
        return view('fitur.pengelola', ['data' => $data]);
    } 

    public function akun(Request $req) {
        $data = $req->all(); 
        $data == null ? [] : $data;  
        return view('fitur.akun', ['data' => $data]);
    } 

    public function pemasok(Request $req) {
        $data = $req->all(); 
        $data == null ? [] : $data;  
        return view('fitur.pemasok', ['data' => $data]);
    } 

    public function detilpemasok(Request $req) {
        $data = $req->all(); 
        $data == null ? [] : $data;  
        return view('fitur.detil.pemasok', ['data' => $data]);
    } 

    public function dashboard(Request $req) {
        return view('fitur.dashboard');
    } 

    public function datausaha(Request $req) {
        return view('fitur.datausaha');
    } 

    public function pelanggan(Request $req) {
        $data = $req->all(); 
        $data == null ? [] : $data;
        return view('fitur.pelanggan', ['data' => $data]);
    } 

    public function detilpelanggan(Request $req) {
        return view('fitur.detil.pelanggan');
    } 

    public function pendapatan(Request $req) {
        $data = $req->all(); 
        $data == null ? [] : $data;  
        return view('fitur.pendapatan', ['data' => $data]);
    } 

    public function tambahpendapatan(Request $req) {
        $file = $req->file('file');
        $nama = $file->getClientOriginalName();
        $tujuan_upload = 'images/';
        $file->move($tujuan_upload,$nama);
        // dd($nama);
        $data = [
            'file' => $nama,
            'tanggal' => $req->tanggal,
            'usaha' => $req->usaha,
            'catatan' => $req->catatan,
            'pelanggan' => $req->pelanggan
        ];
        // dd($data);
        return view('fitur.pendapatan', ['data' => $data]);
    } 

    public function laporan(Request $req) {
        $data = $req->all(); 
        $data == null ? [] : $data;  
        return view('fitur.laporan', ['data' => $data]);
    }
}
