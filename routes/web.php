<?php

use Illuminate\Support\Facades\Route;

// Auth
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

//User
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserController;

//Admin


Route::get('/', [HomeController::class, 'viewHome'])->name('viewHome');


Route::get('/dang-nhap', [LoginController::class, 'viewLogin'])->name('viewLogin');
// Route::post('/dang-nhap', [LoginController::class, 'processLogin']);
// Route::post('/dang-xuat', [LoginController::class, 'processLogout'])->name('processLogout');

Route::get('/dang-ky', [RegisterController::class, 'viewRegister'])->name('viewRegister');
// Route::post('/dang-ky', [RegisterController::class, 'processRegister']);   

Route::get('/quen-mat-khau', [ForgotPasswordController::class, 'viewForgotPassword'])->name('viewForgotPassword');
// Route::post('/quen-mat-khau', [ForgotPasswordController::class, 'processForgotPassword']);


// User 
Route::get('/tat-ca-khao-sat', [UserController::class, 'viewAllSurvey'])->name('viewAllSurvey');
Route::get('/ho-tro-tuyen-sinh', [UserController::class, 'viewAdmissionSupport'])->name('viewAdmissionSupport');

Route::get('/khao-sat-dang-thuc-hien', [UserController::class, 'viewSurveyUnderway'])->name('viewSurveyUnderway');
Route::get('/lich-su-khao-sat', [UserController::class, 'viewSurveyHistory'])->name('viewSurveyHistory');

Route::get('/ket-qua-thong-ke', [UserController::class, 'viewStatisticalResult'])->name('viewStatisticalResult');

Route::get('/thong-bao-su-kien', [UserController::class, 'viewEventNotification'])->name('viewEventNotification');

Route::get('/ho-tro-huong-dan', [UserController::class, 'viewInstructionalSupport'])->name('viewInstructionalSupport');

Route::get('/cai-dat-tai-khoan', [UserController::class, 'viewAccountSetting'])->name('viewAccountSetting');