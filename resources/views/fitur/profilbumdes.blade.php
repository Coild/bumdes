@extends('app')

@section('content')
<div class="content">
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
@endsection