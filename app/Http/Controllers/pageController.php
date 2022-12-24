<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pageController extends Controller
{

    public function dummy(){
        $data = Session::get('notapendapatan');
        // Session::put('pendapatan', [$data[0]]);
        // $data[0]['penghasilan'] =15000;
        dd($data);
        Session::put('pendapatan', [$data[0]]);
    }

    //
    public function pengelola(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('fitur.pengelola', ['data' => $data]);
    }

    public function akun(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('fitur.akun', ['data' => $data]);
    }

    public function pemasok(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('fitur.pemasok', ['data' => $data]);
    }

    public function detilpemasok(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('fitur.detil.pemasok', ['data' => $data]);
    }

    public function dashboard(Request $req)
    {
        return view('fitur.dashboard');
    }

    public function datausaha(Request $req)
    {
        // Session::flush();
        // dd('aku');
        $data = Session::get('datausaha') == null ? [] : Session::get('datausaha');
        $tambah = $req->post();

        if ($tambah != []) {
            $isi = [
                'nama' => $req->nama,
                'alamat' => $req->alamat,
                'jenis' => [],
            ];
            array_push($data, $isi);
            Session::put('datausaha', $data);
        }

        // dd( gettype($data[0]['jenis']));

        return view('fitur.datausaha', compact('data'));
    }

    public function jenisdatausaha(Request $req)
    {
        // dd($req);
        $data = Session::get('datausaha');
        // dd($req);
        array_push($data[$req->id]['jenis'], $req->jenis);
        Session::put('datausaha', $data);

        return view('fitur.datausaha', compact('data'));
    }

    public function pelanggan(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('fitur.pelanggan', ['data' => $data]);
    }

    public function detilpelanggan(Request $req)
    {
        return view('fitur.detil.pelanggan');
    }

    public function pendapatan(Request $req)
    {
        // Session::flush();     
        $data = Session::get('pendapatan') == null ? [] : Session::get('pendapatan');
        // $file = $req->file('file');
        // $nama = $file->getClientOriginalName();
        // $tujuan_upload = 'images/';
        // $file->move($tujuan_upload, $nama);
        // dd($data);
        $tambah = $req->post();
        if ($tambah != null) {
            $file = $req->file('file');
            $nama = $file->getClientOriginalName();
            $tujuan_upload = 'images/';
            $file->move($tujuan_upload, $nama);
            $row = [
                'file' => $nama,
                'tanggal' => $req->tanggal,
                'usaha' => $req->usaha,
                'catatan' => $req->catatan,
                'pelanggan' => $req->pelanggan,
                'penghasilan' => 0
            ];
            array_push($data, $row);
            Session::put('pendapatan', $data);
            // dd($data);
        }
        return view('fitur.pendapatan', ['data' => $data]);
    }

    // public function tambahpendapatan(Request $req)
    // {
    //     Session::flush();
    //     // dd(Session::get('tambahpendapatan') == null);
    //     $data = Session::get('tambahpendapatan') == null ? [] : Session::get('tambahpendapatan');
    //     $file = $req->file('file');
    //     $nama = $file->getClientOriginalName();
    //     $tujuan_upload = 'images/';
    //     $file->move($tujuan_upload, $nama);
    //     $tambah = $req->all();
    //     if ($tambah != null) {
    //         $row = [
    //             'file' => $nama,
    //             'tanggal' => $req->tanggal,
    //             'usaha' => $req->usaha,
    //             'catatan' => $req->catatan,
    //             'pelanggan' => $req->pelanggan
    //         ];
    //         array_push($data, $row);
    //         Session::put('tambahpendapatan', $data);
    //         // dd($data);
    //     }
    //     return view('fitur.pendapatan', ['data' => $data]);
    // }

    public function laporan(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('fitur.laporan', ['data' => $data]);
    }
    public function notapendapatan(Request $req)
    {
        
        $req->get('id') !=null ? $loc =  $req->get('id') : $loc = Session::get('lokpen');
        
        Session::put('lokpen', $loc); 
        // dd($loc);
        $pendapatan = Session::get('pendapatan') == null ? [] : Session::get('pendapatan');
        $data = Session::get('notapendapatan') == null ? [] : Session::get('notapendapatan');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0 ;
     
        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota']:[]  ;
        // dd($tambah);
        if ($req->jenis != null) {
            $nota = [
                'jenis' => $req->jenis,
                'harga' => $req->harga,
                'jumlah' => $req->jumlah,
                'total' => $req->harga * $req->jumlah,
            ];
            $total = $total + $nota['total'];
            array_push($isi, $nota);
            $data[$loc]['nota'] = $isi;
            $data[$loc]['total'] = $total;
            $pendapatan[$loc]['penghasilan'] = $total;
            // dd($loc);   
            Session::put('notapendapatan', $data);
            Session::put('pendapatan', $pendapatan);
            // dd($data);
        }
        // dd(count($data));
        return view('fitur.detil.notapendapatan', compact('data', 'total','loc'));
    }

    public function stok(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('fitur.stok', ['data' => $data]);
    }

    public function penjualan(Request $req)
    {
        // Session::flush();
        $data = Session::get('penjualan') == null ? [] : Session::get('penjualan');
        // $file = $req->file('file');
        // $nama = $file->getClientOriginalName();
        // $tujuan_upload = 'images/';
        // $file->move($tujuan_upload, $nama);
        $tambah = $req->all();
        if ($tambah != null) {
            $file = $req->file('file');
            $nama = $file->getClientOriginalName();
            $tujuan_upload = 'images/';
            $file->move($tujuan_upload, $nama);
            $row = [
                'file' => $nama,
                'tanggal' => $req->tanggal,
                'usaha' => $req->usaha,
                'catatan' => $req->catatan,
                'pelanggan' => $req->pelanggan
            ];
            array_push($data, $row);
            Session::put('penjualan', $data);
            // dd($data);
        }
    }
}
