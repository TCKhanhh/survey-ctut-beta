@extends('layouts.app')
@section('title', 'Hệ thống Khảo sát')


@section('content')

    <div class="content-wrapper" style="min-height: 1302.12px; margin-top: 46px;">

        <section class="content">
            <div class="container-fluid">
                <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0">Khảo sát đang thực hiện</h1> -->
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="{{ route('viewHome') }}">Trang chủ </a></li>
                                <li class="breadcrumb-item" id='level1'>Khảo sát của tôi</li>
                                <li class="breadcrumb-item active" id='level2'>Đang thực hiện</li>
                            </ol>
                        </div>
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
                                    <li class="breadcrumb-item" id='level1'>Khảo sát của tôi</li>
                                    <li class="breadcrumb-item active" id='level2'>Đang thực hiện</li>
                                </ol> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách khảo sát đang thực hiện</h3>
                                <!-- <div class="card-tools">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder="Tìm kiếm khảo sát">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div> -->
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title text-truncate">Khảo sát chất lượng giảng dạy
                                                    học kỳ 1</h5>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100">60%</div>
                                                </div>
                                                <p class="card-text">
                                                    <small class="text-muted">Thời gian còn lại: 5 ngày</small>
                                                </p>
                                                <div class="text-right">
                                                    <button class="btn btn-primary btn-sm">Tiếp tục</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title text-truncate">Khảo sát cơ sở vật chất phòng
                                                    học</h5>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                        aria-valuemax="100">30%</div>
                                                </div>
                                                <p class="card-text">
                                                    <small class="text-muted">Thời gian còn lại: 7 ngày</small>
                                                </p>
                                                <div class="text-right">
                                                    <button class="btn btn-primary btn-sm">Tiếp tục</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title text-truncate">Khảo sát hoạt động ngoại khóa
                                                </h5>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 45%"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                </div>
                                                <p class="card-text">
                                                    <small class="text-muted">Thời gian còn lại: 3 ngày</small>
                                                </p>
                                                <div class="text-right">
                                                    <button class="btn btn-primary btn-sm">Tiếp tục</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div class="text-muted">
                                        Hiển thị 1-3 trong tổng số 6 khảo sát
                                    </div>
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination pagination-sm m-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Trước</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Sau</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
