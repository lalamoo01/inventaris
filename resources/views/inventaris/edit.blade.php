@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Edit Inventaris</h1>
    <div class="card p-5" style="background-color: #f4f6f9;">
        <form action="{{ route('inventaris.update', $inventaris->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 row align-items-center">
                <label class="col-sm-3 fw-bold">Pilih Ruangan:</label>
                <select name="ruangan_id" class="form-control mt-2" required>
                    <option value="">---pilih ruangan---</option>
                    @foreach($ruangan as $ruang)
                    <option value="{{ $ruang->id }}" {{ $inventaris->ruangan_id == $ruang->id ? 'selected' : '' }}>{{ $ruang->nama_ruangan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 row align-items-center">
                <label class="col-sm-3 fw-bold">Pilih Barang:</label>
                <label class="mt-2 d-block">Pilih Barang=</label>
                @foreach ($barang as $b)
                <div class="form-check mt-1">
                    <input type="checkbox" name="barang_id[]" value="{{ $b->id }}" class="form-check-input"
                        {{ in_array($b->id, $barangTerpilih) ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $b->nama_barang }} ({{ $b->merk }})</label>
                </div>
                @endforeach
            </div>

            <div class="mb-3 row align-items-center">
                <label class="col-sm-3 fw-bold">Kondisi Barang:</label>
                <input class="form-control mt-2" type="text" name="kondisi" placeholder="Kondisi" value="{{ $inventaris->kondisi }}" required>
            </div>

            <input class="form-control mt-3 btn btn-primary" style="background-color: #122e75;" type="submit" value="Proses">
        </form>
    </div>
</div>
@endsection