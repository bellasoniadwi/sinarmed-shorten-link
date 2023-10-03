<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin || Hubungi Kami</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('styleAdmin/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{ asset('styleAdmin/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    <!--  Main wrapper -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4 center">Hubungi Kami</h5>
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-label-left input_mask" method="POST"
                        enctype="multipart/form-data" action="{{ route('product.store') }}">
                        @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan Nama Anda">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required placeholder="example@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required placeholder="Masukkan Nomor Telepon">
                            </div>
                            <a href="{{ route('home') }}" class="btn btn-success">Kembali</a>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            @include('adminLayout.footer')
        </div>
        
      </div>

    @yield('js')
  </div>
  <script src="{{ asset('styleAdmin/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('styleAdmin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('styleAdmin/js/sidebarmenu.js')}}"></script>
  <script src="{{ asset('styleAdmin/js/app.min.js')}}"></script>
  <script src="{{ asset('styleAdmin/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{ asset('styleAdmin/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{ asset('styleAdmin/js/dashboard.js')}}"></script>
</body>

</html>