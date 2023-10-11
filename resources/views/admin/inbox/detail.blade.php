@extends('adminLayout.main')
@section('title')
    Detail Inbox
@endsection
@section('group', 'active')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Detail Inbox</h5>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$inbox->nama}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" value="{{$inbox->telepon}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <input type="text" class="form-control" id="pesan" name="pesan" value="{{$inbox->pesan}}" readonly>
                    </div>
                    <a href="{{ route('thumbnail-inbox.index') }}" class="btn btn-success">Kembali</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection
