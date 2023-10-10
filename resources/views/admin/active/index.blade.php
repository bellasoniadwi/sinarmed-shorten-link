@extends('adminLayout.main')
@section('title')
    Data Thumbnail Active
@endsection
@section('active', 'active')
@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="navbar navbar-expand-lg navbar-light">
                        <ul class="navbar-nav">
                            <h5 class="card-title fw-semibold">Thumbnail Active</h5>
                        </ul>
                        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                <a href="{{ route('thumbnail-active.create') }}" class="btn btn-danger">Tambah Thumbnail</a>
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
                                        <h6 class="fw-semibold mb-0">Gambar Thumbnail</h6>
                                    </th>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">Judul Thumbnail</h6>
                                    </th>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">Link</h6>
                                    </th>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">Status</h6>
                                    </th>
                                    <th class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0">Aksi</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($active as $index => $a)
                                    <tr>
                                        <td class="border-bottom-0 text-center">
                                            <h6 class="fw-semibold mb-0">{{ $index + 1 }}</h6>
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            <img height="50px" width="50px"
                                                src="{{ asset('storage/' . $a->gambar_thumbnail) }}"
                                                alt="{{ $a->judul_thumbnail }}" />
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            @php
                                                $judul = $a->judul_thumbnail;
                                                $judulChunks = str_split($judul, 60);
                                            @endphp
                                            @foreach ($judulChunks as $chunk)
                                                {{ $chunk }}<br>
                                            @endforeach
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                            <span class="badge bg-success rounded-3 fw-semibold">
                                                <a href="{{ $a->link_thumbnail }}" class="text-light font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="{{ $a->link_thumbnail }}"
                                                    target="_blank">Buka Link</a>
                                            </span>
                                        </td>
                                        <td class="border-bottom-0 text-center">
                                                @if ($a->is_active == true) 
                                                <span class="badge bg-primary rounded-3 fw-semibold">
                                                    Aktif
                                                </span>
                                                @else
                                                <span class="badge bg-danger rounded-3 fw-semibold">
                                                    Tidak Aktif
                                                </span>
                                                @endif
                                        </td>                                        
                                        <td class="border-bottom-0 text-center">
                                            <a rel="noopener" href="{{ route('thumbnail-active.edit', $a->id) }}"
                                                aria-label="Edit Thumbnail Active"><svg xmlns="http://www.w3.org/2000/svg"
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
                                            <a href="" aria-label="Delete Thumbnail Active" class="delete-thumbnail"
                                                data-id="{{ $a->id }}">
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
            const deleteButtons = document.querySelectorAll('.delete-thumbnail');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const thumbnailId = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Apakah Anda yakin ingin menghapus thumbnail ini?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus thumbnail!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(`{{ route('thumbnail-active.destroy', '') }}/${thumbnailId}`, {
                                    method: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                })
                                .then(function(response) {
                                    if (response.ok) {
                                        Swal.fire({
                                            title: 'Deleted!',
                                            text: 'Thumbnail berhasil dihapus.',
                                            icon: 'success',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                    } else {
                                        console.error('Gagal menghapus thumbnail');
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
