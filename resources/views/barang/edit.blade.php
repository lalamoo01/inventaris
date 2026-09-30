@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>
    <div class="card p-5" style="background-color: #f4f6f9;"> 
        <form action="{{ route('barang.update', $barang->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 row align-items-center">
                <label class="col-sm-3 fw-bold">Nama Barang:</label>
                <input class="form-control mt-2" type="text" name="nama_barang" placeholder="Nama Barang" value="{{ $barang->nama_barang }}" required>
            </div>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-3 fw-bold">Merk:</label>
                <input class="form-control mt-2" type="text" name="merk" placeholder="Merk" value="{{ $barang->merk }}" required>
            </div>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-3 fw-bold">Kategori:</label>
                <input class="form-control mt-2" type="text" name="kategori" placeholder="Kategori" value="{{ $barang->kategori }}" required>
            </div>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-3 fw-bold">Stok:</label>
                <input class="form-control mt-2" type="number" name="stok" placeholder="Stok" value="{{ $barang->stok }}" required>
            </div>
            <input class="form-control mt-3 btn btn-primary" style="background-color: #1411ac;" type="submit" value="Proses">
        </form>
    </div>
</div>
@endsection
