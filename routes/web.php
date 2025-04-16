<?php

use Illuminate\Support\Facades\Route;

// Auth
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LoginAdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

//User
use App\Http\Controllers\User\UserController;

//Admin
// use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SurveyController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ListUserController;



// ----------------------------------USER Login-Register-----------------------------------------------
Route::get('/', [UserController::class, 'viewHome'])->name('viewHome');

Route::get('/dang-nhap', [LoginController::class, 'viewLogin'])->name('viewLogin');
Route::post('/dang-nhap', [LoginController::class, 'processLogin'])->name('processLogin');

Route::get('/dang-ky', [RegisterController::class, 'viewRegister'])->name('viewRegister');
Route::post('/dang-ky', [RegisterController::class, 'processRegister'])->name('processRegister');

Route::get('/quen-mat-khau', [ForgotPasswordController::class, 'viewForgotPassword'])->name('viewForgotPassword');
// Route::post('/quen-mat-khau', [ForgotPasswordController::class, 'processForgotPassword']);


// ----------------------------------USER-----------------------------------------------   

Route::get('/tat-ca-khao-sat', [UserController::class, 'viewAllSurvey'])->name('viewAllSurvey');
Route::get('/ho-tro-tuyen-sinh', [UserController::class, 'viewAdmissionSupport'])->name('viewAdmissionSupport');
Route::get('/thong-bao-su-kien', [UserController::class, 'viewEventNotification'])->name('viewEventNotification');
Route::get('/ho-tro-huong-dan', [UserController::class, 'viewInstructionalSupport'])->name('viewInstructionalSupport');

Route::middleware('user')->group(function () {
    Route::get('/khao-sat-dang-thuc-hien', [UserController::class, 'viewSurveyUnderway'])->name('viewSurveyUnderway');
    Route::get('/lich-su-khao-sat', [UserController::class, 'viewSurveyHistory'])->name('viewSurveyHistory');
    Route::get('/ket-qua-thong-ke', [UserController::class, 'viewStatisticalResult'])->name('viewStatisticalResult');
    Route::get('/cai-dat-tai-khoan', [UserController::class, 'viewAccountSetting'])->name('viewAccountSetting');

    Route::post('/dang-xuat', [LoginController::class, 'processLogout'])->name('processLogout');
});


// ----------------------------------ADMIN-----------------------------------------------   

// Route::get('/home', [AuthController::class, 'viewHomeAdmin'])->name('viewHomeAdmin');

Route::get('/admin/login', [LoginAdminController::class, 'viewLoginAdmin'])->name('viewLoginAdmin');
Route::post('/admin/login', [LoginAdminController::class, 'processLoginAdmin'])->name('processLoginAdmin');

Route::middleware(['auth', 'admin'])->group(function () {

    Route::post('/admin/logout', [LoginAdminController::class, 'processLogoutAdmin'])->name('processLogoutAdmin');

    Route::get('/home', function () {
        return view('admin.pages.home');
    })->name('viewHomeAdmin');

    Route::get('/danh-sach-khao-sat', [SurveyController::class, 'viewListSurvey'])->name('viewListSurvey');
    Route::post('/admin/survey/add', [SurveyController::class, 'addSurvey'])->name('addSurvey');
    Route::get('/surveys/{id}/edit', [SurveyController::class, 'edit'])->name('surveys.edit');
    Route::post('/surveys/{id}', [SurveyController::class, 'update'])->name('surveys.update');
    Route::delete('/surveys/{id}', [SurveyController::class, 'destroy']);



    Route::get('/danh-sach-cau-hoi', [QuestionController::class, 'viewListQuestion'])->name('viewListQuestion');

    Route::get('/danh-sach-nguoi-dung', [ListUserController::class, 'viewListUser'])->name('viewListUser');
});
