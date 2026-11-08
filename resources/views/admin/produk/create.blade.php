@extends('layouts.admin')

@section('title', 'Tambah Produk')
@section('page-title', 'Tambah Produk')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-plus-circle mr-1"></i> Form Produk Baru</h3>
    </div>
    <form method="POST" action="{{ route('admin.produk.store') }}" enctype="multipart/form-data">
        <div class="card-body">
            @include('admin.produk._form')
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan Produk
            </button>
            <a href="{{ route('admin.produk.index') }}" class="btn btn-default">
                <i class="fas fa-times"></i> Batal
            </a>
        </div>
    </form>
</div>
@endsection
