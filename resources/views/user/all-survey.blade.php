@extends('layouts.app')
@section('title', 'Hệ thống Khảo sát')


@section('content')

    <div id="main-content">
        <div class="content-wrapper" style=" margin-top: 46px;">

            <section class="content">
                <div class="container-fluid">
                    <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
                        <div class="row">
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-left mt-2 mb-2">
                                    <li class="breadcrumb-item"><a href="{{ route('viewHome') }}">Trang chủ </a></li>
                                    <li class="breadcrumb-item" id='level1'>Danh mục</li>
                                    <li class="breadcrumb-item active" id='level2'>Tất cả khảo sát</li>
                                </ol>
                                <!-- <h1 class="m-0">Dashboard</h1> -->
                            </div>
                            <div class="col-sm-6">
                                <!-- <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
                                            <li class="breadcrumb-item" id='level1'></li>
                                            <li class="breadcrumb-item active" id='level2'></li>
                                        </ol> -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="loadpage"></div>

                            <!-- Danh sách khảo sát -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Danh sách phiếu khảo sát</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title"
                                                        style="height: 48px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                        Khảo sát ý kiến về chương trình tuyển sinh</h5>
                                                    <p class="card-text">Thời gian: 25/02/2025 - 28/03/2024</p>
                                                    <div class="text-right mt-auto">
                                                        <a href="#" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#surveyModal1">Thực hiện khảo sát</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title"
                                                        style="height: 48px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                        Khảo sát về thông tin tuyển sinh</h5>
                                                    <p class="card-text">Thời gian: 05/01/2024 - 20/01/2024</p>
                                                    <div class="text-right mt-auto">
                                                        <a href="#" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#surveyModal2">Thực hiện khảo sát</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title"
                                                        style="height: 48px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                        Khảo sát về ngành học và chuyên ngành</h5>
                                                    <p class="card-text">Thời gian: 10/01/2024 - 25/01/2024</p>
                                                    <div class="text-right mt-auto">
                                                        <a href="#" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#surveyModal3">Thực hiện khảo sát</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title"
                                                        style="height: 48px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                        Khảo sát về học phí và học bổng</h5>
                                                    <p class="card-text">Thời gian: 15/01/2024 - 30/01/2024</p>
                                                    <div class="text-right mt-auto">
                                                        <a href="#" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#surveyModal4">Thực hiện khảo sát</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title"
                                                        style="height: 48px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                        Khảo sát về cơ sở vật chất phục vụ đào tạo</h5>
                                                    <p class="card-text">Thời gian: 20/01/2024 - 05/02/2024</p>
                                                    <div class="text-right mt-auto">
                                                        <a href="#" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#surveyModal5">Thực hiện khảo sát</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title"
                                                        style="height: 48px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                        Khảo sát về hoạt động ngoại khóa và đời sống sinh viên</h5>
                                                    <p class="card-text">Thời gian: 25/01/2024 - 10/02/2024</p>
                                                    <div class="text-right mt-auto">
                                                        <a href="#" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#surveyModal6">Thực hiện khảo sát</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Phân trang -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Popups -->
                            <div class="modal fade" id="surveyModal1" tabindex="-1" role="dialog"
                                aria-labelledby="surveyModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="surveyModalLabel1">Khảo sát ý kiến về chương
                                                trình tuyển sinh</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                                            <form>
                                                <!-- Câu hỏi chọn 1 đáp án -->
                                                <div class="form-group">
                                                    <label>1. Bạn đánh giá như thế nào về thông tin tuyển sinh của
                                                        trường?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q1a" name="question1"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q1a">Rất đầy đủ và
                                                            hữu
                                                            ích</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q1b" name="question1"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q1b">Đầy đủ</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q1c" name="question1"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q1c">Chưa đầy
                                                            đủ</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>2. Bạn biết đến thông tin tuyển sinh của trường qua kênh
                                                        nào?</label>
                                                    <select class="form-control">
                                                        <option>Website trường</option>
                                                        <option>Mạng xã hội</option>
                                                        <option>Báo chí</option>
                                                        <option>Bạn bè giới thiệu</option>
                                                        <option>Khác</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>3. Bạn quan tâm đến những thông tin nào về tuyển sinh? (có
                                                        thể chọn nhiều)</label>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="q2a">
                                                        <label class="custom-control-label" for="q2a">Điểm chuẩn các
                                                            năm</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="q2b">
                                                        <label class="custom-control-label" for="q2b">Chương trình
                                                            đào
                                                            tạo</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="q2c">
                                                        <label class="custom-control-label" for="q2c">Cơ hội việc
                                                            làm</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="q2d">
                                                        <label class="custom-control-label" for="q2d">Học phí và học
                                                            bổng</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="q2e">
                                                        <label class="custom-control-label" for="q2e">Cơ sở vật
                                                            chất</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>4. Mức độ quan tâm của bạn đối với ngành học tại
                                                        trường?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q6a" name="question6"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q6a">Rất quan
                                                            tâm</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q6b" name="question6"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q6b">Quan
                                                            tâm</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q6c" name="question6"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q6c">Bình
                                                            thường</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q6d" name="question6"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q6d">Không quan
                                                            tâm</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>5. Ngành học bạn quan tâm nhất tại trường là gì?</label>
                                                    <select class="form-control">
                                                        <option>Công nghệ thông tin</option>
                                                        <option>Điện - Điển tử - Viễn Thông</option>
                                                        <option>Kỹ thuật Cơ khí</option>
                                                        <option>Kỹ thuật Xây dựng</option>
                                                        <option>Kinh tế - Quản lý công nghiệp</option>
                                                        <option>CNSH - CNHH - CNTP</option>
                                                        <option>Khoa học Xã hội</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>6. Theo bạn, thời gian nào là phù hợp nhất để tổ chức các
                                                        buổi tư vấn tuyển sinh?</label>
                                                    <select class="form-control">
                                                        <option>Đầu học kỳ 2 lớp 12</option>
                                                        <option>Giữa học kỳ 2 lớp 12</option>
                                                        <option>Sau kỳ thi THPT</option>
                                                        <option>Trước thời điểm đăng ký nguyện vọng</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>7. Mức độ hài lòng của bạn về quy trình đăng ký xét tuyển
                                                        trực tuyến?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q5a" name="question5"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q5a">Rất hài
                                                            lòng</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q5b" name="question5"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q5b">Hài
                                                            lòng</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q5c" name="question5"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q5c">Bình
                                                            thường</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q5d" name="question5"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q5d">Không hài
                                                            lòng</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>8. Bạn có gặp khó khăn gì trong quá trình tìm hiểu thông tin
                                                        tuyển sinh không?</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q8a" name="question8"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q8a">Không có khó
                                                            khăn
                                                            gì</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q8b" name="question8"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q8b">Thông tin chưa
                                                            rõ
                                                            ràng</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q8c" name="question8"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q8c">Khó tìm thông
                                                            tin</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="q8d" name="question8"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="q8d">Thông tin không
                                                            cập nhật</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>9. Bạn mong đợi điều gì nhất khi theo học tại trường?</label>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="q9a">
                                                        <label class="custom-control-label" for="q9a">Chất lượng đào
                                                            tạo
                                                            tốt</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="q9b">
                                                        <label class="custom-control-label" for="q9b">Cơ hội thực
                                                            tập/việc làm</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="q9c">
                                                        <label class="custom-control-label" for="q9c">Môi trường học
                                                            tập
                                                            năng động</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="q9d">
                                                        <label class="custom-control-label" for="q9d">Học phí phù
                                                            hợp</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>10. Bạn có đề xuất gì để cải thiện công tác tuyển sinh của
                                                        trường?</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div>



                                                <style>
                                                    .rating {
                                                        display: flex;
                                                        flex-direction: row-reverse;
                                                        justify-content: center;
                                                    }

                                                    .rating input {
                                                        display: none;
                                                    }

                                                    .rating label {
                                                        cursor: pointer;
                                                        font-size: 50px;
                                                        color: #ddd;
                                                        padding: 5px;
                                                    }

                                                    .rating input:checked~label {
                                                        color: #ffd700;
                                                    }

                                                    .rating label:hover,
                                                    .rating label:hover~label {
                                                        color: #ffd700;
                                                    }

                                                    @media (min-width: 1024px) {
                                                        .rating label {
                                                            pointer-events: auto !important;
                                                        }
                                                    }
                                                </style>

                                                <div class="form-group rating">
                                                    <label>
                                                        <input type="radio" name="rating" value="5" />
                                                        ★
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="4" />
                                                        ★
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="3" />
                                                        ★
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="2" />
                                                        ★
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="1" />
                                                        ★
                                                    </label>
                                                </div>
                                                <div id="comment-box" class="form-group">
                                                    <label for="feedback">Hãy chia sẻ ý kiến của bạn: "có thể để
                                                        trống"</label>
                                                    <textarea id="feedback" name="feedback" class="form-control" placeholder="Nhập ý kiến của bạn..."></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="button" class="btn btn-primary">Gửi khảo sát</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const ratingInputs = document.querySelectorAll('.rating input');
                                    const ratingLabels = document.querySelectorAll('.rating label');

                                    ratingInputs.forEach((input, index) => {
                                        input.addEventListener('change', function() {
                                            // Xóa màu của tất cả các sao
                                            ratingLabels.forEach(label => {
                                                label.style.color = '#ddd';
                                            });

                                            // Tô màu các sao từ sao được chọn trở về
                                            for (let i = 4; i >= index; i--) {
                                                ratingLabels[i].style.color = '#ffd700';
                                            }
                                        });
                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
