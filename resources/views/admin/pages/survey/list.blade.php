@extends('admin.layouts.app')

@section('content')
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
                        <h3 class="card-title mb-2 mb-md-0">Danh Sách Khảo Sát</h3>
                        <div class="ml-auto">
                            <button class="btn btn-primary btn-sm my-1" data-toggle="modal" data-target="#addSurveyModal">
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
                                        placeholder="Tìm kiếm khảo sát..." id="searchInput">
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="d-flex flex-wrap align-items-center justify-content-lg-end">
                                    <div class="d-flex align-items-center mb-2 mb-lg-0">
                                        <select class="custom-select mr-2 py-1" style="width: auto; height: 31px;">
                                            <option selected disabled>Trạng thái</option>
                                            <option value="active">Hoạt động</option>
                                            <option value="inactive">Không hoạt động</option>
                                        </select>
                                        <select class="custom-select mr-2 py-1" style="width: auto; height: 31px;">
                                            <option selected disabled>Sắp xếp theo</option>
                                            <option value="created_desc">Mới nhất</option>
                                            <option value="created_asc">Cũ nhất</option>
                                            <option value="name_asc">Tên A-Z</option>
                                            <option value="name_desc">Tên Z-A</option>
                                        </select>
                                    </div>
                                    <div class="d-flex gap-2 mb-2 mb-lg-0">
                                        <button type="button" class="btn btn-primary btn-sm mr-2" style="width: 80px;">
                                            <i class="fas fa-filter mr-1"></i>Lọc
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm" style="width: 80px;">
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

                                    <table class="table table-hover text-nowrap border">
                                        <thead class="bg-light">
                                            <tr>
                                                <th class="text-left pl-3 d-none d-md-table-cell" style="width: 10%">#</th>
                                                <th class="text-left" style="width: 25%">Tên Khảo Sát</th>
                                                <th class="text-left d-none d-md-table-cell" style="width: 25%">Mô Tả</th>
                                                <th class="text-left d-none d-md-table-cell" style="width: 15%">Trạng Thái
                                                </th>
                                                <th class="text-left d-none d-md-table-cell" style="width: 15%">Ngày Tạo
                                                </th>
                                                <th class="text-center" style="width: 15%">Thao Tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($surveys as $survey)
                                                <tr>
                                                    <td class="text-left pl-3 d-none d-md-table-cell">{{ $survey->id }}
                                                    </td>
                                                    <td class="text-left">
                                                        <div class="text-truncate-custom">
                                                            {{ $survey->ten_phieu }}
                                                            <div class="d-md-none">
                                                                <small class="text-muted">
                                                                    Mô tả: {{ $survey->mo_ta }}<br>
                                                                    Trạng thái: {{ $survey->trang_thai }}<br>
                                                                    Ngày tạo: {{ $survey->ngay_tao }}
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left d-none d-md-table-cell">{{ $survey->mo_ta }}</td>
                                                    <td class="text-left d-none d-md-table-cell">
                                                        <span
                                                            class="badge {{ $survey->trang_thai == 'Hoạt động' ? 'badge-success' : 'badge-danger' }}">
                                                            {{ $survey->trang_thai }}
                                                        </span>
                                                    </td>
                                                    <td class="text-left d-none d-md-table-cell">{{ $survey->ngay_tao }}
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn btn-sm btn-info" data-toggle="modal"
                                                            data-target="#viewSurveyModal">
                                                            <i class="fas fa-eye"></i><span class="d-none d-md-inline">
                                                                Xem</span>
                                                        </button>

                                                        <button class="btn btn-sm btn-primary btn-edit"
                                                            data-id="{{ $survey->id }}">
                                                            <i class="fas fa-edit"></i><span class="d-none d-md-inline">
                                                                Sửa</span>
                                                        </button>

                                                        {{-- <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                            data-target="#deleteSurveyModal">
                                                            <i class="fas fa-trash"></i><span class="d-none d-md-inline">
                                                                Xóa</span>
                                                        </button> --}}

                                                        {{-- <button class="btn btn-sm btn-danger btn-delete"
                                                            data-id="{{ $survey->id }}">
                                                            <i class="fas fa-trash"></i><span class="d-none d-md-inline">
                                                                Xóa</span>
                                                        </button> --}}

                                                        <button class="btn btn-sm btn-danger btn-delete"
                                                            data-id="{{ $survey->id }}"
                                                            data-ten_phieu="{{ $survey->ten_phieu }}">
                                                            <i class="fas fa-trash"></i><span class="d-none d-md-inline">
                                                                Xóa</span>
                                                        </button>

                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">Không có phiếu khảo sát nào.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{-- ------------------------------------ --}}



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
        .text-truncate-custom {
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: inline▒▒ display: block;
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
    </style>

    @include('admin.pages.survey.add')
    @include('admin.pages.survey.detail')
    @include('admin.pages.survey.edit')
    @include('admin.pages.survey.delete')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            @if (session('success'))
                toastr.success("{{ session('success') }}");
            @endif

            @if (session('error'))
                toastr.error("{{ session('error') }}");
            @endif
        });
    </script>
@endsection
