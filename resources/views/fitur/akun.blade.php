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
                        <li class="active">Data Akun</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Akun</h3>

                    </div>

                    <div class="panel-body">
                        <div class="row mt-2">
                            {{-- <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambah"> Tambah Data Akun </button> --}}
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Kode Akun</th>
                                            <th style="text-align: center;">Nama Akun</th>
                                            <th style="text-align: center;">Jenis Akun</th>
                                            <th style="text-align: center;">Klasifikasi</th>
                                            {{-- <th style="text-align: center;">Nilai Akun</th> --}}
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
                                                {{$data ==null ? 'kosong' : $data['kode']}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $data['nama']}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $data['jenis']}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $data['klasifikasi']}}
                                            </td>
                                            {{-- <td>
                                                {{$data ==null ? 'kosong' : $data['nilai']}}
                                            </td> --}}
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
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Akun</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Akun</label>
                        <div class="col-md-8">
                            <input name="kode" data-parsley-type="number" type="text" class="form-control" placeholder="Kode Akun (contoh: 11011012)" data-parsley-maxlength="8" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Akun</label>
                        <div class="col-md-8">
                            <input name="nama" type="text" class="form-control" placeholder="Nama Akun" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Jenis Akun</label>
                        <div class="col-sm-8">
                            <select name="jenis" class="form-control" required>
                                <option value="Header">Header</option>
                                <option value="Sub Header">Sub Header</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Klasifikasi</label>
                        <div class="col-sm-8">
                            <select name="klasifikasi" class="form-control" required>
                                <option value="Debit">Debit</option>
                                <option value="Kredit">Kredit</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nilai Akun</label>
                        <div class="col-md-8">
                            <input name="nilai" data-parsley-type="number" type="text" class="form-control" placeholder="Total Nilai Akun dalam Rupiah" required />
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
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Akun</h4>
            </div>
            <div class="modal-body">
                @if ($data != null)
                <form class="form-horizontal" role="form">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Akun</label>
                        <div class="col-md-8">
                            <input name="kode" data-parsley-type="number" type="text" class="form-control" value="{{$data ==null ? 'kosong' : $data['kode']}}" data-parsley-maxlength="8" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Akun</label>
                        <div class="col-md-8">
                            <input name="nama" type="text" class="form-control" value="{{$data ==null ? 'kosong' : $data['nama']}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Jenis Akun</label>
                        <div class="col-sm-8">
                            <select name="jenis" class="form-control" required>
                                @if ($data['jenis'] == 'Header')
                                <option value="Header">Header</option>
                                <option value="Sub Header">Sub Header</option>
                                @else
                                <option value="Sub Header">Sub Header</option>
                                <option value="Header">Header</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Klasifikasi</label>
                        <div class="col-sm-8">
                            <select name="klasifikasi" class="form-control" required>
                                @if ($data['klasifikasi'] == 'Debit')
                                <option value="Debit">Debit</option>
                                <option value="Kredit">Kredit</option>
                                @else
                                <option value="Kredit">Kredit</option>
                                <option value="Debit">Debit</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nilai Akun</label>
                        <div class="col-md-8">
                            <input name="nilai" data-parsley-type="number" type="text" class="form-control" value="{{$data ==null ? 'kosong' : $data['nilai']}}" required />
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