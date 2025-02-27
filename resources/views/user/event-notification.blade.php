@extends('layouts.app')
@section('title', 'Hệ thống Khảo sát')


@section('content')


    <div class="content-wrapper" style="min-height: 1302.12px; margin-top: 46px;">
        <section class="content">
            <div class="container-fluid">
                <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6">
                                <!-- <h1 class="m-0">Thông báo & Sự kiện</h1> -->
                                <ol class="breadcrumb float-sm-left">
                                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Thông báo & Sự kiện</li>
                                </ol>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <!-- <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Thông báo & Sự kiện</li>
                                </ol> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thông báo mới</h3>
                            </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Thông báo về lịch khảo sát tuyển sinh</h5>
                                            <small>3 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Kính gửi các bạn học sinh, nhà trường thông báo về lịch khảo
                                            sát tuyển sinh năm học 2024-2025...</p>
                                        <small class="text-muted">Phòng Tuyển sinh & ĐBCL</small>
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Kết quả khảo sát tuyển sinh đã được công bố</h5>
                                            <small>1 tuần trước</small>
                                        </div>
                                        <p class="mb-1">Kết quả khảo sát tuyển sinh năm học 2024-2025 đã được tổng
                                            hợp và công bố...</p>
                                        <small class="text-muted">Ban Giám hiệu</small>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sự kiện tuyển sinh sắp diễn ra</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <div class="card">
                                            <img class="card-img-top" src="/assets/imgs/download.jpg"
                                                alt="Hội thảo tuyển sinh">
                                            <div class="card-body">
                                                <h5 class="card-title">Hội thảo tư vấn tuyển sinh</h5>
                                                <p class="card-text">
                                                    <i class="fas fa-calendar-alt mr-2"></i>20/06/2024
                                                    <br>
                                                    <i class="fas fa-clock mr-2"></i>08:00 - 11:30
                                                    <br>
                                                    <i class="fas fa-map-marker-alt mr-2"></i>Hội trường A
                                                </p>
                                                <button class="btn btn-primary btn-sm btn-block">Đăng ký tham gia</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <div class="card">
                                            <img class="card-img-top" src="/assets/imgs/download.jpg"
                                                alt="Tập huấn tuyển sinh">
                                            <div class="card-body">
                                                <h5 class="card-title">Tập huấn quy trình đăng ký xét tuyển</h5>
                                                <p class="card-text">
                                                    <i class="fas fa-calendar-alt mr-2"></i>25/06/2024
                                                    <br>
                                                    <i class="fas fa-clock mr-2"></i>14:00 - 16:30
                                                    <br>
                                                    <i class="fas fa-map-marker-alt mr-2"></i>Phòng máy tính 1
                                                </p>
                                                <button class="btn btn-primary btn-sm btn-block">Đăng ký tham gia</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <div class="card">
                                            <img class="card-img-top" src="/assets/imgs/download.jpg"
                                                alt="Tọa đàm tuyển sinh">
                                            <div class="card-body">
                                                <h5 class="card-title">Tọa đàm hướng nghiệp cho sinh viên</h5>
                                                <p class="card-text">
                                                    <i class="fas fa-calendar-alt mr-2"></i>30/06/2024
                                                    <br>
                                                    <i class="fas fa-clock mr-2"></i>08:30 - 11:00
                                                    <br>
                                                    <i class="fas fa-map-marker-alt mr-2"></i>Hội trường B
                                                </p>
                                                <button class="btn btn-primary btn-sm btn-block">Đăng ký tham gia</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
