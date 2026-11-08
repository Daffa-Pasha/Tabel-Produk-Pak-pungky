@extends('layouts.admin')

@section('title', 'Data Produk')
@section('page-title', 'Data Produk')

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
        <form method="GET" action="{{ route('admin.produk.index') }}" class="form-inline">
            <input type="text" name="cari" class="form-control mr-2" style="min-width: 260px;"
                   placeholder="Cari nama produk atau kategori..." value="{{ $keyword }}">
            <button type="submit" class="btn btn-primary mr-2">
                <i class="fas fa-search"></i> Cari
            </button>
            @if ($keyword)
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary mr-2">Reset</a>
            @endif
            <a href="{{ route('admin.produk.create') }}" class="btn btn-success ml-auto">
                <i class="fas fa-plus"></i> Tambah Produk
            </a>
        </form>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="width: 60px">No</th>
                    <th style="width: 90px">Gambar</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th class="text-right">Harga</th>
                    <th class="text-center">Stok</th>
                    <th style="width: 170px" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produks as $produk)
                    <tr>
                        <td>{{ $produks->firstItem() + $loop->index }}</td>
                        <td>
                            @if ($produk->gambar)
                                <img src="{{ asset('storage/' . $produk->gambar) }}"
                                     alt="{{ $produk->nama_produk }}"
                                     class="img-rounded elevation-1"
                                     style="width: 60px; height: 60px; object-fit: cover;">
                            @else
                                <div class="bg-gray-light d-flex align-items-center justify-content-center rounded"
                                     style="width: 60px; height: 60px;">
                                    <i class="fas fa-image fa-2x text-gray"></i>
                                </div>
                            @endif
                        </td>
                        <td><strong>{{ $produk->nama_produk }}</strong></td>
                        <td><span class="badge badge-info">{{ $produk->kategori }}</span></td>
                        <td class="text-right">Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                        <td class="text-center">
                            @if ($produk->stok == 0)
                                <span class="badge badge-danger">Habis</span>
                            @else
                                <span class="badge badge-success">{{ $produk->stok }}</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.produk.show', $produk) }}"
                                   class="btn btn-default" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.produk.edit', $produk) }}"
                                   class="btn btn-primary" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form method="POST" action="{{ route('admin.produk.destroy', $produk) }}"
                                      onsubmit="return confirm('Yakin ingin menghapus produk {{ $produk->nama_produk }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">
                            Belum ada data produk.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <span class="text-muted small">
            Menampilkan {{ $produks->firstItem() ?? 0 }}–{{ $produks->lastItem() ?? 0 }}
            dari {{ $produks->total() }} produk
        </span>
        <div class="float-right">
            {{ $produks->links() }}
        </div>
    </div>
</div>
@endsection
