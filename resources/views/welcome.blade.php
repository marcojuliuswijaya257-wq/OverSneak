@extends('layout.app')

@section('konten')
<div class="row justify-content-center py-5">
    <div class="col-md-8 text-center">
        <div class="p-5 card card-custom">
            <div class="mb-3">
                <span class="p-3 rounded-circle text-white d-inline-block" style="background: var(--primary-grad);">
                    <i class="bi bi-bag-heart-fill fs-1"></i>
                </span>
            </div>
            <h2 class="fw-bold text-dark">Selamat Datang di OverSnaek!</h2>
            <p class="text-muted mb-4">Aplikasi pencatatan dan rekapitulasi pengeluaran jajan harian kamu agar lebih teratur dan terukur.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="/jajan" class="btn btn-gradient px-4 py-2 fw-semibold">
                    <i class="bi bi-receipt me-1"></i> Kelola Jajan
                </a>
                <a href="/rekap" class="btn btn-outline-dark px-4 py-2 fw-semibold">
                    <i class="bi bi-graph-up-arrow me-1"></i> Lihat Rekap
                </a>
            </div>
        </div>
    </div>
</div>
@endsection