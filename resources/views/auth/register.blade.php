<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo.png') }}">

    <title>Đăng ký</title>

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
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Đăng ký tài khoản</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('processRegister') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Họ và tên</label>
                                            <input type="text" class="form-control" id="ho_ten" name="ho_ten"
                                                placeholder="Nhập họ và tên" value="{{ old('ho_ten') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Nhập email" value="{{ old('email') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Số điện thoại</label>
                                            {{-- <input type="tel" class="form-control" id="sdt" name="sdt"
                                                placeholder="Nhập số điện thoại" pattern="[0-9]{10}"> --}}
                                            <input type="text" class="form-control" id="sdt" name="sdt"
                                                placeholder="Nhập số điện thoại" value="{{ old('sdt') }}">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="province">Tỉnh/Thành phố</label>
                                            <select class="form-control select2" id="province" name="province">
                                                <option value="">Chọn tỉnh/thành phố</option>

                                            </select>
                                        </div> --}}

                                    </div>
                                    <div class="col-lg-6">
                                        {{-- <div class="form-group">
                                            <label for="highschool">Trường THPT</label>
                                            <select class="form-control select2" id="highschool" name="highschool">
                                                <option value="">Chọn trường THPT</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="aspiration">Ngành học mong muốn</label>
                                            <select class="form-control select2" id="aspiration" name="aspiration">
                                                <option value="">Chọn ngành học</option>
                                                <option value="CNTT">Công nghệ thông tin</option>
                                                <option value="KTPM">Kỹ thuật phần mềm</option>
                                                <option value="KTĐT">Kỹ thuật điện tử</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="password">Mật khẩu</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="mat_khau"
                                                    name="mat_khau" placeholder="Nhập mật khẩu" minlength="8" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text toggle-password"
                                                        style="cursor: pointer;">
                                                        <i class="fas fa-eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Xác nhận mật khẩu</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="nhap_lai_mat_khau"
                                                    name="nhap_lai_mat_khau" placeholder="Nhập lại mật khẩu"
                                                    minlength="8" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text toggle-password"
                                                        style="cursor: pointer;">
                                                        <i class="fas fa-eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="terms"
                                                    required>
                                                <label class="custom-control-label" for="terms">Tôi đồng ý với các
                                                    điều khoản sử dụng</label>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $('.toggle-password').click(function() {
                                                    const input = $(this).closest('.input-group').find('input');
                                                    const icon = $(this).find('i');

                                                    if (input.attr('type') === 'password') {
                                                        input.attr('type', 'text');
                                                        icon.removeClass('fa-eye').addClass('fa-eye-slash');
                                                    } else {
                                                        input.attr('type', 'password');
                                                        icon.removeClass('fa-eye-slash').addClass('fa-eye');
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                            </form>

                            <script>
                                $(document).ready(function() {
                                    $('.select2').select2();

                                    $('#province').change(function() {
                                        var provinceId = $(this).val();
                                        if (provinceId) {
                                            $.ajax({
                                                url: '/get-schools/' + provinceId,
                                                type: 'GET',
                                                success: function(data) {
                                                    $('#highschool').empty();
                                                    $('#highschool').append(
                                                        '<option value="">Chọn trường THPT</option>');
                                                    $.each(data, function(key, value) {
                                                        $('#highschool').append('<option value="' + value.id +
                                                            '">' + value.name + '</option>');
                                                    });
                                                }
                                            });
                                        } else {
                                            $('#highschool').empty();
                                            $('#highschool').append('<option value="">Chọn trường THPT</option>');
                                        }
                                    });
                                });
                            </script>
                        </div>
                        <div class="card-footer text-center">
                            <p>Đã có tài khoản? <a href="{{ route('viewLogin') }}">Đăng nhập</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/template/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/template/admin/plugins/toastr/toastr.min.js') }}"></script>
    {{-- <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    </script> --}}
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

</body>

</html>
