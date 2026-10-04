@extends('layout.layout')
@section('content')
<style>
    .page-title {
        color: #122e75;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .page-subtitle {
        color: #777;
        margin-bottom: 25px;
    }
    .btn-tambah {
        background-color: #122e75;
        color: white;
        border: none;
        padding: 10px 18px;
        border-radius: 7px;
    }
    .btn-tambah:hover {
        background-color: #0d2366;
        color: white;
    }
    .btn-edit {
        background-color: #d4c419;
        color: white;
        border: none;
    }
    .btn-delete {
        background-color: #dc3545;
        color: white;
        border: none;
    }
</style>
<div class="container-fluid">
    <div>
        <h1 class="page-title">Daftar Inventaris</h1>
        <p class="page-subtitle">Data barang yang terdapat di setiap ruangan</p>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('inventaris.create') }}" class="btn btn-tambah">
            Tambah Inventaris
        </a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ruangan</th>
                <th>Nama Jurusan</th>
                <th>Nama Barang</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventaris->groupBy('ruangan_id') as $i)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $i->first()->ruangan->nama_ruangan }}</td>
                <td>{{ $i->first()->ruangan->jurusan }}</td>
                <td>
                    @foreach($i as $item)
                        <div>{{ $item->barang->nama_barang }}</div>
                    @endforeach
                </td>
                <td>{{ $i->first()->kondisi }}</td>
                <td>
                    <a href="{{ route('inventaris.edit', $i->first()->id) }}" class="btn btn-edit">Edit</a>
                    <form action="{{ route('inventaris.destroy', $i->first()->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection