<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Login</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('styleAdmin/images/logos/sinarmed.png') }}" />
    <link rel="stylesheet" href="{{ asset('styleAdmin/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div
                class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <div class="row justify-content-center w-100">
                        <div class="col-md-8 col-lg-6 col-xxl-3">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <a href="{{ route('home')}}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                        <img src="{{ asset('styleAdmin/images/logos/logo-sinarmed.png') }}"
                                            width="250" height="100" alt="">
                                    </a>
                                    {{-- <p class="text-center">Admin Linktree</p> --}}
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" name="username"
                                                id="username" required />
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="exampleInputPassword1" name="password" id="password" required />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Remeber this Device
                                            </label>
                                        </div>
                                        <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                                    </div> --}}
                                        {{-- <a href="#" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign
                                            In</a> --}}
                                            <button type="submit" class="btn btn-danger w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                                        {{-- <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                                        <a class="text-primary fw-bold ms-2"
                                            href="./authentication-register.html">Create an account</a>
                                    </div> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('styleAdmin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('styleAdmin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
