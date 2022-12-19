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
                        <li class="active">Data Pemasok</li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Pemasok</h3>

                    </div>

                    <div class="panel-body">
                        <div class="row mt-2">
                            <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambah"> Tambah Data Akun </button>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama Pemasok</th>
                                            <th style="text-align: center;">Nomor Telepon</th>
                                            <th style="text-align: center;">Alamat Pemasok</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Ega
                                            </td>
                                            <td>
                                                081171113494
                                            </td>
                                            <td>
                                                Desa Kuripan
                                            </td>
                                            <td>
                                                <div class="conbtn">
                                                    <button class="btn btn-primary center fa fa-edit" data-toggle="modal" data-target="#edit"></button>
                                                    <button class="btn btn-danger center fa fa-trash" style="margin-left: 2%"></button>
                                                    <button class="btn btn-success center mdi mdi-eye" style="margin-left: 2%" onclick="window.location.href='/detilpemasok'"> Barang</button>
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
                <h4 class="modal-title" id="myModalLabel">Tambah Data Pemasok</h4>
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
                        <label class="col-md-4 control-label">Nama Pemasok</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Nama Pemasok atau Nama Perusahaannya" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nomor Telepon</label>
                        <div class="col-md-8">
                            <input data-parsley-type="number" type="text" class="form-control" placeholder="08XXXXXXXXXX" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat Pemasok</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Alamat Pemasok atau Alamat Perusahaannya" required>
                        </div>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-default waves-effect m-l-5" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#tambahbarang">Simpan</button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="tambahbarang" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Barang</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" disabled="disabled" value="001">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Barang</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Nama Pemasok atau Nama Perusahaannya" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect m-l-5" data-dismiss="modal">Simpan dan Kembali</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#tambahbarang">Tambah Barang Lagi</button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Edit (1)-->
<div id="edit1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Akun</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Akun</label>
                        <div class="col-md-8">
                            <input data-parsley-type="number" type="text" class="form-control" value="11011011" data-parsley-maxlength="8" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Akun</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="Kas" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Jenis Akun</label>
                        <div class="col-sm-8">
                            <select class="form-control" required>
                                <option>Header</option>
                                <option>Sub Header</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Klasifikasi</label>
                        <div class="col-sm-8">
                            <select class="form-control" required>
                                <option>Debit</option>
                                <option>Kredit</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nilai Akun</label>
                        <div class="col-md-8">
                            <input data-parsley-type="number" type="text" class="form-control" value="2000000" required />
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
<!-- Modal Edit (2)-->
<div id="edit2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Akun</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Akun</label>
                        <div class="col-md-8">
                            <input data-parsley-type="number" type="text" class="form-control" value="11011012" data-parsley-maxlength="8" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Akun</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="Hutang" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Jenis Akun</label>
                        <div class="col-sm-8">
                            <select class="form-control" required>
                                <option>Sub Header</option>
                                <option>Header</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Klasifikasi</label>
                        <div class="col-sm-8">
                            <select class="form-control" required>
                                <option>Kredit</option>
                                <option>Debit</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nilai Akun</label>
                        <div class="col-md-8">
                            <input data-parsley-type="number" type="text" class="form-control" value="400000" required />
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