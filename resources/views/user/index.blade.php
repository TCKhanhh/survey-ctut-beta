@extends('layouts.app')
@section('title', 'Hệ thống Khảo sát')

@section('content')
    {{-- <div class="content-wrapper" style="min-height: 1302.12px; margin-top: 46px;"> --}}
    <div class="content-wrapper" style=" margin-top: 46px;">
        <section class="content">
            <div class="container-fluid">
                <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6">
                                {{-- <ol class="breadcrumb float-sm-left">
                                    <li class="breadcrumb-item active">Trang chủ</li>
                                </ol> --}}
                                <!-- <h1 class="m-0 text-wrap">Trang chủ</h1> -->
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <!-- <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item active">Trang chủ</li>
                                            </ol> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <!-- <div class="carousel-item active">
                                                <img src="/assets/imgs/download.jpg" class="d-block w-100" alt="CTUT Image 1"
                                                    style="height: 400px; object-fit: cover;">
                                            </div> -->
                                <div class="carousel-item active">
                                    <img src="/assets/imgs/download.jpg" class="d-block w-100" alt="CTUT Image 2"
                                        style="height: 400px; width: 100%; object-fit: contain; background-color: #fff;">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/imgs/cropped-banner_web.png" class="d-block w-100" alt="CTUT Image 2"
                                        style="height: 400px; width: 100%; object-fit: contain; background-color: #fff;">
                                </div>


                                <!-- <div class="carousel-item">
                                                <img src="/assets/imgs/GLpLPfaboAAXYGe.png" class="d-block w-100" alt="CTUT Image 3" style="height: 400px; object-fit: cover;">
                                            </div> -->
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="welcome-message text-center mb-4">Chào mừng bạn đến với Hệ thống Khảo sát
                                    Sinh viên CTUT!</h4>
                                <p class="text-center">Hãy đóng góp ý kiến của bạn để giúp chúng tôi cải thiện chất
                                    lượng tuyển sinh</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header">
                                <h3 class="card-title">Khảo sát đang diễn ra</h3>
                            </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Khảo sát ý kiến về chương trình tuyển sinh</h5>
                                            <small class="text-danger">Còn 3 ngày</small>
                                        </div>
                                        <p class="mb-1">Đánh giá chất lượng quy trình tuyển sinh</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Khảo sát cơ sở vật chất</h5>
                                            <small class="text-danger">Còn 7 ngày</small>
                                        </div>
                                        <p class="mb-1">Đánh giá về cơ sở vật chất của trường</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header">
                                <h3 class="card-title">Thông báo mới</h3>
                            </div>
                            <div class="card-body">
                                <div class="timeline timeline-inverse">
                                    <div class="time-label">
                                        <span class="bg-info">25/02/2025</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-envelope bg-primary"></i>
                                        <div class="timeline-item">
                                            <h3 class="timeline-header">Khảo sát mới đã được phát hành</h3>
                                            <div class="timeline-body">
                                                Vui lòng tham gia khảo sát chất lượng quy trình tuyển sinh
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <i class="fas fa-clock bg-gray"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Hướng dẫn nhanh</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info"><i
                                                    class="fas fa-clipboard-list"></i></span>
                                            <div class="info-box-content">
                                                <h5>Bước 1</h5>
                                                <p>Chọn khảo sát cần tham gia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-success"><i class="fas fa-edit"></i></span>
                                            <div class="info-box-content">
                                                <h5>Bước 2</h5>
                                                <p>Trả lời các câu hỏi khảo sát</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-warning"><i
                                                    class="fas fa-check-circle"></i></span>
                                            <div class="info-box-content">
                                                <h5>Bước 3</h5>
                                                <p>Gửi kết quả khảo sát</p>
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

@section('scripts')
    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    </script>
@endsection
