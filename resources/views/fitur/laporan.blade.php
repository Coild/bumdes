@extends('app')

@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container">



            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs navtab-bg">
                        <li class="active">
                            <a href="#home" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                <span class="hidden-xs">Neraca</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#profile" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                <span class="hidden-xs">Arus Kas</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#messages" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                <span class="hidden-xs">Laba Rugi</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="home">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    Jangka Waktu
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputEmail2"
                                        placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    Sampai
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputPassword2"
                                        placeholder="Password">
                                </div>

                                <div class="form-group">
                                    Jenis Usaha
                                    <select name="status" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" required>
                                        <option>Bendahara</option>
                                        <option>Pencatat Transaksi</option>
                                    </select>
                                </div>

                                <button type="submit"
                                    class="btn btn-success waves-effect waves-light m-l-10">Unduh</button>
                            </form>
                            <p>&nbsp;</p>
                            <table style="">
                                <tbody>
                                    <tr>
                                        <td colspan="6"
                                            style=''>
                                            AKTIVA</td>
                                        <td colspan="2"
                                            style=''>
                                            Rp.</td>
                                        <td colspan="5"
                                            style=''>
                                            PASIVA</td>
                                        <td
                                            style=''>
                                            Rp.</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style=' '>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=' serif;text-align:general;vertical-align:bottom;background:yellow;'>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=' '>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style='background:yellow;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style=''>
                                            1.</td>
                                        <td colspan="2"
                                            style=''>
                                            HARTA</td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            2.</td>
                                        <td colspan="3"
                                            style=''>
                                            HUTANG</td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            1.1.</td>
                                        <td>
                                            Kas&nbsp;</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 23.800.000</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            2.1.</td>
                                        <td>
                                            <br></td>
                                        <td colspan="2"
                                            >
                                            Hipotik/pinjaman</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Kas Jasa penjualan Gas</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp;Rp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 5.512.500</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            2.2.</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            PADes</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Kas usaha Homestay</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;7.000.000
                                        </td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            2.3.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Dana Sosial</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Kas &nbsp;Percetakan</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            2.4.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Bonus Pengurus</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Kas &nbsp;Peternakan</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 12.675.000</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Kas SPP</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 13.551.500</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Kas pengolahan jasa pengangkutan Sampah</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Total Kas</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;62.539.000</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td
                                            style=' serif;text-align:right;vertical-align:bottom;border:none;'>
                                            1,2</td>
                                        <td
                                            style=' serif;text-align:left;vertical-align:bottom;border:none;'>
                                            Bank</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.363.692
                                        </td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td
                                            style=' serif;text-align:right;vertical-align:bottom;border:none;'>
                                            1,3</td>
                                        <td colspan="3"
                                            style=' serif;text-align:left;vertical-align:bottom;border:none;'>
                                            Persediaan Barang&nbsp;</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td
                                            style=' serif;text-align:right;vertical-align:bottom;border:none;'>
                                            1.4.</td>
                                        <td >
                                            Persediaan Barang Bumdes Mart</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td
                                            style=' serif;text-align:left;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;64.902.692</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            1.5.</td>
                                        <td >
                                            Iventaris</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td >
                                            1.5.1.</td>
                                        <td >
                                            Nilai Iventaris</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td >
                                            1.5.2.</td>
                                        <td >
                                            Akumulasi Penyusutan</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            Total Hutang</td>
                                        <td
                                            style=''>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Nilai Buku Iventaris</td>
                                        <td>
                                            &nbsp; &nbsp;</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            1.7.</td>
                                        <td >
                                            Rupa-rupa Aktiva</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=''>
                                            3.</td>
                                        <td colspan="3"
                                            style=''>
                                            MODAL</td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            (Selisih Pencatatan)</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            3.1.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Modal Dari PemDes</td>
                                        <td
                                            style='background:#339933;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Tahun 2018</td>
                                        <td
                                            style='background:#339933;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            140.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Tahun 2019</td>
                                        <td
                                            style='background:#339933;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            179.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Tahun 2020</td>
                                        <td
                                            style='background:#339933;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; 20.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            3.2.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Bantuan dari Pusat</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; 50.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            1.6.</td>
                                        <td >
                                            Aktiva Tetap</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            3.3.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Modal Pihak ketiga</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td >
                                            1.6.1.</td>
                                        <td >
                                            Nilai Aktiva Tetap</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 15.000.000</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=' serif;text-align:left;vertical-align:bottom;border:none;'>
                                            3,4</td>
                                        <td>
                                            <br></td>
                                        <td colspan="2"
                                            >
                                            Hibah Pihak Ketiga</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td >
                                            1.6.2.</td>
                                        <td >
                                            Akumulasi Penyusutan</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            50.000</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            3.5.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Surplus/Defisit Ditahan</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Nilai Buku Aktiva Tetap</td>
                                        <td
                                            style=''>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 14.950.000</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            3.6.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Surplus/Defisit Berjalan</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            Total Modal</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            389.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"
                                            style=''>
                                            TOTAL AKTIVA</td>
                                        <td
                                            style=''>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;64.902.692</td>
                                        <td colspan="5"
                                            style=''>
                                            TOTAL PASIVA</td>
                                        <td
                                            style=''>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;389.000.000
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane active" id="profile">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    Jangka Waktu
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputEmail2"
                                        placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    Sampai
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputPassword2"
                                        placeholder="Password">
                                </div>

                                <div class="form-group">
                                    Jenis Usaha
                                    <select name="status" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" required>
                                        <option>Bendahara</option>
                                        <option>Pencatat Transaksi</option>
                                    </select>
                                </div>

                                <button type="submit"
                                    class="btn btn-success waves-effect waves-light m-l-10">Unduh</button>
                            </form>
                            <p>&nbsp;</p>
                            <table style="border: none;border-collapse: collapse;width:649pt;">
                                <tbody>
                                    <tr>
                                        <td colspan="8"
                                            style=" sans-serif;text-align:center;vertical-align:bottom;border:none;width:601pt;">
                                            LAPORAN LABA / RUGI KOMULATIF</td>
                                        <td
                                            style="width:48pt;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"
                                            style=" sans-serif;text-align:center;vertical-align:bottom;border:none;">
                                            BUMDES PUTRI NYALE DESA KUTA</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"
                                            >
                                            PERIODE : s/d 31 &nbsp;DESEMBER 2020</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"
                                            >
                                            U R A I A N</td>
                                        <td>
                                            Rp.</td>
                                        <td>
                                            Rp.</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style=' '>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style=''>
                                            4.</td>
                                        <td colspan="2"
                                            style=''>
                                            PENDAPATAN</td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            4.1</td>
                                        <td >
                                            Pendapatan Operasional</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            4.1.1.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Pendapatan Jasa penjualan Gas</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.512.500</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;22.914.500</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            4.1.2.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Pendapatan usaha Homestay</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp;Rp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;9.000.000</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            4.1.3</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Pendapatan &nbsp;Percetakan</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            0</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            4.1.4.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Pendapatan &nbsp;Peternakan</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            1.020.000</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            4.1.5.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Pendapatan SPP</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            7.382.000</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Pendapatan pengolahan jasa pengangkutan Sampah</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td colspan="2"
                                            >
                                            Pendapatan Operasional Lain-lain</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;- &nbsp;&nbsp;</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -
                                            &nbsp;&nbsp;</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            Total Pendapatan Operasional</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22.914.500</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            4.2.</td>
                                        <td >
                                            Pendapatan Non Operasional</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            4.2.1.</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            Bunga Bank&nbsp;</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp;190.804</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            190.804</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            4.2.4.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Pendapatan Non Operasional Lian-lain</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Total Pendapatan Non Operasional</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 190.804
                                        </td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style='  '>
                                            <br></td>
                                        <td
                                            style=' '>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"
                                            style=''>
                                            TOTAL PENDAPATAN</td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;23.105.304</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style=''>
                                            5.</td>
                                        <td colspan="2"
                                            style=''>
                                            BIAYA</td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5,1,</td>
                                        <td >
                                            Biaya Operasional</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.1.1.</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            ATK</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp;640.000</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            640.000</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.1.2.</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            Biaya Kantor</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.1.3.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Honor Pengurus dan karyawan</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;2.000.000</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.000.000
                                        </td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.1.4.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Biaya Penyusutan Inventaris</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.1.5.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Operasional Badan Pengawas dan Penasehat</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.1.7</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            Lainnya</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Total Biaya Operasional</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.640.000</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.2.</td>
                                        <td >
                                            Biaya Non Operasional</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.2.1.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Pajak Bunga Bank&nbsp;</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp;67.197</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; 67.197</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.2.2.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Administrasi Bank&nbsp;</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp;33.521</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;33.521</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            5.2.3.</td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Biaya Non Operasional Lain-lain</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td >
                                            Total Biaya Non Operasional</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 100.718
                                        </td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"
                                            style=''>
                                            TOTAL BIAYA</td>
                                        <td
                                            style=''>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2.740.718
                                        </td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td
                                            style=''>
                                            <br></td>
                                        <td
                                            style=' '>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"
                                            style=''>
                                            LABA / RUGI</td>
                                        <td
                                            style=''>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20.364.586</td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td colspan="2"
                                            >
                                            Diperiksa oleh</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            Dibuat oleh&nbsp;</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td colspan="2"
                                            >
                                            &nbsp;Ketua Bumdes,</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            Bendahara,</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            ( Emur )</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                        <td>
                                            ( MARIANAH )</td>
                                        <td>
                                            <br></td>
                                        <td>
                                            <br></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><br></p>
                        </div>
                        <div class="tab-pane" id="messages">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    Jangka Waktu
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputEmail2"
                                        placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    Sampai
                                    <input type="date" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" id="exampleInputPassword2"
                                        placeholder="Password">
                                </div>

                                <div class="form-group">
                                    Jenis Usaha
                                    <select name="status" class="form-control"
                                        style="margin-left: 15px; margin-right: 15px;" required>
                                        <option>Bendahara</option>
                                        <option>Pencatat Transaksi</option>
                                    </select>
                                </div>

                                <button type="submit"
                                    class="btn btn-success waves-effect waves-light m-l-10">Unduh</button>
                            </form>
                            <center>
                                <p>&nbsp;</p>
                                <table style="border: none;border-collapse: collapse;width:380pt;">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                BUMDes Kuta Desa Kuta</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Laporan  Arus Kas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Untuk periode yang berakhir 31 Desember 2021</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                <br>
                                            </td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                ARUS KAS DARI AKTIVITAS OPERASI</td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Arus Kas Masuk</td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Penerimaan Kas dari Pendapatan</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jumlah arus kas masuk dari aktivitas operasi</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Arus Kas Keluar</td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Pengeluaran Kas untuk pembayaran beban-beban</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Jumlah arus kas keluar dari aktivitas operasi</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Arus kas bersih dari aktivitas operasi</td>
                                            <td>
                                                &nbsp;Rp &nbsp;20.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                <br>
                                            </td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                ARUS KAS DARI AKTIVITAS INVESTASI</td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Arus Kas Masuk</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Penerimaan Kas dari Penjualan Investasi/Aset Tetap</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Jumlah arus kas masuk dari aktivitas Investasi</td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Arus Kas Keluar</td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Pengeluaran Kas untuk Pembelian Investasi/Aset Tetap</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Jumlah arus kas keluar dari aktivitas Investasi</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Arus kas bersih dari aktivitas Investasi</td>
                                            <td>
                                                &nbsp;Rp &nbsp;20.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                <br>
                                            </td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                ARUS KAS DARI AKTIVITAS PEMBIAYAAN</td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Arus Kas Masuk</td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Penerimaan utang jangka panjang dan tambahan penyertaan modal</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Jumlah arus kas masuk dari aktivitas Pembiayaan</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Arus Kas Keluar</td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Pembayaran utang jangka panjang dan bagi hasil penyertaan modal</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Jumlah arus kas keluar dari aktivitas Pembiayaan</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Arus kas bersih dari aktivitas Pembiayaan</td>
                                            <td>
                                                &nbsp;Rp &nbsp;20.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                <br>
                                            </td>
                                            <td>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Kenaikan (penurunan) Kas</td>
                                            <td>
                                                &nbsp;Rp &nbsp;60.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                >
                                                Saldo kas awal tahun</td>
                                            <td>
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                                Saldo kas akhir tahun</td>
                                            <td
                                                >
                                                &nbsp;Rp &nbsp;70.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
