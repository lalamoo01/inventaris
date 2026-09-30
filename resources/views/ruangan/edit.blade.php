@extends('layout.layout')

@section('content')
<div class="container">
    <h1>Edit Ruangan</h1>
    <div class="card p-5" style="background-color: #f4f6f9;">
        <form action="{{ route('ruangan.update', $ruangan->id) }}" method="post">
            @csrf
            @method ('PUT')
            <div class="mb-3 row align-items-center">
                <label class="col-sm-3 fw-bold">Nama Ruangan:</label>
                <input class="form-control mt-2" type="text" name="nama_ruangan" placeholder="Nama Ruangan" value="{{ $ruangan->nama_ruangan }}" required>
            </div>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-3  fw-bold">Jurusan:</label>
                <input class="form-control mt-2" type="text" name="jurusan" placeholder="Jurusan" value="{{ $ruangan->jurusan }}" required>
            </div>
            <input class="form-control mt-3 btn btn-primary" style="background-color: #1411ac;" type="submit" value="Proses">
        </form> 
    </div>
</div>
@endsection
