@extends('layout.layout')

@section('content')
    <div class="container">
        <h1>Daftar Inventaris</h1>
        <a href="{{ route('inventaris.create') }}" class="btn" style="background-color: #0d2366; color: white;">Tambah Inventaris</a>
        <table class="table table-bordered mt-3">
            <tr>
                <td>No</td>
                <td>Nama Ruangan</td>
                <td>Nama Jurusan</td>
                <td>Nama Barang</td>
                <td>Kondisi</td>
                <td>Aksi</td>
            </tr>
            @foreach ( $inventaris->groupBy('ruangan_id') as $i)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $i->first()->ruangan->nama_ruangan }}</td>
                <td>{{ $i->first()->ruangan->jurusan }}</td>
                <td>
                    @foreach($i as $item) 
                        <div>{{ $item->barang->nama_barang}}</div>
                    @endforeach
                </td>
                <td>{{ $i->first()->kondisi }}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route('inventaris.edit', $i->first()->id) }}" class="btn btn" style="background-color: #d4c419; color: white;">Edit</a>
                    <form action="{{ route('inventaris.destroy', $i->first()->id) }}" method="POST">
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