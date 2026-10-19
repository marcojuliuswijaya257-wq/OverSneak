@extends('layout.app')

@section('konten')
<div class="card card-custom p-4">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h4 class="fw-bold text-dark m-0">Daftar Transaksi Jajan</h4>
            <small class="text-muted">Kelola pengeluaran camilan dan jajananmu di sini</small>
        </div>
        <a href="/jajan/tambah" class="btn btn-gradient px-4 py-2 rounded-3 fw-semibold">
            <i class="bi bi-plus-lg me-1"></i> Tambah Jajan
        </a>
    </div>

    <!-- Form Pencarian Minimalis -->
    <form action="/jajan" method="GET" class="row g-2 mb-4">
        <div class="col-md-10">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0 text-muted"><i class="bi bi-search"></i></span>
                <input type="text" name="cari" class="form-control border-start-0 ps-0" placeholder="Cari nama jajan..." value="{{ request('cari') }}">
            </div>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-dark w-100 fw-medium">Cari</button>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-custom align-middle m-0">
            <thead>
                <tr>
                    <th width="5%">NO</th>
                    <th>NAMA JAJAN</th>
                    <th>HARGA</th>
                    <th>KATEGORI</th>
                    <th>TANGGAL</th>
                    <th class="text-end" width="15%">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($semuaJajan as $j)
                <tr>
                    <td class="text-muted fw-semibold">{{ $loop->iteration }}</td>
                    <td class="fw-bold text-dark">{{ $j->nama_jajan }}</td>
                    <td class="fw-bold text-success">Rp {{ number_format($j->harga, 0, ',', '.') }}</td>
                    <td><span class="badge-soft">{{ $j->kategori->nama_kategori }}</span></td>
                    <td class="text-muted small">{{ $j->created_at }}</td>
                    <td class="text-end">
                        <a href="/jajan/edit/{{$j->id}}" class="btn btn-sm btn-light border me-1"><i class="bi bi-pencil-fill text-warning"></i></a>
                        <a href="/jajan/hapus/{{$j->id}}" class="btn btn-sm btn-light border" onclick="return confirm('Yakin hapus data ini?')"><i class="bi bi-trash3-fill text-danger"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-5">
                        <i class="bi bi-inbox fs-1 d-block mb-2 text-secondary"></i>
                        Belum ada catatan jajan.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection