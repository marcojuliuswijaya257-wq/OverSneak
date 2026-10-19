@extends('layout.app')

@section('konten')
<div class="mb-4">
    <h4 class="fw-bold text-dark mb-1">Dashboard Analytics & Rekap</h4>
    <p class="text-muted m-0">Ringkasan statistik pengeluaran jajan kamu</p>
</div>

<!-- KPI Cards -->
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card card-custom p-4 text-white" style="background: linear-gradient(135deg, #059669 0%, #10b981 100%);">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="text-white-50 fw-semibold small text-uppercase">Total Pengeluaran</span>
                <i class="bi bi-wallet2 fs-4"></i>
            </div>
            <h2 class="fw-bold m-0">Rp {{ number_format($totalBiayaJajanSaya, 0, ',', '.') }}</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom p-4 text-white" style="background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="text-white-50 fw-semibold small text-uppercase">Banyaknya Jajan</span>
                <i class="bi bi-cart-check fs-4"></i>
            </div>
            <h2 class="fw-bold m-0">{{ $banyaknyaJajanSaya }} <span class="fs-5 fw-normal">Item</span></h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-custom p-4 text-white" style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="text-white-50 fw-semibold small text-uppercase">Total Kategori</span>
                <i class="bi bi-tags fs-4"></i>
            </div>
            <h2 class="fw-bold m-0">{{ $semuaKategori->count() }} <span class="fs-5 fw-normal">Jenis</span></h2>
        </div>
    </div>
</div>

<!-- Category Breakdown -->
<div class="card card-custom p-4">
    <h5 class="fw-bold text-dark mb-3">Distribusi Jajan Berdasarkan Kategori</h5>
    <div class="row g-2">
        @foreach($semuaKategori as $kategori)
        <div class="col-md-6">
            <div class="p-3 border rounded-3 d-flex justify-content-between align-items-center bg-light">
                <span class="fw-semibold text-dark"><i class="bi bi-bookmark-fill text-primary me-2"></i>{{ $kategori->nama_kategori }}</span>
                <span class="badge bg-dark rounded-pill px-3 py-2">{{ $kategori->jajans->count() }} Jajan</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection