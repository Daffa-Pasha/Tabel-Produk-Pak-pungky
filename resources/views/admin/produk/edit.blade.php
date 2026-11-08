@extends('layouts.admin')

@section('title', 'Edit Produk')
@section('page-title', 'Edit Produk')

@section('content')
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-pencil-alt mr-1"></i> Ubah Data Produk</h3>
    </div>
    <form method="POST" action="{{ route('admin.produk.update', $produk) }}" enctype="multipart/form-data">
        @method('PUT')
        <div class="card-body">
            @if ($produk->gambar)
                <div class="form-group">
                    <label>Gambar saat ini</label>
                    <div>
                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}"
                             class="elevation-2 rounded" style="width: 120px; height: 120px; object-fit: cover;">
                        <small class="form-text text-muted">Unggah gambar baru untuk menggantinya.</small>
                    </div>
                </div>
            @endif

            @include('admin.produk._form')
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-warning">
                <i class="fas fa-save"></i> Perbarui Produk
            </button>
            <a href="{{ route('admin.produk.index') }}" class="btn btn-default">
                <i class="fas fa-times"></i> Batal
            </a>
        </div>
    </form>
</div>
@endsection
