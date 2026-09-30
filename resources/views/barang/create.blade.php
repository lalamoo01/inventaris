@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Tambah Barang</h1>
    <div class="card p-4" style="background-color: #f4f6f9;"> 
        <h3 class="text-center fw-bold" style="color: #0d2366; border-bottom: 1px solid #e9ecef; padding-bottom: 15px;">Formulir Tambah Barang</h3>
        <form action="{{ route('barang.store') }}" method="post">
            @csrf
            <div class="mb-2 row align-items-center">
                <label class="col-sm-3 fw-bold">Nama Barang:</label>
                <input class="form-control mt-2" type="text" name="nama_barang" placeholder="Nama Barang" required>
            </div>
            <div class="mb-2 row align-items-center">
                <label class="col-sm-3 fw-bold">Merk:</label>
                <input class="form-control mt-2" type="text" name="merk" placeholder="Merk" required>
            </div>
            <div class="mb-2 row align-items-center">
                <label class="col-sm-3 fw-bold">Kategori:</label>
                <input class="form-control mt-2" type="text" name="kategori" placeholder="Kategori" required>
            </div>
            <div class="mb-2 row align-items-center">
                <label class="col-sm-3 fw-bold">Stok:</label>
                <input class="form-control mt-2" type="number" name="stok" placeholder="Stok" required>
            </div>
            
            <input class="form-control mt-4 btn btn-primary" style="background-color: #1411ac;"  type="submit" value="Proses">
        </form>
    </div>
</div>
@endsection
