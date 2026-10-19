@extends('layout.app')

@section('konten')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-custom p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold text-dark m-0">Edit Kategori</h4>
                <a href="/kategori" class="btn btn-sm btn-light border fw-medium"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
            </div>

            <form action="/kategori/simpan/{{$kategori->id}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label fw-semibold text-secondary">Nama Kategori</label>
                    <input type="text" name="nama_kategori" value="{{$kategori->nama_kategori}}" class="form-control form-control-lg fs-6 @error('nama_kategori') is-invalid @enderror">
                    @error('nama_kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-gradient w-100 py-2 fs-6 fw-semibold">Update Kategori</button>
            </form>
        </div>
    </div>
</div>
@endsection