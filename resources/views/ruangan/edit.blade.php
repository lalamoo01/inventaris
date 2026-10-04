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
    .form-card {
        background-color: #f4f6f9;
        border: none;
        border-radius: 10px;
    }
    .form-title {
        color: #122e75;
        font-weight: 700;
        border-bottom: 1px solid #e9ecef;
        padding-bottom: 15px;
        margin-bottom: 25px;
    }
    .btn-simpan {
        background-color: #122e75;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 7px;
    }
    .btn-simpan:hover {
        background-color: #0d2366;
        color: white;
    }
</style>
<div class="container-fluid">
    <h1 class="page-title">Edit Ruangan</h1>
    <p class="page-subtitle">Ubah data ruangan yang sudah tersedia</p>
    <div class="card p-5 form-card">
        <h3 class="text-center form-title">Form Edit Ruangan</h3>
        <form action="{{ route('ruangan.update', $ruangan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Ruangan</label>
                <input type="text" name="nama_ruangan" class="form-control" placeholder="Masukkan nama ruangan" value="{{ $ruangan->nama_ruangan }}" required>
            </div>
            <div class="mb-4">
                <label class="form-label fw-bold">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukkan jurusan" value="{{ $ruangan->jurusan }}" required>
            </div>
            <button type="submit" class="btn btn-simpan">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection