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
        <h1 class="page-title">Daftar Ruangan</h1>
        <p class="page-subtitle">Data ruangan yang tersedia di sekolah</p>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('ruangan.create') }}" class="btn btn-tambah">
            Tambah Ruangan
        </a>
        <form action="{{ route('ruangan.index') }}" method="GET" class="d-flex gap-2">
            <input type="text" name="search" class="form-control search-box" placeholder="Cari jurusan..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-tambah">Search</button>
        </form>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ruangan</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruangan as $r)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->nama_ruangan }}</td>
                <td>{{ $r->jurusan }}</td>
                <td>
                    <a href="{{ route('ruangan.edit', $r->id) }}" class="btn btn-edit">Edit</a>
                    <form action="{{ route('ruangan.destroy', $r->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection