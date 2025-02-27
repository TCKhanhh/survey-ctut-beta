@extends('layouts.app')
@section('title', 'Hệ thống Khảo sát')


@section('content')

    <div class="content-wrapper" style="min-height: 1302.12px; margin-top: 46px;">
        <section class="content">
            <div class="container-fluid">
                <div class="content-header" style="height: fit-content;padding:0;margin-right:10px;margin-bottom:0px">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6">
                                <!-- <h1 class="m-0">Cài đặt tài khoản</h1> -->
                                <ol class="breadcrumb float-sm-left">
                                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Cài đặt tài khoản</li>
                                </ol>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <!-- <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Cài đặt tài khoản</li>
                                </ol> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin tài khoản</h3>
                            </div>
                            <div class="card-body">
                                <form id="accountSettingsForm">
                                    <div class="row">
                                        <div class="col-12 col-md-6">

                                            <div class="form-group">
                                                <label>Căn cước công dân</label>
                                                <input type="text" class="form-control" placeholder="Nhập số CCCD">
                                            </div>

                                            <div class="form-group">
                                                <label>Họ và tên</label>
                                                <input type="text" class="form-control" value="Nguyễn Văn A">
                                            </div>
                                            <div class="form-group">
                                                <label>Email cá nhân</label>
                                                <input type="email" class="form-control" value="example@gmail.com">
                                            </div>

                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input type="tel" class="form-control" placeholder="Nhập số điện thoại">
                                            </div>
                                            <div class="form-group">
                                                <label>Mật khẩu hiện tại</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Nhập mật khẩu hiện tại">
                                            </div>
                                            <div class="form-group">
                                                <label>Mật khẩu mới</label>
                                                <input type="password" class="form-control" placeholder="Nhập mật khẩu mới">
                                            </div>
                                            <div class="form-group">
                                                <label>Xác nhận mật khẩu mới</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Xác nhận mật khẩu mới">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Cài đặt thông báo</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="custom-control custom-switch mb-3">
                                            <input type="checkbox" class="custom-control-input" id="emailNotification"
                                                checked>
                                            <label class="custom-control-label" for="emailNotification">Nhận thông
                                                báo qua email</label>
                                        </div>
                                        <div class="custom-control custom-switch mb-3">
                                            <input type="checkbox" class="custom-control-input" id="smsNotification">
                                            <label class="custom-control-label" for="smsNotification">Nhận thông báo
                                                qua SMS</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="custom-control custom-switch mb-3">
                                            <input type="checkbox" class="custom-control-input" id="surveyReminder" checked>
                                            <label class="custom-control-label" for="surveyReminder">Nhắc nhở khảo
                                                sát</label>
                                        </div>
                                        <div class="custom-control custom-switch mb-3">
                                            <input type="checkbox" class="custom-control-input" id="newsNotification"
                                                checked>
                                            <label class="custom-control-label" for="newsNotification">Thông báo tin
                                                tức mới</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Lưu cài đặt</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quyền riêng tư</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="custom-control custom-switch mb-3">
                                            <input type="checkbox" class="custom-control-input" id="profileVisibility"
                                                checked>
                                            <label class="custom-control-label" for="profileVisibility">Hiển thị
                                                thông tin cá nhân</label>
                                        </div>
                                        <div class="custom-control custom-switch mb-3">
                                            <input type="checkbox" class="custom-control-input" id="surveyHistory">
                                            <label class="custom-control-label" for="surveyHistory">Hiển thị lịch sử
                                                khảo sát</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Lưu cài đặt</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
