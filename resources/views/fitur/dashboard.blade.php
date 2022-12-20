@extends('app')

@section('css')
<!--Morris Chart CSS -->
<link rel="stylesheet" href={{ asset("plugins/morris/morris.css") }}>
@endsection

@section('content')
<!-- Start right Content here -->


<!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header-title">
                    <h4 class="pull-left page-title">Dashboard</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Xadmino</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- BAR Chart -->
            <div class="col-lg-6">
                <div class="panel panel-border panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bar Chart </h3>
                    </div>
                    <div class="panel-body">
                        <div class=" table-responsive" id="morris-bar-example" style="height: 300px"></div>
                    </div>
                </div>
            </div> <!-- col -->

            <!--  Line Chart -->
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daftar Pengelola</h3>

                    </div>

                    <div class="panel-body">
                        <div class="row mt-2" style="min-height: 300px">
                            <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                <table class="table table-hover table-bordered nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama Pengelola</th>
                                            <th style="text-align: center;">Status Posisi</th>
                                            <th style="text-align: center;">Nomor Telepon</th>
                                            <th style="text-align: center;">Foto Profil</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <div class="conbtn">
                                                1
                                            </div>
                                            <td>
                                                <!-- <a href="#"> Klikit</a> -->
                                                Pak Hasbi
                                            </td>
                                            <td>
                                                Pencatat Transaksi
                                            </td>
                                            <td>
                                                083117121494
                                            </td>
                                            <td>
                                                OnGoing
                                            </td>
                                            <td>
                                                <div class="conbtn">
                                                    <button class="btn btn-primary center" data-toggle="modal" data-target="#editHasbi"> Edit </button>
                                                    <button class="btn btn-danger center" style="margin-left: 2%"> Hapus
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                <!-- <a href="#"> Klikit</a> -->
                                                Bu Ima
                                            </td>
                                            <td>
                                                Bendahara
                                            </td>
                                            <td>
                                                083494117111
                                            </td>
                                            <td>
                                                OnGoing
                                            </td>
                                            <td>
                                                <div class="conbtn">
                                                    <button class="btn btn-primary center" data-toggle="modal" data-target="#editIma"> Edit </button>
                                                    <button class="btn btn-danger center" style="margin-left: 2%"> Hapus
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- col -->
        </div> <!-- End row-->

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Total Subscription</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>2568</b></h3>
                        <p class="text-muted"><b>48%</b> From Last 24 Hours</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Order Status</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>3685</b></h3>
                        <p class="text-muted"><b>15%</b> Orders in Last 10 months</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Unique Visitors</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>25487</b></h3>
                        <p class="text-muted"><b>65%</b> From Last 24 Hours</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Monthly Earnings</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>$2779.7</b></h3>
                        <p class="text-muted"><b>31%</b> From Last 1 month</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Total Subscription</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>2568</b></h3>
                        <p class="text-muted"><b>48%</b> From Last 24 Hours</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Order Status</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>3685</b></h3>
                        <p class="text-muted"><b>15%</b> Orders in Last 10 months</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Unique Visitors</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>25487</b></h3>
                        <p class="text-muted"><b>65%</b> From Last 24 Hours</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Monthly Earnings</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>$2779.7</b></h3>
                        <p class="text-muted"><b>31%</b> From Last 1 month</p>
                    </div>
                </div>
            </div>
        </div>


    </div> <!-- container -->

</div> <!-- content -->




@endsection

@section('script')

<!--Morris Chart-->
<script src={{ asset("plugins/morris/morris.min.js") }}></script>
<script src={{ asset("plugins/raphael/raphael-min.js") }}></script>
<script src={{ asset("pages/morris.init.js") }}></script>

@endsection