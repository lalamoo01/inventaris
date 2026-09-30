@extends('layout.layout')

@section('content')
<div class="container">
    <div class="card p-4 shadow-sm border-0 bg-white rounded">
        
        <div class="mb-4">
            <h2 class="fw-bold text-dark mb-1">Selamat Datang, Admin!</h2>
            <p class="text-muted">Sistem Informasi Inventaris Ruangan & Barang - SMKN 2 Kraksaan</p>
        </div>

        <div class="text-center mb-4" style="max-height: 400px;">
            <img src="https://smkn2kraksaan.sch.id/media_library/image_sliders/dc56ba62f1f96786a574d36e5443f9b6.jpg" 
                 class="w-100" 
                 style="object-position: center; max-height: 400px;" 
                 alt="gedung smk">
        </div>

        <div class="alert alert-info border-0 shadow-sm" style="background-color: #e6f0fa; color: #0f2a8a;">
            <i class="bi bi-info-circle-fill me-2"></i>
            Silahkan pilih menu di sidebar sebelah kiri untuk mulai mengelola data ruangan, barang, atau laporan inventaris sekolah.
        </div>
        
    </div>
</div>
@endsection