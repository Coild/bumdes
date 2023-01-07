@extends('app')

@section('css')
    <style>
        .rounded-circle {
            width: 300px;
            height: 300px;
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
                                            <img class="rounded-circle m-t-10" src="{{ asset('images/fritzie(1).png') }}"
                                                alt="" width="300px">
                                            <div class="form-group m-t-20">
                                                <label class="col-md-4 control-label">Ubah Foto Profil</label>
                                                <div class="col-md-8">
                                                    <button class="btn btn-primary waves-effect waves-light">
                                                    <input name="file" type="file" required />
                                                    </button>
                                                </div>
                                            </div>

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
                                                {{-- <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Example select</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Alamat BUMDes</label>
                                                    <input type="email" class="form-control" name="alamat"
                                                        placeholder="name@example.com">
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="exampleFormControlSelect2">Example multiple select</label>
                                                    <select multiple class="form-control" id="exampleFormControlSelect2">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select> --}}
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nomor Telepon Ketua BUMDes</label>
                                                    <input type="email" class="form-control" name="hpketua"
                                                        placeholder="name@example.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nomor Telepon Bendahara BUMDes</label>
                                                    <input type="email" class="form-control" name="hpbendahara"
                                                        placeholder="name@example.com">
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-default waves-effect m-l-5"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
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
