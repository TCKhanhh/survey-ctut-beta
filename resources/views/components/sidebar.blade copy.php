<aside class="main-sidebar sidebar-dark-primary elevation-0 fixed-top"
    style="position: fixed; height: 100vh; overflow-y: auto;">
    <!-- Brand Logo -->
    <a href="{{ route('viewHome') }}" class="brand-link">
        <img src="assets/imgs/logo.png" alt="logo CTUT" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CTUT|Khảo sát</span>
    </a> <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu"
                data-accordion="false" style="color: white" id="sidebar">

                <li class="nav-item">
                    <a href="{{ route('viewHome') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Danh mục<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('viewAllSurvey') }}" class="nav-link">
                                <i class="far fa-file-alt nav-icon"></i>
                                <p>Tất cả khảo sát</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('viewAdmissionSupport') }}" class="nav-link">
                                <i class="fas fa-user-graduate nav-icon"></i>
                                <p>Hỗ trợ tuyển sinh</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-folder nav-icon"></i>
                                <p>Khác...</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>Khảo sát của tôi<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('viewSurveyUnderway')}}" class="nav-link">
                                <i class="far fa-play-circle nav-icon"></i>
                                <p>Khảo sát đang thực hiện</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('viewSurveyHistory')}}" class="nav-link">
                                <i class="far fa-clock nav-icon"></i>
                                <p>Lịch sử khảo sát</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('viewStatisticalResult')}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Kết quả & Thống kê</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('viewEventNotification')}}" class="nav-link">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>Thông báo & Sự kiện</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('viewInstructionalSupport')}}" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Hỗ trợ & Hướng dẫn</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('viewAccountSetting')}}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Cài đặt tài khoản</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
