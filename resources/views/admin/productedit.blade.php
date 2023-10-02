@extends('adminLayout.main')
@section('title')
    Edit Product
@endsection
@section('produk', 'active')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Edit Produk Sinarmed</h5>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-label-left input_mask" method="POST"
                    enctype="multipart/form-data" action="{{ route('product.update', $product->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required placeholder="Nama Produk" value="{{$product->nama_produk}}">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link Produk</label>
                            <input type="url" class="form-control" id="link_produk" name="link_produk" required placeholder="https://link_produk" value="{{$product->link_produk}}">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control" id="gambar_produk" name="gambar_produk" value="{{old('gambar_produk')}}">
                            <img width="70px" height="100"src="{{asset('storage/'. $product->gambar_produk)}}" >
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
