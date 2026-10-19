@extends('layout.app')

@section('konten')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-custom p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold text-dark m-0">Tambah Jajan Baru</h4>
                <a href="/jajan" class="btn btn-sm btn-light border fw-medium"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
            </div>

            <form action="/jajan/tambah" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold text-secondary">Nama Jajan</label>
                    <input type="text" name="nama_jajan" value="{{old('nama_jajan')}}" class="form-control form-control-lg fs-6 @error('nama_jajan') is-invalid @enderror" placeholder="Misal: Es Kopi Susu">
                    @error('nama_jajan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold text-secondary">Harga (Rp)</label>
                    <input type="number" name="harga" value="{{old('harga')}}" class="form-control form-control-lg fs-6 @error('harga') is-invalid @enderror" placeholder="18000">
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold text-secondary">Kategori Jajan</label>
                    <select name="kategori_id" class="form-select form-select-lg fs-6 @error('kategori_id') is-invalid @enderror">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($semuaKategori as $k)
                        <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                        @endforeach
                    </select>
                    @error('kategori_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-gradient w-100 py-2 fs-6 fw-semibold">Simpan Transaksi</button>
            </form>
        </div>
    </div>
</div>
@endsection