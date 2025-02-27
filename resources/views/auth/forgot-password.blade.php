<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo.png') }}">

    <title>Quên mật khẩu</title>

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
</head>

<body class="sidebar-mini">
    <div class="wrapper">

        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Quên mật khẩu</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Nhập email của bạn" required>
                                </div>
                                <div class="form-group">
                                    <label for="verification_code">Mã xác thực</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="verification_code"
                                            name="verification_code" placeholder="Nhập mã xác thực" required>
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary">Gửi mã</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="new_password_form">
                                    <label for="new_password">Mật khẩu mới</label>
                                    <input type="password" class="form-control" id="new_password" name="new_password"
                                        placeholder="Nhập mật khẩu mới" required>
                                </div>
                                <div class="form-group" id="confirm_password_form">
                                    <label for="confirm_password">Nhập lại mật khẩu mới</label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" placeholder="Nhập lại mật khẩu mới" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Xác nhận</button>
                                <a href="{{ route('viewLogin') }}" class="btn btn-secondary btn-block mt-2">Quay lại
                                    đăng nhập</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <footer class="main-footer">
            <strong>Trường Đại học Kỹ thuật - Công nghệ Cần Thơ &copy; since 2013 <a
                    href="https://ctuet.edu.vn">CTUT</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Phiên bản</b> 1.0.0 (tháng 06/2024)
            </div>
        </footer> -->
        <!-- {{-- <div id="sidebar-overlay"></div> --}} -->

        <!-- jQuery -->
        <script src="/template/admin/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/template/admin/dist/js/adminlte.min.js"></script>



        <script src="/template/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <!-- {{--
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script> --}} -->
        <!-- ChartJS -->
        <script src="/template/admin/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="/template/admin/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="/template/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="/template/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="/template/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="/template/admin/plugins/moment/moment.min.js"></script>
        <script src="/template/admin/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="/template/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="/template/admin/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="/template/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/template/admin/dist/js/pages/dashboard.js"></script>

        <!-- Select2 -->
        <script src="/template/admin/plugins/select2/js/select2.full.min.js"></script>

        <script src="/template/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="/template/admin/plugins/toastr/toastr.min.js"></script>
    </div>

</body>

</html>
