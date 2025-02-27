<nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm fixed-top">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('viewHome') }}" class="nav-link">Trang chủ</a>
        </li>
        <li class="nav-item">
            <a href="https://ctuet.edu.vn" class="nav-link">Liên hệ</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <div class="user-panel mt-1 d-flex" style="margin-right: 10px">
            <div class="info">
                <a href="#" class="d-block" id="nameUser"></a></a>
            </div>
        </div>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" style="padding:0px">
                <div class="user-panel" style="padding:0px">
                    <!-- <img class="img-circle" alt="User Image"
                        src='https://cdn.haitrieu.com/wp-content/uploads/2022/12/Artboard-3.png'> -->
                    <img class="img-circle" alt="User Image" src='{{ asset('assets/imgs/logo.png') }}'>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <!-- <div class="dropdown-divider"></div> -->
                <a id='doimatkhau_admin' onclick="userChangePass_load_admin()" class="dropdown-item"
                    style="cursor: pointer;">
                    <i class="fas fa-key mr-2"></i>Đổi mật khẩu
                </a>
                <div class="dropdown-divider"></div>
                <a href="dang_nhap.html" onclick="userLogout_admin()" class="dropdown-item" style="cursor: pointer;">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i>Đăng xuất
                </a>
            </div>
        </li>

    </ul>
</nav>

<script>
    $(document).ready(function() {
        $(".nav-item.dropdown > a").click(function(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a>
            $(this).next(".dropdown-menu").toggle(); // Đóng/mở dropdown menu
        });

        // Đóng dropdown khi click ra ngoài
        $(document).click(function(e) {
            if (!$(e.target).closest('.nav-item.dropdown').length) {
                $(".dropdown-menu").hide();
            }
        });
    });
</script>
