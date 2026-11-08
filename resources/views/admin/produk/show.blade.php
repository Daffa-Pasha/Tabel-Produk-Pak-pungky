@extends('layouts.admin')

@section('title', 'Detail Produk')
@section('page-title', 'Detail Produk')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-eye mr-1"></i> Informasi Produk</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.produk.edit', $produk) }}" class="btn btn-tool btn-primary btn-sm">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </a>
                    <a href="{{ route('admin.produk.index') }}" class="btn btn-tool btn-default btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        @if ($produk->gambar)
                            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}"
                                 class="img-fluid rounded elevation-2" style="max-height: 280px; object-fit: cover;">
                        @else
                            <div class="bg-gray-light rounded d-flex align-items-center justify-content-center"
                                 style="height: 200px;">
                                <i class="fas fa-image fa-3x text-gray"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <table class="table table-sm table-borderless mb-0">
                            <tr>
                                <th style="width: 170px">Nama Produk</th>
                                <td>: {{ $produk->nama_produk }}</td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>: <span class="badge badge-info">{{ $produk->kategori }}</span></td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>: Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td>:
                                    @if ($produk->stok == 0)
                                        <span class="badge badge-danger">Habis</span>
                                    @else
                                        <span class="badge badge-success">{{ $produk->stok }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>: {{ $produk->deskripsi ?: '-' }}</td>
                            </tr>
                            <tr>
                                <th>Dibuat</th>
                                <td>: {{ $produk->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Terakhir diubah</th>
                                <td>: {{ $produk->updated_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
