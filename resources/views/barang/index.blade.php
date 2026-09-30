@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Daftar Barang</h1>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">

        <a href="{{ route('barang.create') }}" class="btn" style="background-color: #0d2366; color: white;">
            Tambah Barang
        </a>

        <form action="{{ route('barang.index') }}" method="GET" style="display: flex; gap: 8px;">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari barang, merk, atau kategori..." class="form-control" style="width: 300px;">
            <button type="submit" class="btn" style="background-color: #0d2366; color: white;">Search</button>
        </form>
    </div>
    <table class="table table-bordered mt-3">
        <tr>
            <td>no</td>
            <td>nama barang</td>
            <td>merk</td>
            <td>kategori</td>
            <td>stok</td>
            <td>aksi</td>
        </tr>
        @foreach ( $barang as $b)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->merk }}</td>
            <td>{{ $b->kategori }}</td>
            <td>{{ $b->stok }}</td>
            <td class="d-flex gap-2">
                <a href="{{ route('barang.edit', $b->id) }}" class="btn btn" style="background-color: #d4c419; color: white;">Edit</a>
                <form action="{{ route('barang.destroy', $b->id) }}" method="POST">
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