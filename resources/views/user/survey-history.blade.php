@extends('layouts.app')
@section('title', 'Hệ thống Khảo sát')


@section('content')

    <div class="content-wrapper" style="min-height: 1302.12px; margin-top: 46px;">

        <section class="content">
            <div class="container-fluid">
                <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-left">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item">Khảo sát của tôi</li>
                                    <li class="breadcrumb-item active">Lịch sử khảo sát</li>
                                </ol>
                                <!-- <h1 class="m-0">Lịch sử khảo sát</h1> -->
                            </div>
                            <div class="col-sm-6">
                                <!-- <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item">Khảo sát của tôi</li>
                                    <li class="breadcrumb-item active">Lịch sử khảo sát</li>
                                </ol> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3 class="card-title">Danh sách khảo sát đã hoàn thành</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Tìm kiếm khảo sát">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-start mb-3">
                                                    <h5 class="card-title text-truncate flex-grow-1 me-3"
                                                        style="max-width: 70%;">
                                                        Khảo sát nguyện vọng ngành học
                                                    </h5>
                                                    <div class="progress" style="width: 100px; flex-shrink: 0;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100">Đã hoàn thành
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="card-text">
                                                    <small class="text-muted">Đã hoàn thành: 15/12/2023</small>
                                                </p>
                                                <div class="text-right">
                                                    <button class="btn btn-info btn-sm">Xem chi tiết</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title text-truncate">Khảo sát nhu cầu hỗ trợ nhập
                                                    học</h5>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100">Hoàn thành</div>
                                                </div>
                                                <p class="card-text">
                                                    <small class="text-muted">Đã hoàn thành: 10/12/2023</small>
                                                </p>
                                                <div class="text-right">
                                                    <button class="btn btn-info btn-sm">Xem chi tiết</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <h5 class="card-title text-truncate">Khảo sát thông tin tuyển sinh
                                                </h5>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100">Hoàn thành</div>
                                                </div>
                                                <p class="card-text">
                                                    <small class="text-muted">Đã hoàn thành: 05/12/2023</small>
                                                </p>
                                                <div class="text-right">
                                                    <button class="btn btn-info btn-sm">Xem chi tiết</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- --------------------- -->


                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h5 class="card-title text-truncate"
                                                        style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                        Khảo sát nguyện vọng ngành học dài quá sẽ bị cắt...
                                                    </h5>
                                                    <div class="progress"
                                                        style="width: 120px; height: 20px; flex-shrink: 0;">
                                                        <div class="progress-bar bg-success text-center" role="progressbar"
                                                            style="width: 100%; font-size: 12px; line-height: 20px;"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                            Đã hoàn thành
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="card-text">
                                                    <small class="text-muted">Đã hoàn thành: 15/12/2023</small>
                                                </p>
                                                <div class="text-right">
                                                    <button class="btn btn-info btn-sm">Xem chi tiết</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h5 class="card-title text-truncate"
                                                        style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                        Khảo sát nhu cầu hỗ trợ nhập học
                                                    </h5>
                                                    <div class="progress"
                                                        style="width: 120px; height: 20px; flex-shrink: 0;">
                                                        <div class="progress-bar bg-success text-center"
                                                            role="progressbar"
                                                            style="width: 100%; font-size: 12px; line-height: 20px;"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                            Hoàn thành
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="card-text">
                                                    <small class="text-muted">Đã hoàn thành: 10/12/2023</small>
                                                </p>
                                                <div class="text-right">
                                                    <button class="btn btn-info btn-sm">Xem chi tiết</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-3">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h5 class="card-title text-truncate"
                                                        style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                        Khảo sát thông tin tuyển sinh
                                                    </h5>
                                                    <div class="progress"
                                                        style="width: 120px; height: 20px; flex-shrink: 0;">
                                                        <div class="progress-bar bg-success text-center"
                                                            role="progressbar"
                                                            style="width: 100%; font-size: 12px; line-height: 20px;"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                            Hoàn thành
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="card-text">
                                                    <small class="text-muted">Đã hoàn thành: 05/12/2023</small>
                                                </p>
                                                <div class="text-right">
                                                    <button class="btn btn-info btn-sm">Xem chi tiết</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- --------------------- -->

                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <div class="dataTables_info" role="status" aria-live="polite">
                                            Hiển thị 1-3 trong tổng số 6 khảo sát
                                        </div>
                                        <div class="dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination pagination-sm m-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Trước</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Sau</a>
                                                </li>
                                            </ul>
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
