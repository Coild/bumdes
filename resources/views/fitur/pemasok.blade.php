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
                        <li class="active">Pemasok</li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daftar Pemasok</h3>

                    </div>

                    <div class="panel-body">
                        <div class="row mt-2">
                            <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambah"> Tambah Pemasok </button>
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
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <div class="conbtn">
                                                    {{ $loop->index + 1 }}
                                                </div>
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $item['nama']}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $item['nohp']}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $item['alamat']}}
                                            </td>
                                            <td>
                                                <div class="conbtn">
                                                    <button class="btn btn-primary center fa fa-edit" data-toggle="modal" data-target="#edit"></button>
                                                    <button class="btn btn-danger center fa fa-trash" style="margin-left: 2%"></button>
                                                    <button class="btn btn-success center mdi mdi-eye" style="margin-left: 2%" onclick="window.location.href='{{route('get.detilpemasok')}}?id={{ $loop->index}}'" > Barang</button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
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
                <form action="{{ route('post.pemasok') }}" method="POST" class="form-horizontal" role="form">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Pemasok</label>
                        <div class="col-md-8">
                            <input name="nama" type="text" class="form-control" placeholder="Nama Pemasok atau Nama Perusahaannya" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nomor Telepon</label>
                        <div class="col-md-8">
                            <input name="nohp" data-parsley-type="number" type="text" class="form-control" placeholder="08XXXXXXXXXX" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat Pemasok</label>
                        <div class="col-md-8">
                            <input name="alamat" type="text" class="form-control" placeholder="Alamat Pemasok atau Alamat Perusahaannya" required>
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
                <h4 class="modal-title" id="myModalLabel">Edit Data Pemasok</h4>
            </div>
            <div class="modal-body">
          
                <form class="form-horizontal" role="form">
                    

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Pengelola</label>
                        <div class="col-md-8">
                            <input name="nama" type="text" class="form-control" value="" placeholder="Nama Pemasok atau Nama Perusahaannya" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nomor Telepon</label>
                        <div class="col-md-8">
                            <input name="nohp" data-parsley-type="number" type="text" class="form-control" value="" placeholder="08XXXXXXXXXX" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat Pemasok</label>
                        <div class="col-md-8">
                            <input name="alamat" type="text" class="form-control" value="" placeholder="Alamat Pemasok atau Alamat Perusahaannya" required>
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