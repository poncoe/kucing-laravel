@extends('jeniskucing.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jeniskucing.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                <img src="/img/{{ $jeniskucing->url_gambar }}" width="500px">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $jeniskucing->judul }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $jeniskucing->deskripsi }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi Singkat:</strong>
                {{ $jeniskucing->desc_singkat }}
            </div>
        </div>

    </div>
@endsection