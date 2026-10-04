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
    <h1 class="page-title">Edit Inventaris</h1>
    <p class="page-subtitle">Ubah data inventaris yang sudah tersedia</p>
    <div class="card p-5 form-card">
        <h3 class="text-center form-title">Form Edit Inventaris</h3>
        <form action="{{ route('inventaris.update', $inventaris->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="form-label fw-bold">Pilih Ruangan</label>
                <select name="ruangan_id" class="form-control" required>
                    <option value="">--- Pilih Ruangan ---</option>
                    @foreach($ruangan as $ruang)
                    <option value="{{ $ruang->id }}" {{ $inventaris->ruangan_id == $ruang->id ? 'selected' : '' }}>
                        {{ $ruang->nama_ruangan }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="form-label fw-bold">Pilih Barang</label>
                <div class="mt-2">
                    @foreach ($barang as $b)
                    <div class="form-check mb-2">
                        <input type="checkbox" name="barang_id[]" value="{{ $b->id }}" class="form-check-input"
                            {{ in_array($b->id, $barangTerpilih) ? 'checked' : '' }}>
                        <label class="form-check-label">
                            {{ $b->nama_barang }} ({{ $b->merk }})
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label fw-bold">Kondisi Barang</label>
                <input type="text" name="kondisi" class="form-control" placeholder="Masukkan kondisi barang" value="{{ $inventaris->kondisi }}" required>
            </div>
            <button type="submit" class="btn btn-simpan">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection