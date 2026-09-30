@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Tambah Ruangan</h1>
    <div class="card p-5" style="background-color: #f4f6f9;">
        <h3 class="text-center fw-normal mb-4 fw-bold" style="color: #0d2366; border-bottom: 1px solid #e9ecef; padding-bottom: 15px;">Fomulir Tambah Ruangan</h3>
        <form action="{{ route('ruangan.store') }}" method="post">
            @csrf
            <div class="mb-3 row align-items-center">
                <label class="col-sm-3 fw-bold">Nama Ruangan:</label>
                <input class="form-control mt-2" type="text" name="nama_ruangan" placeholder="Nama Ruangan" required>
            </div>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-3  fw-bold">Jurusan:</label>
                <input class="form-control mt-2" type="text" name="jurusan" placeholder="Jurusan" required>
            </div>
                <input class="form-control mt-4 btn btn-primary " style="background-color: #122e75;" type="submit" value="Proses">
        </form>
    </div> 
</div>
@endsection
