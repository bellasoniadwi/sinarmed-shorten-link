@extends('adminLayout.main')
@section('title')
    Data Produk
@endsection
@section('produk', 'active')
@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="navbar navbar-expand-lg navbar-light">
                        <ul class="navbar-nav">
                            <h5 class="card-title fw-semibold">Recent Transactions</h5>
                        </ul>
                        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                <a href="{{ route('product.create') }}" class="btn btn-danger">Tambah Produk</a>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">No.</h6>
                                    </th>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">Gambar Produk</h6>
                                    </th>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">Nama Produk</h6>
                                    </th>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">Link Produk</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $index => $p)
                                    <tr>

                                        <td class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0">{{ $index + 1 }}</h6>
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            <img height="50px" width="50px"
                                                src="{{ asset('storage/' . $p->gambar_produk) }}"
                                                alt="{{ $p->nama_produk }}" />
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0 fs-4">{{ $p->nama_produk }}</h6>
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            <span class="badge bg-success rounded-3 fw-semibold">
                                                <a href="{{ $p->link_produk }}" class="text-light font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="{{ $p->nama_produk }}"
                                                    target="_blank">Buka Link</a>
                                            </span>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
