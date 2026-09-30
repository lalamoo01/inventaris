@extends('layout.layout')

@section('content')
<body>
    <div class="container">
        <h1>Tambah Inventaris</h1>
            <div class="card p-5" style="background-color: #f4f6f9;">
                <h3 class="text-center fw-normal mb-4 fw-bold" style="color: #0d2366; border-bottom: 1px solid #e9ecef; padding-bottom: 15px;">Formulir Tambah Inventaris Peruangan</h3>
                <form action="{{ route('inventaris.store') }}" method="post" >
                    @csrf
                    <div class="mb-3 row align-items-center">
                        <label class="col-sm-3 fw-bold">Pilih Ruangan:</label>
                        <select name="ruangan_id" class="form-control mt-2" required>
                            <option value="">---pilih ruangan---</option>
                            @foreach($ruangan as $ruang)
                            <option value="{{ $ruang->id }}">{{ $ruang->nama_ruangan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label class="col-sm-3 fw-bold">Pilih Barang=</label>
                            @foreach ($barang as $b) 
                            <div class="form-check mt-1">
                                <input type="checkbox" name="barang_id[]" value="{{ $b->id }}" class="form-check-input">
                                <label class="form-check-label">{{ $b->nama_barang }} ({{ $b->merk }})</label>
                            </div>
                            @endforeach
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label class="col-sm-3 fw-bold">Kondisi Barang</label>
                        <input class="form-control mt-3" type="text" name="kondisi" placeholder="Kondisi"  required>
                    </div>
                    <input class="form-control mt-3 btn btn-primary" style="background-color: #122e75;" type="submit" value="Proses">
                </form>
            </div>
    </div>
</body>
</html>
@endsection