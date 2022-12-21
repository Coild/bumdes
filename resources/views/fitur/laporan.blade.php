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
                            <table style="border: none;border-collapse: collapse;width:783pt;">
                                <tbody>
                                    <tr>
                                        <td colspan="6"
                                            style='color:windowtext;font-size:19px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid black;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;background:#FFCC99;height:18.75pt;width:272pt;'>
                                            AKTIVA</td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:19px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid black;border-bottom:.5pt solid windowtext;border-left:none;background:#FFCC99;width:205pt;'>
                                            Rp.</td>
                                        <td colspan="5"
                                            style='color:windowtext;font-size:19px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:#FFCC99;width:180pt;'>
                                            PASIVA</td>
                                        <td
                                            style='color:windowtext;font-size:19px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:.5pt solid windowtext;background:#FFCC99;width:126pt;'>
                                            Rp.</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;background:yellow;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:.5pt solid windowtext;background:yellow;border-top:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border:.5pt solid windowtext;background:yellow;border-top:none;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;background:#CCFFCC;height:15.75pt;'>
                                            1.</td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            HARTA</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;border-top:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            2.</td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            HUTANG</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;border-top:none;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            1.1.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Kas&nbsp;</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 23.800.000</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            2.1.</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            Hipotik/pinjaman</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Kas Jasa penjualan Gas</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            &nbsp;Rp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 5.512.500</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            2.2.</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            PADes</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Kas usaha Homestay</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;7.000.000
                                        </td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            2.3.</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Dana Sosial</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Kas &nbsp;Percetakan</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            2.4.</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Bonus Pengurus</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Kas &nbsp;Peternakan</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 12.675.000</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Kas SPP</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 13.551.500</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="4"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Kas pengolahan jasa pengangkutan Sampah</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Total Kas</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;62.539.000</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:right;vertical-align:bottom;border:none;'>
                                            1,2</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:left;vertical-align:bottom;border:none;'>
                                            Bank</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.363.692
                                        </td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:right;vertical-align:bottom;border:none;'>
                                            1,3</td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:left;vertical-align:bottom;border:none;'>
                                            Persediaan Barang&nbsp;</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:right;vertical-align:bottom;border:none;'>
                                            1.4.</td>
                                        <td colspan="4"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Persediaan Barang Bumdes Mart</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:left;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;background:#CCFFFF;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;64.902.692</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            1.5.</td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Iventaris</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            1.5.1.</td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Nilai Iventaris</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            1.5.2.</td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Akumulasi Penyusutan</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Total Hutang</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;background:#CCFFFF;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Nilai Buku Iventaris</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp;</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            1.7.</td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Rupa-rupa Aktiva</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;background:#CCFFCC;'>
                                            3.</td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;background:#CCFFCC;'>
                                            MODAL</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            (Selisih Pencatatan)</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;background:#CCFFFF;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            3.1.</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Modal Dari PemDes</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;background:#339933;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;background:#CCFFFF;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Tahun 2018</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;background:#339933;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            140.000.000</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;background:#CCFFFF;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Tahun 2019</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;background:#339933;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            179.000.000</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;background:#CCFFFF;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Tahun 2020</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;background:#339933;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; 20.000.000</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            3.2.</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Bantuan dari Pusat</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; 50.000.000</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            1.6.</td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Aktiva Tetap</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            3.3.</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Modal Pihak ketiga</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            1.6.1.</td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Nilai Aktiva Tetap</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 15.000.000</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:left;vertical-align:bottom;border:none;'>
                                            3,4</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            Hibah Pihak Ketiga</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            1.6.2.</td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Akumulasi Penyusutan</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            50.000</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            3.5.</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Surplus/Defisit Ditahan</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Nilai Buku Aktiva Tetap</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;background:#CCFFFF;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 14.950.000</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            3.6.</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Surplus/Defisit Berjalan</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;background:#CCFFFF;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Total Modal</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;background:#CCFFFF;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            389.000.000</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border:.5pt solid windowtext;'>
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:middle;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid black;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            TOTAL AKTIVA</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:.5pt solid windowtext;vertical-align:middle;background:#CCFFFF;border-top:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;64.902.692</td>
                                        <td colspan="5"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:middle;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            TOTAL PASIVA</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:.5pt solid windowtext;vertical-align:middle;background:#CCFFFF;border-top:none;'>
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
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:bottom;border:none;height:15.0pt;width:601pt;">
                                            LAPORAN LABA / RUGI KOMULATIF</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;width:48pt;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:bottom;border:none;height:15.0pt;">
                                            BUMDES PUTRI NYALE DESA KUTA</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            PERIODE : s/d 31 &nbsp;DESEMBER 2020</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"
                                            style='color:windowtext;font-size:19px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:middle;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid black;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;background:#FFCC99;height:18.75pt;width:384pt;'>
                                            U R A I A N</td>
                                        <td
                                            style='color:windowtext;font-size:19px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;background:#FFCC99;border-left:none;width:110pt;'>
                                            Rp.</td>
                                        <td
                                            style='color:windowtext;font-size:19px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;background:#FFCC99;border-left:none;width:107pt;'>
                                            Rp.</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;background:yellow;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:13px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;border-left:none;background:yellow;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;background:#CCFFCC;height:15.75pt;'>
                                            4.</td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            PENDAPATAN</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;border-top:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            4.1</td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pendapatan Operasional</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            4.1.1.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pendapatan Jasa penjualan Gas</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:right;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            5.512.500</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;22.914.500</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;background:white;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            4.1.2.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pendapatan usaha Homestay</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            &nbsp;Rp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;9.000.000</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;background:white;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            4.1.3</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pendapatan &nbsp;Percetakan</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:right;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            0</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;background:white;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            4.1.4.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pendapatan &nbsp;Peternakan</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:right;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            1.020.000</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;background:white;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            4.1.5.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pendapatan SPP</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:right;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            7.382.000</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;background:white;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pendapatan pengolahan jasa pengangkutan Sampah</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td colspan="2"
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            Pendapatan Operasional Lain-lain</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;">
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;- &nbsp;&nbsp;</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -
                                            &nbsp;&nbsp;</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Total Pendapatan Operasional</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22.914.500</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            4.2.</td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pendapatan Non Operasional</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            4.2.1.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Bunga Bank&nbsp;</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp;190.804</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            190.804</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            4.2.4.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pendapatan Non Operasional Lian-lain</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.75pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Total Pendapatan Non Operasional</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;background:#CCFFFF;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 190.804
                                        </td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid black;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            TOTAL PENDAPATAN</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;border-left:none;border-top:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border:.5pt solid windowtext;background:#CCFFFF;border-top:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;23.105.304</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;border-left:none;border-top:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;background:#CCFFCC;height:15.75pt;'>
                                            5.</td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            BIAYA</td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:none;background:#CCFFCC;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:16px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;border-top:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5,1,</td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Biaya Operasional</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.1.1.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            ATK</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp;640.000</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            640.000</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.1.2.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            Biaya Kantor</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.1.3.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Honor Pengurus dan karyawan</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;2.000.000</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.000.000
                                        </td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.1.4.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Biaya Penyusutan Inventaris</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.1.5.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Operasional Badan Pengawas dan Penasehat</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.1.7</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Lainnya</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Total Biaya Operasional</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;background:#CCFFFF;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2.640.000</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.2.</td>
                                        <td colspan="3"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Biaya Non Operasional</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.2.1.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Pajak Bunga Bank&nbsp;</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp;67.197</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; 67.197</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.2.2.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Administrasi Bank&nbsp;</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp;33.521</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;33.521</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            5.2.3.</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Biaya Non Operasional Lain-lain</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td colspan="2"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            Total Biaya Non Operasional</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;background:#CCFFFF;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 100.718
                                        </td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:.5pt solid windowtext;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid black;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            TOTAL BIAYA</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;border-left:none;background:#CCFFFF;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2.740.718
                                        </td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;border-left:none;'>
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:center;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid black;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;height:15.0pt;'>
                                            LABA / RUGI</td>
                                        <td
                                            style='color:windowtext;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:"Times New Roman", serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;border-left:none;background:#CCFFFF;border-top:none;'>
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20.364.586</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td colspan="2"
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            Diperiksa oleh</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            Dibuat oleh&nbsp;</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td colspan="2"
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            &nbsp;Ketua Bumdes,</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            Bendahara,</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;height:15.0pt;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            ( Emur )</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            ( MARIANAH )</td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
                                            <br></td>
                                        <td
                                            style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;">
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
                                            <td colspan="2"
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid black;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;width:380pt;">
                                                BUMDes Kuta Desa Kuta</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid black;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Laporan  Arus Kas</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid black;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Untuk periode yang berakhir 31 Desember 2021</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                <br>
                                            </td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                ARUS KAS DARI AKTIVITAS OPERASI</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Arus Kas Masuk</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Penerimaan Kas dari Pendapatan</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Jumlah arus kas masuk dari aktivitas operasi</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Arus Kas Keluar</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Pengeluaran Kas untuk pembayaran beban-beban</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Jumlah arus kas keluar dari aktivitas operasi</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Arus kas bersih dari aktivitas operasi</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;20.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                <br>
                                            </td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                ARUS KAS DARI AKTIVITAS INVESTASI</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Arus Kas Masuk</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Penerimaan Kas dari Penjualan Investasi/Aset Tetap</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Jumlah arus kas masuk dari aktivitas Investasi</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Arus Kas Keluar</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Pengeluaran Kas untuk Pembelian Investasi/Aset Tetap</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Jumlah arus kas keluar dari aktivitas Investasi</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Arus kas bersih dari aktivitas Investasi</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;20.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                <br>
                                            </td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                ARUS KAS DARI AKTIVITAS PEMBIAYAAN</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Arus Kas Masuk</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Penerimaan utang jangka panjang dan tambahan penyertaan modal</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Jumlah arus kas masuk dari aktivitas Pembiayaan</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Arus Kas Keluar</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Pembayaran utang jangka panjang dan bagi hasil penyertaan modal</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Jumlah arus kas keluar dari aktivitas Pembiayaan</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Arus kas bersih dari aktivitas Pembiayaan</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;20.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                <br>
                                            </td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Kenaikan (penurunan) Kas</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;60.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:none;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Saldo kas awal tahun</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:none;border-left:none;">
                                                &nbsp;Rp &nbsp;10.000</td>
                                        </tr>
                                        <tr>
                                            <td
                                                style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:none;border-bottom:.5pt solid windowtext;border-left:.5pt solid windowtext;height:15.0pt;">
                                                Saldo kas akhir tahun</td>
                                            <td
                                                style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:general;vertical-align:bottom;border:none;border-top:none;border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;border-left:none;">
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
