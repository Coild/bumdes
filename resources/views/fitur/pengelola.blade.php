@extends('app')

@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <!-- <h4 class="pull-left page-title">Daftar Pengelola</h4> -->
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Master Data</a></li>
                            <li class="active">Pengelola</li>
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
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>
                                                        <div class="conbtn">
                                                            {{ $loop->index + 1 }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="#"> Klikit</a> -->
                                                        {{ $data == null ? 'kosong' : $item['nama'] }}
                                                    </td>
                                                    <td>
                                                        {{ $data == null ? 'kosong' : $item['status'] }}
                                                    </td>
                                                    <td>
                                                        {{ $data == null ? 'kosong' : $item['nohp'] }}
                                                    </td>
                                                    <td>
                                                        <div class="conbtn">
                                                            <img src="images/users/profil_holder.png"
                                                                alt="placeholder profile" style="width: 20%; height: 20%;">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="conbtn">
                                                            <button class="btn btn-primary center fa fa-edit"
                                                                data-toggle="modal" data-target="#edit"
                                                                onclick="edit_data('{{ $item['nama'] }}', '{{ $item['status'] }}', '{{ $item['nohp'] }}', {{ $loop->index }})"></button>
                                                            <button class="btn btn-danger center fa fa-trash"
                                                                style="margin-left: 2%"></button>
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Pengelola</h4>
                </div>
                <div class="modal-body">
                    <form action="/pengelola" method="POST" class="form-horizontal" role="form">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pengelola</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control"
                                    placeholder="Nama Lengkap Pengelola" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nomor Telepon</label>
                            <div class="col-md-8">
                                <input name="nohp" data-parsley-type="number" type="text" class="form-control"
                                    placeholder="08XXXXXXXXXX" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Status Pengelola</label>
                            <div class="col-sm-8">
                                <select name="status" class="form-control" required>
                                    <option>Bendahara</option>
                                    <option>Pencatat Transaksi</option>
                                </select>
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
    <!-- Modal Edit-->
    <div id="edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Pengelola</h4>
                </div>
                <div class="modal-body">
                    <form action="/editpengelola" method="POST" class="form-horizontal" role="form">

                        @csrf
                        <input type="hidden" name="id" id="id_p">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pengelola</label>
                            <div class="col-md-8">
                                <input name="nama" type="text" class="form-control" id="nama"
                                    placeholder="Nama Lengkap Pengelola" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nomor Telepon</label>
                            <div class="col-md-8">
                                <input name="nohp" data-parsley-type="number" type="text" class="form-control"
                                    id="nohp"placeholder="08XXXXXXXXXX" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Status Pengelola</label>
                            <div class="col-sm-8">
                                <select name="status" class="form-control" required>
                                    <option value="Bendahara" id="option-bendahara">Bendahara</option>
                                    <option value="Pencatat Transaksi" id="option-pencatat-transaksi">Pencatat Transaksi
                                    </option>
                                </select>
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
@endsection

@section('script')
    <script>
        function edit_data(nama, status, nohp, id) {
            console.log('editdata: ' + id);
            document.getElementById("id_p").value = id;
            document.getElementById("nama").value = nama;
            document.getElementById("nohp").value = nohp;

            if (status == "Bendahara") {
                document.getElementById("option-bendahara").selected = true;
                document.getElementById("option-pencatat-transaksi").selected = false;
            } else if (status == "Pencatat Transaksi") {
                document.getElementById("option-bendahara").selected = false;
                document.getElementById("option-pencatat-transaksi").selected = true;
            }
        }

        // function changeStatus(select) {
        //     // Mengambil nilai yang dipilih
        //     var status = select.value;

        //     // Mengganti elemen "option" yang terpilih
            
        // }
    </script>
@endsection
