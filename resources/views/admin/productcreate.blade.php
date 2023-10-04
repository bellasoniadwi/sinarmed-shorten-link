@extends('adminLayout.main')
@section('title')
    Tambah Product
@endsection
@section('product', 'active')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Tambah product Sinarmed</h5>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-label-left input_mask" method="POST"
                    enctype="multipart/form-data" action="{{ route('product.store') }}">
                    @csrf
                        <div class="mb-3">
                            <label for="nama_product" class="form-label">Nama Product</label>
                            <input type="text" class="form-control" id="nama_product" name="nama_product" required placeholder="Nama product">
                        </div>
                        <div class="mb-3">
                            <label for="kategori_product" class="form-label">Kategori Product</label>
                            <select class="form-control" id="kategori_product" name="kategori_product" required>
                                <option value="E-katalog">E-katalog</option>
                                <option value="Dalam Negeri">Dalam Negeri</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="link_product" class="form-label">Link Product</label>
                            <input type="url" class="form-control" id="link_product" name="link_product" required placeholder="https://link_product">
                        </div>
                        <div class="mb-3">
                            <label for="gambar_product" class="form-label">Gambar Product</label>
                            <input type="file" class="form-control" id="gambar_product" name="gambar_product" required>
                        </div>
                        {{-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <a href="{{ route('product.index') }}" class="btn btn-success">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
