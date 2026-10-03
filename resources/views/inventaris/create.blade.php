@extends('layout.layout')
@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h1 class="fw-bold mb-1" style="color: #0d2366;">Tambah Inventaris</h1>
        <p class="text-muted mb-0">Silakan isi data inventaris yang ingin ditambahkan.</p>
    </div>
    <div class="card border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
        <div class="px-4 py-3" style="background-color: #0d2366;">
            <h5 class="mb-0 fw-bold text-white">Formulir Tambah Inventaris Peruangan</h5>
        </div>
        <div class="p-4 p-md-5" style="background-color: #ffffff;">
            <form action="{{ route('inventaris.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="form-label fw-semibold" style="color: #333;">Pilih Ruangan</label>
                    <select name="ruangan_id" class="form-select" required style="height: 45px; border-radius: 7px;">
                        <option value="">-- Pilih Ruangan --</option>
                        @foreach($ruangan as $ruang)
                            <option value="{{ $ruang->id }}">{{ $ruang->nama_ruangan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold" style="color: #333;">Pilih Barang</label>
                    <div class="border rounded p-3" style="max-height: 220px; overflow-y: auto; background-color: #f8f9fa;">
                        @foreach ($barang as $b)
                            <div class="form-check mb-2">
                                <input type="checkbox" name="barang_id[]" value="{{ $b->id }}" class="form-check-input" id="barang{{ $b->id }}">
                                <label class="form-check-label" for="barang{{ $b->id }}">{{ $b->nama_barang }} ({{ $b->merk }})</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold" style="color: #333;">Kondisi Barang</label>
                    <input type="text" name="kondisi" class="form-control" placeholder="Masukkan kondisi barang" required style="height: 45px; border-radius: 7px;">
                </div>
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('inventaris.index') }}" class="btn px-4" style="background-color: #e9ecef; color: #333; border-radius: 7px;">Kembali</a>
                    <button type="submit" class="btn px-4 text-white" style="background-color: #0d2366; border-radius: 7px;">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection