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
                        <li class="active">Pelanggan</li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daftar Pelanggan</h3>

                    </div>

                    <div class="panel-body">
                        <div class="row mt-2">
                            <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambah"> Tambah Pelanggan </button>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama Pelanggan</th>
                                            <th style="text-align: center;">Nomor Telepon</th>
                                            <th style="text-align: center;">Alamat Pelanggan</th>
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
                                                {{$data ==null ? 'kosong' : $data['nama']}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $data['nohp']}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $data['alamat']}}
                                            </td>
                                            <td>
                                                <div class="conbtn">
                                                    <button class="btn btn-primary center fa fa-edit" data-toggle="modal" data-target="#edit"></button>
                                                    <button class="btn btn-danger center fa fa-trash" style="margin-left: 2%"></button>
                                                    <button class="btn btn-success center mdi mdi-eye" style="margin-left: 2%" onclick="window.location.href='/detilpemasok'"> Barang</button>
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
                <h4 class="modal-title" id="myModalLabel">Tambah Data Pelanggan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Pelanggan</label>
                        <div class="col-md-8">
                            <input name="kode" type="text" class="form-control" disabled="disabled" value="001">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Pelanggan</label>
                        <div class="col-md-8">
                            <input name="nama" type="text" class="form-control" placeholder="Nama Pelanggan atau Nama Perusahaannya" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nomor Telepon</label>
                        <div class="col-md-8">
                            <input name="nohp" data-parsley-type="number" type="text" class="form-control" placeholder="08XXXXXXXXXX" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat Pelanggan</label>
                        <div class="col-md-8">
                            <input name="alamat" type="text" class="form-control" placeholder="Alamat Pelanggan atau Alamat Perusahaannya" required>
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

<!-- sample modal edit -->
<div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Pelanggan</h4>
            </div>
            <div class="modal-body">
                @if ($data != null)
                <form class="form-horizontal" role="form">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Pelanggan</label>
                        <div class="col-md-8">
                            <input name="kode" type="text" class="form-control" disabled="disabled" value="001">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Pelanggan</label>
                        <div class="col-md-8">
                            <input name="nama" type="text" class="form-control" value="{{$data ==null ? 'kosong' : $data['nama']}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nomor Telepon</label>
                        <div class="col-md-8">
                            <input name="nohp" data-parsley-type="number" type="text" class="form-control" value="{{$data ==null ? 'kosong' : $data['nohp']}}" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat Pelanggan</label>
                        <div class="col-md-8">
                            <input name="alamat" type="text" class="form-control" value="{{$data ==null ? 'kosong' : $data['alamat']}}" required>
                        </div>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-default waves-effect m-l-5" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                    </div>
                </form>
                @endif
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection