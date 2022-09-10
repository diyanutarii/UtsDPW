@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Artikel</strong>
                    </a>
                </div>
                <div class="card-body">
                    <h3><strong>{{ $artikel->Nama }}</strong></h3>
                    <p> Jenis : <strong> {{ $artikel->jenis }}</strong>
                    </p>
                    <hr>
                    <p>
                        {!! nl2br($artikel->deskripsi) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection