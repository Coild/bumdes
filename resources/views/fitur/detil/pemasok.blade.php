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
                        <li><a href="/pemasok">Data Pemasok</a></li>
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
                                                    <label class="control-label">Kode Akun</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" disabled="disabled" value="001">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nama Pemasok</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" disabled="disabled" value="Nama Pemasok">
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
                                                        <input type="text" class="form-control" disabled="disabled" value="083XXXXXXXX">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Alamat Pemasok</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" disabled="disabled" value="Alamat Pemasok">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambah"> Tambah Barang </button>
                                <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Kode Barang</th>
                                            <th style="text-align: center;">Nama Barang</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="conbtn">
                                                    1
                                                </div>
                                            </td>
                                            <td>
                                                11011011
                                            </td>
                                            <td>
                                                Gas
                                            </td>
                                            <td>
                                                <div class="conbtn">
                                                    <button class="btn btn-primary center fa fa-edit" data-toggle="modal" data-target="#edit"></button>
                                                    <button class="btn btn-danger center fa fa-trash" style="margin-left: 2%"></button>
                                                </div>
                                            </td>
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
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Pemasok</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" disabled="disabled" value="001">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Barang</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Nama Barang" required>
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
<!-- Modal Edit (1)-->
<div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Barang</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Pemasok</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" disabled="disabled" value="001">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Barang</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="Nama Barang" required>
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