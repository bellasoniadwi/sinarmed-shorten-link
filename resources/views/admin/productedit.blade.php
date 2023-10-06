@extends('adminLayout.main')
@section('title')
    Edit Product
@endsection
@section('product', 'active')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Edit product Sinarmed</h5>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-label-left input_mask" method="POST"
                    enctype="multipart/form-data" action="{{ route('product.update', $product->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama product</label>
                            <input type="text" class="form-control" id="nama_product" name="nama_product" required placeholder="Nama product" value="{{$product->nama_product}}">
                        </div>
                        <div class="mb-3">
                            <label for="kategori_product" class="form-label">Kategori Product</label>
                            <select class="form-control" id="kategori_product" name="kategori_product" required>
                                <option value="AKL" @if ($product->kategori_product == "AKL") selected @endif>E-Katalog AKL</option>
                                <option value="TKDN" @if ($product->kategori_product == "TKDN") selected @endif>E-Katalog TKDN</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link product</label>
                            <input type="url" class="form-control" id="link_product" name="link_product" required placeholder="https://link_product" value="{{$product->link_product}}">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar product</label>
                            <input type="file" class="form-control" id="gambar_product" name="gambar_product" value="{{old('gambar_product')}}">
                            <img width="70px" height="100"src="{{asset('storage/'. $product->gambar_product)}}" >
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
