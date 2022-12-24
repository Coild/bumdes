<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pageController extends Controller
{
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
        // Session::flush();
        // dd(Session::get('notapendapatan') == null);
        $data = Session::get('notapendapatan') == null ? [] : Session::get('notapendapatan');
        $total = Session::get('totalnotapendapatan') == null ? 0 : Session::get('totalnotapendapatan');
        $tambah = $req->all();
        if ($tambah != null) {
            $nota = [
                'jenis' => $req->jenis,
                'harga' => $req->harga,
                'jumlah' => $req->jumlah,
                'total' => $req->harga * $req->jumlah,
            ];
            $total = $total + $nota['total'];
            array_push($data, $nota);
            Session::put('totalnotapendapatan', $total);
            Session::put('notapendapatan', $data);
            // dd($data);
        }
        // dd(count($data));
        return view('fitur.detil.notapendapatan', compact('data', 'total'));
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
