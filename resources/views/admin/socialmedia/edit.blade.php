@extends('adminLayout.main')
@section('title')
    Edit Thumbnail Social Media
@endsection
@section('socialmedia', 'active')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Edit Thumbnail Social Media</h5>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-label-left input_mask" method="POST"
                    enctype="multipart/form-data" action="{{ route('thumbnail-socialmedia.update', $socialmedia->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label for="link" class="form-label">Link Thumbnail Social Media</label>
                            <input type="url" class="form-control" id="link_thumbnail" name="link_thumbnail" required placeholder="https://link_thumbnail_socialmedia" value="{{$socialmedia->link_thumbnail}}">
                        </div>
                        <div class="mb-3">
                            <label for="gambar_thumbnail" class="form-label">Gambar Thumbnail Social Media</label>
                            <input type="file" class="form-control" id="gambar_thumbnail" name="gambar_thumbnail" value="{{old('gambar_thumbnail')}}">
                            <img width="100px" height="100"src="{{asset('storage/'. $socialmedia->gambar_thumbnail)}}" >
                        </div>
                        {{-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <a href="{{ route('thumbnail-socialmedia.index') }}" class="btn btn-success">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
