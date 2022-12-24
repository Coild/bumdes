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
                            <li class="active">Data Usaha</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <ul class="nav nav-tabs navtab-bg nav-justified">
                    <li class="active">
                        <a href="#home1" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-shopping-basket"></i></span>
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
                                    <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px"
                                        data-toggle="modal" data-target="#tambahdatajasa"> Tambah Data Usaha </button>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable-responsive"
                                            class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%">
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
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="conbtn">
                                                                {{ $loop->index + 1 }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{ $item['nama'] }}
                                                        </td>
                                                        <td>
                                                            {{ $item['alamat'] }}
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                @foreach ($item['jenis'] as $isi)
                                                                    <li>{{ $isi }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <div class="conbtn">
                                                                <button class="btn btn-primary center fa fa-edit"
                                                                    data-toggle="modal" data-target="#editjasa"></button>
                                                                <button class="btn btn-danger center fa fa-trash"
                                                                    style="margin-left: 2%"></button>
                                                                <button class="btn btn-success center fa fa-plus"
                                                                    style="margin-left: 2%" data-toggle="modal"
                                                                    data-target="#editjenis"
                                                                    onclick='jenisdata({{$loop->index}}, @JSON($item['jenis']))'>
                                                                    Jenis Pendapatan</button>
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
                    <div class="tab-pane" id="profile1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Usaha Dagang</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row mt-2">
                                    <button class="btn btn-primary mb-2 pb-2" style="margin-bottom: 25px"
                                        data-toggle="modal" data-target="#tambahdatadagang"> Tambah Data Dagang </button>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable-responsive"
                                            class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th style="text-align: center;">Nama Usaha</th>
                                                    <th style="text-align: center;">Lokasi Usaha</th>
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
                                                        Homestay BUMDes
                                                    </td>
                                                    <td>
                                                        Kuta Barat
                                                    </td>
                                                    <td>
                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#editdagang"></button>
                                                            <button class="btn btn-danger center fa fa-trash"
                                                                style="margin-left: 2%"></button>
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
                </div> <!-- End Tab Content -->

            </div> <!-- End Row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <!-- sample modal content -->
    <div id="tambahdatajasa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Usaha</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" action="datausaha" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Usaha</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control"
                                    placeholder="Nama Usaha atau Perusahaan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                            <div class="col-md-8">
                                <input name="alamat" type="text" class="form-control"
                                    placeholder="Alamat atau Lokasi Usaha" required />
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

    <!-- sample modal content -->
    <div id="tambahdatadagang" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Usaha</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Usaha</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control"
                                    placeholder="Nama Usaha atau Perusahaan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                            <div class="col-md-8">
                                <input name="alamat" type="text" class="form-control"
                                    placeholder="Alamat atau Lokasi Usaha" required />
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

    <!-- sample modal edit -->
    <div id="editjasa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Usaha</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Usaha</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control"
                                    value="Nama Usaha atau Perusahaan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                            <div class="col-md-8">
                                <input name="alamat" type="text" class="form-control"
                                    value="Alamat atau Lokasi Usaha" required />
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

    <!-- sample modal edit -->
    <div id="editdagang" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Usaha</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Usaha</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control"
                                    value="Nama Usaha atau Perusahaan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Lokasi Usaha</label>
                            <div class="col-md-8">
                                <input name="alamat" type="text" class="form-control"
                                    value="Alamat atau Lokasi Usaha" required />
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

    <!-- sample modal jenis pendapatan -->
    <div id="editjenis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Jenis Pendapatan</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" style="margin-left: 5px;" method="post"
                        action="jenisdatausaha">
                        @csrf

                        <input type="hidden" id="isidata" name="id">
                        <div class="form-group">
                            <label class="control-label m-l-10"
                                style="display: flex; justify-content: left; align-items: left; margin-bottom: 5px;">Data
                                Jenis Pendapatan Baru</label>
                            <div class="col-md-10">
                                <input name="jenis" type="text" class="form-control"
                                    placeholder="Nama Jenis Pendapatan">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                    style="padding: 8px;"> tambah</button>
                            </div>
                        </div>
                    </form>
                    <hr>

                    <div id="place_here">

                    </div>

                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    <script>
        function jenisdata(id, jenis) {
            // var id = $(this).data('ids');
            // console.log("aku "+id);
            console.log(jenis);
            $("#isidata").val(id);
            var atas =
                '<table id="datatable-responsive" class="table table-hover table-bordered dt-responsive nowrap"                        cellspacing="0" width="100%">                        <thead>                            <tr>                                <th style="text-align: center;">Edit Jenis Pendapatan</th>                                <th style="text-align: center;">Aksi</th>                            </tr>                        </thead>                        <tbody>';
            var bawah = '</tbody>  </table>'
            var isi = '';
            jenis.forEach(element => {
                isi = isi +
                    '<form action="#">                                <tr>                                    <td>                                        <div class="">                                            <!-- <label class="control-label m-l-10" style="display: flex; justify-content: left; align-items: left; margin-bottom: 5px;">Data Jenis Pendapatan Baru</label> -->                                            <div class="">                                                <input name="jenis" type="text" class="form-control"                                                    placeholder="Contoh" value="' +
                    element +
                    '">                                            </div>                                        </div>                                    </td>                                    <td>                                        <div class="conbtn pt-3">                                            <button class="btn btn-primary center" data-toggle="modal"                                                data-target="#jenis" style="padding: 7px;"> Simpan</button>                                        </div>                                    </td>                                </tr>                            </form>';
            });

            document.querySelector('#place_here').innerHTML = atas + isi + bawah;
        }
    </script>
@endsection
