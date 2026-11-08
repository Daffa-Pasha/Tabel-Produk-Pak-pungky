@csrf

<div class="form-group">
    <label for="nama_produk">Nama Produk <span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror"
           id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk ?? '') }}"
           placeholder="Contoh: Kopi Arabika Gayo">
    @error('nama_produk')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="kategori">Kategori <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                   id="kategori" name="kategori" value="{{ old('kategori', $produk->kategori ?? '') }}"
                   placeholder="Contoh: Makanan & Minuman">
            @error('kategori')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="harga">Harga (Rp) <span class="text-danger">*</span></label>
            <input type="number" step="0.01" min="0" class="form-control @error('harga') is-invalid @enderror"
                   id="harga" name="harga" value="{{ old('harga', $produk->harga ?? '') }}" placeholder="0">
            @error('harga')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="stok">Stok <span class="text-danger">*</span></label>
            <input type="number" min="0" class="form-control @error('stok') is-invalid @enderror"
                   id="stok" name="stok" value="{{ old('stok', $produk->stok ?? '') }}" placeholder="0">
            @error('stok')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
              name="deskripsi" rows="4"
              placeholder="Deskripsi singkat produk">{{ old('deskripsi', $produk->deskripsi ?? '') }}</textarea>
    @error('deskripsi')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-0">
    <label for="gambar">Gambar Produk @unless (isset($produk)) <span class="text-danger">*</span> @endunless</label>
    <div class="input-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror"
                   id="gambar" name="gambar" accept="image/jpeg,image/png,image/webp">
            <label class="custom-file-label" for="gambar">Pilih file gambar...</label>
        </div>
    </div>
    <small class="form-text text-muted">Format: JPG, PNG, atau WEBP. Maksimal 2 MB.</small>
    @error('gambar')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>
