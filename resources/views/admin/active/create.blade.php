@extends('adminLayout.main')
@section('title')
    Tambah Thumbnail Active
@endsection
@section('active', 'active')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Tambah Thumbnail Active</h5>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-label-left input_mask" method="POST"
                    enctype="multipart/form-data" action="{{ route('thumbnail-active.store') }}">
                    @csrf
                        <div class="mb-3">
                            <label for="judul_thumbnail" class="form-label">Judul Thumbnail Active</label>
                            <input type="text" class="form-control" id="judul_thumbnail" name="judul_thumbnail" required placeholder="Judul Thumbnail Active">
                        </div>
                        <div class="mb-3">
                            <label for="link_thumbnail" class="form-label">Link Thumbnail Active</label>
                            <input type="url" class="form-control" id="link_thumbnail" name="link_thumbnail" required placeholder="https://link_thumbnail_active">
                        </div>
                        <div class="mb-3">
                            <label for="gambar_thumbnail" class="form-label">Gambar Thumbnail Active</label>
                            <input type="file" class="form-control" id="gambar_thumbnail" name="gambar_thumbnail" required>
                        </div>
                        {{-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <a href="{{ route('thumbnail-active.index') }}" class="btn btn-success">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
