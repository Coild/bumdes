@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Datatables</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Xadmino</a></li>
                            <li><a href="#">Tables</a></li>
                            <li class="active">Datatables</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Pengelola</h3>

                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">
                                <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal"
                                    data-target="#tambah"> Tambah pengelola </button>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable-responsive"
                                        class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
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
                                                <td>
                                                    1
                                                </td>
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
                                                        <button class="btn btn-primary center" data-toggle="modal"
                                                            data-target="#editHasbi"> Edit </button>
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
                                                        <button class="btn btn-primary center" data-toggle="modal"
                                                            data-target="#editIma"> Edit </button>
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Pengelola</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kode Pengelola</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" disabled="disabled" value="001">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pengelola</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Nama Lengkap Pengelola" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nomor Telepon</label>
                            <div class="col-md-8">
                                <input data-parsley-type="number" type="text" class="form-control"
                                    placeholder="08XXXXXXXXXX" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Status Pengelola</label>
                            <div class="col-sm-8">
                                <select class="form-control" required>
                                    <option>Bendahara</option>
                                    <option>Pencatat Transaksi</option>
                                </select>
                            </div>
                        </div>
                        <div class="float-right">

                            <button type="button" class="btn btn-default waves-effect m-l-5"
                                data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-default waves-effect m-l-5" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button> --}}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal Edit (Pak Hasbi)-->
    <div id="editHasbi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Pengelola</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kode Pengelola</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" disabled="disabled" value="001">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pengelola</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="Pak Hasbi">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nomor Telepon</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="083117121494">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Status Pengelola</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>Bendahara</option>
                                    <option>Pencatat Transaksi</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal Edit (Pak Hasbi)-->
    <div id="editIma" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Pengelola</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kode Pengelola</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" disabled="disabled" value="001">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pengelola</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="Bu Ima">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nomor Telepon</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="083494117111">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Status Pengelola</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>Pencatat Transaksi</option>
                                    <option>Bendahara</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
