<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class pageController extends Controller
{
    public function login(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('auth.login', ['data' => $data]);
    }

    public function profiluser(Request $req)
    {
        // Session::forget('bumdes');
        $bumdes = Session::get('bumdes') == null ? [] : Session::get('bumdes');
        $datajasa = Session::get('datausahajasa') == null ? [] : Session::get('datausahajasa');
        $datadagang = Session::get('datausahadagang') == null ? [] : Session::get('datausahadagang');
        // dd($bumdes);
        $tambah = $req->jenis;
        if ($tambah != []) {
            if ($req->jenis == 1) {
                $isi = [
                    'namajasa' => $req->namajasa,
                    'alamatjasa' => $req->alamatjasa,
                    'jenis' => []
                ];
                array_push($datajasa, $isi);
                Session::put('datausahajasa', $datajasa);
            }
            if ($req->jenis == 2) {
                $isi = [
                    'namadagang' => $req->namadagang,
                    'alamatdagang' => $req->alamatdagang
                ];
                array_push($datadagang, $isi);
                Session::put('datausahadagang', $datadagang);
            }
            if ($req->jenis == 3) {
                $file = $req->file('file');
                $nama = $file->getClientOriginalName();
                $tujuan_upload = 'images/';
                $file->move($tujuan_upload, $nama);
                if(isset($bumdes['nama'])) {
                    $bumdes['file'] = $nama;
                }else {
                    $bumdes = [
                        'nama' => '',
                        'alamat' => '',
                        'no_ketua' => '',
                        'no_benda' => '',
                        'file' => 'foto.png'
                    ];
                }
                // dd($bumdes);
                Session::put('bumdes', $bumdes);
            }
            if ($req->jenis == 4) {
                $bumdes = [
                    'nama' => $req->nama,
                    'alamat' => $req->alamat,
                    'no_ketua' => $req->no_ketua,
                    'no_benda' => $req->no_benda,
                    'file' => $bumdes['file'] ?? 'foto.png'
                ];
                // array_push($datadagang, $isi);
                Session::put('bumdes', $bumdes);
            }
        }
        // dd($bumdes);

        return view('fitur.profiluser', compact('datajasa', 'datadagang', 'bumdes'));
    }

    public function profilbumdes(Request $req)
    {
        // Session::forget('bumdes');
        $bumdes = Session::get('bumdes') == null ? [] : Session::get('bumdes');
        $datajasa = Session::get('datausahajasa') == null ? [] : Session::get('datausahajasa');
        $datadagang = Session::get('datausahadagang') == null ? [] : Session::get('datausahadagang');
        // dd($bumdes);
        $tambah = $req->jenis;
        if ($tambah != []) {
            if ($req->jenis == 1) {
                $isi = [
                    'namajasa' => $req->namajasa,
                    'alamatjasa' => $req->alamatjasa,
                    'jenis' => []
                ];
                array_push($datajasa, $isi);
                Session::put('datausahajasa', $datajasa);
            }
            if ($req->jenis == 2) {
                $isi = [
                    'namadagang' => $req->namadagang,
                    'alamatdagang' => $req->alamatdagang
                ];
                array_push($datadagang, $isi);
                Session::put('datausahadagang', $datadagang);
            }
            if ($req->jenis == 3) {
                $file = $req->file('file');
                $nama = $file->getClientOriginalName();
                $tujuan_upload = 'images/';
                $file->move($tujuan_upload, $nama);
                if(isset($bumdes['file'])) {
                    $bumdes['file'] = $nama;
                }else {
                    $bumdes = [
                        'nama' => '',
                        'alamat' => '',
                        'no_ketua' => '',
                        'no_benda' => '',
                        'file' => 'profil_holder.png'
                    ];
                }
                // dd($bumdes);
                Session::put('bumdes', $bumdes);
            }
            if ($req->jenis == 4) {
                $bumdes = [
                    'nama' => $req->nama,
                    'alamat' => $req->alamat,
                    'no_ketua' => $req->no_ketua,
                    'no_benda' => $req->no_benda,
                    'file' => $bumdes['file'] ?? 'foto.png'
                ];
                // array_push($datadagang, $isi);
                Session::put('bumdes', $bumdes);
            }
        }
        // dd($bumdes);

        return view('fitur.profilbumdes', compact('datajasa', 'datadagang', 'bumdes'));
    }
    
    public function laporan(Request $req)
    {
        $data = $req->all();
        $data == null ? [] : $data;
        return view('fitur.laporan', ['data' => $data]);
    }

    public function dashboard(Request $req)
    {
        return view('fitur.dashboard');
    }

    public function datausaha(Request $req)
    {
        // Session::flush();
        $datajasa = Session::get('datausahajasa') == null ? [] : Session::get('datausahajasa');
        $datadagang = Session::get('datausahadagang') == null ? [] : Session::get('datausahadagang');
        $Tab = 'jasa';

        $tambah = $req->jenis;
        if ($tambah != []) {
            if ($req->jenis == 1) {
                $isi = [
                    'namajasa' => $req->namajasa,
                    'alamatjasa' => $req->alamatjasa,
                    'jenis' => []
                ];
                array_push($datajasa, $isi);
                Session::put('datausahajasa', $datajasa);
            }
            if ($req->jenis == 2) {
                $isi = [
                    'namadagang' => $req->namadagang,
                    'alamatdagang' => $req->alamatdagang
                ];
                $Tab = 'dagang';
                array_push($datadagang, $isi);
                Session::put('datausahadagang', $datadagang);
            }
        }
        // dd($datajasa);

        return view('fitur.datausaha', compact('datajasa', 'datadagang','Tab'));
    }

    public function editdatausaha(Request $req)
    {

        $datajasa = Session::get('datausahajasa') == null ? [] : Session::get('datausahajasa');
        $datadagang = Session::get('datausahadagang') == null ? [] : Session::get('datausahadagang');
        // dd($req);
        $edit = $req->jenis;
        if ($edit != []) {
            if ($req->jenis == 1) {
                $datajasa[$req->id]['namajasa'] = $req->namajasa;
                $datajasa[$req->id]['alamatjasa'] = $req->alamatjasa;
                Session::put('datausahajasa', $datajasa);
                
            }
            if ($req->jenis == 2) {
                $datadagang[$req->id]['namadagang'] = $req->namadagang;
                $datadagang[$req->id]['alamatdagang'] = $req->alamatdagang;

                Session::put('datausahadagang', $datadagang);
                
            }
        }
        return redirect('datausaha');
    }

    public function jenisdatausaha(Request $req)
    {
        // dd($req);
        $data = Session::get('datausahajasa');
        // dd($req);
        array_push($data[$req->id]['jenis'], $req->jenis);
        Session::put('datausahajasa', $data);

        return redirect('datausaha');
    }

    public function datahutang(Request $req)
    {
        // Session::flush();
        $datajasa = Session::get('datahutangpelanggan') == null ? [] : Session::get('datahutangpelanggan');
        $datadagang = Session::get('datahutangbumdes') == null ? [] : Session::get('datahutangbumdes');
        $Tab = 'jasa';

        $tambah = $req->jenis;
        if ($tambah != []) {
            if ($req->jenis == 1) {
                $isi = [
                    'namajasa' => $req->namajasa,
                    'alamatjasa' => $req->alamatjasa,
                    'jenis' => []
                ];
                array_push($datajasa, $isi);
                Session::put('datahutangpelanggan', $datajasa);
            }
            if ($req->jenis == 2) {
                $isi = [
                    'namadagang' => $req->namadagang,
                    'alamatdagang' => $req->alamatdagang
                ];
                $Tab = 'dagang';
                array_push($datadagang, $isi);
                Session::put('datahutangbumdes', $datadagang);
            }
        }
        // dd($datajasa);

        return view('fitur.datahutang', compact('datajasa', 'datadagang','Tab'));
    }

    public function hutangpelanggan(Request $req)
    {

        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokpen');

        Session::put('lokpen', $loc);
        // dd($loc);

        $pelanggan = Session::get('pelanggan') == null ? [] : Session::get('pelanggan');
        $pendapatan = Session::get('pendapatan') == null ? [] : Session::get('pendapatan');
        $jasa = Session::get('datausahajasa') == null ? [] : Session::get('datausahajasa');
        $data = Session::get('notapendapatan') == null ? [] : Session::get('notapendapatan');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;
        // dd($pendapatan);
        // dd($jasa);
        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];
        // dd($jasa);
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
        // dd($pendapatan);
        return view('fitur.detil.hutangpelanggan', compact('pendapatan', 'data', 'jasa', 'total', 'loc', 'pelanggan'));
    }

    public function hutangusaha(Request $req)
    {

        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokpen');

        Session::put('lokpen', $loc);
        // dd($loc);

        $pelanggan = Session::get('pelanggan') == null ? [] : Session::get('pelanggan');
        $pendapatan = Session::get('pendapatan') == null ? [] : Session::get('pendapatan');
        $jasa = Session::get('datausahajasa') == null ? [] : Session::get('datausahajasa');
        $data = Session::get('notapendapatan') == null ? [] : Session::get('notapendapatan');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;
        // dd($pendapatan);
        // dd($jasa);
        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];
        // dd($jasa);
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
        // dd($pendapatan);
        return view('fitur.detil.hutangusaha', compact('pendapatan', 'data', 'jasa', 'total', 'loc', 'pelanggan'));
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

    public function editpelanggan(Request $req)
    {

        $data = Session::get('pelanggan');
        // dd($req);
        $data[$req->id]['nama'] = $req->nama;
        $data[$req->id]['nohp'] = $req->nohp;
        $data[$req->id]['alamat'] = $req->alamat;

        Session::put('pelanggan', $data);

        return redirect('pelanggan');
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
        // Session::flush();
        $data = Session::get('pengelola') == null ? [] : Session::get('pengelola');
        $tambah = $req->post();
        if ($tambah != null) {
            $row = [
                'nama' => $req->nama,
                'status' => $req->status,
                'nohp' => $req->nohp,
                // 'profil' => $req->nohp
            ];
            array_push($data, $row);
            Session::put('pengelola', $data);
            // session()->put('liststatus', $req->liststatus);
            // dd($data);
        }

        return view('fitur.pengelola', compact('data'));
    }

    public function editpengelola(Request $req)
    {

        $data = Session::get('pengelola');
        // dd($req);
        $data[$req->id]['nama'] = $req->nama;
        $data[$req->id]['status'] = $req->status;
        $data[$req->id]['nohp'] = $req->nohp;

        Session::put('pengelola', $data);

        return redirect('pengelola');
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
        return view('fitur.pemasok', compact('data'));
    }

    public function editpemasok(Request $req)
    {

        $data = Session::get('pemasok');
        // dd($req);
        $data[$req->id]['nama'] = $req->nama;
        $data[$req->id]['nohp'] = $req->nohp;
        $data[$req->id]['alamat'] = $req->alamat;

        Session::put('pemasok', $data);

        return redirect('pemasok');
    }

    public function detilpemasok(Request $req)
    {
        // Session::forget('detilpemasok');
        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('locpasok');
        Session::put('locpasok', $loc);
        // dd($loc);
        $pemasok = Session::get('pemasok') == null ? [] : Session::get('pemasok');
        $data = Session::get('detilpemasok') == null ? [] : Session::get('detilpemasok');


        $isi = array_key_exists($loc, $data) ? $data[$loc]['detil'] : [];
        // dd($data);
        if ($req->nama != null) {
            $detil = [
                'nama' => $req->nama
            ];
            array_push($isi, $detil);
            $data[$loc]['detil'] = $isi;
            // dd($loc);

            Session::put('detilpemasok', $data);
            Session::put('pemasok', $pemasok);
        }
        // dd($data);
        // dd($pemasok);
        return view('fitur.detil.pemasok', compact('data', 'loc', 'pemasok'));
    }

    public function editdetilpemasok(Request $req)
    {

        $data = Session::get('detilpemasok');
        $loc = Session::get('locpasok');
        // dd($req);
        $data[$loc]['detil'][$req->id]['nama'] = $req->nama;
// dd($data);
        Session::put('detilpemasok', $data);

        return redirect('detilpemasok');
    }

    public function stok(Request $req)
    {
        // Session::flush();
        // Session::forget('barang');
        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('locstok');
        Session::put('locstok', $loc);

        $barang = Session::get('barang') == null ? [] : Session::get('barang');
        $dagangan = Session::get('dagangan') == null ? [] : Session::get('dagangan');
        // dd($loc);
        $edit = $req->get('edit');
        if ($edit != null) {
            $barang[$edit]['minimum'] = $req->minimum;
            $barang[$edit]['status'] = $req->status;
            $barang[$edit]['untung'] = $req->untung;
            $barang[$edit]['jual'] = $barang[$edit]['harga'] + $barang[$edit]['untung'];
            // dd($barang);

            Session::put('barang', $barang);
        }

        return view('fitur.stok', compact('barang'));
    }

    public function pendapatan(Request $req)
    {
        // Session::flush();   
        // dd($req);  
        $jasa = Session::get('datausahajasa') == null ? [] : Session::get('datausahajasa');
        $data = Session::get('pendapatan') == null ? [] : Session::get('pendapatan');
        $pelanggan = Session::get('pelanggan') == null ? [] : Session::get('pelanggan');

        $tambah = $req->post();
        if ($tambah != null) {
            $file = $req->file('file');
            $nama = $file->getClientOriginalName();
            $tujuan_upload = 'images/';
            $file->move($tujuan_upload, $nama);
            if (isset($req->id)) {
                $data[$req->id]['file'] = $nama;
            } else {
                $row = [
                    'file' => $nama,
                    'tanggal' => $req->tanggal,
                    'usaha' => $req->usaha,
                    'catatan' => $req->catatan,
                    'pelanggan' => $req->pelanggan,
                    'penghasilan' => 0
                ];
                array_push($data, $row);
            }
            // dd($data);
            Session::put('pendapatan', $data);
            // dd($data);
        }
        // dd($data);
        return view('fitur.pendapatan', compact('data', 'jasa', 'pelanggan'));
    }

    public function editpendapatan(Request $req)
    {

        $data = Session::get('pendapatan');
        // dd($req);
        $data[$req->id]['tanggal'] = $req->tanggal;
        $data[$req->id]['usaha'] = $req->usaha;
        $data[$req->id]['pelanggan'] = $req->pelanggan;
        $data[$req->id]['catatan'] = $req->catatan;

        Session::put('pendapatan', $data);

        return redirect('pendapatan');
    }

    public function notapendapatan(Request $req)
    {

        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokpen');

        Session::put('lokpen', $loc);
        // dd($loc);

        $pelanggan = Session::get('pelanggan') == null ? [] : Session::get('pelanggan');
        $pendapatan = Session::get('pendapatan') == null ? [] : Session::get('pendapatan');
        $jasa = Session::get('datausahajasa') == null ? [] : Session::get('datausahajasa');
        $data = Session::get('notapendapatan') == null ? [] : Session::get('notapendapatan');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;
        // dd($pendapatan);
        // dd($jasa);
        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];
        // dd($jasa);
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
        // dd($pendapatan);
        return view('fitur.detil.notapendapatan', compact('pendapatan', 'data', 'jasa', 'total', 'loc', 'pelanggan'));
    }

    public function editnotapendapatan(Request $req)
    {

        $data = Session::get('notapendapatan');
        $loc = Session::get('lokpen');
        // Session::forget('notapendapatan');
        // dd($data);
        $total = $data[$loc]['nota'][$req->id]['harga']*$data[$loc]['nota'][$req->id]['jumlah'];

        $data[$loc]['nota'][$req->id]['jenis'] = $req->jenis;
        $data[$loc]['nota'][$req->id]['harga'] = $req->harga;
        $data[$loc]['nota'][$req->id]['jumlah'] = $req->jumlah;
        $data[$loc]['nota'][$req->id]['total'] = $req->harga*$req->jumlah;
        $data[$loc]['total'] = $data[$loc]['total'] + ($req->harga*$req->jumlah) - $total;
        // dd($data);
        Session::put('notapendapatan', $data);
        // dd($data);
        return redirect('notapendapatan');
    }

    public function penjualan(Request $req)
    {
        // Session::flush(); 
        $dagang = Session::get('datausahadagang') == null ? [] : Session::get('datausahadagang');
        $data = Session::get('penjualan') == null ? [] : Session::get('penjualan');
        $pelanggan = Session::get('pelanggan') == null ? [] : Session::get('pelanggan');
        $tambah = $req->post();
        if ($tambah != null) {
            $file = $req->file('file');
            $nama = $file->getClientOriginalName();
            $tujuan_upload = 'images/';
            $file->move($tujuan_upload, $nama);
            if (isset($req->id)) {
                $data[$req->id]['file'] = $nama;
            } else {
                $row = [
                    'file' => $nama,
                    'tanggal' => $req->tanggal,
                    'usaha' => $req->usaha,
                    'catatan' => $req->catatan,
                    'pelanggan' => $req->pelanggan,
                    'penghasilan' => 0
                ];
                array_push($data, $row);
            }
            // dd($data);
            Session::put('penjualan', $data);
            // dd($data);
        }
        return view('fitur.penjualan', compact('data', 'dagang', 'pelanggan'));
    }

    public function editpenjualan(Request $req)
    {

        $data = Session::get('penjualan');
        // dd($req);
        $data[$req->id]['tanggal'] = $req->tanggal;
        $data[$req->id]['usaha'] = $req->usaha;
        $data[$req->id]['pelanggan'] = $req->pelanggan;
        $data[$req->id]['catatan'] = $req->catatan;

        Session::put('penjualan', $data);

        return redirect('penjualan');
    }

    public function notapenjualan(Request $req)
    {
        // Session::flush();
        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokpen');
        $listbarang = Session::get('barang') == null ? [] : Session::get('barang');
        Session::put('lokpen', $loc);

        $pelanggan = Session::get('pelanggan') == null ? [] : Session::get('pelanggan');
        $penjualan = Session::get('penjualan') == null ? [] : Session::get('penjualan');
        $dagang = Session::get('datausahadagang') == null ? [] : Session::get('datausahadagang');
        $data = Session::get('notapenjualan') == null ? [] : Session::get('notapenjualan');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;

        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];

        if ($req->barang != null) {

            $cariharga = array_column($listbarang, 'jual', 'nama');

            $nota = [
                'barang' => $req->barang,
                'harga' => $listbarang[$req->barang]['harga'] + $listbarang[$req->barang]['untung'],
                'jumlah' => $req->jumlah,
                'total' => ($listbarang[$req->barang]['harga'] + $listbarang[$req->barang]['untung']) * $req->jumlah,
            ];

            // dd($nota);

            $total = $total + $nota['total'];
            array_push($isi, $nota);
            $data[$loc]['nota'] = $isi;
            $data[$loc]['total'] = $total;
            $penjualan[$loc]['penghasilan'] = $total;
            // dd($loc);  
            Session::put('notapenjualan', $data);
            Session::put('penjualan', $penjualan);
        }
        // dd($data);
        // dd($listbarang);
        $filteredData = array_filter($listbarang, function ($item) {
            return $item['status'] == 'Barang Dagangan';
        });
        return view('fitur.detil.notapenjualan', compact('pelanggan', 'penjualan', 'data', 'dagang', 'total', 'loc', 'listbarang', 'filteredData'));
    }

    public function editnotapenjualan(Request $req)
    {

        $data = Session::get('notapenjualan');
        $listbarang = Session::get('barang') == null ? [] : Session::get('barang');
        $loc = Session::get('lokpen');
        // dd($data);
        // Session::forget('notapenjualan');
        // dd($req);
        $total = $data[$loc]['nota'][$req->id]['harga']*$data[$loc]['nota'][$req->id]['jumlah'];
// dd($total);
        $data[$loc]['nota'][$req->id]['barang'] = $req->barang;
        $data[$loc]['nota'][$req->id]['harga'] = $listbarang[$req->barang]['harga'];
        $data[$loc]['nota'][$req->id]['jumlah'] = $req->jumlah;
        $data[$loc]['nota'][$req->id]['total'] = $listbarang[$req->barang]['harga']*$req->jumlah;
        $data[$loc]['total'] = $data[$loc]['total'] + ($listbarang[$req->barang]['harga']*$req->jumlah) - $total;
        // dd($data);
        Session::put('notapenjualan', $data);
        // dd($data);
        return redirect('notapenjualan');
    }

    public function pembelian(Request $req)
    {
        // Session::flush();   
        // Session::forget('pembelian');  
        $data = Session::get('pembelian') == null ? [] : Session::get('pembelian');
        $pemasok = Session::get('pemasok') == null ? [] : Session::get('pemasok');
        $usaha = Session::get('datausahadagang') == null ? [] : Session::get('datausahadagang');
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
                'usaha' => $req->usaha,
                'pembelian' => 0
            ];
            array_push($data, $row);
            Session::put('pembelian', $data);
        }
        return view('fitur.pembelian', compact('pemasok', 'data','usaha'));
    }

    public function editpembelian(Request $req)
    {

        $data = Session::get('pembelian');
        // dd($req);
        $data[$req->id]['tanggal'] = $req->tanggal;
        $data[$req->id]['pemasok'] = $req->pemasok;
        $data[$req->id]['usaha'] = $req->usaha;
        $data[$req->id]['catatan'] = $req->catatan;

        Session::put('pembelian', $data);

        return redirect('pembelian');
    }

    public function notapembelian(Request $req)
    {

        $req->get('id') != null ? $loc =  $req->get('id') : $loc = Session::get('lokbeli');
        $listbarang = Session::get('detilpemasok') == null ? [] : Session::get('detilpemasok');
        $usaha = Session::get('datausahadagang') == null ? [] : Session::get('datausahadagang');

        Session::put('lokbeli', $loc);
        // dd($loc);
        // Session::forget('notapembelian');
        $pembelian = Session::get('pembelian') == null ? [] : Session::get('pembelian');


        $detilpemasok = Session::get('detilpemasok') == null ? [] : Session::get('detilpemasok');
        $pemasok = Session::get('pemasok') == null ? [] : Session::get('pemasok');
        $data = Session::get('notapembelian') == null ? [] : Session::get('notapembelian');
        $barang = Session::get('barang') == null ? [] : Session::get('barang');
        $total = isset($data[$loc]['total']) ? $data[$loc]['total'] : 0;
        // dd($data);
        $isi = array_key_exists($loc, $data) ? $data[$loc]['nota'] : [];
        // dd($tambah);
        if ($req->nama != null) {
            $nota = [
                'nama' => $req->nama,
                'harga' => $req->harga,
                'jumlah' => $req->jumlah,
                'total' => $req->harga * $req->jumlah,
            ];
            $brg = [
                'nama' => $req->nama,
                'harga' => $req->harga,
                'jumlah' => $req->jumlah,
                'minimum' => 0,
                'status' => $req->usaha,
                'untung' => 0,
                'jual' => 0
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
        // if ($listbarang[$pembelian[$loc]['pemasok']]) 
        return view('fitur.detil.notapembelian', compact('pemasok', 'pembelian', 'data', 'total', 'loc', 'listbarang', 'detilpemasok', 'usaha'));
    }

    public function editnotapembelian(Request $req)
    {

        $data = Session::get('notapembelian');
        $loc = Session::get('lokbeli');
        // Session::forget('notapendapatan');
        // dd($data);
        $total = $data[$loc]['nota'][$req->id]['harga']*$data[$loc]['nota'][$req->id]['jumlah'];

        $data[$loc]['nota'][$req->id]['jenis'] = $req->jenis;
        $data[$loc]['nota'][$req->id]['harga'] = $req->harga;
        $data[$loc]['nota'][$req->id]['jumlah'] = $req->jumlah;
        $data[$loc]['nota'][$req->id]['total'] = $req->harga*$req->jumlah;
        $data[$loc]['total'] = $data[$loc]['total'] + ($req->harga*$req->jumlah) - $total;
        // dd($data);
        Session::put('notapembelian', $data);
        // dd($data);
        return redirect('notapembelian');
    }

    public function bebanjasa(Request $req)
    {
        // Session::forget('bebanjasa');
        // Session::forget('notabebanjasa');
        $data = Session::get('bebanjasa') == null ? [] : Session::get('bebanjasa');
        // dd($data);
        $tambah = $req->post();
        if ($tambah != null) {
            $file = $req->file('file');
            $nama = $file->getClientOriginalName();
            $tujuan_upload = 'images/';
            $file->move($tujuan_upload, $nama);
            if (isset($req->id)) {
                $data[$req->id]['file'] = $nama;
            } else {
                $row = [
                    'file' => $nama,
                    'tanggal' => $req->tanggal,
                    'catatan' => $req->catatan,
                    'namabeban' => $req->namabeban,
                    'bebanjasa' => 0
                ];
                array_push($data, $row);
            }
            
            Session::put('bebanjasa', $data);
        }
        return view('fitur.bebanjasa', compact('data'));
    }

    public function editbebanjasa(Request $req)
    {

        $data = Session::get('bebanjasa');
        // dd($req);
        $data[$req->id]['tanggal'] = $req->tanggal;
        $data[$req->id]['namabeban'] = $req->namabeban;
        $data[$req->id]['catatan'] = $req->catatan;

        Session::put('bebanjasa', $data);

        return redirect('bebanjasa');
    }

    public function notabebanjasa(Request $req)
    {
        // Session::forget('bebanjasa');
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

    public function editnotabebanjasa(Request $req)
    {
        $data = Session::get('notabebanjasa');
        $loc = Session::get('lokbebanjasa');
        // Session::forget('notapendapatan');
        // dd($req);
        $total = $data[$loc]['nota'][$req->id]['harga']*$data[$loc]['nota'][$req->id]['jumlah'];
        // dd($data);
        $data[$loc]['nota'][$req->id]['jenis'] = $req->jenis;
        $data[$loc]['nota'][$req->id]['harga'] = $req->harga;
        $data[$loc]['nota'][$req->id]['jumlah'] = $req->jumlah;
        $data[$loc]['nota'][$req->id]['total'] = $req->harga*$req->jumlah;
        $data[$loc]['total'] = $data[$loc]['total'] + ($req->harga*$req->jumlah) - $total;
        // dd($data);
        Session::put('notabebanjasa', $data);
        // dd($data);
        return redirect('notabebanjasa');
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
        // dd($data);
        return view('fitur.bebandagang', ['data' => $data]);
    }

    public function editbebandagang(Request $req)
    {

        $data = Session::get('bebandagang');
        // dd($req);
        $data[$req->id]['tanggal'] = $req->tanggal;
        $data[$req->id]['namabeban'] = $req->namabeban;
        $data[$req->id]['catatan'] = $req->catatan;

        Session::put('bebandagang', $data);

        return redirect('bebandagang');
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

    public function editnotabebandagang(Request $req)
    {
        $data = Session::get('notabebandagang');
        $loc = Session::get('lokbebandagang');
        // Session::forget('notapendapatan');
        // dd($req);
        $total = $data[$loc]['nota'][$req->id]['harga']*$data[$loc]['nota'][$req->id]['jumlah'];
        // dd($data);
        $data[$loc]['nota'][$req->id]['jenis'] = $req->jenis;
        $data[$loc]['nota'][$req->id]['harga'] = $req->harga;
        $data[$loc]['nota'][$req->id]['jumlah'] = $req->jumlah;
        $data[$loc]['nota'][$req->id]['total'] = $req->harga*$req->jumlah;
        $data[$loc]['total'] = $data[$loc]['total'] + ($req->harga*$req->jumlah) - $total;
        // dd($data);
        Session::put('notabebandagang', $data);
        // dd($data);
        return redirect('notabebandagang');
      
    }
}
