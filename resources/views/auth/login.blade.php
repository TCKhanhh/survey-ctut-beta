<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo.png') }}">

    <title>Đăng nhập</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/template/admin/dist/css/adminlte.min.css') }}">


    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/template/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/template/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/template/admin/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- Ckeditor -->

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/template/admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/template/admin/plugins/summernote/summernote-bs4.min.css') }}">

    <!-- Toastr -->
    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/admin/plugins/toastr/toastr.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/template/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Error -->


    <link rel="stylesheet" href="{{ asset('assets/template/admin/jqueryupload/upload.css') }}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery -->
    <script src="{{ asset('assets/template/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/template/admin/plugins/toastr/toastr.min.css') }}">

</head>

<body class="sidebar-mini">
    <div class="wrapper">

        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Đăng nhập</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('processLogin') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Nhập email" value="{{ old('email') }}" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="mat_khau" name="mat_khau"
                                            placeholder="Nhập mật khẩu" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="togglePassword()">
                                                <i class="fas fa-eye" id="togglePassword"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function togglePassword() {
                                        var x = document.getElementById("mat_khau");
                                        var icon = document.getElementById("togglePassword");
                                        if (x.type === "password") {
                                            x.type = "text";
                                            icon.classList.remove("fa-eye");
                                            icon.classList.add("fa-eye-slash");
                                        } else {
                                            x.type = "password";
                                            icon.classList.remove("fa-eye-slash");
                                            icon.classList.add("fa-eye");
                                        }
                                    }
                                </script>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="remember">
                                        <label class="custom-control-label" for="remember">Ghi nhớ đăng nhập</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Đăng
                                    nhập</button>
                                <a href="{{ route('viewRegister') }}" class="btn btn-success btn-block mt-2">Đăng
                                    ký</a>

                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('viewForgotPassword') }}" class="text-muted">
                                        <i class="fas fa-key mr-1"></i>Quên mật khẩu?
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('viewHome') }}" class="text-primary">
                                        <i class="fas fa-home mr-1"></i>Trang chủ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/template/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/template/admin/plugins/toastr/toastr.min.js') }}"></script>
    <script>
        // @if (session('success'))
        //     toastr.success("{{ session('success') }}");
        // @endif

        // @if (session('error'))
        //     toastr.error("{{ session('error') }}");
        // @endif

        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
</body>

</html>
