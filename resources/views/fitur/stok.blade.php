@extends('app')

@section('content')
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header-title">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Dagang</a></li>
                        <li class="active">Stok Barang</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daftar Stok Barang</h3>

                    </div>

                    <div class="panel-body">
                        <div class="row mt-2">
                            <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambah"> Tambah pengelola </button>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama Barang</th>
                                            <th style="text-align: center;">Jumlah Barang</th>
                                            <th style="text-align: center;">Jumlah Minimum Barang</th>
                                            <th style="text-align: center;">Harga Jual</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @if ($data != null)
                                        <tr>
                                            <td>
                                                <div class="conbtn">
                                                    {{1}}
                                                </div>
                                            </td>
                                            <td>
                                                {{"Barang 1"}}
                                            </td>
                                            <td>
                                                {{25}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $data['minimum']}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $data['harga']}}
                                            </td>
                                            <td>
                                                <div class="conbtn">
                                                    <button class="btn btn-primary center fa fa-edit" data-toggle="modal" data-target="#edit"></button>
                                                    <button class="btn btn-danger center fa fa-trash" style="margin-left: 2%"></button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif

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
                <h4 class="modal-title" id="myModalLabel">Tambah Stok Barang</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    @csrf

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Barang</label>
                        <div class="col-md-8">
                            <input name="nama" disabled="disabled" type="text" class="form-control" value="Barang 1" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Jumlah Barang</label>
                        <div class="col-md-8">
                            <input name="jumlah" disabled="disabled" type="text" class="form-control" value="25" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Jumlah Minimum</label>
                        <div class="col-md-8">
                            <input name="minimum" data-parsley-type="number" type="text" class="form-control" placeholder="Jumlah Minimum Ketersediaan Barang" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Harga Jual</label>
                        <div class="col-md-8">
                            <input name="harga" data-parsley-type="number" type="text" class="form-control" placeholder="Harga Jual dari Barang" required />
                        </div>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-default waves-effect m-l-5" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection