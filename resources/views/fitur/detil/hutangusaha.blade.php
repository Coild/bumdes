@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Transaksi Jasa</a></li>
                            <li><a href="{{ route('get.pendapatan') }}">Pendapatan</a></li>
                            <li class="active">Nota Transaksi Pendapatan</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Nota Transaksi</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="container">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Bumdes</label>
                                                        <div class="">
                                                            <input type="text" name="nota" class="form-control"
                                                                disabled="disabled" value="{{ 'Halo' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Hutang</label>
                                                        <div class="">
                                                            <input type="text" name="tanggal" class="form-control"
                                                                disabled="disabled" value="{{ 5000 }}">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Alamat</label>
                                                        <div class="">
                                                            <input type="text" name="pelanggan" class="form-control"
                                                                disabled="disabled" value="Desa kuta">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <label class="control-label">Catatan Transaksi</label>
                                                        <div class="">
                                                            <input type="text" name="catatan" class="form-control"
                                                                disabled="disabled"
                                                                value="">
                                                        </div>
                                                    </div> --}}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->


            <div class="row">

                <div class="col-md-12">
                    <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal"
                        data-target="#tambah">
                        Bayar </button>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"> Riwayat Hutang</h3>

                        </div>

                        <div class="panel-body">

                            <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">No Transaksi</th>
                                        <th style="text-align: center;">Tanggal Transaksi</th>
                                        <th style="text-align: center;">Total Transaksi</th>
                                        <th style="text-align: center;">Hutang</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">14045</td>
                                        <td style="text-align: center;">03 Desember 2022</td>
                                        <td style="text-align: center;">70000</td>
                                        <td style="text-align: center;">25000</td>
                                        <td style="text-align: center;"><Button class="btn btn-primary">Bayar</Button></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"> Riwayat Bayar</h3>

                        </div>

                        <div class="panel-body">
                            <table id="datatable-responsive2" class="table table-hover table-bordered dt-responsive nowrap"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">No Transaksi</th>
                                        <th style="text-align: center;">Tanggal Transaksi</th>
                                        <th style="text-align: center;">Total Transaksi</th>
                                        <th style="text-align: center;">Sisa Hutang</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">14045</td>
                                        <td style="text-align: center;">05 Desember 2022</td>
                                        <td style="text-align: center;">20000</td>
                                        <td style="text-align: center;">5000</td>
                                        <td style="text-align: center;"><Button class="btn btn-primary">Bayar</Button></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




            </div>


        </div> <!-- container -->

    </div> <!-- content -->
@endsection

@section('script')
    <script>
        function bayar() {
            totaltr = document.getElementById("totaltr").value;
            totalbyr = document.getElementById("totalbyr").value;
            document.getElementById("hasil").value = totalbyr - totaltr;
        }

        function edit_data(data, id) {
            document.getElementById("edit_id").value = id;
            document.getElementById("edit_jenis").value = data['jenis'];
            document.getElementById("edit_harga").value = data['harga'];
            document.getElementById("edit_jumlah").value = data['jumlah'];
        }
    </script>
@endsection
