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
                        <li class="active">Pendapatan</li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Transaksi Pendapatan Jasa</h3>

                    </div>

                    <div class="panel-body">
                        <div class="row mt-2">
                            <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambah"> Tambah Transaksi </button>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Tanggal</th>
                                            <th style="text-align: center;">Kode Transaksi</th>
                                            <th style="text-align: center;">Nama Usaha</th>
                                            <th style="text-align: center;">Nama Pelanggan</th>
                                            <th style="text-align: center;">Total Penghasilan</th>
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
                                                {{$data ==null ? 'kosong' : $data['tanggal']}}
                                            </td>
                                            <td>
                                                {{"0001"}}
                                                <!-- Perlu dibahas kodenya gmn -->
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $data['usaha']}}
                                            </td>
                                            <td>
                                                {{$data ==null ? 'kosong' : $data['pelanggan']}}
                                            </td>
                                            <td>
                                                {{"Rp200,000"}}
                                            </td>
                                            <td>
                                                <div class="conbtn">
                                                    <button class="btn btn-primary center fa fa-edit" data-toggle="modal" data-target="#edit"></button>
                                                    <button class="btn btn-danger center fa fa-trash" style="margin-left: 2%"></button>
                                                    <button class="btn btn-success center mdi mdi-eye" style="margin-left: 2%" onclick="window.location.href='/notapendapatan'"> Detail</button>
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
                <h4 class="modal-title" id="myModalLabel">Tambah Transaksi</h4>
            </div>
            <div class="modal-body">
                <form action="/tambahpendapatan" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal</label>
                        <div class="col-md-8">
                            <div class="input-group ">
                                <input name="tanggal" type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required>
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div><!-- input-group -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nama Usaha</label>
                        <div class="col-sm-8">
                            <select name="usaha" class="form-control" required>
                                <option value="Homestay Mandalika">Homestay Mandalika</option>
                                <option value="Homestay BUMDes">Homestay BUMDes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Pelanggan</label>
                        <div class="col-md-8">
                            <input name="pelanggan" type="text" class="form-control" placeholder="Nama Pelanggan atau Nama Perusahaannya" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Catatan Transaksi</label>
                        <div class="col-md-8">
                            <input name="catatan" type="text" class="form-control" placeholder="Catatan Transaksi (bisa saja kosong)">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Bukti Transaksi</label>
                        <div class="col-md-8">
                            <input class="form-control" name="file" type="file" required/>
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

<!-- sample modal content -->
<div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Transaksi</h4>
            </div>
            <div class="modal-body">
                @if ($data != null)
                <form class="form-horizontal" role="form">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Transaksi</label>
                        <div class="col-md-8">
                            <input name="kode" type="text" class="form-control" disabled="disabled" value="001">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input name="tanggal" type="text" class="form-control" value="{{$data ==null ? 'kosong' : $data['tanggal']}}" id="datepicker-autoclose2">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div><!-- input-group -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nama Usaha</label>
                        <div class="col-sm-8">
                            <select name="usaha" class="form-control" required>
                                @if ($data['usaha'] == 'Homestay Mandalika')
                                <option value="Homestay Mandalika">Homestay Mandalika</option>
                                <option value="Homestay BUMDes">Homestay BUMDes</option>
                                @else
                                <option value="Homestay BUMDes">Homestay BUMDes</option>
                                <option value="Homestay Mandalika">Homestay Mandalika</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Pelanggan</label>
                        <div class="col-md-8">
                            <input name="pelanggan" type="text" class="form-control" value="{{$data ==null ? 'kosong' : $data['pelanggan']}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Catatan Transaksi</label>
                        <div class="col-md-8">
                            <input name="catatan" type="text" class="form-control" value="{{$data ==null ? 'kosong' : $data['catatan']}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Bukti Transaksi</label>
                        <div class="col-md-8">
                            <input class="form-control" name="file" type="file" value="{{$data ==null ? 'kosong' : $data['file']}}" />

                            <div class="checkbox checkbox-primary">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Ganti Bukti Transaksi
                                </label>
                            </div>
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