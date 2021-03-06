@extends('jeniskucing.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <!-- Search Data -->

        <div class="pull-left">
            <form action="{{ url()->current() }}" method="get">
                <div class="relative mx-auto">
                    <input type="search" name="keyword" value="{{ request('keyword') }}" placeholder="Cari Judul ....." class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <button type="submit" class="absolute top-0 right-0 inline-flex items-center py-2 text-sm focus:outline-none">
                        <svg class="w-5 h-5 text-gray-500 transition dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 disabled:opacity-25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <!-- Button Tambah Data -->

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('jeniskucing.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                Tambah Data Baru
            </a>
            <br><br>
        </div>
    </div>
</div>

<br>
<h6 style="text-align: left;"><b>Catatan</b> : <br><br>Tolong ya dengan hormat jangan diapus yang manicon & berandalan, buat dummy data,
 sisanya bebas dah. lagipula setiap aktifitas terekam karena login pake google, makasih ya :)</h6>
<br>

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
        <th width="280px">Aksi</th>
    </tr>
    @foreach ($jeniskucing as $jenisKucing)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img src="/img/{{ $jenisKucing->url_gambar }}" width="100px"></td>
        <td>{{ $jenisKucing->judul }}</td>
        <td>{{ $jenisKucing->deskripsi }}</td>
        <td>
            <form action="{{ route('jeniskucing.destroy',$jenisKucing->id) }}" method="POST">

                <!-- <a class="btn btn-info" href="{{ route('jeniskucing.show',$jenisKucing->id) }}" title="Show" style="border: none; background-color:transparent;"> <i class="fas fa-eye  fa-lg" style="color:black"></i>
                </a> -->

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