@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <strong>Tambah Artikel</strong>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/artikel') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group ">
                            <label for="" class="control-label">Jenis</label>
                            <input type="text" class="form-control" name="jenis">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection