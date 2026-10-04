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
    .search-box {
        width: 280px;
        border-radius: 7px;
    }
</style>
<div class="container-fluid">
    <div>
        <h1 class="page-title">Daftar Barang</h1>
        <p class="page-subtitle">Data barang yang tersedia di sekolah</p>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('barang.create') }}" class="btn btn-tambah">
            Tambah Barang
        </a>
        <form action="{{ route('barang.index') }}" method="GET" class="d-flex gap-2">
            <input type="text" name="search" class="form-control search-box" placeholder="Cari barang, merk, atau kategori..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-tambah">Search</button>
        </form>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Merk</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->nama_barang }}</td>
                <td>{{ $b->merk }}</td>
                <td>{{ $b->kategori }}</td>
                <td>{{ $b->stok }}</td>
                <td>
                    <a href="{{ route('barang.edit', $b->id) }}" class="btn btn-edit">Edit</a>
                    <form action="{{ route('barang.destroy', $b->id) }}" method="POST" class="d-inline">
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