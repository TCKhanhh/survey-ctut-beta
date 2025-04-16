<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function viewLogin()
    {
        return view('auth.login');
    }

    // public function processLogin(LoginRequest $request) 
    // {
    //     try {
    //         // Tìm user trong database
    //         $user = DB::table('users')
    //             ->where('email', $request->email)
    //             ->where('quyen_truy_cap', 0)
    //             ->first();

    //         if (!$user) {
    //             return back()
    //                 ->withInput()
    //                 ->with('error', 'Tài khoản không tồn tại');
    //         }

    //         // Kiểm tra mật khẩu
    //         if (Hash::check($request->mat_khau, $user->mat_khau)) {
    //             // Lưu vào session
    //             session([
    //                 'user_id' => $user->id,
    //                 'user_name' => $user->ho_ten
    //             ]);

    //             return redirect()->route('viewHome')->with('success', 'Đăng nhập thành công.');
    //         }

    //         return back()->withInput()->with('error', 'Mật khẩu không đúng');
    //     } catch (\Exception $e) {
    //         return back()
    //             ->withInput()
    //             ->with('error', 'Đã có lỗi xảy ra, vui lòng thử lại sau');
    //     }
    // }

    // public function processLogout()
    // {
    //     session()->forget(['user_id', 'user_name']);
    //     return redirect()->route('viewLogin')->with('success', 'Đăng xuất thành công.');
    // }


    public function processLogin(LoginRequest $request)
    {
        try {
            // Lấy thông tin từ request
            $credentials = $request->only('email', 'mat_khau');

            // Tìm user theo email
            $user = DB::table('users')
                ->where('email', $credentials['email'])
                ->first();

            // Kiểm tra nếu user không tồn tại
            if (!$user) {
                return back()
                    ->withInput($request->only('email'))
                    ->withErrors(['error' => 'Tài khoản không tồn tại.']);
            }

            // Kiểm tra quyền truy cập
            if ($user->quyen_truy_cap != 0) {
                return back()
                    ->withInput($request->only('email'))
                    ->withErrors(['error' => 'Bạn không có quyền truy cập!']);
            }

            // Kiểm tra mật khẩu
            if (!Hash::check($credentials['mat_khau'], $user->mat_khau)) {
                return back()
                    ->withInput($request->only('email'))
                    ->withErrors(['error' => 'Mật khẩu không đúng.']);
            }

            // Đăng nhập bằng Auth
            Auth::loginUsingId($user->id);

            // Chuyển hướng về trang chủ user
            return redirect()->route('viewHome')->with('success', 'Đăng nhập thành công.');
        } catch (\Exception $e) {
            \Log::error('Login User Error: ' . $e->getMessage());
            return back()
                ->withInput()
                ->withErrors(['error' => 'Đã có lỗi xảy ra, vui lòng thử lại sau.']);
        }
    }

    public function processLogout()
    {
        Auth::logout();
        return redirect()->route('viewLogin')->with('success', 'Đăng xuất thành công.');
    }
}