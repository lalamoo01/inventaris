@extends('layout.layout')
@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h1 class="fw-bold mb-1" style="color: #0d2366;">Tambah Barang</h1>
        <p class="text-muted mb-0">Silakan isi data barang yang ingin ditambahkan.</p>
    </div>
    <div class="card border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
        <div class="px-4 py-3" style="background-color: #0d2366;">
            <h5 class="mb-0 fw-bold text-white">Formulir Tambah Barang</h5>
        </div>
        <div class="p-4 p-md-5" style="background-color: #ffffff;">
            <form action="{{ route('barang.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="form-label fw-semibold" style="color: #333;">
                        Nama Barang
                    </label>

                    <input
                        type="text"
                        name="nama_barang"
                        class="form-control"
                        placeholder="Masukkan nama barang"
                        required
                        style="height: 45px; border-radius: 7px;"
                    >
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold" style="color: #333;">
                        Merk
                    </label>
                    <input
                        type="text"
                        name="merk"
                        class="form-control"
                        placeholder="Masukkan merk barang"
                        required
                        style="height: 45px; border-radius: 7px;"
                    >
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold" style="color: #333;">
                        Kategori
                    </label>
                    <input
                        type="text"
                        name="kategori"
                        class="form-control"
                        placeholder="Masukkan kategori barang"
                        required
                        style="height: 45px; border-radius: 7px;"
                    >
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold" style="color: #333;">
                        Stok
                    </label>
                    <input
                        type="number"
                        name="stok"
                        class="form-control"
                        placeholder="Masukkan jumlah stok"
                        required
                        style="height: 45px; border-radius: 7px;">
                </div>
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('barang.index') }}"
                       class="btn px-4"
                       style="background-color: #e9ecef; color: #333; border-radius: 7px;">
                        Kembali
                    </a>
                    <button type="submit"
                            class="btn px-4 text-white"
                            style="background-color: #0d2366; border-radius: 7px;">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
