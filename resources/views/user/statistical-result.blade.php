@extends('layouts.app')
@section('title', 'Hệ thống Khảo sát')


@section('content')

<div id="main-content">

    <div class="content-wrapper" style=" margin-top: 46px;">
        <section class="content">
            <div class="container-fluid">
                <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6">
                                <!-- <h1 class="m-0">Kết quả & Thống kê khảo sát</h1> -->
                                <ol class="breadcrumb float-sm-left mt-2">
                                    <li class="breadcrumb-item"><a href="{{route('viewHome')}}">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Kết quả & Thống kê</li>
                                </ol>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <!-- <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Kết quả & Thống kê</li>
                                </ol> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thống kê tổng quan</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>15</h3>
                                                <p>Tổng số khảo sát đã tham gia</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-poll"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>100%</h3>
                                                <p>Tỷ lệ hoàn thành</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-check-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3>5</h3>
                                                <p>Khảo sát trong học kỳ hiện tại</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-calendar-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3>0</h3>
                                                <p>Khảo sát chưa hoàn thành</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-exclamation-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Biểu đồ thống kê tham gia khảo sát</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart-responsive">
                                    <canvas id="surveyChart" style="min-height: 300px; width: 100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Kết quả chi tiết các khảo sát</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tên khảo sát</th>
                                                <th>Thời gian hoàn thành</th>
                                                <th>Kết quả</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Khảo sát nhu cầu ngành học</td>
                                                <td>15/12/2023</td>
                                                <td><span class="badge badge-success">Hoàn thành</span></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-info btn-sm mb-1 mb-sm-0">Xem chi
                                                            tiết</button>
                                                        <button class="btn btn-secondary btn-sm mb-1 mb-sm-0">Xuất
                                                            PDF</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Khảo sát cơ sở vật chất trường học</td>
                                                <td>10/12/2023</td>
                                                <td><span class="badge badge-success">Hoàn thành</span></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-info btn-sm mb-1 mb-sm-0">Xem chi
                                                            tiết</button>
                                                        <button class="btn btn-secondary btn-sm mb-1 mb-sm-0">Xuất
                                                            PDF</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Khảo sát hoạt động hỗ trợ sinh viên</td>
                                                <td>05/12/2023</td>
                                                <td><span class="badge badge-success">Hoàn thành</span></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-info btn-sm mb-1 mb-sm-0">Xem chi
                                                            tiết</button>
                                                        <button class="btn btn-secondary btn-sm mb-1 mb-sm-0">Xuất
                                                            PDF</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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

</div>
@endsection
