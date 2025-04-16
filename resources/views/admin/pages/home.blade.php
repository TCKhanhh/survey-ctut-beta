@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 1302.12px; margin-top: 46px;">
        <section class="content">
            <div class="container-fluid">
                <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6">

                            </div>
                            <div class="col-sm-12 col-md-6">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12">

                        <div class="row align-items-end mb-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="survey_select" class="form-label fw-bold fs-5 mb-2">
                                        {{-- <i class="fas fa-clipboard-list me-2"></i>Chọn phiếu khảo sát --}}
                                    </label>
                                    <select class="form-control form-select shadow-sm py-2 px-3" id="survey_select">
                                        <option value="" selected disabled>Xem thống kê phiếu khảo sát</option>
                                        <option value="1">Phiếu đánh giá chất lượng đào tạo</option>
                                        <option value="2">Phiếu khảo sát ý kiến sinh viên</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div id="survey_results" class="mt-4" style="display:none;">
                            <div class="card shadow">

                                <div class="card-header d-flex align-items-center">
                                    <h5 class="m-0 mr-4"><i class="fas fa-poll me-2 mr-1"></i>Kết quả</h5>
                                    <div class="ms-auto d-flex">
                                        <button class="btn btn-success btn-sm me-2 mr-2" style="font-size: 0.85rem;"
                                            id="exportExcel">
                                            <i class="fas fa-file-excel me-1 mr-1"></i>Xuất Excel
                                        </button>
                                        <button class="btn btn-danger btn-sm" style="font-size: 0.85rem;" id="exportPDF">
                                            <i class="fas fa-file-pdf me-1 mr-1"></i>Xuất PDF
                                        </button>
                                    </div>
                                </div>


                                <div class="card-body p-4" style="max-height: 600px; overflow-y: auto;">

                                    <!-- Câu hỏi radio -->
                                    <div class="question-block mb-5 border-bottom pb-4">
                                        <p class="fw-bold mb-3 fs-5">1. Bạn đánh giá thế nào về chất lượng đào tạo?</p>
                                        <div class="answers">
                                            <div class="row align-items-center mb-3 hover-bg-light p-2 rounded">
                                                <div class="col-md-10 col-sm-9 d-flex align-items-center">
                                                    <input type="radio" class="me-2 form-check-input" disabled> Rất tốt
                                                </div>
                                                <div class="col-md-2 col-sm-3 text-end">
                                                    <span class="badge bg-primary rounded-pill px-3">75%</span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 hover-bg-light p-2 rounded">
                                                <div class="col-md-10 col-sm-9 d-flex align-items-center">
                                                    <input type="radio" class="me-2 form-check-input" disabled> Tốt
                                                </div>
                                                <div class="col-md-2 col-sm-3 text-end">
                                                    <span class="badge bg-primary rounded-pill px-3">15%</span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center hover-bg-light p-2 rounded">
                                                <div class="col-md-10 col-sm-9 d-flex align-items-center">
                                                    <input type="radio" class="me-2 form-check-input" disabled> Bình
                                                    thường
                                                </div>
                                                <div class="col-md-2 col-sm-3 text-end">
                                                    <span class="badge bg-primary rounded-pill px-3">10%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Câu hỏi checkbox -->
                                    <div class="question-block mb-5 border-bottom pb-4">
                                        <p class="fw-bold mb-3 fs-5">2. Những kỹ năng nào bạn muốn được phát triển? (Có thể
                                            chọn
                                            nhiều)</p>
                                        <div class="answers">
                                            <div class="row align-items-center mb-3 hover-bg-light p-2 rounded">
                                                <div class="col-md-10 col-sm-9 d-flex align-items-center">
                                                    <input type="checkbox" class="me-2 form-check-input" disabled> Kỹ năng
                                                    mềm
                                                </div>
                                                <div class="col-md-2 col-sm-3 text-end">
                                                    <span class="badge bg-primary rounded-pill px-3">80%</span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3 hover-bg-light p-2 rounded">
                                                <div class="col-md-10 col-sm-9 d-flex align-items-center">
                                                    <input type="checkbox" class="me-2 form-check-input" disabled> Ngoại
                                                    ngữ
                                                </div>
                                                <div class="col-md-2 col-sm-3 text-end">
                                                    <span class="badge bg-primary rounded-pill px-3">65%</span>
                                                </div>
                                            </div>
                                            <div class="row align-items-center hover-bg-light p-2 rounded">
                                                <div class="col-md-10 col-sm-9 d-flex align-items-center">
                                                    <input type="checkbox" class="me-2 form-check-input" disabled> Chuyên
                                                    môn
                                                </div>
                                                <div class="col-md-2 col-sm-3 text-end">
                                                    <span class="badge bg-primary rounded-pill px-3">90%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Câu hỏi điền đáp án -->
                                    <div class="question-block">
                                        <p class="fw-bold mb-3 fs-5">3. Góp ý của bạn về chương trình đào tạo:</p>
                                        <div class="answers-list" style="height: 200px; overflow-y: auto;">
                                            <div class="answer-item mb-2 p-3 bg-light rounded shadow-sm hover-shadow">
                                                Cần tăng cường thực hành nhiều hơn
                                            </div>
                                            <div class="answer-item mb-2 p-3 bg-light rounded shadow-sm hover-shadow">
                                                Bổ sung thêm các môn học về công nghệ mới
                                            </div>
                                            <div class="answer-item mb-2 p-3 bg-light rounded shadow-sm hover-shadow">
                                                Tăng thời lượng học ngoại ngữ
                                            </div>
                                            <div class="answer-item mb-2 p-3 bg-light rounded shadow-sm hover-shadow">
                                                Tăng thời lượng học ngoại ngữ 1
                                            </div>
                                            <div class="answer-item mb-2 p-3 bg-light rounded shadow-sm hover-shadow">
                                                Tăng thời lượng học ngoại ngữ 2
                                            </div>
                                            <div class="answer-item mb-2 p-3 bg-light rounded shadow-sm hover-shadow">
                                                Tăng thời lượng học ngoại ngữ 3
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>
                            .hover-bg-light:hover {
                                background-color: #f8f9fa;
                                transition: all 0.3s ease;
                            }

                            .hover-shadow:hover {
                                box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
                                transition: all 0.3s ease;
                            }

                            .form-check-input:disabled {
                                opacity: 0.7;
                            }

                            .card-body::-webkit-scrollbar {
                                width: 6px;
                            }

                            .card-body::-webkit-scrollbar-track {
                                background: #f1f1f1;
                            }

                            .card-body::-webkit-scrollbar-thumb {
                                background: #888;
                                border-radius: 3px;
                            }

                            .card-body::-webkit-scrollbar-thumb:hover {
                                background: #555;
                            }

                            .answers-list::-webkit-scrollbar {
                                width: 6px;
                            }

                            .answers-list::-webkit-scrollbar-track {
                                background: #f1f1f1;
                            }

                            .answers-list::-webkit-scrollbar-thumb {
                                background: #888;
                                border-radius: 3px;
                            }

                            .answers-list::-webkit-scrollbar-thumb:hover {
                                background: #555;
                            }
                        </style>

                        <script>
                            document.getElementById('survey_select').addEventListener('change', function() {
                                if (this.value) {
                                    document.getElementById('survey_results').style.display = 'block';
                                } else {
                                    document.getElementById('survey_results').style.display = 'none';
                                }
                            });

                            function adjustLayout() {
                                const width = window.innerWidth;
                                const rows = document.querySelectorAll('.row');
                                rows.forEach(row => {
                                    if (width < 768) {
                                        row.classList.add('mb-3');
                                        const textEndCol = row.querySelector('.col-md-2');
                                        if (textEndCol) {
                                            textEndCol.classList.remove('text-end');
                                            textEndCol.classList.add('text-start');
                                        }
                                    } else {
                                        row.classList.remove('mb-3');
                                        const textEndCol = row.querySelector('.col-md-2');
                                        if (textEndCol) {
                                            textEndCol.classList.remove('text-start');
                                            textEndCol.classList.add('text-end');
                                        }
                                    }
                                });
                            }

                            window.addEventListener('resize', adjustLayout);
                            adjustLayout();
                        </script>
                    </div>

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
                                                <h3>15987</h3>
                                                <p>Người tham gia</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-poll"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>38</h3>
                                                <p>Phiếu khảo sát</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-check-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3>10111</h3>
                                                <p>Lượt thực hiện khảo sát</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-calendar-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3>4</h3>
                                                <p>Đánh giá - Trung bình</p>
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
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-4">
                                        <div class="chart-responsive" style="position: relative; height: 300px;">
                                            <canvas id="barChart"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-4">
                                        <div class="chart-responsive" style="position: relative; height: 300px;">
                                            <canvas id="pieChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                <script>
                                    // Biểu đồ cột
                                    var ctxBar = document.getElementById('barChart').getContext('2d');
                                    var barChart = new Chart(ctxBar, {
                                        type: 'bar',
                                        data: {
                                            labels: ['Khoa CNTT', 'Khoa Kinh tế', 'Khoa Cơ khí', 'Khoa Điện', 'Khoa Xây dựng',
                                                'Khoa Ngoại ngữ'
                                            ],
                                            datasets: [{
                                                label: 'Số lượng sinh viên quan tâm theo ngành',
                                                data: [3500, 2800, 1200, 1000, 800, 700],
                                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                                borderColor: 'rgba(54, 162, 235, 1)',
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true,
                                                    title: {
                                                        display: true,
                                                        text: 'Số lượng sinh viên'
                                                    }
                                                },
                                                x: {
                                                    title: {
                                                        display: true,
                                                        text: 'Khoa/Ngành'
                                                    }
                                                }
                                            },
                                            responsive: true,
                                            maintainAspectRatio: false,
                                            plugins: {
                                                title: {
                                                    display: true,
                                                    text: 'Thống kê số lượng sinh viên quan tâm theo ngành'
                                                },
                                                legend: {
                                                    position: 'bottom'
                                                }
                                            }
                                        }
                                    });

                                    // Biểu đồ tròn
                                    var ctxPie = document.getElementById('pieChart').getContext('2d');
                                    var pieChart = new Chart(ctxPie, {
                                        type: 'pie',
                                        data: {
                                            labels: ['Đã hoàn thành khảo sát', 'Đang thực hiện khảo sát', 'Chưa tham gia'],
                                            datasets: [{
                                                data: [10111, 3876, 2000],
                                                backgroundColor: [
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(255, 99, 132, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(255, 99, 132, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            maintainAspectRatio: false,
                                            plugins: {
                                                title: {
                                                    display: true,
                                                    text: 'Trạng thái tham gia khảo sát'
                                                },
                                                legend: {
                                                    position: 'bottom'
                                                }
                                            }
                                        }
                                    });
                                </script>
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
