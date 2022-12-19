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
                        <li class="active">Daa Usaha</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <ul class="nav nav-tabs navtab-bg nav-justified">
                <li class="active">
                    <a href="#home1" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-cubes"></i></span>
                        <span class="hidden-xs">Usaha Jasa</span>
                    </a>
                </li>
                <li class="">
                    <a href="#profile1" data-toggle="tab" aria-expanded="true">
                        <span class="visible-xs"><i class="fa fa-group"></i></span>
                        <span class="hidden-xs">Usaha Dagang</span>
                    </a>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
                <div class="tab-pane active" id="home1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Usaha Jasa</h3>
                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">
                                <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambahdata"> Tambah Data Usaha </button>
                                <button class="btn btn-default mb-2 pb-2" style="margin-bottom: 25px" data-toggle="modal" data-target="#tambahjenis"> Tambah Jenis Pendapatan </button>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Nama Usaha</th>
                                                <th style="text-align: center;">Lokasi Usaha</th>
                                                <th style="text-align: center;">Jenis Pendapatan</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Homestay BUMDes
                                                </td>
                                                <td>
                                                    Kuta Barat
                                                </td>
                                                <td>
                                                    Sewa Kamar
                                                </td>
                                                <td>
                                                    <div class="conbtn">
                                                        <button class="btn btn-primary center" data-toggle="modal" data-target="#editHasbi"> Edit </button>
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
                                                    Homestay Mandalika
                                                </td>
                                                <td>
                                                    Kuta Timur
                                                </td>
                                                <td>
                                                    sewa kamar, sewa kendaraan
                                                </td>
                                                <td>
                                                    <div class="conbtn">
                                                        <button class="btn btn-primary center" data-toggle="modal" data-target="#editHasbi"> Edit </button>
                                                        <button class="btn btn-danger center" style="margin-left: 2%"> Hapus
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Rental BUMDes
                                                </td>
                                                <td>
                                                    Kuta Timur
                                                </td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#tambahjenis">Tambah Jenis Pendapatan</a>
                                                </td>
                                                <td>
                                                    <div class="conbtn">
                                                        <button class="btn btn-primary center" data-toggle="modal" data-target="#editHasbi"> Edit </button>
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
                <div class="tab-pane" id="profile1">
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                </div>
            </div> <!-- End Tab Content -->

        </div> <!-- End Row -->


    </div> <!-- container -->

</div> <!-- content -->

<!-- sample modal content -->
<div id="tambahdata" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Pengelola</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Usaha</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" disabled="disabled" value="001">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Usaha</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Nama Usaha atau Perusahaan" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Lokasi Usaha</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Alamat atau Lokasi Usaha" required />
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="col-sm-4 control-label">Status Pengelola</label>
                        <div class="col-sm-8">
                            <select class="form-control" required>
                                <option>Bendahara</option>
                                <option>Pencatat Transaksi</option>
                            </select>
                        </div>
                    </div> -->

                    <div class="modal-footer">

                        <button type="button" class="btn btn-default waves-effect m-l-5" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="tambahjenis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Pengelola</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Jenis Pendapatan</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" disabled="disabled" value="001">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Pilih Nama Usaha</label>
                        <div class="col-sm-8">
                            <select class="form-control" required>
                                <option>Homestay Mandalika</option>
                                <option>Homestay BUMDes</option>
                                <option>Rental BUMDes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Jenis Pendapatan</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Jenis Pendapatan Jasa (contoh: sewa kamar)" required>
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

<!-- Modal Edit (Pak Hasbi)-->
<div id="editHasbi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <input type="text" class="form-control" value="Hasbi" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nomor Telepon</label>
                        <div class="col-md-8">
                            <input data-parsley-type="number" type="text" class="form-control" value="083117121494" required />
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

                    <div class="modal-footer">

                        <button type="button" class="btn btn-default waves-effect m-l-5" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal Edit (Bu Ima)-->
<div id="editIma" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <input type="text" class="form-control" value="Ima" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nomor Telepon</label>
                        <div class="col-md-8">
                            <input data-parsley-type="number" type="text" class="form-control" value="083494117111" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Status Pengelola</label>
                        <div class="col-sm-8">
                            <select class="form-control" required>
                                <option>Pencatat Transaksi</option>
                                <option>Bendahara</option>
                            </select>
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