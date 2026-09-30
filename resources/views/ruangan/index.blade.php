@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Daftar Ruangan</h1>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
        <a href="{{ route('ruangan.create') }}"
            class="btn"
            style="background-color: #0d2366; color: white;">
            Tambah Ruangan
        </a>
        <form action="{{ route('ruangan.index') }}" method="GET"
            style="display: flex; gap: 8px;">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari jurusan..."
                class="form-control"
                style="width: 300px;">
            <button
                type="submit"
                class="btn"
                style="background-color: #0d2366; color: white;">
                Search
            </button>
        </form>
    </div>
    <table class="table table-bordered mt-3">
        <tr>
            <td>no</td>
            <td>nama ruangan</td>
            <td>jurusan</td>
            <td>aksi</td>
        </tr>
        @foreach ( $ruangan as $ruang)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $ruang->nama_ruangan }}</td>
            <td>{{ $ruang->jurusan }}</td>
            <td class="d-flex gap-2">
                <a href="{{ route('ruangan.edit', $ruang->id) }}" class="btn btn" style="background-color: #d4c419; color: white;">Edit</a>
                <form action="{{ route('ruangan.destroy', $ruang->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn" style="background-color: #ee1818; color: white;" onclick="return confirm('yakin ingin mengahapus?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection