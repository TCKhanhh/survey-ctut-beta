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
                                    <!-- <h1 class="m-0">Hỗ trợ & Hướng dẫn</h1> -->
                                    <ol class="breadcrumb float-sm-left mt-2">
                                        <li class="breadcrumb-item"><a href="{{ route('viewHome') }}">Trang chủ</a></li>
                                        <li class="breadcrumb-item active">Hỗ trợ & Hướng dẫn</li>
                                    </ol>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <!-- <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                        <li class="breadcrumb-item active">Hỗ trợ & Hướng dẫn</li>
                                    </ol> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Hướng dẫn sử dụng</h3>
                                </div>
                                <div class="card-body">
                                    <div class="accordion" id="accordionGuide">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne">
                                                        <i class="fas fa-book mr-2"></i>Hướng dẫn tham gia khảo sát
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordionGuide">
                                                <div class="card-body">
                                                    <ol class="pl-3">
                                                        <li>Đăng nhập vào hệ thống bằng tài khoản email cá nhân</li>
                                                        <li>Chọn mục "Khảo sát" từ menu chính</li>
                                                        <li>Chọn học phần cần khảo sát</li>
                                                        <li>Trả lời các câu hỏi khảo sát</li>
                                                        <li>Nhấn "Hoàn thành" để gửi kết quả</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed"
                                                        type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                        <i class="fas fa-question-circle mr-2"></i>Câu hỏi thường gặp
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordionGuide">
                                                <div class="card-body">
                                                    <div class="faq-item mb-3">
                                                        <h5>1. Tôi không thể đăng nhập vào hệ thống?</h5>
                                                        <p>Kiểm tra lại tên đăng nhập và mật khẩu. Nếu vẫn không được,
                                                            liên hệ phòng CTSV để được hỗ trợ.</p>
                                                    </div>
                                                    <div class="faq-item mb-3">
                                                        <h5>2. Khi nào tôi có thể tham gia khảo sát?</h5>
                                                        <p>Thời gian khảo sát thường diễn ra vào cuối mỗi học kỳ. Bạn sẽ
                                                            nhận được thông báo qua email.</p>
                                                    </div>
                                                    <div class="faq-item">
                                                        <h5>3. Làm sao để xem kết quả khảo sát?</h5>
                                                        <p>Kết quả khảo sát sẽ được công bố sau khi kết thúc đợt khảo
                                                            sát trong mục "Kết quả & Thống kê".</p>
                                                    </div>
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
                                    <h3 class="card-title">Liên hệ hỗ trợ</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-info"><i class="fas fa-phone"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Hotline hỗ trợ</span>
                                                    <span class="info-box-number">0987654321</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-success"><i
                                                        class="fas fa-envelope"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Email hỗ trợ</span>
                                                    <span class="info-box-number">hotro@ctuet.edu.vn</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <form id="supportForm">
                                                <div class="form-group">
                                                    <label>Tiêu đề</label>
                                                    <input type="text" class="form-control" placeholder="Nhập tiêu đề">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nội dung</label>
                                                    <textarea class="form-control" rows="4" placeholder="Mô tả vấn đề cần hỗ trợ"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Gửi yêu cầu hỗ
                                                    trợ</button>
                                            </form>
                                        </div>
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
