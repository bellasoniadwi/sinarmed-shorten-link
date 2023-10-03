<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin || @yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('styleAdmin/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{ asset('styleAdmin/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('adminLayout.sidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
        @include('adminLayout.header')
      <div class="container-fluid">
        @yield('content')
        @include('sweetalert::alert')
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>