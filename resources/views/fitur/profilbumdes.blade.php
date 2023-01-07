@extends('app')

@section('css')
    <style>
        .rounded-circle {
            width: 280px;
            height: 280px;
            border-radius: 50%;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Profil BUMDes</h4>
                        {{-- <ol class="breadcrumb pull-right">
                        <li class="active">Dashboard</li>
                    </ol> --}}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Gambaran Umum</h3>
                        </div>

                        <div class="panel-body">
                            <div class="row mt-2">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="conbtn">
                                        <div class="mx-auto text-center">
                                            <form style="padding-right: 25px">
                                                <img class="rounded-circle m-b-5" src="{{ asset('images/fritzie(1).png') }}"
                                                    alt="">
                                                <p id="file-name">Nama_File</p>
                                                <div class="modal-footer m-t-8">
                                                    <div class="mx-auto text-right">

                                                        <input type="file" name="file" onchange="document.getElementById('file-name').innerHTML = this.files[0].name" style="display: none">
                                                        {{-- <button class="btn btn-primary waves-effect waves-light" onclick="diklik()">Pilih gambar</button> --}}
                                                        <button onclick="document.getElementsByName('file')[0].click()">Pilih gambar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="row mt-5">

                                        <div class="mx-auto text-left">
                                            <form style="padding-right: 25px">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nama BUMDes</label>
                                                    <input type="email" class="form-control" name="nama"
                                                        placeholder="name@example.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Alamat BUMDes</label>
                                                    <input type="email" class="form-control" name="alamat"
                                                        placeholder="name@example.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nomor Telepon Ketua BUMDes</label>
                                                    <input type="email" class="form-control" name="hpketua"
                                                        placeholder="name@example.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nomor Telepon Bendahara
                                                        BUMDes</label>
                                                    <input type="email" class="form-control" name="hpbendahara"
                                                        placeholder="name@example.com">
                                                </div>
                                                <div class="modal-footer">
                                                    {{-- <button type="button" class="btn btn-default waves-effect m-l-5"
                                                        data-dismiss="modal">Cancel</button> --}}
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Ubah Data
                                                        Profil</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function diklik(){
            console.log("masuk!");
            document.getElementsByName('file')[0].click()
        }
    </script>
@endsection
