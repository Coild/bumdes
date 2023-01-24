@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Master Data</a></li>
                            <li><a href="{{ route('get.pemasok') }}">Pemasok</a></li>
                            <li class="active">Daftar Barang</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Barang</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="container">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">

                                                    <div class="form-group">
                                                        <label class="control-label">Nama Usaha</label>
                                                        <div class="">
                                                            <input type="text" class="form-control" disabled="disabled"
                                                                value="{{"Nama USaha" }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Jenis Usaha</label>
                                                        <div class="">
                                                            <input type="text" class="form-control" disabled="disabled"
                                                                value="{{ "Jasa" }}">
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="m-t-5">
                                                <form class="form" role="form">
                                                    <div class="form-group">
                                                        <label class="control-label">Nomor Telepon</label>
                                                        <div class="">
                                                            <input type="text" class="form-control" disabled="disabled"
                                                                value="{{ "018041740" }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Alamat Pemasok</label>
                                                        <div class="">
                                                            <input type="text" class="form-control" disabled="disabled"
                                                                value="{{ 'Jln Raya' }}">
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px"
                                        data-toggle="modal" data-target="#tambah"> Tambah Barang </button>
                                    <table id="datatable-responsive"
                                        class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Tanggal</th>
                                                <th style="text-align: center;">Nama Barang</th>
                                                <th style="text-align: center;">Harga</th>
                                                <th style="text-align: center;">Jumlah</th>
                                                <th style="text-align: center;">Total</th>
                                                <th style="text-align: center;">Bayar</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;">No</td>
                                                <td style="text-align: center;">27 Desember 2022</td>
                                                <td style="text-align: center;">Gas</td>
                                                <td style="text-align: center;">200000</td>
                                                <td style="text-align: center;">3</td>
                                                <td style="text-align: center;">60000</td>
                                                <td style="text-align: center;">50000</td>
                                                <td style="text-align: center;"><button
                                                        class="btn btn-success">Lihat</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <!-- sample modal content -->
    <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Barang</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('post.detilpemasok') }}" class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Barang</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control" placeholder="Nama Barang"
                                    required>
                            </div>
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-default waves-effect m-l-5"
                                data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal Edit (1)-->
    <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Barang</h4>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('post.editdetilpemasok') }}">
                        @csrf
                        <input type="hidden" id="edit_id" name="id">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Barang</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control" id="edit_nama"
                                    placeholder="Nama Barang" required>
                            </div>
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-default waves-effect m-l-5"
                                data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                        </div>
                    </form>

                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    <script>
        function edit_data(data, id) {
            console.log('editdata: ' + data['nama']);
            document.getElementById("edit_id").value = id;
            document.getElementById("edit_nama").value = data['nama'];
        }
    </script>
@endsection
