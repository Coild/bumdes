<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;

class pageController extends Controller
{

    public function dummy()
    {
        $data = Session::get('notapendapatan');
        // Session::put('pendapatan', [$data[0]]);
        // $data[0]['penghasilan'] =15000;
        dd($data);
        Session::put('pendapatan', [$data[0]]);
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
        // Session::flush();
        $data = Session::get('pelanggan') == null ? [] : Session::get('pelanggan');
        $tambah = $req->post();
        if ($tambah != null) {
            $row = [
                'nama' => $req->nama,
                'nohp' => $req->nohp,
                'alamat' => $req->alamat
            ];
            array_push($data, $row);
            Session::put('pelanggan', $data);
            // dd($data);
        }
        return view('fitur.pelanggan', ['data' => $data]);
    }

    public function detilpelanggan(Request $req)
    {
        // Session::flush();
        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('locdp');
        Session::put('locdp', $loc);
        // dd($loc);
        $pelanggan = Session::get('pelanggan') == null ? [] : Session::get('pelanggan');
        $data = Session::get('detilpelanggan') == null ? [] : Session::get('detilpelanggan');


        //  $isi = array_key_exists($loc, $data) ? $data[$loc]['detil'] : [];
        // dd($tambah);
        //  if ($req->nama != null) {
        //      $detil = [
        //          'nama' => $req->nama
        //      ];
        //      array_push($isi, $detil);
        //      $data[$loc]['detil'] = $isi;
        // dd($loc);   
        Session::put('detilpelanggan', $data);
        Session::put('pelanggan', $pelanggan);
        // dd($data);
        //  }
        // dd($pelanggan);
        return view('fitur.detil.pelanggan', compact('data', 'loc', 'pelanggan'));
    }

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
        // Session::flush();
        $data = Session::get('pemasok') == null ? [] : Session::get('pemasok');
        $tambah = $req->post();
        if ($tambah != null) {
            $row = [
                'nama' => $req->nama,
                'nohp' => $req->nohp,
                'alamat' => $req->alamat
            ];
            array_push($data, $row);
            Session::put('pemasok', $data);
            // dd($data);
        }
        return view('fitur.pemasok', ['data' => $data]);
    }

    public function detilpemasok(Request $req)
    {
        // Session::flush();
        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('locpasok');
        Session::put('locpasok', $loc);
        // dd($loc);
        $pemasok = Session::get('pemasok') == null ? [] : Session::get('pemasok');
        $data = Session::get('detilpemasok') == null ? [] : Session::get('detilpemasok');


        $isi = array_key_exists($loc, $data) ? $data[$loc]['detil'] : [];
        // dd($tambah);
        if ($req->nama != null) {
            $detil = [
                'nama' => $req->nama
            ];
            array_push($isi, $detil);
            $data[$loc]['detil'] = $isi;
            // dd($loc);

            Session::put('detilpemasok', $data);
            Session::put('pemasok', $pemasok);
            // dd($data);
        }
        // dd($pemasok);
        return view('fitur.detil.pemasok', compact('data', 'loc', 'pemasok'));
    }

    public function stok(Request $req)
    {

        // Session::forget('barang');
        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('locstok');
        Session::put('locstok', $loc);
        
        $barang = Session::get('barang') == null ? [] : Session::get('barang');
        // dd($barang);
        $edit = $req->get('edit');
        if ($edit != null)  {
            $barang[$edit]['minimum'] = $req->minimum;
            $barang[$edit]['status'] = $req->status;
            $barang[$edit]['untung'] = $req->untung;
            // dd($barang);
            

            Session::put('barang', $barang);
        }

        // dd($barang);
        return view('fitur.stok', compact('barang'));
    }

    public function pendapatan(Request $req)
    {
        // Session::flush();     
        $data = Session::get('pendapatan') == null ? [] : Session::get('pendapatan');
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

    public function laporan(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('fitur.laporan', ['data' => $data]);
    }

    public function notapendapatan(Request $req)
    {

        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokpen');

        Session::put('lokpen', $loc);
        // dd($loc);
        $pendapatan = Session::get('pendapatan') == null ? [] : Session::get('pendapatan');
        $data = Session::get('notapendapatan') == null ? [] : Session::get('notapendapatan');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;

        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];
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
        return view('fitur.detil.notapendapatan', compact('pendapatan', 'data', 'total', 'loc'));
    }

    public function penjualan(Request $req)
    {
        // Session::flush();     
        $data = Session::get('penjualan') == null ? [] : Session::get('penjualan');
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
            Session::put('penjualan', $data);
            // dd($data);
        }
        return view('fitur.penjualan', ['data' => $data]);
    }

    public function notapenjualan(Request $req)
    {

        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokpen');

        Session::put('lokpen', $loc);
        // dd($loc);
        $penjualan = Session::get('penjualan') == null ? [] : Session::get('penjualan');
        $data = Session::get('notapenjualan') == null ? [] : Session::get('notapenjualan');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;

        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];
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
            $penjualan[$loc]['penghasilan'] = $total;
            // dd($loc);   
            Session::put('notapenjualan', $data);
            Session::put('penjualan', $penjualan);
            // dd($data);
        }
        // dd(count($data));
        return view('fitur.detil.notapenjualan', compact('penjualan', 'data', 'total', 'loc'));
    }

    public function pembelian(Request $req)
    {
        // Session::flush();     
        $data = Session::get('pembelian') == null ? [] : Session::get('pembelian');
        $pemasok = Session::get('pemasok') == null ? [] : Session::get('pemasok');
        // dd($pemasok);
        $tambah = $req->post();
        if ($tambah != null) {
            $file = $req->file('file');
            $nama = $file->getClientOriginalName();
            $tujuan_upload = 'images/';
            $file->move($tujuan_upload, $nama);
            $row = [
                'file' => $nama,
                'tanggal' => $req->tanggal,
                'catatan' => $req->catatan,
                'pemasok' => $req->pemasok,
                'pembelian' => 0
            ];
            array_push($data, $row);
            Session::put('pembelian', $data);
        }
        return view('fitur.pembelian', compact('pemasok', 'data'));
    }

    public function notapembelian(Request $req)
    {

        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokbeli');
        $listbarang = Session::get('detilpemasok') == null ? [] : Session::get('detilpemasok');
        
        Session::put('lokbeli', $loc);
        // dd($loc);
        $pembelian = Session::get('pembelian') == null ? [] : Session::get('pembelian');
        $detilpemasok = Session::get('detilpemasok') == null ? [] : Session::get('detilpemasok');
        // dd($detilpemasok);
        $pemasok = Session::get('pemasok') == null ? [] : Session::get('pemasok');
        $data = Session::get('notapembelian') == null ? [] : Session::get('notapembelian');
        $barang = Session::get('barang') == null ? [] : Session::get('barang');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;

        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];
        // dd($tambah);
        if ($req->jenis != null) {
            $nota = [
                'jenis' => $req->jenis,
                'harga' => $req->harga,
                'jumlah' => $req->jumlah,
                'total' => $req->harga * $req->jumlah,
            ];
            $brg = [
                'nama' => $req->jenis,
                'harga' => $req->harga,
                'jumlah' => $req->jumlah,
                'minimum' => 0,
                'status' => 0,
                'untung' => 0
            ];
            $total = $total + $nota['total'];
            array_push($isi, $nota);
            array_push($barang, $brg);
            $data[$loc]['nota'] = $isi;
            $data[$loc]['total'] = $total;
            $pembelian[$loc]['pembelian'] = $total;
            // dd($loc);

            Session::put('barang', $barang);
            Session::put('notapembelian', $data);
            Session::put('pembelian', $pembelian);
            // dd($data);
        }
        // dd(count($data));
        return view('fitur.detil.notapembelian', compact('pemasok','pembelian', 'data', 'total', 'loc', 'listbarang', 'detilpemasok'));
    }

    public function bebanjasa(Request $req)
    {
        // Session::flush();     
        $data = Session::get('bebanjasa') == null ? [] : Session::get('bebanjasa');
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
                'catatan' => $req->catatan,
                'namabeban' => $req->namabeban,
                'bebanjasa' => 0
            ];
            array_push($data, $row);
            Session::put('bebanjasa', $data);
        }
        return view('fitur.bebanjasa', ['data' => $data]);
    }

    public function notabebanjasa(Request $req)
    {

        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokbebanjasa');

        Session::put('lokbebanjasa', $loc);
        // dd($loc);
        $bebanjasa = Session::get('bebanjasa') == null ? [] : Session::get('bebanjasa');
        $data = Session::get('notabebanjasa') == null ? [] : Session::get('notabebanjasa');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;

        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];
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
            $bebanjasa[$loc]['bebanjasa'] = $total;
            // dd($loc);   
            Session::put('notabebanjasa', $data);
            Session::put('bebanjasa', $bebanjasa);
            // dd($data);
        }
        // dd(count($data));
        return view('fitur.detil.notabebanjasa', compact('bebanjasa', 'data', 'total', 'loc'));
    }

    public function bebandagang(Request $req)
    {
        // Session::flush();     
        $data = Session::get('bebandagang') == null ? [] : Session::get('bebandagang');
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
                'catatan' => $req->catatan,
                'namabeban' => $req->namabeban,
                'bebandagang' => 0
            ];
            array_push($data, $row);
            Session::put('bebandagang', $data);
        }
        return view('fitur.bebandagang', ['data' => $data]);
    }

    public function notabebandagang(Request $req)
    {

        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokbebandagang');

        Session::put('lokbebandagang', $loc);
        // dd($loc);
        $bebandagang = Session::get('bebandagang') == null ? [] : Session::get('bebandagang');
        $data = Session::get('notabebandagang') == null ? [] : Session::get('notabebandagang');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;

        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];
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
            $bebandagang[$loc]['bebandagang'] = $total;
            // dd($loc);   
            Session::put('notabebandagang', $data);
            Session::put('bebandagang', $bebandagang);
            // dd($data);
        }
        // dd(count($data));
        return view('fitur.detil.notabebandagang', compact('bebandagang', 'data', 'total', 'loc'));
    }
}
