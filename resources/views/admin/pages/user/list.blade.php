@extends('admin.layouts.app')


@section('content')
    @php
        $users = [
            [
                'id' => 1,
                'name' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@gmail.com',
                'role' => 'Admin',
                'status' => 'Hoạt động',
            ],
            [
                'id' => 2,
                'name' => 'Trần Thị B',
                'email' => 'tranthib@gmail.com',
                'role' => 'User',
                'status' => 'Hoạt động',
            ],
            [
                'id' => 3,
                'name' => 'Lê Văn C',
                'email' => 'levanc@gmail.com',
                'role' => 'User',
                'status' => 'Không hoạt động',
            ],
            [
                'id' => 4,
                'name' => 'Phạm Thị D',
                'email' => 'phamthid@gmail.com',
                'role' => 'User',
                'status' => 'Hoạt động',
            ],
            [
                'id' => 5,
                'name' => 'Hoàng Văn E',
                'email' => 'hoangvane@gmail.com',
                'role' => 'Admin',
                'status' => 'Hoạt động',
            ],
            [
                'id' => 6,
                'name' => 'Đỗ Thị F',
                'email' => 'dothif@gmail.com',
                'role' => 'User',
                'status' => 'Không hoạt động',
            ],
            [
                'id' => 7,
                'name' => 'Vũ Văn G',
                'email' => 'vuvang@gmail.com',
                'role' => 'User',
                'status' => 'Hoạt động',
            ],
            [
                'id' => 8,
                'name' => 'Ngô Thị H',
                'email' => 'ngothih@gmail.com',
                'role' => 'User',
                'status' => 'Hoạt động',
            ],
            [
                'id' => 9,
                'name' => 'Bùi Văn I',
                'email' => 'buivani@gmail.com',
                'role' => 'User',
                'status' => 'Không hoạt động',
            ],
            [
                'id' => 10,
                'name' => 'Đặng Thị K',
                'email' => 'dangthik@gmail.com',
                'role' => 'Admin',
                'status' => 'Hoạt động',
            ],
            [
                'id' => 11,
                'name' => 'Lý Văn L',
                'email' => 'lyvanl@gmail.com',
                'role' => 'User',
                'status' => 'Hoạt động',
            ],
            [
                'id' => 12,
                'name' => 'Mai Thị M',
                'email' => 'maithim@gmail.com',
                'role' => 'User',
                'status' => 'Hoạt động',
            ],
    ]; @endphp

    <div class="content-wrapper" style=" margin-top: 46px;">
        <section class="content">
            <div class="container-fluid">

                <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
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
                </div>

                <div class="card">
                    <div class="card-header d-flex flex-wrap align-items-center">
                        <h3 class="card-title mb-2 mb-md-0">Danh Sách Người Dùng</h3>
                        <div class="ml-auto">
                            <button class="btn btn-primary btn-sm my-1" data-toggle="modal" data-target="#addUserModal">
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
                                        placeholder="Tìm kiếm người dùng..." id="searchInput">
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="d-flex flex-wrap align-items-center justify-content-lg-end">
                                    <div class="d-flex align-items-center mb-2 mb-lg-0">
                                        <select class="custom-select mr-2 py-1" style="width: auto; height: 31px;"
                                            id="role_filter">
                                            <option selected disabled>Vai trò</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                        <select class="custom-select mr-2 py-1" style="width: auto; height: 31px;">
                                            <option selected disabled>Trạng thái</option>
                                            <option value="active">Hoạt động</option>
                                            <option value="inactive">Không hoạt động</option>
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
                                                <th class="text-left" style="width: 25%">Họ Tên</th>
                                                <th class="text-left d-none d-md-table-cell" style="width: 20%">Email</th>
                                                <th class="text-left d-none d-md-table-cell" style="width: 15%">Vai Trò</th>
                                                <th class="text-left d-none d-md-table-cell" style="width: 15%">Trạng Thái
                                                </th>
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
                                                $paginatedUsers = array_slice($users, $offset, $itemsPerPage);
                                                $totalPages = ceil(count($users) / $itemsPerPage);
                                            @endphp

                                            @foreach ($paginatedUsers as $user)
                                                <tr>
                                                    <td class="text-left pl-3 d-none d-md-table-cell">{{ $user['id'] }}
                                                    </td>
                                                    <td class="text-left">
                                                        <div class="text-truncate-custom">
                                                            {{ $user['name'] }}
                                                            <div class="d-md-none">
                                                                <small class="text-muted">
                                                                    Email: {{ $user['email'] }}<br>
                                                                    Vai trò: {{ $user['role'] }}<br>
                                                                    Trạng thái: {{ $user['status'] }}
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left d-none d-md-table-cell">{{ $user['email'] }}</td>
                                                    <td class="text-left d-none d-md-table-cell">{{ $user['role'] }}</td>
                                                    <td class="text-left d-none d-md-table-cell">{{ $user['status'] }}</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-sm btn-info" data-toggle="modal"
                                                            data-target="#detailUserModal">
                                                            <i class="fas fa-eye"></i><span class="d-none d-md-inline">
                                                                Xem</span>
                                                        </button>
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                            data-target="#editUserModal">
                                                            <i class="fas fa-edit"></i><span class="d-none d-md-inline">
                                                                Sửa</span>
                                                        </button>
                                                        <button class="btn btn-sm btn-danger" data-toggle="modal"
                                                            data-target="#deleteUserModal">
                                                            <i class="fas fa-trash"></i><span class="d-none d-md-inline">
                                                                Xóa</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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



    {{-- @include('admin.pages.user.add')
    @include('admin.pages.user.detail')
    @include('admin.pages.user.edit')
    @include('admin.pages.user.delete') --}}
@endsection
