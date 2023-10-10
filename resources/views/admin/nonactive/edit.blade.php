@extends('adminLayout.main')
@section('title')
    Edit Thumbnail Nonactive
@endsection
@section('nonactive', 'active')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Edit Thumbnail Nonactive</h5>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-label-left input_mask" method="POST"
                    enctype="multipart/form-data" action="{{ route('thumbnail-nonactive.update', $nonactive->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label for="judul_thumbnail" class="form-label">Judul Thumbnail Nonactive</label>
                            <input type="text" class="form-control" id="judul_thumbnail" name="judul_thumbnail" required placeholder="Judul Thumbnail Nonactive" value="{{$nonactive->judul_thumbnail}}">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link Thumbnail Nonactive</label>
                            <input type="url" class="form-control" id="link_thumbnail" name="link_thumbnail" required placeholder="https://link_thumbnail_nonactive" value="{{$nonactive->link_thumbnail}}">
                        </div>
                        {{-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <a href="{{ route('thumbnail-nonactive.index') }}" class="btn btn-success">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
