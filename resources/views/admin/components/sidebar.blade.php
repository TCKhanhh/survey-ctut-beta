<aside class="main-sidebar sidebar-dark-primary elevation-0 fixed-top"
    style="position: fixed; height: 100vh; overflow-y: auto;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link ajax-link">
        <img src="assets/imgs/logo.png" alt="logo CTUT" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CTUT|Admin</span>
    </a> <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu"
                data-accordion="false" style="color: white" id="sidebar">

                <li class="nav-item">
                    <a href="{{ route('viewHomeAdmin') }}" class="nav-link ajax-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-poll"></i>
                        <p>Quản lý khảo sát<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('viewListSurvey') }}" class="nav-link ajax-link">
                                <i class="fas fa-clipboard-list nav-icon"></i>
                                <p>Danh sách khảo sát</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ajax-link">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Thêm khảo sát</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>Quản lý câu hỏi<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('viewListQuestion') }}" class="nav-link ajax-link">
                                <i class="fas fa-list-ul nav-icon"></i>
                                <p>Danh sách câu hỏi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ajax-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Thêm câu hỏi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Người dùng<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('viewListUser') }}" class="nav-link ajax-link">
                                <i class="fas fa-user-friends nav-icon"></i>
                                <p>Danh sách người dùng</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Thống kê<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link ajax-link">
                                <i class="fas fa-percentage nav-icon"></i>
                                <p>Thống kê tỷ lệ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ajax-link">
                                <i class="fas fa-star nav-icon"></i>
                                <p>Thống kê đánh giá</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
