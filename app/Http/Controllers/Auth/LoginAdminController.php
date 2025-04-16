<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginAdminRequest;

class LoginAdminController extends Controller
{
    public function viewLoginAdmin()
    {
        return view('admin.auth.login');
    }

    // public function processLoginAdmin(LoginAdminRequest $request)
    // {
    //     $credentials = $request->only('email', 'mat_khau');

    //     // Tìm user theo email và quyền truy cập
    //     $user = DB::table('users')
    //         ->where('email', $credentials['email'])
    //         ->where('quyen_truy_cap', 1)
    //         ->first();

    //     if (!$user || !Hash::check($credentials['mat_khau'], $user->mat_khau)) {
    //         return back()
    //             ->withInput($request->only('email')) // Giữ lại email
    //             ->withErrors(['error' => 'Email hoặc mật khẩu không đúng.']);
    //     }

    //     // Lưu vào session
    //     session([
    //         'admin_id' => $user->id,
    //         'admin_name' => $user->ho_ten
    //     ]);

    //     return redirect()->route('viewHomeAdmin')->with('success', 'Đăng nhập thành công.');
    // }

    public function processLoginAdmin(LoginAdminRequest $request)
    {
        try {
            // Lấy thông tin từ request
            $credentials = $request->only('email', 'mat_khau');

            // Tìm user theo email
            $user = DB::table('users')
                ->where('email', $credentials['email'])
                ->first();

            // Kiểm tra nếu user không tồn tại hoặc mật khẩu không đúng
            if (!$user || !Hash::check($credentials['mat_khau'], $user->mat_khau)) {
                return back()
                    ->withInput($request->only('email'))
                    ->withErrors(['error' => 'Email hoặc mật khẩu không đúng.']);
            }

            // Kiểm tra quyền truy cập
            if ($user->quyen_truy_cap != 1) {
                return back()
                    ->withInput($request->only('email'))
                    ->withErrors(['error' => 'Bạn không có quyền truy cập!']);
            }

            // Đăng nhập bằng Auth
            Auth::loginUsingId($user->id);

            // Chuyển hướng về trang quản trị
            return redirect()->route('viewHomeAdmin')->with('success', 'Đăng nhập thành công.');
        } catch (\Exception $e) {
            // Ghi log nếu cần
            \Log::error('Login Admin Error: ' . $e->getMessage());

            return back()->withErrors(['error' => 'Đã có lỗi xảy ra, vui lòng thử lại sau.']);
        }
    }




    // public function processLogoutAdmin()
    // {
    //     session()->forget(['admin_id', 'admin_name']);
    //     return redirect()->route('viewLoginAdmin')->with('success', 'Đăng xuất thành công.');
    // }

    public function processLogoutAdmin()
    {
        try {
            // Đăng xuất khỏi hệ thống xác thực bằng Auth
            Auth::logout();

            // Chuyển hướng về trang đăng nhập với thông báo thành công
            return redirect()->route('viewLoginAdmin')->with('success', 'Đăng xuất thành công.');
        } catch (\Exception $e) {
            // Ghi log nếu có lỗi xảy ra
            \Log::error('Logout Admin Error: ' . $e->getMessage());

            return back()->withErrors(['error' => 'Đã có lỗi xảy ra, vui lòng thử lại sau.']);
        }
    }
}