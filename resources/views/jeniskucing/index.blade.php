@extends('jeniskucing.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('jeniskucing.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                Tambah Data Baru
            </a>
            <br><br>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Deskripsi Singkat</th>
        <th width="280px">Aksi</th>
    </tr>
    @foreach ($jeniskucing as $jenisKucing)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img src="/img/{{ $jenisKucing->url_gambar }}" width="100px"></td>
        <td>{{ $jenisKucing->judul }}</td>
        <td>{{ $jenisKucing->deskripsi }}</td>
        <td>{{ $jenisKucing->desc_singkat }}</td>
        <td>
            <form action="{{ route('jeniskucing.destroy',$jenisKucing->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('jeniskucing.show',$jenisKucing->id) }}" title="Show" style="border: none; background-color:transparent;"> <i class="fas fa-eye  fa-lg" style="color:black"></i>
                </a>

                <a class="btn btn-primary" href="{{ route('jeniskucing.edit',$jenisKucing->id) }}" title="Edit" style="border: none; background-color:transparent;"> <i class="fas fa-edit  fa-lg" style="color:black"></i>
                </a>

                @csrf
                @method('DELETE')

                <button class="btn btn-danger" type="submit" title="delete" style="border: none; background-color:transparent;" onclick="return confirm('Apa anda yakin ingin menghapus data ini?')">
                    <i class="fas fa-trash fa-lg text-danger"></i>

                </button>

            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $jeniskucing->links() !!}

@endsection