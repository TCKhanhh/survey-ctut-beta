@extends('admin.layouts.app')

@section('content')
    @php
        $questions = [
            [
                'id' => 1,
                'content' => 'Bạn đánh giá thế nào về chất lượng dịch vụ của chúng tôi?',
                'type' => 'Radio Box',
                'survey' => 'Khảo sát dịch vụ',
            ],
            [
                'id' => 2,
                'content' => 'Những yếu tố nào bạn thích nhất ở sản phẩm mới?',
                'type' => 'Checkbox',
                'survey' => 'Khảo sát sản phẩm mới',
            ],
            [
                'id' => 3,
                'content' => 'Bạn có đề xuất gì để cải thiện môi trường làm việc?',
                'type' => 'Text',
                'survey' => 'Khảo sát nhân viên',
            ],
            [
                'id' => 4,
                'content' => 'Bạn có hài lòng với cách tổ chức sự kiện không?',
                'type' => 'Radio Box',
                'survey' => 'Khảo sát sự kiện',
            ],
            [
                'id' => 5,
                'content' => 'Bạn thường sử dụng sản phẩm của chúng tôi vào những dịp nào?',
                'type' => 'Checkbox',
                'survey' => 'Khảo sát khách hàng',
            ],
            [
                'id' => 6,
                'content' => 'Vui lòng mô tả trải nghiệm của bạn với đối tác của chúng tôi.',
                'type' => 'Text',
                'survey' => 'Khảo sát đối tác',
            ],
        ];
    @endphp

    <div class="content-wrapper" style="margin-top: 46px;">
        <section class="content">
            <div class="container-fluid">
                <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex flex-wrap align-items-center">
                        <h3 class="card-title mb-2 mb-md-0">Danh Sách Câu Hỏi</h3>
                        <div class="ml-auto">
                            <button class="btn btn-primary btn-sm my-1" data-toggle="modal" data-target="#addQuestionModal">
                                <i class="fa fa-plus"></i> Thêm mới
                            </button>
                        </div>
                    </div>

                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent border-right-0 py-1">
                                            <i class="fas fa-search text-muted"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control border-left-0 py-1"
                                        placeholder="Tìm kiếm câu hỏi..." id="searchInput">
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="d-flex flex-wrap align-items-center justify-content-lg-end">
                                    <div class="d-flex align-items-center mb-2 mb-lg-0">
                                        <select class="custom-select mr-2 py-1" style="width: auto; height: 31px;">
                                            <option selected disabled>Phiếu khảo sát</option>
                                            <option value="1">Khảo sát dịch vụ</option>
                                            <option value="2">Khảo sát sản phẩm mới</option>
                                            <option value="3">Khảo sát nhân viên</option>
                                        </select>
                                        <select class="custom-select mr-2 py-1" style="width: auto; height: 31px;">
                                            <option selected disabled>Kiểu câu hỏi</option>
                                            <option value="radio">Radio Box</option>
                                            <option value="checkbox">Checkbox</option>
                                            <option value="text">Text</option>
                                        </select>
                                    </div>
                                    <div class="d-flex gap-2 mb-2 mb-lg-0">
                                        <button type="button" class="btn btn-primary btn-sm mr-2" style="width: 80px;"
                                            id="filterBtn">
                                            <i class="fas fa-filter mr-1"></i>Lọc
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm" style="width: 80px;"
                                            id="resetBtn">
                                            <i class="fas fa-redo-alt mr-1"></i>Đặt lại
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0 p-md-6">
                        <div class="row">
                            <div class="col-12">

                                <div class="table-responsive">

                                    <table class="table table-hover border">
                                        <thead class="bg-light">
                                            <tr>
                                                <th class="text-left pl-3 d-none d-md-table-cell" style="width: 10%">#</th>
                                                <th class="text-left" style="width: 45%">Nội Dung Câu Hỏi</th>
                                                <th class="text-left d-none d-md-table-cell" style="width: 20%">Kiểu Câu Hỏi
                                                </th>
                                                <th class="text-left d-none d-md-table-cell" style="width: 25%">Phiếu Khảo
                                                    Sát</th>
                                                <th class="text-center" style="width: 15%">Thao Tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $isMobile =
                                                    isset($_SERVER['HTTP_USER_AGENT']) &&
                                                    preg_match(
                                                        '/(android|iphone|ipad|mobile)/i',
                                                        $_SERVER['HTTP_USER_AGENT'],
                                                    );
                                                $itemsPerPage = $isMobile ? 3 : 6;
                                                $currentPage = request()->get('page', 1);
                                                $offset = ($currentPage - 1) * $itemsPerPage;
                                                $paginatedQuestions = array_slice($questions, $offset, $itemsPerPage);
                                                $totalPages = ceil(count($questions) / $itemsPerPage);
                                            @endphp

                                            @foreach ($paginatedQuestions as $question)
                                                <tr>
                                                    <td class="text-left pl-3 d-none d-md-table-cell">{{ $question['id'] }}
                                                    </td>
                                                    <td class="text-left">
                                                        <div class="question-content">{{ $question['content'] }}</div>
                                                        <div class="d-md-none mobile-extra-info">
                                                            <small class="text-muted">
                                                                <strong>Kiểu:</strong> {{ $question['type'] }}<br>
                                                                <strong>Phiếu:</strong> {{ $question['survey'] }}
                                                            </small>
                                                        </div>
                                                    </td>
                                                    <td class="text-left d-none d-md-table-cell">{{ $question['type'] }}
                                                    </td>
                                                    <td class="text-left d-none d-md-table-cell">{{ $question['survey'] }}
                                                    </td>

                                                    <td class="text-center">
                                                        <div class="d-flex justify-content-center action-buttons">
                                                            <button class="btn btn-sm btn-info" data-toggle="modal"
                                                                data-target="#detailQuestionModal">
                                                                <i class="fas fa-eye"></i> <span
                                                                    class="d-none d-md-inline">Xem</span>
                                                            </button>
                                                            <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                                data-target="#editQuestionModal">
                                                                <i class="fas fa-edit"></i> <span
                                                                    class="d-none d-md-inline">Sửa</span>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                                data-target="#deleteQuestionModal">
                                                                <i class="fas fa-trash"></i> <span
                                                                    class="d-none d-md-inline">Xóa</span>
                                                            </button>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {{-- <div class="d-flex justify-content-end mt-4 mb-4">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                                                    <a class="page-link" href="?page={{ $currentPage - 1 }}"
                                                        tabindex="-1">Trước</a>
                                                </li>
                                                @for ($i = 1; $i <= $totalPages; $i++)
                                                    <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                                                        <a class="page-link"
                                                            href="?page={{ $i }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li class="page-item {{ $currentPage == $totalPages ? 'disabled' : '' }}">
                                                    <a class="page-link" href="?page={{ $currentPage + 1 }}">Sau</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div> --}}
                                    <div class="d-flex justify-content-end mt-4 mb-4 mr-4">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                                                    <a class="page-link" href="?page={{ $currentPage - 1 }}"
                                                        tabindex="-1">Trước</a>
                                                </li>
                                                @for ($i = 1; $i <= $totalPages; $i++)
                                                    <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                                                        <a class="page-link"
                                                            href="?page={{ $i }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li class="page-item {{ $currentPage == $totalPages ? 'disabled' : '' }}">
                                                    <a class="page-link" href="?page={{ $currentPage + 1 }}">Sau</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .table-responsive {
            -webkit-overflow-scrolling: touch;
            overflow-x: hidden;
            /* Ngăn chặn cuộn ngang */
        }

        .question-content {
            max-width: 100%;
            white-space: normal;
            /* Cho phép xuống dòng */
            word-break: break-word;
            /* Tránh tràn nội dung */
        }

        /* Căn chỉnh các nút thao tác ngang hàng */
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 5px;
            /* Khoảng cách giữa các nút */
            white-space: nowrap;
            /* Tránh xuống dòng trên desktop */
        }

        /* Responsive */
        @media (max-width: 767px) {
            .question-content {
                font-size: 14px;
                /* Giảm kích thước chữ để hiển thị tốt hơn */
            }

            .mobile-extra-info {
                display: block;
                margin-top: 5px;
                font-size: 12px;
                color: #555;
            }

            .action-buttons {
                flex-wrap: wrap;
                /* Cho phép xuống dòng khi không đủ không gian */
            }

            .action-buttons button {
                flex: 1;
                /* Chia đều khoảng cách giữa các nút */
                min-width: 40px;
                /* Đảm bảo không quá nhỏ */
            }
        }
    </style>

    {{-- <style>
        .text-truncate-custom {
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: inline-block;
        }

        .table-responsive {
            -webkit-overflow-scrolling: touch;
        }

        .table {
            width: 100%;
            margin-bottom: 0;
        }

        .table th,
        .table td {
            vertical-align: middle;
            padding: 12px;
        }

        @media (max-width: 767px) {
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .text-truncate-custom {
                max-width: 100%;
            }
        }
    </style> --}}

    @include('admin.pages.question.add')
    @include('admin.pages.question.detail')
    @include('admin.pages.question.edit')
    @include('admin.pages.question.delete')
@endsection
