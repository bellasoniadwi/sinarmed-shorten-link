@extends('adminLayout.main')
@section('title')
    Data Thumbnail Nonactive
@endsection
@section('product', 'active')
@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="navbar navbar-expand-lg navbar-light">
                        <ul class="navbar-nav">
                            <h5 class="card-title fw-semibold">Thumbnail Nonactive</h5>
                        </ul>
                        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                <a href="{{ route('thumbnail-nonactive.create') }}" class="btn btn-danger">Tambah Thumbnail</a>
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
                                        <h6 class="fw-semibold mb-0">Judul Thumbnail</h6>
                                    </th>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">Link</h6>
                                    </th>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nonactive as $index => $p)
                                    <tr>

                                        <td class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0">{{ $index + 1 }}</h6>
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            @php
                                                $nama = $p->nama_product;
                                                $namaChunks = str_split($nama, 60);
                                            @endphp
                                            @foreach ($namaChunks as $chunk)
                                                {{ $chunk }}<br>
                                            @endforeach
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            <span class="badge bg-success rounded-3 fw-semibold">
                                                <a href="{{ $p->link_product }}" class="text-light font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="{{ $p->nama_product }}"
                                                    target="_blank">Buka Link</a>
                                            </span>
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            <a rel="noopener" href="{{ route('product.edit', $p->id) }}"
                                                aria-label="Edit Product"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-edit-circle" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                    <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                                                </svg></a>
                                            <a href="" aria-label="Delete Product" class="delete-product"
                                                data-id="{{ $p->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 7l16 0"></path>
                                                    <path d="M10 11l0 6"></path>
                                                    <path d="M14 11l0 6"></path>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                </svg>
                                            </a>
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
@section('js')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-product');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const productId = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Apakah Anda yakin ingin menghapus product ini?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus product!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(`{{ route('product.destroy', '') }}/${productId}`, {
                                    method: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                })
                                .then(function(response) {
                                    if (response.ok) {
                                        Swal.fire({
                                            title: 'Deleted!',
                                            text: 'Product berhasil dihapus.',
                                            icon: 'success',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                    } else {
                                        console.error('Gagal menghapus product');
                                    }
                                    window.location.reload();
                                })
                                .catch(function(error) {
                                    console.error('Terjadi kesalahan:', error);
                                });
                        }
                    });
                });
            });
        });
    </script>

@endsection
