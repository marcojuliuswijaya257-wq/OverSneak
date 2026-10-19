@extends('layout.app')

@section('konten')
<div class="card card-custom p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold text-dark m-0">Kategori Jajan</h4>
            <small class="text-muted">Kelola pengelompokan jenis jajanan</small>
        </div>
        <a href="/kategori/tambah" class="btn btn-gradient px-4 py-2 rounded-3 fw-semibold">
            <i class="bi bi-plus-lg me-1"></i> Tambah Kategori
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-custom align-middle m-0">
            <thead>
                <tr>
                    <th width="10%">NO</th>
                    <th>NAMA KATEGORI</th>
                    <th class="text-end" width="20%">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($semuaKategori as $k)
                <tr>
                    <td class="text-muted fw-semibold">{{ $loop->iteration }}</td>
                    <td class="fw-bold text-dark">{{ $k->nama_kategori }}</td>
                    <td class="text-end">
                        <a href="/kategori/edit/{{$k->id}}" class="btn btn-sm btn-light border me-1"><i class="bi bi-pencil-fill text-warning"></i></a>
                        <a href="/kategori/hapus/{{$k->id}}" class="btn btn-sm btn-light border" onclick="return confirm('Yakin hapus kategori ini?')"><i class="bi bi-trash3-fill text-danger"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center text-muted py-5">
                        <i class="bi bi-folder-x fs-1 d-block mb-2 text-secondary"></i>
                        Belum ada kategori terdaftar.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection